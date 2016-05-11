<?php

header('Content-Type:text/html;charset=utf-8');
$conn = mysql_connect('localhost','root','1234');
if (!$conn) {
	die('error');
}

mysql_select_db('book');
mysql_query('set names utf8');

$sql = "SELECT\n"
     . " `Post Title`,\n"
     . " `Book index order`\n"
     . "FROM\n"
     . " `books` \n"
     . "ORDER BY `books`.`Book index order` ASC";

$result = mysql_query($sql);

echo "Title Here";
echo "<hr>";

while($row = mysql_fetch_array($result))
{
	echo '<a href="#" id="section-' . $row['Book index order'] . '"">' . $row['Post Title'] . '</a>';
	//echo " Rank： ". $row[ 'Book index order'];
	echo "<br>";
}

$sql = "SELECT\n"
     . " `Post Content`,\n"
     . " `Book index order`\n"
     . "FROM\n"
     . " `books` \n"
     . "ORDER BY `books`.`Book index order` ASC";

$result = mysql_query($sql);

echo "<br><br>";

while($row = mysql_fetch_array($result))
{
	echo '<input type="hidden" id="content-' .  $row['Book index order'] . '"">';
	echo $row['Post Content'];
	echo "<br>";
}

