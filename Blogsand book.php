
<html>
<head>
  <meta charset="gb231fd">
  <title>EB-blog</title>
  <meta name="keywords" content="Blog and Book" />
  <link href="css/base.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/media.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <!--[if lt IE 9]>
  <script src="js/modernizr.js"></script>
  <![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1>EB-Blog</h1>
    <h2>
    </h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav">
  </header>
  <article>
    <div class="banner">
      <ul class="texts">

      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p>Bookname : <?php
         include('conn.php');
        $result = mysql_query("SELECT * FROM booklist where ID='1'");


        while ($row = mysql_fetch_array($result))
          {
            echo $row['Bookname'];
            echo "<br />";
          }
          ?> </p>
        
        
      </h2>
      <div class="blogs">
   <?php 
							  
    $sql="select  * from  xinwentongzhi  order by id desc limit 100  ";
 
 
  
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
	if($i<=100)
	{
	
  ?>
                            
                                
								
								 <tr>
                                  <td height="20" align="center"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>  <td height="20" align="center"><?php echo mysql_result($query,$i,"addtime");?></br></td>
                                </tr>
                                
                          
                            <?php
							}
  	}
	}
  ?>     </div>
    </div>
  </article>
  <aside>
    <div class="sgin"><a href="file:///C|/Users/junpeng/Desktop/Blog&Book/signin.html"><span>Sign out</span></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">Book</p>
      </h2>
    </div>
	

    <div class="topspaceinfo">
      <h1></h1>
      <p></p>
    </div>
    <div class="about_c">
  
    </div>

  </aside>
  <script src="file:///C|/Users/junpeng/Desktop/Blog&Book/js/silder.js"></script>
  <div class="clear"></div>
  <!-- ������� -->
</div>
</body>
</html>

