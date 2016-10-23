<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>Blog and Book</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE3 {color: #FFFFFF}
.STYLE4 {color: #FFFF80}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="1043" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="929" height="740" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
<?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="725" height="740" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top"><table id="__01" width="725" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="680" height="42" bgcolor="#000000"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="17%" align="center"><a href="news.asp?lb=news"><span class="STYLE3">News</span></a></td>
                        <td>&nbsp;</td>
                        ></tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="10"><img src="qtimages/1_02_02_01_02_01.gif" width="10" height="208" alt=""></td>
                        <td width="228" height="208"><SCRIPT type=text/javascript>
var focus_width=228;
var focus_height=188;
var text_height=20;
var swf_height = focus_height+text_height;
var pics="";
var links="";
var texts="";
<?php
$sql="select id,biaoti,shouyetupian,id from xinwentongzhi where shouyetupian<>'' order by id desc";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
	$pics=$pics.mysql_result($query,$i,"shouyetupian")."|";
	$links=$links."gg_detail.php?id=".mysql_result($query,$i,"id")."|";
	$texts=""."|";
}
$pics=substr($pics,0,strlen($pics)-1);
$links=substr($links,0,strlen($links)-1);
$texts=substr($texts,0,strlen($texts)-1);
?>

pics="<?php echo $pics;?>";
links="<?php echo $links;?>";
texts="<?php echo $texts;?>";

document.write('<embed src="qtimages/pixviewer.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="Best" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">');

</SCRIPT></td>
                        <td width="475" height="208" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                          <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='news' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                          <tr height="25">
                            <td width="4%" align="center" class="newslist"><img height="7" src="qtimages/1.jpg" width="7" /></td>
                            <td width="70%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                            <td width="26%" class="newslist"><?php echo mysql_result($query,$i,"addtime");?></td>
                          </tr>
                          <?php
						}
					  }
					  ?>
                        </table></td>
                        <td width="12"><img src="qtimages/1_02_02_01_02_04.gif" width="12" height="208" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.gif" width="725" height="8" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><table id="__01" width="725" height="215" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  
                    <td><table id="__01" width="720" height="215" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="720" height="40" bgcolor="#000000"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17%" align="center" class="title STYLE4">funny story </td>
                            <td width="83%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="720" height="164"><table width="96%" height="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <?php 
    $sql="select * from rizhixinxi where tupian<>''";
 
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	if($i<=4)
	{
	
  ?>
                            <td height="164" align="center"><table width="17%" height="164" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="123" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"tupian");?>" width="102" height="123" border="0"></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"mingcheng");?></a></td>
                                </tr>
                            </table></td>
                            <?php
							}
  	}
  ?>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_02_02_03.jpg" width="702" height="11" alt=""></td>
                      </tr>
                    </table></td>
                  
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="725" height="267" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="363" height="267" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="363" height="41" background="qtimages/1_02_02_03_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="35%" align="center" class="title">Mynews</td>
                            <td width="65%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="363" height="215" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="qtimages/1_02_02_03_01_02_01.jpg" width="14" height="215" alt=""></td>
                            <td width="335" height="215" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='mynews' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="7%" align="center" class="newslist"><img height="7" src="qtimages/1.jpg" width="7" /></td>
                                <td width="93%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                                </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td><img src="qtimages/1_02_02_03_01_02_03.jpg" width="14" height="215" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_03_01_03.jpg" width="363" height="11" alt=""></td>
                      </tr>
                    </table></td>
                    <td><table id="__01" width="363" height="267" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="363" height="41" background="qtimages/1_02_02_03_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="35%" align="center" class="title">Local News</td>
                              <td width="65%">&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="363" height="215" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td><img src="qtimages/1_02_02_03_01_02_01.jpg" width="14" height="215" alt=""></td>
                              <td width="335" height="215" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='news' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="7%" align="center" class="newslist"><img height="7" src="qtimages/1.jpg" width="7" /></td>
                                <td width="93%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                                </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                              <td><img src="qtimages/1_02_02_03_01_02_03.jpg" width="14" height="215" alt=""></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_03_01_03.jpg" width="363" height="11" alt=""></td>
                      </tr>
                    </table></td>
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
