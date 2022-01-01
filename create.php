<?php

require_once ('connection.php');

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$nama_pengarang = $_POST['nama_pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$penerbit = $_POST['penerbit'];

if (!$id_buku || !$judul_buku || !$nama_pengarang || !$tahun_terbit || !$penerbit) {
    echo json_encode (array ('message'=>'required field is empty.'));
} else {
    $query = mysqli_query ($conn, "INSERT INTO tb_data VALUES ('$id_buku', '$judul_buku', '$nama_pengarang', '$tahun_terbit', '$penerbit')");
    
    if ($query) {
        echo json_encode (array ('message'=>'Data buku berhasil ditambahkan.'));
    } else {
        echo json_encode (array ('message'=>'Data buku gagal ditambahkan.'));
    }
}

?>