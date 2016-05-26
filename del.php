<?php
//验证login信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$tablename=$_GET['tablename'];
	
	//$userpass=md5($userpass);
	$sql="delete from $tablename where id=$id";
	//echo $sql;
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('Successful');location.href='$comewhere';</script>";
	
//}
?>