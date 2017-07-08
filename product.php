<head>
    <title>楓庫存</title>
    <link rel="stylesheet" type="text/css" href="maple.css" >
</head>

<?php
include("connshop.php");
include("checkIN.php");
?>
<?php
if(isset($_POST['proname'])){#編輯
    mysql_query("UPDATE product SET proname = '$_POST[proname]' , price = '$_POST[price]' , quality = '$_POST[quality]' WHERE proname = '$_POST[proname]'");
}?>
<?
$sss = "select * from product WHERE proname like '$_POST[searchText]'";
$sea = mysql_query($sss) or die ( 'MySQL query error' );
$eww = mysql_fetch_array($sea);
if((isset($_POST['searchText']))){
    ?>
    <table border="1" width="100%" class="searchTable" >
        <tr >
            <td align="center">ID</td>
            <td align="center">產品名稱</td>
            <td align="center">價格</td>
            <td align="center">數量</td>
        </tr>

        <tr>
            <?php
                $w = count($eww);
                //取得$eww數量
                ?><tr></tr><?
                for ($i = 0; $i < $w; $i++) {
                    ?>
                    <td align="center">
                        <? echo $eww[$i];?>
                    </td>
                    <?/*print_r顯示陣列*/
                }
            ?>
    </table>
<?
}
?>
<form name="searchForm" method="post">
<input type="text" name="searchText" value="" placeholder="欲查詢的品名…"><!--提示文字-->
<input type="submit" name="searchSubmit" class="searchSubmit" value="查詢">
</form>
<table width = "100%" border="1" >
    <tr  class="menutr">
        <td width="10%" >觀迎使用</td>
        <td width="20%" >ID</td>
        <td width="20%" >產品名稱</td>
        <td width="20%" >價格</td>
        <td width="20%" >數量</td>
        <td width="10%" >操作</td>
    </tr>
    <tr class="menutr2">
        <td rowspan="65535" valign="top">
        <?php
        include("menu.php");
        ?>
        <a href="logout.php">登出</a>
        </td>

        <?php
        $conn = mysql_connect("localhost", "root", "asd865100") ;//連接資料庫
        mysql_select_db("product");//資料表
        $sql="SELECT * FROM product"; ;//查詢整個資料表
        $result=mysql_query($sql) or die ( 'MySQL query error' );

        //$row = mysql_fetch_array($result)//印出資料
        while($row = mysql_fetch_array($result)){
        ?>
        <td align="center" ><div name="diva"><?=$row['ID']?></div></td>
        <td align="center"><div name="diva"><?=$row['proname']?></div></td>
        <td align="center"><div name="diva"><?=$row['price']?></div></td>
        <td align="center"><div name="diva"><?=$row['quality']?></div></td>
        <td align="center"><a href="del.php?ID=<? echo $row[ID]?>&action=del">刪除</a></td>
        <tr>
        </tr>
    <?} ?>
</table>
            <form method="post" name="edit">
                <table width="100%" >
                    <tr>
                        <td width="10%" ></td>
                        <td><input type="hidden" name="IDedit" value=""></td>
                        <td>商品名稱<input type="text" name="proname" value=""></td>
                        <td>價格<input type="text" name="price" value=""></td>
                        <td>數量<input type="text" name="quality" value=""></td>
                        <td><input type="submit" name="edit" value="編輯" ></td>
                </table>
            </form>

<?php
if($numpage!=1){
?>
<a href="?page=1">第一頁</a>
<a href="?page=<?=$numpage-1?>">上一頁</a>
<?php
}
for($i=1;$i<=$total_pages;$i++){
?>
<a href="?page=<?=$i?>"><?=$i?></a>

<?php
}
if($numpage!=$total_pages){
?>
<a href="?page=<?=$numpage+1?>">下一頁</a>
<a href="?page=<?=$total_pages?>">最後一頁</a>
<?php
}
?>