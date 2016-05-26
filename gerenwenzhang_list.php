<?php 
include_once 'conn.php';

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Personal article</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>list of Peraonal article：</p>
<form id="form1" name="form1" method="post" action="">
  search: title：<input name="biaoti" type="text" id="biaoti" /> Publisher：<input name="faburen" type="text" id="faburen" />
  <input type="submit" name="Submit" value="search" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">id</td>
    <td bgcolor='#CCFFFF'>title</td><td bgcolor='#CCFFFF'>attachement</td><td bgcolor='#CCFFFF'>Publisher</td><td bgcolor='#CCFFFF' width='80' align='center'>check</td>
    <td width="120" align="center" bgcolor="#CCFFFF">add time</td>
    <td width="70" align="center" bgcolor="#CCFFFF">action</td>
  </tr>
  <?php 
    $sql="select * from gerenwenzhang where 1=1";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td><td><?php echo mysql_result($query,$i,faburen);?></td><td width='80' align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=gerenwenzhang" onclick="return confirm('make this action？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=gerenwenzhang" onclick="return confirm('realy want delete？')">delete</a> <a href="gerenwenzhang_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">modification</a> <a href="gerenwenzhang_detail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">detail</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p><?php
		echo $rowscount;
	?> ,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="print" />
</p>
<p align="center"><a href="gerenwenzhang_list.php?pagecurrent=1">index</a>, <a href="gerenwenzhang_list.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="gerenwenzhang_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="gerenwenzhang_list.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

