<?php

function __all_autoload($class) {
   if (is_readable(APP . "/$class.php")) {
      require APP . "/$class.php";
   }
   else if (is_readable(CON . "/$class.php")) {
      require CON . "/$class.php";
   }
   else if (is_readable(MOD . "/$class.php")) {
      require MOD . "/$class.php";
   }
}
spl_autoload_register('__all_autoload');

date_default_timezone_set('America/New_York');

error_reporting((int)$_SERVER['ERROR_REPORTING']);

//Keep session on each page.
//TODO handle session ID, session, name, etc. Don't know how to yet :(
session_start();

//Build route from request; the controller is the first part of the route, route[0]
$cont = route();

//Prevent notice from route being empty, but controller is first result
if ($cont) {
   list($cont) = $cont;
   //Controller directories are limited to 4 characters
   if (strlen($cont) <= MAX_CONT_LEN) {
      $file = CON . '/' . $cont . ".php";
      if (is_readable($file)) {
         echo include $file;
      }
      else {
         echo include CON . '/404.php';
      }
   }
   else {
      echo include CON . '/404.php';
   }
}
else {
   echo require CON . '/index.php';
}

/**#@+
 * Utility Function Definitions
 */
/**
 * Redirect
 */
function redirect($url, $sc = 301) {
   header("Location: $url", true, $sc);
   exit;
}

/**
 * Wrapper for post superglobal
 */
function post($key, $default = null) {
   return isset($_POST[$key]) ? $_POST[$key] : $default;
}

/**
 * Redirect client to the main page if they are not logged in
 */
function gatekeeper() {
   !in() and redirect('/');
}

/**
 * Break down the path into an array
 * PATH_INFO cannot be used since there is no file (index.php is obviated)
 * Plus, no one should know about index.php, but whatever.
 * Only the path is important, so parse that from the URL.
 * Strip off empty values (generally only the part right before the path)
 * array_values normalizes the array so the 0th element is the controller
 * This allows the very fast list() construct to be used
 */
function route() {
   return array_values(array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))));
}
/**#@-*/

?>
