<?php
	include ('include/connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
</head>

<body>
<?php
	if(isset($_POST['login'])){
		if(empty($_POST['username']) || empty($_POST['password']))	{
			echo "Empty username or password";
		}
		else{
			$sql="SELECT COUNT(*) FROM `tbl_user` WHERE `user`=? and `pass`=? ";
			$result= $connect -> prepare($sql);
			$password=hash_value($_POST['password']);
			$result->bindValue(1,$_POST['username']);
			$result->bindValue(2,$password);
			$result->execute();
			$num=$result->fetchColumn();
			if($num==1){
				echo "شما وارد سایت شدید";
			}
			else{
				echo "چنین کاربری با این مشخصات در سیستم وجود ندارد.";
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
    <input type="submit" name="login" id="login" value="Login">
  </p>
</form>
</body>
</html>