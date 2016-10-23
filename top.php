<?php
session_start();

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: White;
}
.STYLE1 {
	
	font-size: 20px;
}
-->
</style></head>

<body>  <table width="100%" border="0" align="center" bgcolor="#6699CC">
  <tr>
   
    <td width="20%" bgcolor="#6699CC">&nbsp;<font size="4">Blog and Book </font></td>
    <td width="42%"></td>
			 <td width="11%" height="73"  >&nbsp;user:
    <?php
			echo $_SESSION['cx'];
			?></td>
			  <td width="11%" height="73"  >&nbsp;&nbsp;user:
    <?php
			echo $_SESSION['username'];
			?></td>
			   <td width="11%" height="73"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" target="_parent">Log out</a></td>
  </tr>
</table>


</body>
</html>
