<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>insert section</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<?php
 include('conn3.php');
$postid = $_POST['post_id'];
$Chapter_ID=$_POST['Chapter_ID'];
$Section_No=$_POST['Section_No'];
$Book_ID=$_POST['book_id'];


 $sql= "INSERT INTO `section` (`Section_ID`, `Book_ID`, `Chapter_ID`, `Post_ID`, `Section_No`) VALUES(NULL,'$Book_ID','$Chapter_ID','$post_Id','$Section_No')";
mysql_query($sql);
echo "<script>javascript:alert('successful!');location.href='blog.php';</script>";

 ?>
</body>
</html>
