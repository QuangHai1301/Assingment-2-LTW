<?php
include("dbcon.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);;
$sql = "delete from user where ID='$id'";
mysql_query($sql);
}
?>