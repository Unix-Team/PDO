<?php
	session_start();
	$link=array(
		"servername" => "localhost",
		"dbname" => "pdo",
		"username" => "root",
		"password" => "",
	);
	$attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$server_name=$link['servername'];
	$db_name=$link['dbname'];
	$dsn="mysql:host=$server_name;dbname=$db_name";
	try{
		$connect = new PDO($dsn,$link['username'],$link['password'],$attr);
		return $connect;
	}catch(PDOException $error){
		echo "Error in connect to server: ".$error -> __toString();
		exit();
	}
	
	function hash_value($value){
		
		return md5($value)."k732#vsf$@Hd&j5kf";
		
	}
	
	function hash_value_sha1($value){
		
		return sha1($value)."k732#vsf$@Hd&j5kf";
		
	}
	
	function hash_value_crc32($value){
		
		return crc32($value)."k732#vsf$@Hd&j5kf";
		
	}
	
	function Check_Param($val){
		
		$value=addslashes($val);
		$string1=htmlspecialchars($value);
		$string2=strip_tags($string1);
		return $string2;
		
	}
	
	function Check_Get_Param($val){
		
		$value=addslashes($val);
		$string1=htmlspecialchars($value);
		$string2=strip_tags($string1);
		$string3=intval($string2);
		return $string3;
		
	}
?>
