<?php

session_start();
$_SESSION['upimg'] = file_get_contents($_FILES['upfile']['tmp_name']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>preview:</p>
  <img src="image.php" alt="kkkk" width="100px" height="80px">
  
  <a href="./アップロード.html">go back</a>
</body>
</html>