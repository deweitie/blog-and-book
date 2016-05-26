<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>个人文章</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有个人文章列表：</p>
<form id="form1" name="form1" method="post" action="">
  search: 标题：<input name="biaoti" type="text" id="biaoti" /> 发布人：<input name="faburen" type="text" id="faburen" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>标题</td><td bgcolor='#CCFFFF'>附件</td><td bgcolor='#CCFFFF'>发布人</td><td bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>
    <td width="120" align="center" bgcolor="#CCFFFF">add时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from gerenwenzhang where faburen='".$_SESSION['username']."'";
  
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
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td><td><?php echo mysql_result($query,$i,faburen);?></td><td width='80' align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=gerenwenzhang" onclick="return confirm('真的要删除？')">删除</a> <a href="gerenwenzhang_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="gerenwenzhang_detail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a></td>
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
<p align="center"><a href="gerenwenzhang_list2.php?pagecurrent=1">index</a>, <a href="gerenwenzhang_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="gerenwenzhang_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="gerenwenzhang_list2.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>

<p>&nbsp; </p>

</body>
</html>

