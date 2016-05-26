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
                          <td width="17%" align="center" class="title"><?php echo $_GET["leibie"] ;?></td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="qtimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">
                            <tr>
                              <td height="104"><form id="form1" name="form1" method="post" action="">
                                search:number:
                                <input name="bh" type="text" id="bh" />
                                title:
                                <input name="mc" type="text" id="mc" />
                                <input type="submit" name="Submit" value="search" />
                                </form>
                                  <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF6633" style="border-collapse:collapse">
                                    <tr>
                                      <td width="44" bgcolor='#EBE2FE'>number</td>
                                      <td width="509" bgcolor='#EBE2FE'>title</td>
                                    
                                      <td width="80" align="center" bgcolor="#EBE2FE">&nbsp; </td>
                                    </tr>
                                    <?php 
    $sql="select * from rizhixinxi where 1=1  ";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bianhao like '%$nreqbh%'";
}
     if ($_GET["leibie"]!="")
{
  	$nreqmc=$_GET["leibie"];
		 
  	$sql=$sql." and leibie like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
 
   
$query=mysql_query($sql);
 
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=4;//每行数；
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
                                      <td><?php echo mysql_result($query,$i,bianhao);?></td>
                                      <td><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'> <?php echo mysql_result($query,$i,mingcheng);?> <a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'></a> </td>
                                      <td width="80" align="center"><a href="pro_detail.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">详细</a></td>
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
                                  <input type="button" name="Submit2" onClick="javascript:window.print();" value="print" />
                                  </p>
                                <p align="center"><a href="prolist.php?pagecurrent=1">index</a>, <a href="prolist.php?pagecurrent=<?php echo $pagecurrent-1;?>"></a> ,<a href="prolist.php?pagecurrent=<?php echo $pagecurrent+1;?>">next</a>, <a href="prolist.php?pagecurrent=<?php echo $pagecount;?>">last</a>, <?php echo $pagecurrent;?>,<?php echo $pagecount;?> </p></td>
                            </tr>
                            <tr>
                              <td align="right"><a href="#" onClick="javascript:history.back();"></a></td>
                            </tr>
                          </table>                                                  
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
