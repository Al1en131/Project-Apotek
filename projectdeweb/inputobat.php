<!---Sidebar Dan Navbar-->
<?php
include("sidebar.html")
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<!---form-->
       <!---form-->
       <div class="obat">
                <div class="box">
                    <form action="inputobat.php" method="post">
                        <div class="user">
                            <div class="input">
                                <span class="isi">Kode</span>
                                <input type="text" name="kode">
                            </div>
                            <div class="input">
                                <span class="isi">Nama obat</span>
                                <input type="text" name="nama_obat">
                            </div>
                            <div class="input">
                                <span class="isi">Harga</span>
                                <input type="text" name="harga">
                            </div>
                            <div class="input">
                                <span class="isi">Stok</span>
                                <input type="text" name="stok">
                            </div>
                            <div class="input">
                                <span class="isi">Satuan</span>
                                <select id="" name="satuan">
                                    <option value="??">==========Pilih Satuan=========</option>
                                    <option value="box">Box</option>
                                    <option value="botol">Botol</option>
                                </select>
                            </div>
                            <div class="input">
                                <span class="isi">Tanggal Masuk</span>
                                <input type="date" name="tanggal_masuk" >
                            </div>
                            <div class="input">
                                <p class="isi">Deskripsi</p>
                                <textarea placeholder="" name="deskripsi_obat"></textarea>
                            </div>
                        </div> 
                        <div class="ready">
                            <input name="Submit" type="Submit" value="Submit">
                        </div>
                    </div>
                </form>

                <?php

  // Check If form submitted, insert form data into users table.
  if (isset($_POST['Submit'])) {
    $kode = $_POST['kode'];
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $deskripsi_obat = $_POST['deskripsi_obat'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO data_obat(kode,nama_obat,harga,stok,satuan,tanggal_masuk,deskripsi_obat) VALUES('$kode','$nama_obat','$harga','$stok','$satuan','$tanggal_masuk','$deskripsi_obat')");

    // Show message when user added
    echo "Data telah berhasil ditambahkan!. <a href='tabelobat.php'>Lihat Data</a>";
  }
  ?>
            </div>
        </div>
    </div>
</body>
</html>