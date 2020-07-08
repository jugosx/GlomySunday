<?php
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $save = DB::insert('tbl_grommer',$_POST);
        if(!$save){
            header('location:../grommer.php?error');
        }
        header('location:../grommer.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT * FROM tbl_grommer WHERE id_grommer = %i",$_POST['id']);
        echo json_encode($data);
    break;
    case 'update':
        $data = [
            'nama'      => $_POST['nama'],
        ];
        $save = DB::update('tbl_grommer',$data,"id_grommer=%i",$_POST['id_grommer']);
        if(!$save){
            // unlink($gambar);
            header('location:../grommer.php?error');
        }
        header('location:../grommer.php?success');
    break;
    case 'delete':
        if(DB::delete('tbl_grommer','id_grommer=%i',$_GET['id'])){
            header('location:../grommer.php?success');
        }else{
            header('location:../grommer.php?error');
        }
    break;
}