<?php
/**
 * The purpose of this file is to display the Markdown For Content page
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package mfc
 */

$dec = new Dec('index');
$dec->js('index');
$dec->_title = 'Markdown For Content';

require APP .'/Markdown.php';
$dec->markdown = Markdown(file_get_contents(APP . '/md/index.md'));

return $dec->execute();
?>
