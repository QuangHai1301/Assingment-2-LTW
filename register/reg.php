<?php
   
header('Content-type: application/json');

error_reporting(0);
include('../dbcon.php');
if($_POST['name'] & $_POST['email'] & $_POST['birthday'] & $_POST['password']){
	$name_err="";
	$email_err="";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$birthday=$_POST['birthday'];
	$password=$_POST['password'];
	$sql="select * from user";
	$flag = true;
	$result=mysql_query($sql);
		while ($row = mysql_fetch_array($result)){

			$dname=$row['Name'];
			$demail=$row['Email'];
			if ($email!=$demail&&$name!=$dname){
				$response_array['status'] = 'succ';
			}
			if ($email==$demail){
				$response_array['status'] = 'emailerr';  
				$flag = false;
			}
			if ($name==$dname){
				$response_array['status'] = 'nameerr'; 
				$flag=false;
			}	
		}
	echo json_encode($response_array);

	if($flag){
		$sql="INSERT INTO user(ID,Name,Email,Password,Avatar,Sex,BirthDay,Type) VALUES('','$name','$email',$password,NULL,'male','$birthday','user')";
		$result = mysql_query($sql);	
		$id=mysql_insert_id();

	}
}
?>