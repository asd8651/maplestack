<?php
include("connshop.php");
include("checkIN.php");
if( isset($_POST['add'])  ){
    $sql="INSERT INTO `protype`( `Type`, `Price`,`Quantity`) VALUES ('".$_POST['Type']."','".$_POST['Price']."','".$_POST['Quantity']."');";
    if(mysql_query($sql) ){
        ?>
        <script type="text/javascript" >
            alert('類別新增成功')
        </script>
        <?php
    }
}
?>
<td width="*" colspan="2"><table width="100%" border="1">
<tr>
    <td>類別名稱</td>
    <td>價格</td>
    <td>數量</td>
  </tr>

        </tr>
        <form action="" method="post">
            <tr>
                <td>
                    <input name="Type" type="text" id="Type" />
                </td>
                <td>
                    <input name="Price" type="text" id="Price" />
                </td>
                <td>
                    <input name="Quantity" type="text" id="Quantity" />
                </td>
                <td>
                    <input name="add" type="submit" id="button" value="新增"/>
                </td>
                 <a href = "indexx.php">回主畫面</a>
            </tr>



