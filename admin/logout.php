<?php
session_start(); 
$_SESSION = [];
session_destroy();
header("Location: ../index.php");
echo "works";
exit(); 
?>