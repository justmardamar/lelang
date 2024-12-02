<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_barang = $_POST['id_barang'];
$tgl_lelang = date('Y-m-d');
$id_petugas = $_POST['id_petugas'];
$harga_akhir = number_format($_POST['harga_akhir']);

// menginput data ke database
// mysqli_query($koneksi,"INSERT INTO tb_lelang VALUES('','$id_barang','$tgl_lelang','','','$id_petugas','')");

$sql = "INSERT INTO tb_lelang (id_barang,tgl_lelang,harga_akhir,id_user,id_petugas,status)VALUES ('$id_barang','$tgl_lelang',0,NULL,'$id_petugas','dibuka')";
mysqli_query($koneksi,$sql);

// mengalihkan halaman kembali ke index.php
header("location:aktivasi.php?info=simpan");

?>