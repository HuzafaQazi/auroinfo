<?php
include_once("api_call_function.php");


 
	 	
	   $data_array=$_POST;	
	   $id=$data_array['id'];

	 //print_r($data_array);
	   $make_call = callAPI('PATCH', 'https://desk.zoho.in/api/v1/tickets/'.$id,json_encode($data_array));
	echo 1;

    
?>