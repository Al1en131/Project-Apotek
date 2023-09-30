<?php
// include database connection file
include_once("config.php");
include("sidebar.html");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $deskripsi_obat = $_POST['deskripsi_obat'];

    // Escape the variables to prevent SQL injection
    $escaped_nama_obat = mysqli_real_escape_string($koneksi, $nama_obat);
    $escaped_harga = mysqli_real_escape_string($koneksi, $harga);
    $escaped_stok = mysqli_real_escape_string($koneksi, $stok);
    $escaped_satuan = mysqli_real_escape_string($koneksi, $satuan);
    $escaped_tanggal_masuk = mysqli_real_escape_string($koneksi, $tanggal_masuk);
    $escaped_deskripsi_obat = mysqli_real_escape_string($koneksi, $deskripsi_obat);

    // Update user data
    $result = mysqli_query($koneksi, "UPDATE data_obat SET nama_obat='$escaped_nama_obat', harga='$escaped_harga', stok='$escaped_stok', satuan='$escaped_satuan', tanggal_masuk='$escaped_tanggal_masuk', deskripsi_obat='$escaped_deskripsi_obat' WHERE kode='$kode'");

    // Redirect to homepage to display updated user in list
    header("Location: tabelobat.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode = $_GET['kode'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM data_obat WHERE kode='$kode'");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_obat = $user_data['nama_obat'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
    $satuan = $user_data['satuan'];
    $tanggal_masuk = $user_data['tanggal_masuk'];
    $deskripsi_obat = $user_data['deskripsi_obat'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Obat</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
<body>

    <!-- MULAI FORM -->
    <div class="obat">
        <div class="box">
        <h2>Update Data Obat</h2><br>
            <form name="update_user" method="post" action="edit_obat.php">
                <div class="user">
                    <div class="input">
                        <span class="isi">Kode</span>
                        <input type="text" name="kode">
                    </div>
                    <div class="input">
                        <span>Nama Obat</span>
                        <input type="text" name="nama_obat" value=<?php echo $nama_obat; ?>>
                    </div>

                    <div class="input">
                        <span>Harga</span>
                        <input type="text" name="harga" value=<?php echo $harga; ?>>
                    </div>

                    <div class="input">
                        <span>Stok</span>
                        <input type="text" name="stok" value=<?php echo $stok; ?>>
                    </div>

                    <div class="input">
                        <span>Satuan</span>
                        <select id="" name="satuan" value=<?php echo $satuan; ?>>
                            <option value="??">==========Pilih Satuan=========</option>
                            <option value="box">Box</option>
                            <option value="botol">Botol</option>
                        </select>
                    </div>

                    <div class="input">
                        <span>Tanggal Masuk</span>
                        <input type="date" name="tanggal_masuk" value=<?php echo $tanggal_masuk; ?>>
                    </div>

                    <div class="input">
                        <p class="isi">Deskripsi Obat</p>
                        <textarea placeholder="" name="deskripsi_obat" value=<?php echo $deskripsi_obat; ?>>
                        </textarea>
                    </div>
                    <div class="input">        
                        <input type="hidden" name="kode" value=<?php echo $_GET['kode']; ?>>
                    </div>
                    <div class="ready">
                        <input type="submit" name="update" value="Update">
                    </div>
            </form>
        </div>
    </div>
            <script src="script.js"></script>
</body>

</html>