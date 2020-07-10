<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../config/connection.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
// $data = mysqli_query("select * from tbl_admin where username='$username' and password='$password'");
$data = DB::queryRaw("SELECT * FROM tbl_pelanggan WHERE email='$nama' and password='$password'");
// echo json_encde($data);
// menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
$row = $data->fetch_assoc();

if($row > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login_cust.php?pesan=Login Gagal");
}
?>