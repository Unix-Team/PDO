<?php
	include ('include/connect.php');
	if(isset($_POST['edit'])){
		
		$user=Check_Param($_POST['username']);
		$pass=Check_Param($_POST['password']);
		$pass=hash_value($pass);
		$userid=$_SESSION['user_id'];
		$sql="UPDATE `tbl_user` SET `user` = ? , `pass` = ?  WHERE `id` = ?";
		$result = $connect -> prepare($sql);
		$result -> bindValue(1,$user);
		$result -> bindValue(2,$pass);
		$result -> bindValue(3,$userid);
		$query = $result->execute();
		if($query){
			header("location:show.php");
		}else{
			echo "Error";
		}
	}
	else{
		header("location:show.php");
		exit();
	}
?>