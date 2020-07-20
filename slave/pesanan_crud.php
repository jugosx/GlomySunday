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
        $save = DB::insert('tbl_pemesanan',$data);
        if(!$save){
            header('location:../pesanan.php?error');
        }
        header('location:../pesanan.php?success');
    break;
    case 'get':
        $data = DB::queryFirstRow("SELECT a.*,b.nama_layanan FROM tbl_pemesanan a JOIN tbl_layanan b ON b.id_layanan = a.id_layanan WHERE a.id_pemesanan = %i",$_REQUEST['id']);
        $data['harga'] = harga($data['id_pemesanan']);
        echo json_encode($data);
    break;
    case 'update':
        // print_r($_POST);die;
        $data = $_POST;
        // $data = [
        //     'status'         => $_POST['status'],
        //     'status_progress'         => $_POST['status_progress'],
        //     'jenis_hewan'         => $_POST['jenis_hewan'],
        //     'keterangan'         => $_POST['keterangan'],
        //     'status_progress'         => $_POST['status_progress'],
        //     'id_grommer'         => $_POST['id_grommer'],
        //     'checkin'         => $_POST['checkin'],
        //     'checkout'         => $_POST['checkout'],
        //     'id_kandang'        => $_POST['id_kandang']
        // ];
        $save = DB::update('tbl_pemesanan',$data,"id_pemesanan=%i",$_POST['id_pemesanan']);
        if(!$save){
            header('location:../pesanan.php?error');
        }
        if($data['id_kandang'] != ''){
            DB::update('tbl_kandang',['status' => '1'],"id_kandang=%s",$data['id_kandang']);
            if($data['status_progress'] == 'Selesai'){
                DB::update('tbl_kandang',['status' => '0'],"id_kandang=%s",$data['id_kandang']);
                DB::update('tbl_pemesanan',['id_kandang' => ''],"id_pemesanan=%i",$_POST['id_pemesanan']);
            }
        }
        if($data['id_grommer'] != ''){
            DB::update('tbl_grommer',['status' => 'kerja'],"id_grommer=%s",$data['id_grommer']);
            if($data['status_progress'] == 'Selesai'){
                DB::update('tbl_grommer',['status' => 'selo'],"id_grommer=%s",$data['id_grommer']);
                DB::update('tbl_pemesanan',['id_grommer' => ''],"id_pemesanan=%i",$_POST['id_pemesanan']);
            }
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
    case 'bukti_pembayaran':
        $gambar = "";
        if($_FILES['gambar']['size'] > 0){
            $path = '../gambar/';
            $save_path = $path.$_FILES['gambar']['name'].date('YmdHis');
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$save_path)){
                $gambar = $save_path;
                $save = DB::update('tbl_pemesanan',['bukti_pembayaran' => $gambar],'id_pemesanan=%i',$_POST['id_pemesanan']);
                if($save){
                    header('location:../shop/history.php?success');
                }else{
                    header('location:../shop/history.php?error');
                }
            }else{
                header('location:../shop/history.php?error');
            }
        }
    break;
}