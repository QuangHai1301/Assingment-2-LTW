<?php
include("dbcon.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$name=mysql_escape_String($_POST['name']);
$birthday=mysql_escape_String($_POST['birthday']);
$password=mysql_escape_String($_POST['password']);
$email=mysql_escape_String($_POST['email']);
$sql = "update user set Name='$name',Email='$email', Password='$password',BirthDay='$birthday' where ID='$id'";
mysql_query($sql);
}
?>