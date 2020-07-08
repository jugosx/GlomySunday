<?php
   include('../config/connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query("select nama from tbl_pelanggan where nama = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login_cust.php");
      die();
   }
?>