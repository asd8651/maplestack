<?php
echo("HELLO WORLD!!<br>");
$a=rand(0,5);
if($a>=3)
{
     echo("�j��3");
}
else
{
     echo("�p��3");
}
echo("<br>�ܼ�a:".$a);
echo("<br>");


switch($a)
{
           case 0:
                echo("a��0");
                break;
           case 1:
                echo("a��1");
                break;
           case 2:
                echo("a��2");
                break;
           case 3:
                echo("a��3");
                break;
           case 4:
                echo("a��4");
                break;
           case 5:
                echo("a��5");
                break;
           default:
                echo("�����O!!");
                break;
}
?> 

<table border=1>
<?php
for($i=1;$i<=9;$i++){
?>
   <tr>
<?php
for($j=1;$j<=9;$j++){
if(($i+$j) <=10 ){
?>
    <td>*</td>
<?
}else{
?>
    <td></td>
<?
		   }
	   }
?>
   </tr>
<?
}
?>
<table>
<?php
$wi=0;
while($wi<0){
echo($wi."<br>");
     $wi++;
}
echo("<br>");
$ti=0;
do{
	echo($ti."<br>");
} while($ti>0);
?>