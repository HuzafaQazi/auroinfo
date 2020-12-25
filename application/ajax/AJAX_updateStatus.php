<?php
//session_start();
include_once("api_call_function.php");


 
	 	
	   $data_array[ids]=array($_POST[id]);	
	
	  echo $make_call = callAPI('POST', 'https://desk.zoho.in/api/v1/closeTickets',json_encode($data_array)); 
	 //echo $make_call = callAPI('POST', 'https://desk.zoho.in/api/v1/uploads',json_encode($file));
	echo 1;

    
?>