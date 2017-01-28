<?php
include("connshop.php");
include("checkIN.php");
?>
<table width = "100%" border="1">
    <tr>
        <td colspan="3">觀迎使用本購物商場系統</td>
    </tr>
    <tr>
        <td width="139">
<?php
include("menu.php");
?>
            <a href="logout.php">登出</a>
        </td>
        
<td colspan="2"> 
 <tr>
    <td>產品名稱</td>
    <td width="73">價格</td>
    <td width="104">特惠價</td>
    <td width="110">網路價</td>
   <td width="205">照片</td>
   <td width="142">操作</td>
  </tr>
    <tr>
    <td><?=$row['proname']?></td>
    <td><?=$row['price']?></td>
    <td><?=$row['saleprice']?></td>
    <td><?=$row['webprice']?></td>
    <td><img src="images/<?=$row['pic']?>"width="95" height="108" alt ="<?=$row['proname']?>"/></td>
     <td><a href="proedit.php?SID=<?=$row['proedit']?>">編輯</a><a href="?SID=<?=$row['ID']?>&action=del">刪除</a></td>
  </tr>
  </td>

</tr>
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