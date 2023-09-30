<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:formlogin.php");
} 
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

<!--Sidebar dan Navbar-->
<?php
include("sidebar.html")
?>

<!---Dashboard-->
            <div class="box-diagram">
                <div class="box-1">
                    <p>EARNINGS(MONTHLY)</p>
                    <span class="deskripsi">$45.000</span>
                    <img src="assets/calendar-date.png" alt="" class="card">
                </div>
                <div class="box-2">
                    <p>EARNINGS(ANNUAL)</p>
                    <span class="deskripsi">$250.000</span>
                    <img src="assets/dollar.png" alt="" class="card">
                </div>
                <div class="box-3">
                    <p>CUSTOMER ACQUITION</p>
                    <span class="deskripsi">70%</span>
                    <progress value="70" max="100"></progress>
                    <img src="assets/customer.png" alt="" class="card">
                </div> 
                <div class="box-4">
                    <p>SALES GROWTH</p>
                    <span class="deskripsi">50%</span>
                    <progress value="50" max="100"></progress>
                    <img src="assets/sales.png" alt="" class="card">
                </div> 
            </div>
            <div class="box-tabel-form">
                <div class="tabel">
                    <p>Top 5 Obat dengan penjualan tertinggi</p>
                    <table class="top">
                        <tr>
                          <th>Nama obat</th>
                          <th>Jenis</th>
                          <th>Kategori</th>
                        </tr>
                        <tr>
                          <td>Chlorpheniramine</td>
                          <td>Antihistamin</td>
                          <td>Bebas terbatas</td>
                        </tr>
                        <tr>
                          <td>Decolgen</td>
                          <td>Obat batuk dan pilek ringan</td>
                          <td>Bebas</td>
                        </tr>
                        <tr>
                          <td>Betadine</td>
                          <td>Antiseptik</td>
                          <td>Bebas</td>
                        </tr>
                        <tr>
                          <td>Thephylline</td>
                          <td>metilksantin</td>
                          <td>Bebas terbatas</td>
                        </tr>
                        <tr>
                          <td>Tremenza</td>
                          <td>Obat batuk dan pilek ringan</td>
                          <td>Bebas</td>
                        </tr>
                        <tr>
                      </table>
              
                </div>
                <div class="form">
                    <p>Apa Berita hari ini??</p>
                    <form action="dashboard.php" method="post">
                    <?php 
                    include_once("config.php");
                    $sql = mysqli_query($koneksi, "SELECT * FROM  user ORDER BY id ASC");
                    ?>
                        <label>User</label><br>
                        <select name="id_user">
                        <option>user</option>
            <?php
            while ($category = mysqli_fetch_array(
                $sql,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["nama"];?>           
                    <?php
                endwhile; ?>
            </select><br><br>

                        <label >Tanggal</label>
                        <input type="date" name="tanggal" >
                    
                        <label>Judul</label>
                        <input type="text" name="judul" >
                    
                        <label>Berita</label>
                        <div>
                            <textarea name="inputberita" ></textarea>    
                        </div>
                        <input type="Submit" value="Submit" name="Submit">
            </form>
                </div>
            </div>

        </div>
    </div>
    <?php
    if(isset($_POST['Submit'])) {
      $id_user= $_POST['id_user'];
      $tanggal= $_POST['tanggal'];
      $judul = $_POST['judul'];
      $inputberita= $_POST['inputberita'];

      include_once("config.php");
  
  
      // Insert user data into table
      $result= mysqli_query($koneksi, "INSERT INTO berita(id_user,tanggal,judul,inputberita) VALUES('$id_user','$tanggal','$judul','$inputberita')");
  
      // Show message when user added
    
  }
  ?>

    ?>

    <script src="script.js"></script>
</body>
</html>