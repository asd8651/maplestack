<?php
$link  =mysql_connect(“localhost","root","asd865100″) or die(“無法連接".mysql_error());  // 建立MySQL的資料庫連結

mysql_select_db($link,"prokind")or die (“無法選擇資料庫".mysql_error()); // 選擇school資料庫

mysql_query($link, ‘SET CHARACTER SET utf8’);

mysql_query($link,  “SET collation_connection = ‘utf8_general_ci"");

$sql ="DELETE FROM test WHERE id=".$_GET[id];  //刪除資料

mysqli_query($link,$sql)or die (“無法刪除".mysql_error()); //執行sql語法

mysql_close($link); //關閉資料庫連結

header( “location:index.php");  //回index.php