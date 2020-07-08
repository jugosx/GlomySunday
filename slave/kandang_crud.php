<?php
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $save = DB::insert('tbl_kandang',$_POST);
        if(!$save){
            header('location:../kandang.php?error');
        }
        header('location:../kandang.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT * FROM tbl_kandang WHERE id_kandang = %i",$_POST['id']);
        echo json_encode($data);
    break;
    case 'update':
        $data = [
            'nama_kandang'      => $_POST['nama_kandang'],
        ];
        $save = DB::update('tbl_kandang',$data,"id_kandang=%i",$_POST['id_kandang']);
        if(!$save){
            // unlink($gambar);
            header('location:../kandang.php?error');
        }
        header('location:../kandang.php?success');
    break;
    case 'delete':
        if(DB::delete('tbl_kandang','id_kandang=%i',$_GET['id'])){
            header('location:../kandang.php?success');
        }else{
            header('location:../kandang.php?error');
        }
    break;
}