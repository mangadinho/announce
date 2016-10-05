<?php
header("content-type:text/html; charset=utf-8");

session_start();

require_once "functions.php";
require_once "config.php";

db(HOST,DB_USER,DB_PASSWORD,DB_NAME);

$action = clear_str($_GET['action']);
 if(!$action){
	  $action = main;
 }
if(file_exists(ACTION.$action.".php")){
	include (ACTION.$action.".php");
}
else{
	include (ACTION."main.php");
}

require_once TEMPLATE."index.html";
?>