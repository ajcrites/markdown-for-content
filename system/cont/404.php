<?php
/**
 * The purpose of this file is to display the 404 error page
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package mfc
 */

header('HTTP/1.0 404 Not Found');

$dec = new Dec('404');
$dec->_title = 'Four Oh Four';

$dec->js('404');

return $dec->execute();
?>
