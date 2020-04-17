<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container" style="margin-top : 25px;">
        <form action="simpan_data.php" method="post">
            <h4 style="text-align : center;">Form Pembelian</h4>
            <div class="form-group">
            <div class="form-group">
                <label>Nama Handphone</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
            <div class="form-group form-row align-items-center">
                <div class="col-auto my-1">
                    <label>Jenis Handphone</label>
                    <select class="custom-select mr-sm-2" name="jenis" required>
                        <option value=".">Pilih...</option>
                        <option value="android">Android</option>
                        <option value="ios">Ios</option>
                    </select>
                </div>
            </div> 
            <div class="form-group">
                <label>URL Gambar</label>
                <input type="url" class="form-control" name="url" required>
            </div>
            <!-- <div class="form-group">
                <label>URL Gambar</label>
                <input type="text" class="form-control" name="gambar" required>
            </div> -->
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
<br>
        <br>
        <br>

        <?php 
        include("koneksitugas.php");
        $result = $kon->query("SELECT FROM `data_handphone`");

        if (isset($_GET['info'])) {
            $info=$_GET['info'];
            if ($info=='hapus') {
                echo "Data Berhasil diHapus";
            }
        }
        ?>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>ID Handphone</th>
                <th>Nama Handphone</th>
                <th>Jenis Handphone</th>
                <th>Harga</th>
                <th>URL</th>
                <th>Stok</th>
                <th>Action</th>
                </tr>
            </thead>
            <?php 
            include('koneksitugas.php');
            $result = $kon->query('SELECT * FROM `data_handphone`');
                foreach ($result as $isi) : 
                if ($isi['stok_handphone'] < 5) {
                    // {
                    //     echo "<td class='red'>" .$dt['stok_awal'] . "</td>";   
                    // }else{
                    // echo "<td class='text'>" .$dt['stok_awal'] . "</td>";
                    // }
                    echo"<tr><td>".$isi['id_handphone']."</td>
                                                <td>".$isi['nama_handphone']."</td>
                                                <td>".$isi['jenis_handphone']."</td>
                                                <td>".$isi['harga_handphone']."</td>
                                                <td>".$isi['url_gambar']."</td>
                                                <td class='red'>".$isi['stok_handphone']."</td>" ?>
                                                <td>
                                                <button type="button" class="btn btn-primary"><a href="form_edit.php?key=<?php echo $isi['id_handphone']?>" style="color : white;">Edit</a></button>
                                                <button type="button" class="btn btn-danger"><a href="hapusdata.php?key=<?php echo $isi['id_handphone']?>" style="color : white;">Hapus</a></button>
                                                </td></tr>
                <?php }
                else {
                    echo"<tr><td>".$isi['id_handphone']."</td>
                                                <td>".$isi['nama_handphone']."</td>
                                                <td>".$isi['jenis_handphone']."</td>
                                                <td>".$isi['harga_handphone']."</td>
                                                <td>".$isi['url_gambar']."</td>
                                                <td>".$isi['stok_handphone']."</td>" ?>
                                                <td>
                                                <button type="button" class="btn btn-primary"><a href="form_edit.php?key=<?php echo $isi['id_handphone']?>" style="color : white;">Edit</a></button>
                                                <button type="button" class="btn btn-danger"><a href="hapusdata.php?key=<?php echo $isi['id_handphone']?>" style="color : white;">Hapus</a></button>
                                                </tr>
                <?php }
                endforeach;
                ?>
            
        </table>
    </div>
</body>
</html>
