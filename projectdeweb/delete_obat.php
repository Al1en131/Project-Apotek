<?php
// include database connection file
include_once("config.php");


$kode = $_GET['kode'];

// Escape the variable to prevent SQL injection
$escaped_kode = mysqli_real_escape_string($koneksi, $kode);

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM data_obat WHERE kode='$escaped_kode'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tabelobat.php");
?>