<?php 
$id=$_GET["id"];
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>detile</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>content detail： date： <?php echo $ndate; ?></p>
<?php
$sql="select * from gerenwenzhang where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse"> 
      <td width='11%'>title：</td><td width='39%'><?php echo mysql_result($query,0,biaoti);?></td><td width='11%'>content：</td><td width='39%'><?php echo mysql_result($query,0,neirong);?></td></tr><tr><td width='11%'>attacher：</td><td width='39%'><?php echo mysql_result($query,0,fujian);?></td><td width='11%'>publisher：</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td>
    <tr>
      <td colspan="4" align="center"><input type="button" name="Submit" value="" onclick="javascript:history.back()" /></td>
    </tr>
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

