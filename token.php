<?php
include 'config/connection.php';

// menangkap data yang dikirim dari form
$token = $_GET['aktifasi'];

#cek data di table apakah ada dengan token berikut
$data = DB::queryFirstRow("SELECT id_pelanggan FROM tbl_pelanggan WHERE token='$token'");
// exit(print_r($data));
if(count($data) > 0){
    #oh datanya ada
    #melakukan update dengan data yang ada
    DB::update("tbl_pelanggan",['isAktif' => 1],"id_pelanggan=%i",$data['id_pelanggan']);
    $pesan = "Berhasil melakukan aktifasi";
}else{
    $pesan = "Gagal melakukan aktifasi";
}
header("location:shop/login_cust.php?pesan=".$pesan);
