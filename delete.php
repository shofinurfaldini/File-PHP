<?php

require_once ('connection.php');

$id_buku = $_GET['id_buku'];

if (!$id_buku) {
    echo json_encode (array ('message'=>'required field is empty'));
} else {
    $query = mysqli_query($conn, "DELETE FROM tb_data WHERE id_buku='$id_buku'");
    
    if ($query) {
        echo json_encode (array ('message'=>'Data buku berhasil dihapus.'));
    } else {
        echo json_encode (array ('message'=>'Data buku gagal dihapus.'));
    }
}

?>