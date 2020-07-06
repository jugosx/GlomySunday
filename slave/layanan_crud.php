<?php
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $gambar = "";
        if($_FILES['gambar']['size'] > 0){
            $path = '../gambar/';
            $save_path = $path.$_FILES['gambar']['name'].date('YmdHis');
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$save_path)){
                $gambar = $save_path;
            }else{
                header('location:../layanan.php?error');
            }
        }
        $data = [
            'nama_layanan'  => $_POST['layanan_layanan'],
            'keterangan'    => $_POST['keterangan'],
            'harga'         => $_POST['harga'],
            'gambar'        => str_replace('../','',$gambar)
        ];
        $save = DB::insert('tbl_layanan',$data);
        if(!$save){
            header('location:../layanan.php?error');
        }
        header('location:../layanan.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT * FROM tbl_layanan WHERE id_layanan = %i",$_POST['id']);
        echo json_encode($data);
    break;
    case 'update':
        $gambar = "";
        if($_FILES['gambar']['size'] > 0){
            $path = "../gambar/".date('YmdHis');
            $save_path = $path.$_FILES['gambar']['name'];
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$save_path)){
                $gambar = $save_path;
                $last_gambar = DB::queryFirstRow("SELECT gambar FROM tbl_layanan WHERE id_layanan = %i",$_POST['id_layanan']);
                unlink($last_gambar);
            }else{
                header('location:../layanan.php?error');
            }
        }
        $data = [
            'nama_layanan'  => $_POST['layanan_layanan'],
            'keterangan'    => $_POST['keterangan'],
            'harga'         => $_POST['harga'],
            'gambar'        => str_replace('../','',$gambar)
        ];
        $save = DB::update('tbl_layanan',$data,"id_layanan=%i",$_POST['id_layanan']);
        if(!$save){
            unlink($gambar);
            header('location:../layanan.php?error');
        }
        header('location:../layanan.php?success');
    break;
    case 'delete':
        if(DB::delete('tbl_layanan','id_layanan=%i',$_GET['id'])){
            header('location:../layanan.php?success');
        }else{
            header('location:../layanan.php?error');
        }
    break;
}