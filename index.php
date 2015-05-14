<?php
/**
 * welcome to xiejunOS.
 * index.php is the only entrance.
 */
define('ROOT_DIR',realpath(dirname(__FILE__)));
require(ROOT_DIR . '/lib/base/kernel.php');
//require_once 'kernel.php';

kernel::init();

?>