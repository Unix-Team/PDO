<?php
	include ('include/connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Data</title>
</head>

<body>
<table border="1">
<?php

	$sql="SELECT * FROM `tbl_user`";
	$result = $connect ->  query($sql);
	while($rows=$result -> fetch(PDO::FETCH_ASSOC)){
		
		echo "<tr><td>". 
		Check_Param($rows['user']).
		"</td>
		<td>
		<a href='delete.php?id=$rows[id]'>Delete</a>
		</td>
		<td>
		<a href='update.php?id=$rows[id]'>Update</a>
		</td>
		</tr>";
		
	}
	/*
	foreach($result as $rows){
		
		echo $rows['user']."<br/>";
	}
	
	*/
?>
</table>

</body>
</html>