<?php

require_once ('connection.php');

$result = array();

$query = mysqli_query($conn, "SELECT * FROM tb_data ORDER BY id_buku DESC");

while ($row = mysqli_fetch_assoc ($query)) {
    $result[] = $row;
}

echo json_encode (array ('result'=>$result));

?>