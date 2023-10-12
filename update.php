<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$id_kendaraan  = $_POST['id_kendaraan'];

$id_platnomor     = $_POST['id_platnomor'];



//query update data ke dalam database berdasarkan ID

$query = "UPDATE tbl_parkir SET id_kendaraan = '$id_kendaraan', id_platnomor = '$id_platnomor' WHERE id= '$id'";


//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>