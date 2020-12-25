<?php
 class Engineers
{

	private $id='0';
	private $title='';
	private $adhar='';
	private $position='1';
	private $status='';
	private $salary='';
	private $address='';
	private $type='0';
	private $fileToUpload=''; 
	
	
	
	function setId($id){
		$this->id=$id;
	}
	
	public  function setFiles($row){	     
		 if(!empty($row['fileToUpload'])){$this->fileToUpload=$row['fileToUpload'];		 }	
		 
	}
	
	public  function setValues($row){
	     
		 if(!empty($row['id'])){
			 $this->id=$row['id'];
		 }
		  if(!empty($row['title'])){
			 $this->title=$row['title'];
		 }
		 if(!empty($row['adhar'])){
			 $this->adhar=$row['adhar'];
		 }
		 
		
		 if(!empty($row['position'])){
			 $this->position=addslashes(trim($row['position']));
		 } 
		 if(!empty($row['type'])){
			 $this->type=addslashes(trim($row['type']));
		 }
		if(!empty($row['salary'])){
			 $this->salary=addslashes(trim($row['salary']));
		 }
		
		 if(!empty($row['address'])){
			 $this->address=addslashes(trim($row['address']));
		 }
		
		 
	
		 
		  //if(!empty($row['status'])){
			 $this->status=$row['status'];
		 //}  
		

		  $this->action=$row['action'];
		
	}

	

	
	public function fetchDetails(){
		if($this->action=='select'){
			 return $this->AllDetails();
		}
		if($this->action=='select_id'){
			 return $this->AllDetailsById();
		}
		if($this->action=='update'){
			 return $this->Update();
		}
		if($this->action=='insert'){
			 return $this->Insert();
		}
		if($this->action=='Delete'){
			 return $this->Delete();
		}
		if($this->action=='DeleteExp'){
			 return $this->DeleteExp();
		}
		if($this->action=='DeleteMore'){
			 return $this->DeleteMore();
		}
		
		
	}
	
	
public function setDb($db){
	$this->db=$db;
	

}	



public function getAllData(){
		
	
	 $db = getDatabase();
     $sql="SELECT * from auro_engineer WHERE STATUS IN (1,2) ORDER BY ID DESC";
	$result=$db->executeQuery($sql);
    WHILE($arr=$db->fetchArray($result)){
		
		$array[]=$arr;
		}
	    return $array;
     }  
	 
public function getAllDataById(){
	
	$sql="SELECT * from auro_engineer WHERE ID='".$this->id."'";
	$db = getDatabase();
	$result=$db->executeQuery($sql);
   return $db->fetchArray($result);
	
} 

public function Update(){

$db = $this->db;
//if(isset($_POST['submit'])){
$insertInfo['NAME'] =  $this->title;
$insertInfo['ADHAR_NUMBER'] =  $this->adhar;
$insertInfo['ADDRESS'] =  $this->address;
$insertInfo['SALARY'] =  $this->salary;
$insertInfo['POSITION'] =  $this->position;
$insertInfo['STATUS'] =  $this->status;



$updateCondition="ID='".$this->id."'";
$res=$db->update('auro_engineer', $insertInfo,$updateCondition);

if(!empty($_POST['image'])){
$image=explode(",",$_POST['image']);
 foreach($image as $key => $doc){
$insertInfo8['ENGINEER_ID'] =$this->id;
$insertInfo8['DOCUMENTS'] =$doc;
$insertInfo8['TYPE'] =  $this->type;
$res4=$db->insert('auro_engineer_documents', $insertInfo8); 
} 
} 



$title1=$_REQUEST['title1'];
	foreach($title1 as $key=>$value){
		if(!empty($title1) and !empty($value)){
			if(!empty($_REQUEST['conid'][$key])){
		
$insertInfo1=array();
$insertInfo1['ENGINEER_ID'] =$this->id;
$insertInfo1['NAME'] =$value;
$insertInfo1['EXPERIENCE'] =$_REQUEST['experience'][$key];
$insertInfo1['CTC'] =$_REQUEST['ctc'][$key];
$updatecondition="ID='".$_REQUEST['conid'][$key]."'";
$res1=$db->update('auro_engineer_experience', $insertInfo1,$updatecondition); 
		
		
	}
	else{
$insertInfo1=array();
$insertInfo1['ENGINEER_ID'] =$this->id;
$insertInfo1['NAME'] =$value;
$insertInfo1['EXPERIENCE'] =$_REQUEST['experience'][$key];
$insertInfo1['CTC'] =$_REQUEST['ctc'][$key];
$res1=$db->insert('auro_engineer_experience', $insertInfo1);
		
		
	}
	}
	}
echo $res;

//}
}  

 
public function Insert(){	
$db = $this->db;

//if(isset($_POST['submit'])){

$insertInfo['NAME'] =  $this->title;
$insertInfo['ADHAR_NUMBER'] =  $this->adhar;
$insertInfo['ADDRESS'] =  $this->address;
$insertInfo['SALARY'] =  $this->salary;
$insertInfo['POSITION'] =  $this->position;
$insertInfo['STATUS'] =  $this->status;


$res=$db->insert('auro_engineer', $insertInfo); 


if(!empty($res)){

$image=explode(",",$_POST['image']);
 foreach($image as $key => $doc){
$insertInfo8['ENGINEER_ID'] =$res;
$insertInfo8['DOCUMENTS'] =$doc;
$insertInfo8['TYPE'] =  $this->type;
$res4=$db->insert('auro_engineer_documents', $insertInfo8); 
} 


	$title1=$_REQUEST['title1'];
	foreach($title1 as $key=>$value){
		if(!empty($title1) and !empty($value)){
		
$insertInfo1=array();
$insertInfo1['ENGINEER_ID'] =$res;
$insertInfo1['NAME'] =$value;
$insertInfo1['EXPERIENCE'] =$_REQUEST['experience'][$key];
$insertInfo1['CTC'] =$_REQUEST['ctc'][$key];
$res5=$db->insert('auro_engineer_experience', $insertInfo1); 
		
		
	}
	}
	echo $res;
	
	
}
else{
	echo "Failed";
}
//}


}
 
public function Delete(){
	  $sql="DELETE FROM auro_engineer WHERE ID='".$this->id."'";
	$db = $this->db;
	$db->executeQuery($sql);
	 echo $value= $db->getAffectedRows();	
}

public function DeleteExp(){
	  $sql="DELETE FROM auro_engineer_experience WHERE ID='".$this->id."'";
	$db = $this->db;
	$db->executeQuery($sql);
	 echo $value= $db->getAffectedRows();	
}

public function DeleteMore(){
	  $sql="DELETE FROM auro_engineer_documents WHERE ID='".$this->id."'";
	$db = $this->db;
	$db->executeQuery($sql);
	 echo $value= $db->getAffectedRows();	
}



}

$obj= new Engineers();
$obj->setValues($_POST);
$obj->setFiles($_FILES);
$obj->setDb($db);
$obj->fetchDetails();


?>
