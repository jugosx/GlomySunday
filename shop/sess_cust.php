<?php
   session_start();
   
   if(!isset($_SESSION['status'])){
      header("location:login_cust.php");
      die();
   }
?>