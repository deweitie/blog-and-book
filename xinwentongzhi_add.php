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
$lb=$_GET["lb"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$leibie=$_POST["leibie"];$neirong=$_POST["neirong"];$shouyetupian=$_POST["shouyetupian"];$dianjilv=$_POST["dianjilv"];$tianjiaren=$_POST["tianjiaren"];
	$sql="insert into xinwentongzhi(biaoti,leibie,neirong,shouyetupian,dianjilv,tianjiaren) values('$biaoti','$leibie','$neirong','$shouyetupian','$dianjilv','$tianjiaren') ";

	mysql_query($sql);
	echo "<script>javascript:alert('add successful!');location.href='xinwentongzhi_add.php?lb=$lb';</script>";
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>news</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">

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
<p>add news: date: <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.biaoti.value==""){alert("title");document.form1.biaoti.focus();return false;}if(document.form1.leibie.value==""){alert("category);document.form1.leibie.focus();return false;}if(document.form1.tianjiaren.value==""){alert("publisher");document.form1.tianjiaren.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#366ec9" style="border-collapse:collapse">    
	<tr>
	  <td>title:</td>
	  <td><input name='biaoti' type='text' id='biaoti' value='' size='50'  />&nbsp;*</td></tr><tr>
	    <td>category:</td>
	    <td><input name='leibie' type='text' id='leibie' value='<?php echo $lb;?>' />&nbsp;*</td></tr><tr>
	      <td>content:</td>
	      <td><textarea name="neirong" style="width:700px;height:200px;visibility:hidden;"></textarea></td></tr><tr>
	        <td>index picture:</td>
	        <td><input name='shouyetupian' type='text' id='shouyetupian' value='' size='50'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shouyetupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr>
	          <td>click rate:</td>
	          <td><input name='dianjilv' type='text' id='dianjilv' value='1' /></td></tr><tr>
	  <td>Publisher</td>
	  <td><input name='tianjiaren' type='text' id='tianjiaren' value='<?php echo $_SESSION["username"]; ?>' />&nbsp;*</td></tr>

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

