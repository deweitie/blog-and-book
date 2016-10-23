<?php
//验证login信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	//$userpass=md5($userpass);
	if($login=="1")
	{
		if ($username!="" && $pwd!="")
		{
		$sql="select * from allusers where username='$username' and pwd='$pwd'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']=mysql_result($query,0,"cx");
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('login successful');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('USER or password error');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('please enter your username and password');history.back();</script>";
		}
	}
	
//}
?>