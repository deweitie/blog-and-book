<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('login first！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('message successful!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>Blog and Book</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE3 {color: #6D2E18; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="1043" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="969" height="740" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
<?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="725" height="740" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="725" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="725" height="42" background="qtimages/1_02_02_01_01.gif"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">feedbook</td>
                          <td width="83%"><div align="right"><a href="lyblist.php" class="title">message already</a></div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="qtimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><form name="form1" method="post" action="">
                            <table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                              <tr>
                                <td>user：</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>picture：</td>
                                <td><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                                    <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                              </tr>
                              <tr>
                                <td>name：</td>
                                <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>message：</td>
                                <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="add" onClick="return check();" />
                                    <input type="reset" name="Submit2" value="reset" /></td>
                              </tr>
                            </table>
                                                    </form>
                          <p align="center">&nbsp;</p>                            
                            </td>
                          <td width="12" background="qtimages/1_02_02_01_02_04.gif">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.gif" width="725" height="8" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
