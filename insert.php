<?

$link = mysql_connect("localhost", "root", "asd865100");//連接資料庫
mysql_select_db("maplestore");
$sql ="UPDATE  test SET name=’$_POST[name]’,age=’$_POST[age]’  WHERE id=’$_POST[id]'";  //更新資料
mysqli_query($link,$sql)or die ("無法更新".mysql_error()); //執行sql語法
mysql_close($link); //關閉資料庫連結
header( “location:index.php");  //回index.php
?>