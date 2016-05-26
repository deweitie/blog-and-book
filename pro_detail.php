<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
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
                          <td width="17%" align="center" class="title">good daily</td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="qtimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">
                            <tr>
                              <td height="104"><?php
$sql="select * from rizhixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
                                  <a href="<?php echo mysql_result($query,0,tupian);?>" target="_blank"><img src="<?php echo mysql_result($query,0,tupian);?>" width="223" height="197" border="0"></a>
                                  <form id="form1" name="form1" method="post" action="">
                                    <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">
                                      <tr>
                                        <td width="2%" height="37">&nbsp;</td>
                                        <td width="98%"><?php echo mysql_result($query,0,mingcheng);?></td>
                                      <tr>
                                        <td height="41">&nbsp;</td>
                                        <td>Publisher：<?php echo mysql_result($query,0,faburen);?> </td>
                                      </tr>
                                      <tr>
                                        <td height="154" colspan="2">&nbsp; <?php echo mysql_result($query,0,jianjie);?></td>
                                      </tr>
                                    </table>
                                  </form></td>
                            </tr>
                            <tr>
                              <td height="34" align="center"><form name="form3" method="post" action="gwc.php?bh=<?php echo mysql_result($query,0,bianhao);?>&mc=<?php echo mysql_result($query,0,mingcheng);?>&jg=<?php echo mysql_result($query,0,jiage);?>">
                                </form> <a href="#" onClick="javascript:history.back();"></a> <a href="shoucangjiluadd.php?id=<?php echo mysql_result($query,0,id);?>" ></a>                                </td>
                            </tr>
                          </table>
                            <?php
	}
?></td>
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
