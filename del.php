<?
$link = mysql_connect("localhost", "root", "asd865100");//連接資料庫
mysql_select_db("maplestore");
$sql ="DELETE FROM product WHERE ID=".$_GET[ID];  //刪除資料
mysql_query($sql)or die ("無法刪除".mysql_error()); //執行sql語法
mysql_close($link); //關閉資料庫連結
header( "location:product.php");  //回index.php
?>