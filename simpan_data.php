<?php 
include('koneksitugas.php');

$nama = $_POST{'nama'};
$harga = $_POST{'harga'};
$satuan = $_POST{'jenis'};
$url = $_POST{'url'};
$stok = $_POST{'stok'};

// print_r($_POST);
$result = $kon->query("INSERT INTO `data_handphone` (`id_handphone`, `nama_handphone`, `jenis_handphone`, `harga_handphone`, `stok_handphone`,`url_gambar`) 
VALUES (NULL, '$nama',  '$satuan','$harga', '$stok','$url');");

if ($result==TRUE) {
    echo "Data Berhasil di simpan";
}
else {
    echo "Data Gagal Disimpan";
}
?>
