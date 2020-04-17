<?php 
include('koneksitugas.php');

$key = $_GET{'key'};

$result = $kon->query("DELETE FROM `data_handphone` WHERE `data_handphone`.`id_handphone` = $key");
if ($result==TRUE) {
    echo "Data Berhasil Di Hapus";
}
else {
    echo "Data gagal dihapus";
}       
?>
