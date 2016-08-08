
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
        <p>Bookname <?php 
       error_reporting(0);
        include('conn.php');
        $result = mysql_query("SELECT * FROM booklist where ID='1'");


        while ($row = mysql_fetch_array($result))
          {
            echo $row['Bookname'];
            echo "<br />";
          }
          ?></p>
      </h2>
      <div class="blogs">
<?php 
       error_reporting(0);
        include('conn.php');
        $result = mysql_query("SELECT * FROM booklist where ID='1'");


        while ($row = mysql_fetch_array($result))
          {
            echo $row['content'];
            echo "<br />";
          }
          ?>
      </div>
    </div>
  </article>

	

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

