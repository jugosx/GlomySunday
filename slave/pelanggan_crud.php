<?php
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $save = DB::insert('tbl_pelanggan',$_POST);
        if(!$save){
            header('location:../pelanggan.php?error');
        }
        header('location:../pelanggan.php?success');
    break;
    case 'get':
    break;
    case 'update':
    break;
    case 'delete':
    break;
}