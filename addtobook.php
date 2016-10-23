
<html>
<head>
  <meta charset="gb231fd">
  <title>Insert page</title>
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
    <h1>Insert page</h1>
    <h2>
    </h2>
    <div class="logo"><a href="blog.php"></a></div>
    <nav id="topnav">
  </header>
  <article>
    <div class="banner">
      <ul class="texts">

      </ul>
    </div>
    <div class="bloglist">
      <h2>
        
        
        
      </h2>
      <div class="blogs">
	  <?php 
$postId = $_GET["post_id"];

$bookList;

        include('conn3.php');
        $result = mysql_query("SELECT * FROM book");



          ?>



<body>
<fieldset>
					<form name="form1" method="post" action="insertsection.php">
  <tr>
  <td>Post Id:</td><td><input name='post_id ' type='text' id='post_id' value='<?php echo $postId;?>' >
                              </td></br>
                                <td>Book name:
								<select name="book_id" id="book_id">
<?php								
        	while ($row = mysql_fetch_array($result))
          	{
				$bookName = $row['Name'];
				$bookId = $row['Book_ID'];
           		echo "<option value=\"". $bookId . "\">". $bookName . "</option>";

         	}								
?>			
			</select>
                                  &nbsp;*</td>
                              </tr></br>
                              <tr>
                                <td>chapter number:</td>
                                <td><input name='Chapter_ID ' type='text' id='Chapter_ID' value='' />
                                  &nbsp;*</td>
                              </tr></br>
<td>Section number:</td>
                                <td><input name='Section_No' type='text' id='Section_No' value='' />
                                  &nbsp;*</td>
                              </tr></br>
                             
                              
<input type="submit" name="submit" value="submit" class="left">
</form>
</fieldset>
 </div>
    </div>
  </article>
  <aside>
    <div class="sgin"><a href="file:///C|/Users/junpeng/Desktop/Blog&Book/signin.html"><span></span></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1"><a href= "book.php">Book</a></p>
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

