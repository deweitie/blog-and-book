<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: white;
	font-size: 12px;
}
-->
</style></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0066FF">
  <tr>
    <td height="24" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="369"><span class="STYLE1">Verson <?php echo date('Y', strtotime(date("Y-m-d")));?>V1.0 </span></td>
            <td width="814" class="STYLE1">user:<?php
			echo $_SESSION['username'];
			?>
            ：
              <?php
			echo $_SESSION['cx'];
			?></td>
            <td width="185" nowrap="nowrap" class="STYLE1"><div align="center"> If you have some Qusetion Please Ask Manager</div></td>
          </tr>
        </table></td>
    
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
