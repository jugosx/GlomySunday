<?php
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $save = DB::insert('tbl_pelanggan',$_POST);
        if(!$save){
            header('location:../register.php?error');
        }
        header('location:../shop/login_cust.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT * FROM tbl_pelanggan WHERE id_pelanggan = %i",$_POST['id']);
        echo json_encode($data);
    break;
    case 'update':
        $data = [
            'nama'      => $_POST['nama'],
            'alamat'    => $_POST['alamat'],
            'notelp'    => $_POST['notelp'],
            'email'     => $_POST['email']
        ];
        $save = DB::update('tbl_pelanggan',$data,"id_pelanggan=%i",$_POST['id_pelanggan']);
        if(!$save){
            // unlink($gambar);
            header('location:../pelanggan.php?error');
        }
        header('location:../pelanggan.php?success');
    break;
    case 'delete':
        if(DB::delete('tbl_pelanggan','id_pelanggan=%i',$_GET['id'])){
            header('location:../pelanggan.php?success');
        }else{
            header('location:../pelanggan.php?error');
        }
    break;
}