<?

$link = mysql_connect("localhost", "root", "asd865100");//�s����Ʈw
mysql_select_db("maplestore");
$sql ="UPDATE  test SET name=��$_POST[name]��,age=��$_POST[age]��  WHERE id=��$_POST[id]'";  //��s���
mysqli_query($link,$sql)or die ("�L�k��s".mysql_error()); //����sql�y�k
mysql_close($link); //������Ʈw�s��
header( ��location:index.php");  //�^index.php
?>