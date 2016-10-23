<?php

session_start();
if($_SESSION['cx']!="Hyper manager")
{
	echo "<script>javascript:alert('对不起，您没有该');history.back();</script>";
	exit;
}


include_once 'conn.php';

	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	
	$sql="select * from allusers where username='$username' and pwd='$pwd'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					
					echo "<script language='javascript'>alert('该USER已经存在,请换其他USER！');history.back();</script>";
			}
			else
			{
				date_default_timezone_set("PRC");
				
				$ndate =date("Y-m-d H:i:s");

					$sql="insert into allusers(username,pwd,cx) values('$username','$pwd','$cx')";
					mysql_query($sql); 
					echo "<script language='javascript'>alert('操作成功！');location.href='yhzhgl.php';</script>";
			}
	 }
	 
	 

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<p>add new manager:</p>
<script language="javascript">
	function check()
	{
		if(document.form1.username.value=="")
		{
			alert("Input USER");
			document.form1.username.focus();
			return false;
		}
		if(document.form1.pwd1.value=="")
		{
			alert("Input password");
			document.form1.pwd1.focus();
			return false;
		}
		if(document.form1.pwd2.value=="")
		{
			alert("Input password");
			document.form1.pwd2.focus();
			return false;
		}
		if(document.form1.pwd1.value!=document.form1.pwd2.value)
		{
			alert("try again");
			document.form1.pwd1.value="";
			document.form1.pwd2.value="";
			document.form1.pwd1.focus();
			return false;
		}
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">    <tr>
      <td>USER:</td>
      <td><input name="username" type="text" id="username" />
      *
      <input name="addnew" type="hidden" id="addnew" value="1" /></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input name="pwd1" type="password" id="pwd1" />
      *</td>
    </tr>
    <tr>
      <td>confirm password:</td>
      <td><input name="pwd2" type="password" id="pwd2" />
      *</td>
    </tr>
    
    <tr>
      <td>:</td>
      <td> <input name="cx" type="radio" value="hyper manager" checked="checked" />
       
      Hyper manager</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="submit" onClick="return check();" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<p>manager list:</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td bgcolor="A4B6D7">id</td>
    <td bgcolor="A4B6D7">USER</td>
    <td bgcolor="A4B6D7">password</td>
    <td bgcolor="A4B6D7"></td>
    <td bgcolor="A4B6D7">add time</td>
    <td bgcolor="A4B6D7">action</td>
  </tr>
  <?php
	  $sql="select * from allusers order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
  ?>
  <tr>
    <td><?php
		echo $i+1;
	?></td>
    <td><?php
		echo mysql_result($query,$i,"username");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"pwd");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"cx");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"addtime");
	?></td>
    <td><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=allusers" onClick="return confirm('really want to delete？')">delete</a> </td>
  </tr>
  <?php
  	}
  ?>
</table>
<p>&nbsp; </p>
</body>
</html>
