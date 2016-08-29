


<html>
<head>
  <meta charset="gb231fd">
  <title>Book</title>
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
    <h1>Book</h1>
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
        <p> <?php 
      // error_reporting(0);
        include('conn2.php');
        $result = mysql_query("SELECT * FROM booklist where ID='1'");


        while ($row = mysql_fetch_array($result))
          {
            echo $row['Bookname'];
            echo "<br />";
          }
          ?></p>
      </h2>
      <div class="blogs">
   <h1>chapter</h1>
<?php 

$chapterContent = array();

include('conn2.php');
$result = mysql_query("SELECT * FROM booklist where Bookname='qwe'ORDER BY `ID` ASC");
//$row = mysql_fetch_array($result);
//  echo $row['Bookname'];
//  echo "<br />";

while ($row = mysql_fetch_array($result))
{
  $chapterName = $row['Chapter'];
  $chapterContent[$chapterName] = $row['content'];

  echo "<h2>" . "<a href=\"bookindex.php#" . $row['Chapter'] . "\">" . $row['Chapter'] . "</a></h2><br />";
}

// <a href="#Introduction"> .. </a>

foreach ($chapterContent as $_title => $_content) 
{
  echo "<h2><a name=\"#" . $_title . "\">" . $_title . "</a></h2>";
  echo $_content;
}

 ?>
<!--<a name="#introduction"></a>--> 
<?php /*
 include('conn2.php');
$result = mysql_query("SELECT * FROM booklist where Title='introduction'");
	while ($row = mysql_fetch_array($result))
          {
            echo $row['content'];
            echo "<br />";
          } 
 */
 ?>
<!--<br>

<a name="#123123">-->
<?php /*
 include('conn2.php');
$result = mysql_query("SELECT * FROM booklist where Chapter='123123'");
  while ($row = mysql_fetch_array($result))
          {
            echo $row['content'];
            echo "<br />";
          } 
 */
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

