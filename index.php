<?php 
spl_autoload_register(function($classes){
	include_once "system/libs/".$classes.".php"; 
});
include_once "app/config/config.php";

$main = new Main();
?>