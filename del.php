<?
$link = mysql_connect("localhost", "root", "asd865100");//�s����Ʈw
mysql_select_db("maplestore");
$sql ="DELETE FROM product WHERE ID=".$_GET[ID];  //�R�����
mysql_query($sql)or die ("�L�k�R��".mysql_error()); //����sql�y�k
mysql_close($link); //������Ʈw�s��
header( "location:product.php");  //�^index.php
?>