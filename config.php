<?php 
if (!defined("__ROOT__")) {
	define("__ROOT__",dirname(__FILE__));
}
define("__DIR__","\\");
define("__VIEWS__",__ROOT__.__DIR__."views".__DIR__);
define("__CLASSES__",__ROOT__.__DIR__."classes".__DIR__);
define("__DYNAMIC__",__CLASSES__."dynamic".__DIR__);
define("__STATIC__",__CLASSES__."static".__DIR__);
require_once(__ROOT__.__DIR__."engine".__DIR__."engine.php");
?>