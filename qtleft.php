<script language="javascript">
function userlogs()
{
	if(document.userlog.username.value=="")
	{
		alert("Please enter USER");
		document.userlog.username.focus();
		return false;
	}
	if(document.userlog.pwd1.value=="")
	{
		alert("Please enter password");
		document.userlog.pwd1.focus();
		return false;
	}
}
</script><table id="__01" width="244"    border="1" align="center" cellpadding="3" cellspacing="1"  bordercolor="#f2ac4a" style="border-collapse:collapse"  >
               
              <tr>
                <td valign="top"><table id="__01" width="244" height="152" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="244" height="39"  bgcolor="#f2ac4a" ><table  width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="52%" align="center" class="title">LOGIN</td>
                          <td width="48%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="244" height="106" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="7"  >&nbsp;</td>
                          <td width="227" height="106"><?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                           
                              <table width="100%" height="68%" border="0" cellpadding="0" cellspacing="0"> <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                                <tr>
                                  <td width="12" height="34">&nbsp;</td>
                                  <td width="49">USER:</td>
                                  <td width="109"><input name="username" type="text" id="username" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                <tr>
                                  <td height="26">&nbsp;</td>
                                  <td>password:</td>
                                  <td><input name="pwd1" type="password" id="pwd1" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
								 
                                <tr>
                                  <td height="38" colspan="3" align="center"><input type="submit" name="Submit" value="login" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                      <input type="reset" name="Submit2" value="reset" style=" height:19px; border:solid 1px #000000; color:#666666" /> 
                                      <a href="userreg2.php"> </a></td>
                                </tr> </form>
                              </table>
                           
                            <?php 
							}
				  else
				  {
				 ?>
                            <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left">user£º<?php echo $_SESSION['username']?></td>
                              </tr>
                              <tr>
                                <td align="left">you are £º<?php echo $_SESSION['cx']?></td>
                              </tr>
                              <tr>
                                <td align="left"> !¡ú<a href="yonghu.php?zhanghao=<?php echo $_SESSION['username']?>"> </a></td>
                              </tr>
                              <tr>
                                <td align="center"><input type="button" name="Submit3" value="exit" onclick="javascript:location.href='logout.php';" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                    <input type="button" name="Submit22" value="center" onclick="javascript:location.href='main.php';" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                            </table>
                          <?php } ?></td>
                          <td width="10"  >&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                   
                </table></td>
              </tr>
              <tr>
                <td valign="top">
				
				<table id="__01" width="244" height="152" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="244" height="39"  bgcolor="#f2ac4a" ><table  width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="52%" align="center" class="title">top</td>
                          <td width="48%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td align="center"> <table width="243"   border="0" cellpadding="0" cellspacing="0"><?php 
							  
    $sql="select  * from  xinwentongzhi  order by id desc limit 4  ";
 
 
  
   $query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
    $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {
  echo " no ";
  }
  else{
  
	 for($i=0;$i<$rowscount;$i++)
{
	if($i<=4)
	{
	
  ?>
                            
                                
								
								 <tr>
                                  <td height="20" align="center"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>  <td height="20" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
                                </tr>
                                
                          
                            <?php
							}
  	}
	}
  ?> 
                   
                </table></td>
              </tr> 
               
                  </table>
                  </td></tr>
				  
				  </table>