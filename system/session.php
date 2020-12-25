<?php
if(($request_url=='index' && $_POST[submit]!=1)){	session_destroy(); }

if(filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) == false && $request_url!='index'){header ('Location: index');}
	   
if(($request_url!='index') && ($request_url!='AJAX_index')){
	if(islogout($_SESSION['TOKEN'],$_SESSION['EMAIL_ID'],$request_url))
	{
		session_destroy();	
		header ('Location: index'); 
	}
}

function islogout($token,$email,$request_url){
	error_log("\r\n islogout  $token,$email,$request_url " , 3, 'log/log.log');
	if($token!=md5($email.$_SERVER['REMOTE_ADDR']))
	{
		error_log("\r\n islogout 1  " , 3, 'log.log');
		return TRUE;
	}
	$sql="select ID FROM ADMIN_SESSION WHERE TOKEN='$token'";
	$db = getDatabase(); 
	$res=$db->executeQuery($sql);
    $row=$db->fetchArray($res); 
	if(empty($row['ID']))
	{
		error_log("\r\n islogout 2  " , 3, 'log.log');
		return TRUE;
	} 	
	return FALSE;		
}
   
$access_files=($_SESSION['ROLES']);
$rest = substr($request_url,0,4); 
$resti = substr($request_url,0,6); 
/* if((!in_array($request_url,$access_files['files'])) && ($rest!='AJAX') && ($resti!='MODULE') && ($request_url!='index') && ($request_url!='dashboard') && ($request_url!='file_not_found') ){	
   // header ('Location: file_not_found');
	require_once('application/views/login/file_not_found.php');
}  */  
?>