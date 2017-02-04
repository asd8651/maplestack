<?php
echo("HELLO WORLD!!<br>");
$a=rand(0,5);
if($a>=3)
{
     echo("大於3");
}
else
{
     echo("小於3");
}
echo("<br>變數a:".$a);
echo("<br>");


switch($a)
{
           case 0:
                echo("a為0");
                break;
           case 1:
                echo("a為1");
                break;
           case 2:
                echo("a為2");
                break;
           case 3:
                echo("a為3");
                break;
           case 4:
                echo("a為4");
                break;
           case 5:
                echo("a為5");
                break;
           default:
                echo("都不是!!");
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