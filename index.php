<?php
session_start();
if($_SESSION['status'] != "login"){
    header('location:shop/index.php');
}else{
    header('location:dashboard.php');
}