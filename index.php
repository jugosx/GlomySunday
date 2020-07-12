<?php
session_start();
if($_SESSION['status'] != "login"){
    header('location:login.php');
}
header('location:dashboard.php');