<?php

require_once 'db.class.php'; //load db library. see doc meekro.dom
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'vetshop';

DB::$error_handler = false;
DB::$throw_exception_on_error = true;

//menghitung harga
function harga($id_pesanan){
    
    $data = DB::queryFirstRow("SELECT a.*, b.harga FROM tbl_pemesanan a JOIN tbl_layanan b ON b.id_layanan = a.id_layanan WHERE a.id_pemesanan = '$id_pesanan'");

    extract($data);

    //jika checking terisi makan akan menghitung hari * harga
    if($checkin != ''){
        $checkin = date_create($checkin);
        $checkout = date_create($checkout);

        $timedif = date_diff($checkin,$checkout);
        $hari = $timedif->format("%d");;
        if($hari == 0){
            $hari = 1;
        }
        $hari = intval($hari);
        $harga = $hari * $harga;
    }else{
        $harga = $harga;
    }

    return $harga;

}

//membuat format tanggal d-m-Y dari database
function tanggalDMY($param){
    return date_format(date_create($param),'d-m-Y');
}