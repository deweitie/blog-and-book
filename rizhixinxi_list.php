<?php 
include_once 'conn.php';

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>informatio</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>list of information：</p>
<form id="form1" name="form1" method="post" action="">
  search:number:
  <input name="bh" type="text" id="bh" />
  title:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="search" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">id</td>
    <td width="132" bgcolor='#EBE2FE'>number</td>
    <td width="132" bgcolor='#EBE2FE'>title</td>
    <td width="132" bgcolor='#EBE2FE'>category</td>
    <td bgcolor='#EBE2FE'>picture</td><td width="132" bgcolor='#EBE2FE'>else</td>
    <td width="186" bgcolor='#EBE2FE'>Publisher</td>
    <td width="66" align="center" bgcolor="#EBE2FE">add tie</td>
    <td width="124" align="center" bgcolor="#EBE2FE">action</td>
  </tr>
  <?php 
    $sql="select * from rizhixinxi where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bianhao like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and mingcheng like '%$nreqmc%'";
}
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
    <td><?php echo mysql_result($query,$i,bianhao);?></td><td><?php echo mysql_result($query,$i,mingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    <td width="66" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="124" align="center">
	
	
	<a href="sh.php?id=<?php echo mysql_result($query,$i,id);?>&amp;yuan=<?php echo mysql_result($query,$i,issh);?>&tablename=rizhixinxi"><?php echo mysql_result($query,$i,issh);?></a>
	
	
	<a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=rizhixinxi" onclick="return confirm('realy want to delete?')">delete</a> <a href="rizhixinxi_updt.php?id=<?php
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
<p align="center"><a href="rizhixinxi_list.php?pagecurrent=1">index</a>, <a href="rizhixinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="rizhixinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="rizhixinxi_list.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

