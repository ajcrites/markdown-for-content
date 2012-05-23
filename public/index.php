<?php
$php_site_parse_time = microtime(true);

define('DEBUG', false);

$rui = $_SERVER['REQUEST_URI'];

if (strpos($rui, 'index.') !== false) {
   header('Location: http://' . $_SERVER['HTTP_HOST'] . '/', true, 301);
   exit;
}

/**#@+
 * Required directories
 */
/**
 * This needs to point to the location of the AySites code base.  It will likely have
 * to be changed significantly each time AySites moves server locations.
 *
 * AySites should be in a single repo in some logical location on the machine.  There
 * are two main folders: public (document root files) and system (the source).  Neither
 * of these should be under the document root.  A symlink to public needs to be under
 * the document root.
 */
define('APP', "$_SERVER[APPROOT]/system");
define('LIV', "$_SERVER[APPROOT]/live");
define('UTL', APP . '/util');
define('LOG', LIV . '/log');
define('CON', APP . '/cont');
define('MOD', APP . '/mod');
define('VEW', APP . '/view');
define('DOC', APP . '/doc');
/**#@-*/

/**#@+
 * Required constants
 */
define('MAX_CONT_LEN', 4);
/**#@-*/

require APP . '/bootstrap.php';

if ($_SERVER['DEBUG']) {
   echo "execution: " . (microtime(true) - $php_site_parse_time);
}
?>
