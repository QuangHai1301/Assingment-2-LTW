<?php
	header("Content-Type: text/html;charset=UTF-8");
  	session_start();
  	if ($_SESSION['name']!='haipham') echo '<script type="text/javascript">
           						window.location = "index.php"
      					</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	
	<table class="table1" >
		<tr class="head">
			<th>Tên User</th>
			<th>Ngày sinh</th>
			<th>Password</th>
			<th>Email</th>
		</tr>
		<?php
		include('dbcon.php');
		$sql=mysql_query("select * from user");
		while($row=mysql_fetch_array($sql))
		{

			if($row['Type']=='admin') continue;
			$id=$row['ID'];
			$name=$row['Name'];
			$birthday=$row['BirthDay'];
			$password=$row['Password'];
			$email=$row['Email'];
			?>

			<tr id="<?php echo $id; ?>" class="edit_tr">

				<td class="edit_td">
					<span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
					<input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>" /&gt;
				</td>

				<td class="edit_td">
					<span id="birthday_<?php echo $id; ?>" class="text"><?php echo $birthday; ?></span> 
					<input type="text" value="<?php echo $birthday; ?>" class="editbox" id="birthday_input_<?php echo $id; ?>"/>
				</td>

				<td class="edit_td">
					<span id="password_<?php echo $id; ?>" class="text"><?php echo $password; ?></span> 
					<input type="text" value="<?php echo $password; ?>" class="editbox" id="password_input_<?php echo $id; ?>"/>
				</td>

				<td class="edit_td">
					<span id="email_<?php echo $id; ?>" class="text"><?php echo $email; ?></span> 
					<input type="text" value="<?php echo $email; ?>" class="editbox" id="email_input_<?php echo $id; ?>"/>
				</td>
				
			</tr>
			<?php
		}
		?>
	</table>
	<table class="table2">
	<tr class="head"><th>Xóa</th></tr>
	<?
		$sql=mysql_query("select * from user");
		while($row=mysql_fetch_array($sql))
		{
			if($row['Type']=='admin') continue;
			$id=$row['ID'];
			?>
			<tr id="<?php echo $id; ?>"  class="delete">
				<td><img src="images/delete.png" alt="#"></td>
			</tr>
			<?
		}
	?>
	</table>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>