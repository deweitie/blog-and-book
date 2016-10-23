<?php 
$id=$_GET["id"];
date_default_timezone_set("PRC");
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
	$biaoti=$_POST["biaoti"];$leibie=$_POST["leibie"];$neirong=$_POST["neirong"];$shouyetupian=$_POST["shouyetupian"];$dianjilv=$_POST["dianjilv"];$tianjiaren=$_POST["tianjiaren"];
	$sql="update xinwentongzhi set biaoti='$biaoti',leibie='$leibie',neirong='$neirong',shouyetupian='$shouyetupian',dianjilv='$dianjilv',tianjiaren='$tianjiaren' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('successful!');location.href='xinwentongzhi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>modfication news</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>

    <link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="neirong"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
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
<p>modification news£º date£º <?php echo $ndate; ?></p>
<?php
$sql="select * from xinwentongzhi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$editor->Value=mysql_result($query,$i,neirong);
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#366ec9" style="border-collapse:collapse"> 
      <tr><td>title£º</td><td><input name='biaoti' type='text' id='biaoti' size='50' value='<?php echo mysql_result($query,$i,biaoti);?>' /></td></tr><tr><td>category£º</td><td><input name='leibie' type='text' id='leibie' value='<?php echo mysql_result($query,$i,leibie);?>' /></td></tr><tr><td>content£º</td><td><textarea name="neirong" style="width:700px;height:200px;visibility:hidden;"><?php echo mysql_result($query,$i,neirong);?></textarea></td></tr><tr><td>index picture£º</td><td><input name='shouyetupian' type='text' id='shouyetupian' size='50'  value='<?php echo mysql_result($query,$i,shouyetupian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shouyetupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>click times£º</td><td><input name='dianjilv' type='text' id='dianjilv' value='<?php echo mysql_result($query,$i,dianjilv);?>' /></td></tr><tr><td>publisher£º</td><td><input name='tianjiaren' type='text' id='tianjiaren' value='<?php echo mysql_result($query,$i,tianjiaren);?>' /></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="submit" />
      <input type="reset" name="Submit2" value="reset" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

