<?php
include("sidebar.html")
?>

<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM data_obat ORDER BY kode DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Tabel Obat</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="style1.css" />
</head>

<body>
    <!-- DASHBOARD -->
    <div class="Data-Obat-tabel">
        <h2>Data Obat</h2><br>
        <table>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Tanggal Masuk</th>
                <th>Deskripsi Obat</th>
                <th>Action</th>
            </tr>

            <?php
            $i = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $user_data['kode'] . "</td>";
                echo "<td>" . $user_data['nama_obat'] . "</td>";
                echo "<td>" . $user_data['harga'] . "</td>";
                echo "<td>" . $user_data['stok'] . "</td>";
                echo "<td>" . $user_data['satuan'] . "</td>";
                echo "<td>" . $user_data['tanggal_masuk'] . "</td>";
                echo "<td>" . $user_data['deskripsi_obat'] . "</td>";
                echo "<td class='gambar'><a href='edit_obat.php?kode=$user_data[kode]'><img src='assets/pencil-square.svg' ></a> 
                | <a href='delete_obat.php?kode=$user_data[kode]'><img src='assets/trash3.svg' ></a></td></tr>";
                $i++;
            }
            ?>
        </table>
    </div>
</body>

</html>