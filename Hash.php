<?php
include 'include/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>تبدیل به فرمت های مختلف رمزنگاری</title>
</head>
<body style="font-famiy:tahoma;font-size:10px;direction:rtl;">
<center>
	<div style="border:5px solid #888; width:550px; padding:20px;">
		<form method="post">
			<h3>تبدیل به فرمت های مختلف رمزنگاری</h3><br>
				<input type="text" name="convert" style="padding:5px; width:450px;" placeholder="متن مورد نظر شما...">
				<input type="submit" name="con" value="تبدیل" style="padding:5px;">
		</form>
		<br>
			<h2 style="color:red"><b><?php if(isset($_POST['con'])){ echo $_POST['convert']; } ?></b></h2>
			<span><b>کد از نوع Md5 </b></span><br>
				<input type="text"  value="<?php if(isset($_POST['con'])){ echo hash_value($_POST['convert']); } ?>" style="padding:5px; width:510px;text-align:left " readonly disabled><br><br>
				
			<span><b>کد از نوع Crc32 </b></span><br>
				<input type="text" value="<?php if(isset($_POST['con'])){ echo hash_value_crc32($_POST['convert']); } ?>" style="padding:5px; width:510px;text-align:left " readonly disabled><br><br>
			
			<span><b>کد از نوع Sha1 </b></span><br>
				<input type="text" value="<?php if(isset($_POST['con'])){ echo hash_value_sha1($_POST['convert']); } ?>" style="padding:5px; width:510px;text-align:left " readonly disabled><br><br>
	</div>
</center>
</body>
</html>