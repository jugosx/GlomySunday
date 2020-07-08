<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config/connection.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
// $data = mysqli_query("select * from tbl_admin where username='$username' and password='$password'");
$data = DB::queryRaw("SELECT * FROM tbl_admin WHERE username='$username' and password='$password'");
// echo json_encde($data);
// menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
$row = $data->fetch_assoc();

if($row > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=Login Gagal");
}
?>