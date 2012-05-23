<?php
require '/home/truthand/truthlib/TALUS/PHPTAL.php';

/**
 * The Dec (short for Decorator) class creates a super template that
 * "wraps" the provided sub-template transparently.  The super template
 * takes care of page-wide data using its own namespace
 */
class Dec {
   private $_js = array();
   private $_css = array();
   private $_meta = array();
   private $template;
   private $_sub_template;

   public function __construct($file) {
      $this->template = new PHPTAL('decorator/beholder.xhtml');
      $this->template->setTemplateRepository(VEW);
      $this->template->setOutputMode(PHPTAL::HTML5);

      $this->_sub_template = new PHPTAL("$file.xhtml");
      $this->_sub_template->setTemplateRepository(VEW);
      $this->_sub_template->setOutputMode(PHPTAL::HTML5);
   }

   public function __set($key, $value) {
      if (strpos($key, '_') === 0) {
         $this->template->set(substr($key, 1), $value);
      }
      else {
         $this->_sub_template->$key = $value;
      }
   }

   public function execute() {
      $this->init();
      if ($_SERVER['DEBUG']) {
         $this->template->setForceReparse(true);
         $this->_sub_template->setForceReparse(true);
      }
      $this->template->body = $this->_sub_template->execute();
      return $this->template->execute();
   }

   private function init() {
      $this->template->js = $this->_js;
      $this->template->css = $this->_css;
      $this->template->meta = $this->_meta;
      $this->template->year = date('Y');
   }

   /**
    * Include a css (stylesheet) file or files in the header of the page.
    *
    * This will append the file type .css to the end of the
    * filename automagically.  You can include it yourself as
    * well if you wish.
    * This adds another file each time it is called.  Files are not removed.
    *
    * @param string [...] css files to include
    */
   public function css() {
      $files = func_get_args();
      foreach ($files as $file) {
         if (is_array($file)) {
            foreach ($file as $f) {
               $this->css($f);
            }
         }
         else {
            if (substr($file, -4) !== '.css') {
               $file = "$file.css";
            }
            $this->_css[] = "/css/$file";
         }
      }
   }

   /**
    * Include a js (javascript) file or files in the header of the page.
    *
    * This will append the file type .js to the end of the
    * filename automagically.  You can include it yourself as
    * well if you wish.
    * This adds another file each time it is called.  Files are not removed.
    *
    * @param string [...] js files to include
    */
   public function js() {
      $files = func_get_args();
      foreach ($files as $file) {
         if (substr($file, -3) !== '.js') {
            $file = "$file.js";
         }
         $this->_js[] = "/js/$file";
      }
   }

   public function addSettings(User $user) {
      $user->addSettingsToTemplate($this);
   }

   /**
    * Create a meta tag with the appropriate name/content
    */
   public function meta($name, $content) {
      $this->_meta[] = array(
         'name' => $name
         , 'content' => $content
      );
   }
}
?>
