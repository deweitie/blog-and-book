<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$bianhao=$_POST["bianhao"];$mingcheng=$_POST["mingcheng"];$leibie=$_POST["leibie"];$tupian=$_POST["tupian"];$jianjie=$_POST["jianjie"];$jiage=$_POST["jiage"];$faburen=$_POST["faburen"];
	$sql="update rizhixinxi set bianhao='$bianhao',mingcheng='$mingcheng',leibie='$leibie',tupian='$tupian',jianjie='$jianjie',jiage='$jiage',faburen='$faburen' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('successful!');location.href='rizhixinxi_list.php';</script>";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改信息</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>modfication diary informaton ： date： <?php echo $ndate; ?></p>
<?php
$sql="select * from rizhixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse"> 

      <tr><td>number：</td><td><input name='bianhao' type='text' id='bianhao' value='<?php echo mysql_result($query,$i,bianhao);?>' /></td></tr><tr><td>title：</td><td><input name='mingcheng' type='text' id='mingcheng' size='50' value='<?php echo mysql_result($query,$i,mingcheng);?>' /></td></tr><tr><td>category：</td><td><input name='leibie' type='text' id='leibie' value='<?php echo mysql_result($query,$i,leibie);?>' /></td></tr><tr><td>Picture：</td><td><input name='tupian' type='text' id='tupian' size='50'  value='<?php echo mysql_result($query,$i,tupian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=tupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>introduction：</td><td><textarea name='jianjie' cols='50' rows='8' id='jianjie'><?php echo mysql_result($query,$i,jianjie);?></textarea></td></tr><tr><td>else：</td><td><input name='jiage' type='text' id='jiage' value='<?php echo mysql_result($query,$i,jiage);?>' /></td></tr><tr><td>publisher：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo mysql_result($query,$i,faburen);?>' /></td></tr>
   
   
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
<p>&nbsp;</p>
</body>
</html>

