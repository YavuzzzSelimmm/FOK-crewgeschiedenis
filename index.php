<?php

ob_start(null, 0, PHP_OUTPUT_HANDLER_FLUSHABLE);
ini_set('display_errors', 'on');
error_reporting(E_ERROR | E_PARSE);
session_start();

require_once("config.php");
require_once("init.php");



if($load_header_template){
    $smarty->display($templates_dir.$header_template_file);
}

include_once($include_file);
ob_end_flush();