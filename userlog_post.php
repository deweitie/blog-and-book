<?php
//验证login信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];

	//$userpass=md5($userpass);

		if ($username!="" && $pwd!="")
		{
		$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='yes'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']=mysql_result($query,0,"cx");
					$_SESSION['xm']=mysql_result($query,$i,xingming);
					$_SESSION['zp']=mysql_result($query,$i,zhaopian);
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('login successful！');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('USER or password error!');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('enter full！');history.back();</script>";
		}
	
	
//}
?>