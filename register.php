<?php
	include ('include/connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Page</title>
</head>

<body> 
<?php
	if(isset($_POST['register'])){
		if(empty($_POST['username']) || empty($_POST['password']))	{
			echo "Empty username or password";
		}
		else{
			$sql="INSERT INTO `tbl_user` (user,pass) VALUES (?,?)";
			$result= $connect -> prepare($sql);
			$password=hash_value($_POST['password']);
			$result->bindValue(1,$_POST['username']);
			$result->bindValue(2,$password);
			$query = $result->execute();
			if($query){
				echo "ok";
			}
			else{
				echo "No";
			}
		}
	}
?>
<form id="form1" name="form1" method="post">
  <p>
    <label for="textfield">Username:</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="submit" name="register" id="register" value="Register">
  </p>
</form>
</body>
</html>