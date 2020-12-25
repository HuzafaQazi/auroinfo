<?php
//session_start();
include_once("api_call_function.php");


 
	 	
	   $data_array=$_POST;	
	  // $key = array_keys($data_array);
	  // print_r($key);
	  // unset($key[8]);
	  // $get_arraty=\array_diff_key($data_array,["5" => "xy", "9" => "xy"]);
	  array_splice($data_array, 5,1);
	  array_splice($data_array, 8,1);
	
	/*   $c=implode ( "', '", $_POST['file'] );
	   $file =  array(
      "file"        => $c
   
     ); */
	 // alert(json_encode($data_array)); 
	 //print_r($data_array);
	   $make_call = callAPI('POST', 'https://desk.zoho.in/api/v1/tickets',json_encode($data_array));
	 //echo $make_call = callAPI('POST', 'https://desk.zoho.in/api/v1/uploads',json_encode($file));
	echo 1;

    
?>