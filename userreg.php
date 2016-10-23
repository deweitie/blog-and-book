<?php 
include_once 'conn.php';
date_default_timezone_set('PRC');
$ndate =date("Y-m-d H:i:s");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$cx=$_POST["cx"];
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian,cx) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian','$cx') ";
	
	mysql_query($sql);
	
	echo "<script>javascript:alert('successful!wait for manager check to login！');location.href='index.php';</script>";
}
?>
<html>
<head>
<title>Blog and Book</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE5 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("enter your user name");document.form1.zhanghao.focus();return false;}if(document.form1.mima.value==""){alert("please enter your password");document.form1.mima.focus();return false;}if(document.form1.xingming.value==""){alert("please enter your name");document.form1.xingming.focus();return false;}if(document.form1.Email.value==""){alert("please enter your Email");document.form1.Email.focus();return false;}if(document.form1.zhaopian.value==""){alert("please select a picture");document.form1.zhaopian.focus();return false;}
}
	
</script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="1043" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?>
	    
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
                    <td width="725" height="42" bgcolor="#000000"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" ><span class="STYLE5">User</span></td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="qtimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><form name="form1" method="post" action="">
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                              <tr>
                                <td>Usermane:</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Password:</td>
                                <td><input name='mima' type='text' id='mima' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Name:</td>
                                <td><input name='xingming' type='text' id='xingming' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Sex:</td>
                                <td><select name='xingbie' id='xingbie'>
                                    <option value="male"selected> male</option>
                                    <option value="female" selected>female</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>Area:</td>
                                <td><select name='diqu' id='diqu'>
                                    <option value="Beijing" selected>Beijing</option>
                                    <option value="Cairns">Cairns</option>
                                    <option value="Shanghai">Shanghai</option>
                                    <option value="Other">Other</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>Email:</td>
                                <td><input name='Email' type='text' id='Email' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Picture:</td>
                                <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                                  &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
                              </tr>
                              <tr>
                                <td>Identity:</td>
                                <td><select name="cx" id="cx">
                                  <option value="member">member</option>
                           
                                </select>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="reg" onClick="return check();" />
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
