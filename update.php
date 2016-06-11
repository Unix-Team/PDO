<?php
	include ('include/connect.php');
	if(empty($_GET['id'])){
		header("location:show.php");	
		exit();	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Data</title>
</head>

<body> 
<?php
	$id=Check_Get_Param($_GET['id']);
	$sql="SELECT * FROM `tbl_user` WHERE `id` = '".$id."'";
	$result = $connect ->  query($sql);
	while($rows=$result -> fetch(PDO::FETCH_ASSOC)){
		$_SESSION['user_id']=$rows['id'];
?>
<form id="form1" name="form1" method="post" action="check_edit.php">
  <p>
    <label for="textfield">Username:</label>
    <input type="text" value="<?php echo Check_Param($rows['user']); ?>" name="username" id="username" placeholder="username...">
  </p>
  <p>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="password...">
  </p>
  <p>
    <input type="submit" name="edit" id="edit" value="Edit">
  </p>
</form>
<?php
	}
?>
</body>
</html>