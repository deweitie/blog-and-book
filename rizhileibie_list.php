<?php 
include_once 'conn.php';

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>category</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>list of category：</p>
<form id="form1" name="form1" method="post" action="">
  search:category:
  <input name="bh" type="text" id="bh" />
  <input type="submit" name="Submit" value="search" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">id</td>
    <td bgcolor='#EBE2FE'>category</td>
    <td width="120" align="center" bgcolor="#EBE2FE">add time</td>
    <td width="70" align="center" bgcolor="#EBE2FE">action</td>
  </tr>
  <?php 
    $sql="select * from rizhileibie where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and leibie like '%$nreqbh%'";
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
    <td><?php echo mysql_result($query,$i,leibie);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=rizhileibie" onclick="return confirm('really want to delete？')">delete</a> <a href="rizhileibie_updt.php?id=<?php
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
<p align="center"><a href="rizhileibie_list.php?pagecurrent=1">index</a>, <a href="rizhileibie_list.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="rizhileibie_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="rizhileibie_list.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

