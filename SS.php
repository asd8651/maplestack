<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�L���D���</title>
</head>

<?php
if(isset($_POST['action'])){
	echo("�m�W:".$_POST['name']."<br>�Ǯ�:".$_POST['school']."<br>");
	echo("����:");
	for($i=0;$i<count($_POST['kind']);$i++){
		echo($_POST['kind'][$i]);
		}
	echo("<br>²��:<br>".nl2br($_POST['memo']));
	//print_r($_POST);
}
?>
<body><form id="form1" name="form1" action="" method="post">
  <p>
  	<label for="name">�m�W</label>
    <input name="name" type="text" id="name" value="1234"/>
    <br />
    <label for="textfield">�Ǯ�</label>
    <input type="text" name="school" id="school" value="ncut"/>
    <br />
    <label for="radio">�ʧO</label>
    <input name="radio" type="radio" id="radio" value="man" checked="checked"  />
    �k
    <input name="radio" type="radio" id="radio" value="man" />
	�k
    <br />
    ����
    <input name="kind[]" type="checkbox" id="checkbox"value="book" />
    �ݮ�
    <label for="checkbox"></label>
    <input name="kind[]" type="checkbox" id="checkbox"value="movie" />
    �q�v
    <input name="kind[]" type="checkbox" id="checkbox"value="ball" />
    ���y
    <br />
    
    <label for="select">�~��</label>
    <select name="live" id="select">
      <option value="TC">�x��</option>
      <option value="TP">�x�_</option>
    </select>
     <br />
     ²��
       <br />
    <textarea name="memo" cols="45" rows="5" id="memo"></textarea>
  </p>
    <p>
    	<input type="submit" name="action" id="button" value="�e�X"/>
	</p>
</form>
</body>
</html>
