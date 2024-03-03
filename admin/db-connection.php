<?php
  session_start();
  $connection = mysqli_connect("localhost:3306", "root", "", "portfolio");
  if(!$connection){
    die("Connection failed ". mysqli_connect_error());
  }
?>