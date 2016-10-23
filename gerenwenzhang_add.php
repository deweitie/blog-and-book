<?php
session_start();
include_once 'conn.php';
include_once 'sinaEditor.class.php';
date_default_timezone_set('PRC');
extract($_POST);
extract($_GET);
$editor=new sinaEditor('neirong');
$editor->Value='';
$editor->BasePath='.';
$editor->Height=460;
$editor->Width=650;
$editor->AutoSave=false;
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$neirong=$_POST["neirong"];$fujian=$_POST["fujian"];$faburen=$_POST["faburen"];
	$sql="insert into gerenwenzhang(biaoti,neirong,fujian,faburen) values('$biaoti','$neirong','$fujian','$faburen') ";
	mysql_query($sql);
	echo "<script>javascript:alert('add successful!');location.href='gerenwenzhang_add.php';</script>";
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Personal Article</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>add Personal: Date: <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.biaoti.value==""){alert("enter title");document.form1.biaoti.focus();return false;}if(document.form1.faburen.value==""){alert("enter Publisher");document.form1.faburen.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">    
	<tr>
	  <td>title:</td>
	  <td><input name='biaoti' type='text' id='biaoti' value='' size='50'  />&nbsp;*</td></tr><tr>
	    <td>content:</td>
	    <td><?php $editor->Create();?></td></tr><tr>
	      <td>attacher:</td>
	      <td><input name='fujian' type='text' id='fujian' value='' size='50'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr>
	        <td>Publisher:</td>
	        <td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION['username'];?>' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="add" onClick="return check();" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

