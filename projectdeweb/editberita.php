<?php
include("sidebar.html")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="form">
        <p>Apa Berita hari ini??</p>
        <form action="#">
            <label for="person">User</label>
            <select name="" id="">
                <option value="">user</option>
            </select>

            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="" >
                    
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="" >
                    
            <label for="isi">Berita</label>
            <div>
                <textarea name="" id="isi" ></textarea>    
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>