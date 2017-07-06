<?php
include("connshop.php");
include("checkIN.php");

if(isset($_POST['actionOK'])){
    $sql="INSERT INTO `product` (`name` , `numtxt`, `protype` , `saleprice` , `webprice` , `memo`, `memotext` ,`del`,`file` ) 
VALUES ('".$_POST['name']."', '".$_POST['numtxt']."','".$_POST['protype']."','".$_POST['saleprice']."','".$_POST['webprice']
        ."','".$_POST['memo']."','".$_POST['memotext']."','".$_POST['del']."','".$_POST['file']."');";
}

    if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $File_Extension = explode(".".$_FILES["file"]["name"]);
    $File_Name = $File_Extension[0];
    $fname = time().".".$File_Extension;
    $upfilename = "image/".$fname;
        //echo "<br>更新名稱: ".$upfilename."<br>";
        //echo "<br>檔案名稱: ".$_FILES["upfile"]["name"]."<br>";
        //echo "暫存檔名: ".$_FILES["upfile"]["tmp_name"]."<br>";
        //echo "檔案尺寸: ".$_FILES["upfile"]["size"]."<br>";
        //echo "檔案種類: ".$_FILES["upfile"]["type"]."<br><hr>";
        if(move_uploaded_file($_FILES["upfile"]["tmp_name"],$upfilename) ){
            $sql = "INSERT INTO `product` (`name` , `numtxt`, `protype` , `saleprice` , `webprice` , `memo`, `content` ,`del`,`file` ) 
VALUES ('".$_POST['name']."', '".$_POST['numtxt']."','".$_POST['protype']."','".$_POST['saleprice']."','".$_POST['webprice']."','".$_POST['memo']."','".$_POST['memotext']."','".$_POST['del']."'
,'".$_POST['file']."');";

        }


    }



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
    <td>產品名稱</td>
    <td><label for="name"></label>
      <input name="name" type="text" id="name"  /></td>
  </tr>
  <tr>
    <td>產品售價</td>
    <td><label for="price">
      <input name="numtxt" type="text" id="numtxt" /></label></td>
  </tr>
  <tr>
    <td>產品類別</td>
    <td><p>
      <label for = "protype">
        <input  name="protype" type="text" id="protype" /> </label>
	</td>
  </tr>
  <tr>
    <td>產品特價</td>
    <td><label for = "saleprice">
    <input  name="saleprice" type="text" id="saleprice" /> </label>
	</td>
  </tr>
  <tr>
    <td>產品網路價</td>
    <td><label for="webprice"></label>
      <input name="webprice" type="text" id="webprice"/></td>
  </tr>
  <tr>
    <td height="25">備註</td>
    <td><textarea name="memo" cols="50" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>詳細內容</td>
    <td><textarea name="memotext" cols="50" rows="15"></textarea></td>
  </tr>
  <?php
	include_once "ckeditor/ckeditor.php";
	$CKEditor = new CKEditor();
	$CKEditor->basePath = 'ckeditor/';
	$CKEditor->replace("memotext");
?>
  <tr>
       <td>開啟狀態</td>
    <td><label for="status">
      <input name="del" type="radio" id="del" value="0" checked="checked"/>開啟
        <input  name="del" type="radio" id="del" value="1" checked="checked"/>關閉</label>
      
    </td>
  </tr>
  <tr>
    <td>照片圖檔</td>
    <td><label for="fileField"></label>
        <input  type="file" name="upfile" id="upfile" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="actionOK" id="button" value="送出" /></td>
  </tr>
</table></td>

</tr>
</table>
