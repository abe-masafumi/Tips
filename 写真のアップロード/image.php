<?php
session_start();
header('Content-type: image/*');
echo $_SESSION['upimg'];

?>