<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../config/connection.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];

//cek ambil data
$data = DB::queryFirstRow("SELECT * FROM tbl_pelanggan WHERE email='$nama' and password='$password'");
if($data['isAktif'] != 1){
	header("location:login_cust.php?pesan=Aktifasi akun anda terlebih dahulu");
	exit();
}
//jika data lebih dari 0 maka ada data
if(count($data) > 0){
	extract($data);
	$_SESSION['nama'] = $nama;
	$_SESSION['id_pel'] = $id_pelanggan;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login_cust.php?pesan=Login Gagal");
}
?>