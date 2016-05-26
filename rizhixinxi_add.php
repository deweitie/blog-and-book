<?php 
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$bianhao=$_POST["bianhao"];$mingcheng=$_POST["mingcheng"];$leibie=$_POST["leibie"];$tupian=$_POST["tupian"];$jianjie=$_POST["jianjie"];$jiage=$_POST["jiage"];$faburen=$_POST["faburen"];
	$sql="insert into rizhixinxi(bianhao,mingcheng,leibie,tupian,jianjie,jiage,faburen) values('$bianhao','$mingcheng','$leibie','$tupian','$jianjie','$jiage','$faburen') ";
	mysql_query($sql);
	echo "<script>javascript:alert('add successful!');location.href='rizhixinxi_add.php';</script>";
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>information</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
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
<body>
<p>add daily information： date： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("Input number");document.form1.bianhao.focus();return false;}if(document.form1.mingcheng.value==""){alert("Input title");document.form1.mingcheng.focus();return false;}if(document.form1.jiage.value==""){alert("Input else");document.form1.jiage.focus();return false;}if(document.form1.faburen.value==""){alert("enter Publisher");document.form1.faburen.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1"  bordercolor="#FF6633" style="border-collapse:collapse">    
	<tr><td>number：</td><td><input name='bianhao' type='text' id='bianhao' value='' />&nbsp;*</td></tr><tr><td>title：</td><td><input name='mingcheng' type='text' id='mingcheng' value='' size='50'  />&nbsp;*</td></tr><tr><td>category：</td><td><select name='leibie' id='leibie'><?php getoption("rizhileibie","leibie")?></select></td></tr><tr><td>picture：</td><td><input name='tupian' type='text' id='tupian' value='' size='50'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=tupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>intor：</td><td><textarea name='jianjie' cols='50' rows='8' id='jianjie'></textarea></td></tr><tr><td>else：</td><td><input name='jiage' type='text' id='jiage' value='' />&nbsp;*</td></tr><tr><td>Publisher：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION["username"]?>' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="add" onclick="return check();" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

