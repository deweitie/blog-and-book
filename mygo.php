<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="member")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	
		if($_SESSION['cx']=="激")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	if($_SESSION['cx']=="teacher")
	{
		echo "<script>javascript:location.href='left3.html';</script>";
	}
	if($_SESSION['cx']=="Hyper manager" || $_SESSION['cx']=="普通管理员")
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}	
?>
