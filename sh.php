<?php
//验证login信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$yuan=$_GET["yuan"];
	$tablename=$_GET["tablename"];
	if($yuan=="yes")
	{
	$sql="update $tablename set issh='no' where id=$id";
	}
	else
	{
	$sql="update $tablename set issh='yes' where id=$id";
	}
	 	mysql_query($sql);
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('successful！');location.href='$comewhere';</script>";
	
//}
?>