<?php
include("connshop.php");
include("checkIN.php");
?>
<table width = "100%" border="1">
    <tr>
        <td colspan="3">觀迎使用本購物商場系統</td>
    </tr>
    <tr>
        <td width="150">

<?php
include("menu.php");
?>
            <a href="logout.php">登出</a>
        </td>
<td width="*" colspan="2"><table width="100%" border="1">
  <tr>
    <td>類別名稱</td>
    <td>售價</td>
    <td>數量</td>
  </tr>
<?php
$sqllimit="SELECT * FROM protype";
$result = mysql_query($sqllimit) or die ('mySQL query error');
while ( $row = mysql_fetch_array($result) ){
?>
    <tr>
    <td>
    <input name="Type" type="text" id="Type" value="<?=$row['Type']?>"  />
    </td>
    <td>
        <input name="Price" type="text" id="Price" value="<?=$row['Price']?>" />
    </td>
    <td>
        <input name="Quantity" type="text" id="Quantity" value="<?=$row['Quantity']?>" />
    </td>
  </tr>
<?php
}
?>


</table>
