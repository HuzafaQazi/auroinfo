<?php
function __autoload($class_name) {
      require_once 'application/modules/'.$class_name.'.php';
} 

function headerAuthentication(){
	if(isset($_SERVER['HTTP_ORIGIN'])){
		if (strpos('http://' . $_SERVER['SERVER_NAME'], $_SERVER['HTTP_ORIGIN']) !== 0) {
			require_once('application/views/login/file_not_found.php');
			exit();
			//exit(json_encode(['error' => 'File Not Found']));
		}
	}else{
		require_once('application/views/login/file_not_found.php');
		exit();
		//exit(json_encode(['error' => 'File Not Found']));
	}
}

$rest = substr($request_url,0,4); 
$resti = substr($request_url,0,6); 
$modulename = substr($request_url,7,strlen($request_url)); 
if($rest=='AJAX' || $resti=='MODULE'){	
	headerAuthentication();   
	if($rest=='AJAX'){
		require_once 'application/ajax/'.$request_url.'.php';
	}ELSE{
		require_once 'application/modules/'.$modulename.'.php';
	}
}else{
	if($request_url=='engineer')									  {require_once('application/views/engineers/engineer.php');}
	elseif(in_array($request_url,$engineer_array))				  {require_once('application/views/engineers/'.$request_url.'.php');}
	elseif(in_array($request_url,$login_array))				      {require_once('application/views/login/'.$request_url.'.php');}
	else 														  {require_once('application/views/login/file_not_found.php');}
} 
?>