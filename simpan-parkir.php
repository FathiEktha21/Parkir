<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$id_platnomor     = $_POST['plat_nomor'];
$id_kendaraan  = $_POST['jenis_kendaraan'];



//query insert data ke dalam database
$query = "INSERT INTO tbl_parkir (id_platnomor, id_kendaraan, jam_masuk) VALUES ('$id_platnomor', '$id_kendaraan', NOW())";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}     