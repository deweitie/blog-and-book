<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="member")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	
		if($_SESSION['cx']=="��")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	if($_SESSION['cx']=="teacher")
	{
		echo "<script>javascript:location.href='left3.html';</script>";
	}
	if($_SESSION['cx']=="Hyper manager" || $_SESSION['cx']=="��ͨ����Ա")
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}	
?>
