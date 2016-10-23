
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
    <div class="logo"><a href="index.php"></a></div>
    <nav id="topnav">
  </header>
  <article>
    <div class="banner">
      <ul class="texts">
		
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        Blog &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href="book.php"> Display as Book </a> ] <p>
		<?php
         include('conn3.php');
        $result = mysql_query("SELECT * FROM book where ID='1'");


        while ($row = mysql_fetch_array($result))
          {
            echo $row['Name'];
            echo "<br />";
          }
          ?> </p>
		  
        
        
      </h2>
      <div class="blogs">
   <?php 
							  
    $sql="select  * from  blog  order by id desc limit 100  ";
 
 
  
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
                                  <td height="20" align="center"><h3>Title : <?php echo mysql_result($query,$i,"Post_Title");?> </a></br></td>  <td height="20" align="center">Date: <?php echo mysql_result($query,$i,"Post_date");?></h3></br><?php echo mysql_result($query,$i,"Post_text");?></br><br>
<a href="addtobook.php?post_id=<?php echo mysql_result($query,$i,"ID");?>"> Add Post to Book</a><br><br>							  
								  </td>
                                </tr>
                                
                          
                            <?php
							}
  	}
	}
  ?>     </div>
    </div>
  </article>
  <aside>
    <div class="sgin"><a href="file:///C|/Users/junpeng/Desktop/Blog&Book/signin.html"><span></span></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1"><a href= book.php>Book</p>
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
  <!-- Çå³ý¸¡¶¯ -->
</div>
</body>
</html>

