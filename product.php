<head>
    <title>楓庫存</title>
    <link rel="stylesheet" type="text/css" href="maple.css" >
</head>

<?php
include("connshop.php");
include("checkIN.php");
?>
<table width = "100%" border="1" >
    <tr  class="menutr">
        <td width="10%" >觀迎使用</td>
        <td width="20%" >ID</td>
        <td width="20%" >產品名稱</td>
        <td width="20%" >價格</td>
        <td width="10%" >數量</td>
        <td width="20%" >操作</td>
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
            $ID=$row[0]
        ?>
        <td align="center"><?=$row['ID']?></td>
        <td align="center"><?=$row['proname']?></td>
        <td align="center"><?=$row['price']?></td>
        <td align="center"><?=$row['quality']?></td>
        <td align="center">
            <a href="proedit.php?SID=<?=$row['proedit']?>">編輯</a>
            <!--<input type="submit" name="delete" value="刪除">-->
            <a href="del.php?ID=<? echo $row[ID]?>&action=del">刪除</a>
        </td>
        <tr>
        </tr>
            <?
        }
        /*$delete=!empty($_GET["delete"]) ? $_GET["delete"] : null;
        echo($delete);
        if($delete='刪除'){
            $conn = mysqli_connect("localhost", "root", "asd865100") ;//連接資料庫
            mysqli_select_db($conn,"product");
            $del ="DELETE FROM product"; #WHERE ID = $ID";  //刪除資料
            mysqli_query($conn,$del);
            mysqli_close($conn);
        }*/
        ?>
</table>
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