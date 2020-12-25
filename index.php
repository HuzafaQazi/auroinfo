<?php 
session_start(); 
require_once "system/db.php"; 
function getDatabase(){ 
        $HOSTNAME = "localhost";
		$USERNAME = "root";
		$PASSWORD = ""; 
		$DATABASE = "auroinfo";
        return  $db = new Database($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
}
$db = getDatabase(); 

require_once "system/routing.php"; 
//require_once "system/session.php"; 
require_once "system/global.php"; 
require_once "system/auto_load.php"; 

 ?>