<?php
 
class f{
    public $A = array();
    public $B = array();
     
    /* 取得亂數(最小值,最大值,數量) */
    function getRnd($min,$max,$s){ 
        $r = array();
        $q = array();
        for($i=$min;$i<=$max;$i++){
            $r[$i] = $i;
        }
        shuffle($r);
        for($w=0;$w<=$s-1;$w++){
            $q[$w]=$r[$w];
        }
        return $q;
    }
     
    /* 確認陣列值重疊 (陣列1,陣列2) */
    function checkNum($array1,$array2){
        $count1 = count($array1);
        $count2 = count($array2);
        $s=0;
        $w='';
        if($count1==$count2){
            for($i=0;$i<=$count1-1;$i++){
                for($q=0;$q<=$count1-1;$q++){
                    if($array1[$i]==$array2[$q]){
                        if($i==0){ //特別號
                            $w = '<font color="red">恭喜中特別號'.$array1[$i].'</font>';
                        }else{
                            $w = $w.'　'.$array1[$i];
                        }
                    }
                }
            }
            return $w;
        }else{
            return '無';
        }
    }
    function checkSum($array1,$array2){
        $count1 = count($array1);
        $count2 = count($array2);
        $s=0;
        if($count1==$count2){
            for($i=0;$i<=$count1-1;$i++){
                for($q=0;$q<=$count1-1;$q++){
                    if($array1[$i]==$array2[$q]){
                        $s+=1;
                    }
                }
            }
            return $s;
        }else{
            return $s;
        }
    }   
     
}
?>
<table class="table" style="margin-top: 50px;width: 70%;margin-right: auto;margin-left: auto;">
    <tr><form action="lot.php" method="post">
        <td>輸入六個數字:
         
            <input type="text" name="in1">
            <input type="hidden" name="put" value="1">
        </td>
        <td></td>
        <td><input type="submit" name=""></td></form>
        <td></td>
    </tr>
<?php
    $f = new f; //新物件
    if(isset($_POST['put'])){
        $array1 = ($f->getRnd(1,49,6));//讀取號碼
        $array2 = explode(" ",$_POST['in1']);//輸入號碼
        if(count($array2)< 6){
            echo '<script> alert("輸入錯誤");</script>';
        }else{
 
 
?>
    <tr>
        <td>您的號碼</td>
        <td>樂透號碼</td>
        <td>中獎結果</td>
        <td>中獎數量</td>
    </tr>
    <tr>
        <td><?php echo $_POST['in1']; ?> </td>
        <td><?php 
                echo '<font color="red">'.$array1[0].'　</font>';
                for($i=1;$i<=count($array1)-1;$i++){
                    echo $array1[$i]. '  ';
                } //輸出樂透號碼
            ?></td>
        <td><?php  echo ($f->checkNum($array1,$array2)); ?></td>
        <td><?php  echo ($f->checkSum($array1,$array2)); ?></td>
    </tr>
    <?php } //驗證結束?>
<?php } //if結束?>
</table>
 
 