<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<html>
<head>
<title>Blog and Book</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE3 {color: #6D2E18; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="1043" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="969" height="740" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
<?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="725" height="740" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="725" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="725" height="42" background="qtimages/1_02_02_01_01.gif"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">个人文章</td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="qtimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><form id="form1" name="form1" method="post" action="">
                            search: 标题：
                                <input name="biaoti" type="text" id="biaoti" />
                            发布人：
  <input name="faburen" type="text" id="faburen" />
  <input type="submit" name="Submit" value="查找" />
                          </form>
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">
                              <tr>
                                <td width="25" bgcolor="#CCFFFF">序号</td>
                                <td width="299" bgcolor='#CCFFFF'>标题</td>
                                <td width="39" bgcolor='#CCFFFF'>附件</td>
                                <td width="73" bgcolor='#CCFFFF'>发布人</td>
                                <td width="167" align="center" bgcolor="#CCFFFF">add时间</td>
                                <td width="43" align="center" bgcolor="#CCFFFF">操作</td>
                              </tr>
                              <?php 
    $sql="select * from gerenwenzhang where issh='是'";
  
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
                                <td><?php echo mysql_result($query,$i,biaoti);?></td>
                                <td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td>
                                <td><?php echo mysql_result($query,$i,faburen);?></td>
                                <td width="167" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
                                <td width="43" align="center"><a href="gerenwenzhangdetail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
                              </tr>
                              <?php
	}
}
?>
                            </table>
                            <p>
                                <?php
		echo $rowscount;
	?>
                               ,
                              <input type="button" name="Submit2" onclick="javascript:window.print();" value="print" />
                            </p>
                            <p align="center"><a href="gerenwenzhanglist.php?pagecurrent=1">index</a>, <a href="gerenwenzhanglist.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="gerenwenzhanglist.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="gerenwenzhanglist.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p>                            <p align="center">&nbsp;</p>                            
                            </td>
                          <td width="12" background="qtimages/1_02_02_01_02_04.gif">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.gif" width="725" height="8" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
