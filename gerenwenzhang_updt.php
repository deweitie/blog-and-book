<?php 
$id=$_GET["id"];
include_once 'conn.php';
include_once 'sinaEditor.class.php';
extract($_POST);
extract($_GET);
$editor=new sinaEditor('gently_editor');
$editor->Value='';
$editor->BasePath='.';
$editor->Height=460;
$editor->Width=650;
$editor->AutoSave=false;
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$neirong=$gently_editor;$fujian=$_POST["fujian"];$faburen=$_POST["faburen"];
	$sql="update gerenwenzhang set biaoti='$biaoti',neirong='$neirong',fujian='$fujian',faburen='$faburen' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='gerenwenzhang_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改个人文章</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改个人文章： 日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from gerenwenzhang where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$editor->Value=mysql_result($query,$i,neirong);
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse"> 
      <tr><td>标题：</td><td><input name='biaoti' type='text' id='biaoti' size='50' value='<?php echo mysql_result($query,$i,biaoti);?>' /></td></tr><tr><td>内容：</td><td><?php $editor->Create();?></td></tr><tr><td>附件：</td><td><input name='fujian' type='text' id='fujian' size='50'  value='<?php echo mysql_result($query,$i,fujian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo mysql_result($query,$i,faburen);?>' /></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

