<head>
    <title>楓庫存</title>
</head>
<?php
include("connshop.php");
include("checkIN.php");
if ($_POST['proname'] == "") {
    ?>
    <script type="text/javascript">
        alert('類別新增失敗')
    </script>
    <?php
}
if($_POST['proname']){
    $sql = "INSERT INTO `product`(`ID`, `proname`, `Price`, `quality`, `proedit`) VALUES ('" . $_POST['ID'] . "','". $_POST['proname'] . "','" . $_POST['Price'] . "','" . $_POST['quality'] . "','" . $_POST['proedit'] . "');";
    if (mysql_query($sql)) {
        ?>
        <script type="text/javascript">
            alert('類別新增成功')
        </script>
        <?php
    }
        }


?>
<td width="*" colspan="2"><table width="100%" border="1">
<tr>
    <td>編號</td>
    <td>產品名稱</td>
    <td>價格</td>
    <td>數量</td>
  </tr>
        <form action="" method="post">
            <tr>
                <td>
                    <input name="ID" type="text" id="ID" />
                </td>
                <td>
                    <input name="proname" type="text" id="proname" />
                </td>
                <td>
                    <input name="Price" type="text" id="Price" />
                </td>
                <td>
                    <input name="quality" type="text" id="quality" />
                </td>
                <td>
                    <input name="add" type="submit" id="button" value="新增"/>
                </td>
                 <a href = "product.php">回主畫面</a>
            </tr>



