<?php
session_start();
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        $data = [
            'tanggal'  => date('Y-m-d'),
            'id_pelanggan'    => $_SESSION['id_pel'],
            'id_layanan'         => $_POST['id_layanan'],
            'status'         => 0,
            'jenis_hewan'         => $_POST['jenis_hewan'],
            'keterangan'         => $_POST['keterangan'],
            'id_grommer'         => $_POST['id_grommer'],
            'checkin'           => date_format(date_create($_POST['checking']),'Y-m-d'),
            'checkout'           => date_format(date_create($_POST['checkoutg']),'Y-m-d')
        ];
        $save = DB::insert('tbl_pemesanan',$data);
        if(!$save){
            header('location:../shop/order.php?error');
        }
        header('location:../shop/order.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT * FROM tbl_pemesanan WHERE id_pemesanan = %i",$_REQUEST['id']);
        echo json_encode($data);
    break;
    case 'update':
        $gambar = "";
        if($_FILES['gambar']['size'] > 0){
            $path = "../gambar/".date('YmdHis');
            $save_path = $path.$_FILES['gambar']['name'];
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$save_path)){
                $gambar = $save_path;
                $last_gambar = DB::queryFirstRow("SELECT gambar FROM tbl_pemesanan WHERE id_pemesanan = %i",$_POST['id_pemesanan']);
                unlink($last_gambar);
            }else{
                header('location:../pesanan.php?error');
            }
        }
        $data = [
            'tanggal'  => $_POST['tanggal'],
            'id_pelanggan'    => $_POST['id_pelanggan'],
            'id_layanan'         => $_POST['id_layanan'],
            'status'         => $_POST['status'],
            'jenis_hewan'         => $_POST['jenis_hewan'],
            'keterangan'         => $_POST['keterangan'],
            'status_progress'         => $_POST['status_progress'],
            'id_grommer'         => $_POST['id_grommer'],
            'checkin'         => $_POST['checkin'],
            'checkout'         => $_POST['checkout'],
            'gambar'        => str_replace('../','',$gambar)
        ];
        $save = DB::update('tbl_pemesanan',$data,"id_pemesanan=%i",$_POST['id_pemesanan']);
        if(!$save){
            unlink($gambar);
            header('location:../pesanan.php?error');
        }
        header('location:../pesanan.php?success');
    break;
    case 'delete':
        if(DB::delete('tbl_pemesanan','id_pemesanan=%i',$_GET['id'])){
            header('location:../pesanan.php?success');
        }else{
            header('location:../pesanan.php?error');
        }
    break;
}