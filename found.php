
<?php
$link = mysql_connect('localhost','root','asd865100') or die ("Could not connect : " .mysql_error());
mysql_query('SET NAMES utf8');                                  
mysql_select_db("test") or die("Could not select datebase");
  
if(isset($_POST)){
            if(isset($_POST['put'])){
                $name = $_POST['us1'];
                $sql="select * from student where name like '%".$name."%'";
            }else{
                $sql="select * from student";
            }
}
                $result= mysql_query($sql, $link) or die("SQL ERROR!!");
?>
 
<table class="table" style="margin-top: 50px;width: 50%;margin-right: auto;margin-left: auto;">
    <tr><form action="3.php" method="post">
        <td>��J�ǥͩm�W
        </td>
        <td><input type="text" name="us1">
        </td>
        <td><input type="hidden" name="put"><input type="submit" name="">
        </td>
        <td>
        </td>
        </form>
    </tr>
    <tr>
        <td>�m�W
        </td>
        <td>email
        </td>
        <td>���
        </td>
        <td>��}
        </td>
    </tr>
<?php
    while( $record = mysql_fetch_array($result) ){
                     
?>
    <tr>
        <td><?php echo $record['name'];?>
        </td>
        <td><?php echo $record['email'];?>
        </td>
        <td><?php echo $record['phone'];?>
        </td>
        <td><?php echo $record['address'];?>
        </td>
    </tr>
<?php
    }
?>
</table>
 
 
</body>
 
</html>