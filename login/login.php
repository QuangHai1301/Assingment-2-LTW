<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

  if (isset($_POST['loginclick']))
  {

    $username_input=$_POST["username"];
    $password_input=$_POST["password"];
    error_reporting(0);
    include('dbcon.php');
    $sql="select * from user";
    $result=mysql_query($sql);
    while ($row = mysql_fetch_array($result)){
      $id=$row['ID'];
      $name=$row['Name'];
      $password=$row['Password'];
      
      if ($name == $username_input & $password == $password_input) {
            $_SESSION['name'] = $_POST['username'];
            echo '<script type="text/javascript">
                    window.location = "../index.php"
                    </script>';
        }
      }      
    }      
  } 
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="wrapper">
  <form class="login" method="post" action="">
    <p class="title">Log in</p>
    <input type="text" placeholder="Username" autofocus name="username"/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button name="loginclick" action="">
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="index.html">Go to my music</a></footer>
</div>
<script src="../jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>