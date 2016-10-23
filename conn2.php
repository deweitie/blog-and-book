<?php
$conn = mysql_connect("localhost","root","123123123");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("phpbokedans", $conn);

mysql_query("set character set 'gbk'");

mysql_query("set names 'gbk'");

?>