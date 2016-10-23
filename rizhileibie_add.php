<?php 
include_once 'conn.php';
date_default_timezone_set('PRC');
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$leibie=$_POST["leibie"];
	$sql="insert into rizhileibie(leibie) values('$leibie') ";
	mysql_query($sql);
	echo "<script>javascript:alert('add successful!');location.href='rizhileibie_add.php';</script>";
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>category</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>add category: date: <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.leibie.value==""){alert("Input category");document.form1.leibie.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">    
	<tr>
	  <td>category:</td>
	  <td><input name='leibie' type='text' id='leibie' value='' />&nbsp;*</td></tr>

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

