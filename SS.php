<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<?php
if(isset($_POST['action'])){
	echo("姓名:".$_POST['name']."<br>學校:".$_POST['school']."<br>");
	echo("興趣:");
	for($i=0;$i<count($_POST['kind']);$i++){
		echo($_POST['kind'][$i]);
		}
	echo("<br>簡介:<br>".nl2br($_POST['memo']));
	//print_r($_POST);
}
?>
<body><form id="form1" name="form1" action="" method="post">
  <p>
  	<label for="name">姓名</label>
    <input name="name" type="text" id="name" value="1234"/>
    <br />
    <label for="textfield">學校</label>
    <input type="text" name="school" id="school" value="ncut"/>
    <br />
    <label for="radio">性別</label>
    <input name="radio" type="radio" id="radio" value="man" checked="checked"  />
    男
    <input name="radio" type="radio" id="radio" value="man" />
	女
    <br />
    興趣
    <input name="kind[]" type="checkbox" id="checkbox"value="book" />
    看書
    <label for="checkbox"></label>
    <input name="kind[]" type="checkbox" id="checkbox"value="movie" />
    電影
    <input name="kind[]" type="checkbox" id="checkbox"value="ball" />
    打球
    <br />
    
    <label for="select">居住</label>
    <select name="live" id="select">
      <option value="TC">台中</option>
      <option value="TP">台北</option>
    </select>
     <br />
     簡介
       <br />
    <textarea name="memo" cols="45" rows="5" id="memo"></textarea>
  </p>
    <p>
    	<input type="submit" name="action" id="button" value="送出"/>
	</p>
</form>
</body>
</html>
