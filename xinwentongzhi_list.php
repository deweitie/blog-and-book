<?php 
include_once 'conn.php';
$lb=$_GET["lb"];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $lb;?></title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>already have<?php echo $lb;?>list：</p>
<form id="form1" name="form1" method="post" action="">
  search: title：<input name="biaoti" type="text" id="biaoti" />
  <input type="submit" name="Submit" value="search" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">id</td>
    <td bgcolor='#CCFFFF'>title</td><td bgcolor='#CCFFFF'>category</td><td bgcolor='#CCFFFF'>index picture</td><td bgcolor='#CCFFFF'>click rate</td><td bgcolor='#CCFFFF'>publisher</td>
    <td width="120" align="center" bgcolor="#CCFFFF">add time</td>
    <td width="70" align="center" bgcolor="#CCFFFF">check and change</td>
  </tr>
  <?php 
    $sql="select * from xinwentongzhi where leibie='".$lb."'";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
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
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td width='80'>
	<?php if( mysql_result($query,$i,shouyetupian)==null)
	{
	?>
	
	<img src='images/nopic.jpg' width='80' height='88' border='0'>
	<?php
	}
	else
	{
	?>
	<a href="<?php echo mysql_result($query,$i,shouyetupian) ?>" target='_blank'>
	<img src='<?php echo mysql_result($query,$i,shouyetupian) ?>' width='80' height='88' border='0'></a>
	<?php
	}
	?>
	
	
	</td><td><?php echo mysql_result($query,$i,dianjilv);?></td><td><?php echo mysql_result($query,$i,tianjiaren);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center">
	
	<a href="sh.php?id=<?php echo mysql_result($query,$i,id);?>&amp;yuan=<?php echo mysql_result($query,$i,issh);?>&tablename=xinwentongzhi"><?php echo mysql_result($query,$i,issh);?></a>
	
	
	
	<a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=xinwentongzhi" onclick="return confirm('really want to delete？')">delete</a> <a href="xinwentongzhi_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">modification</a></td>
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
<p align="center"><a href="xinwentongzhi_list.php?pagecurrent=1&lb=<?php echo $lb?>">index</a>, <a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb?>"></a> ,<a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb?>">next</a>, <a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

