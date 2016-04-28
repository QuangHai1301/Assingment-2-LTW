<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>

	<link rel="stylesheet" type="text/css" href="register.css">
	<script src="../js/jquery-1.7.1.min.js"></script>
	
	<script src="../js/modify.js"></script>
	

</head>
<body>
	<p class="texto">Register</p>
<div class="Registro">
	<form id="regform" method="post">
		<span class="fontawesome-user"></span>
		<input type="text" required placeholder="Name" autocomplete="off" id="name" name="name">
		<span class="fontawesome-envelope-alt"></span>
		<input type="text" id="email" required placeholder="Email" autocomplete="off" name="email">
		<span class="fontawesome-calendar"></span>
		<input type="text" id="birthday" required placeholder="Birthday" autocomplete="off" name="birthday">
		<span class="fontawesome-lock"></span>
		<input type="password" name="password" id="password" required placeholder="Password" autocomplete="off">
		<input type="radio" value="None" id="radioOne" name="account" checked/>
		<label for="radioOne" class="radio">Male</label>
		<input type="radio" value="None" id="radioTwo" name="account" />
		<label for="radioTwo" class="radio">Female</label>
		<input type="submit" value="Register" title="DONE" class="add" >
		<label for="error" class=error ></label>
	</form>
	 
</div>
</body>
</html>