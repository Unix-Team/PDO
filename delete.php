<?php
	include ('include/connect.php');
	if(isset($_GET['id'])){
		
		$id=Check_Get_Param($_GET['id']);
		$sql="DELETE FROM `tbl_user` WHERE `id` = ?";
		$result = $connect -> prepare($sql);
		$result -> bindValue(1,$id);
		if($result->execute()){
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