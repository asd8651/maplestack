<?php
include("connshop.php");
if(isset($_POST['numtxt'])){
    $sql="SELECT * FROM admin where idname = '".$_POST['numtxt']." ' and password = '".$_POST['password']."'";

    $result=mysql_query($sql) or die ( 'MySQL query error' );
    if ( $row = mysql_fetch_array($result))
    {
        $_SESSION['SID']=$row['ID']*1;
        $_SESSION['Snum']=$row['numtxt'];
        $_SESSION['Sname']=$row['name'];
?>
<script type= "text/javascript">
alert('登入成功');
</script>
<meta http-equiv="refresh" content="0.2;URL=indexx.php" />
<?php
exit();
    }else{
		?>
<script type= "text/javascript">
alert('帳號或密碼錯誤');
</script>
<?php
    }
}
?>

<form name="form1" method="post" action="">
    <label for="numtxt">帳號</label>
    <input type="text" name="numtxt" id="numtxt">
    <br>
    <label for="password">密碼</label>
    <input type="text" name="password" id="password">
    <br>
    <input type = "submit" name="button" id = "button" value = "送出">
</form>