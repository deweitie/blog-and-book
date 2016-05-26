<?php
session_start();
if ($_SESSION['username']==""){
	echo "<script language='javascript'>alert('error£¡');location='login.php';</script>";
}
?>