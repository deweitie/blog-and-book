<?php 
include_once 'conn.php';

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>message board</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>list of message board：</p>
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
    <td width="152" bgcolor='#EBE2FE'>user</td>
    <td width="80" bgcolor='#EBE2FE'>picture</td>
    <td width="92" bgcolor='#EBE2FE'>name</td>
    <td width="497" bgcolor='#EBE2FE'>message</td>
    <td width="123" align="center" bgcolor="#EBE2FE">reply</td>
    <td width="123" align="center" bgcolor="#EBE2FE">add time</td>
    <td width="106" align="center" bgcolor="#EBE2FE">action</td>
  </tr>
  <?php 
    $sql="select * from liuyanban where 1=1";
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
    <td><?php echo mysql_result($query,$i,zhanghao);?></td><td><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="75" height="82" /></td>
    <td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,liuyan);?></td>
    <td width="123" align="center"><?php
echo mysql_result($query,$i,"huifu");
?></td>
    <td width="123" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="106" align="center"><a href="liuyanban_huifu.php?id=<?php echo mysql_result($query,$i,id);?>">reply</a> <a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=liuyanban" onclick="return confirm('really want to delete？')">delete</a> </td>
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
<p align="center"><a href="liuyanban_list.php?pagecurrent=1">index</a>, <a href="liuyanban_list.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="liuyanban_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="liuyanban_list.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

