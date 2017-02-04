<?php
if(! isset($_SESSION['SID']) ){
?>
<script type= "text/javascript">
alert('尚未登入');
</script>
<meta http-equiv="refresh" content="0.1;URL=login.php" />

<?php
    exit();
    }
?>