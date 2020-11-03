<?php
require '../config/mailing.php';
require '../config/connection.php';
$proses = $_GET['proses'];
switch($proses){
    case 'insert':
        if(empty($_POST['term'])){
            echo "<script>alert('agree the terms first!')</script>";
            header('location:../register.php?error');
        }

        unset($_POST['term']);
        
        if(empty($_POST)){
            header('location:../register.php?error');
        }

        $cekemail = DB::queryFirstRow("SELECT email FROM tbl_pelanggan WHERE email='$_POST[email]'");

        if(count($cekemail) > 0){
            header('location:../shop/login_cust.php?pesan=Email tidak bisa dipakai, gunakan yang lain');
            exit();
        }

        $_POST['token'] = bin2hex(random_bytes(12));
        if($save = DB::insert('tbl_pelanggan',$_POST)){
            //Set who the message is to be sent to
            $mail->addAddress($_POST['email'], $_POST['nama']);

            //Set the subject line
            $mail->Subject = 'Verifikasi Email Anda';

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            // $mail->msgHTML(file_get_contents('index.html'), __DIR__);
            $mail->isHTML(true);
            $mail->Body    = "<p>Klik link berikut untuk memverifikasi email anda, agar dapat digunakan di website kami <a href='http://localhost/GlomySunday/token.php?aktifasi=".$_POST['token']."'>Aktifasi Link</a></p>";

            
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
               header('location:../shop/login_cust.php?pesan=Silahkan cek email untuk aktifasi akun anda');
            }
            
            header('location:../shop/login_cust.php?pesan=Silahkan cek email untuk aktifasi akun anda');
        }
        header('location:../shop/login_cust.php?pesan=Silahkan cek email untuk aktifasi akun anda');
        
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