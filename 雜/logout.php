<?php
include("connshop.php")
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登出</title>
</head>
<?php
session_destroy();
?>
<body>
SESSION已經清除!!
<p><a href="login.php">回登入首頁</a></p>
</body>
</html>