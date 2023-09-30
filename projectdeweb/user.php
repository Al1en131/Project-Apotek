<?php
include("sidebar.html")
?>

<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Tabel User</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="style1.css" />
</head>

<body>
    <!-- DASHBOARD -->
    <div class="Data-Obat-tabel">
        <h2>Data User</h2><br>
        <table>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>

            <?php
            $i = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['password'] . "</td>";
                echo "<td>" . $user_data['usrname'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td class='gambar'><a href='#?id=$user_data[id]'><img src='assets/pencil-square.svg' ></a> 
                | <a href='#?id=$user_data[id]'><img src='assets/trash3.svg' ></a></td></tr>";
                $i++;
            }
            ?>
        </table>
    </div>
    </div>

    </div>
    </div>
    </div>
</body>

</html>