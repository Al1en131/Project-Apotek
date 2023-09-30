<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Pendaftaran</title>
  <style>
		.alert {
      position: fixed;
      top: 40px; /* Sesuaikan dengan tinggi navbar Anda */
      left: 50%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 9999;
		}

    .alert a {
      color: #1B6B93;
    }
	</style>
	<script>
		function redirectToLogin() {
			window.location.href = 'formlogin.php';
		}
	</script>
</head>
<body>
  <div class="background">     
    <div class="transbox2">
      <div class="formpendaftaran2">
      
        <form action="register.php" method="post">
          <h1>Register</h1>
          <label>Nama</label><br>
          <input type="text" name="nama" ><br>

          <label>Username</label><br>
          <input type="text" name="usrname" ><br>

          <label>E-mail</label><br>
          <input type="email" name="email" ><br>

          <label>Password</label><br>
          <input type="password" name="password" >

          <input type="Submit" value="Submit" name="Submit">
          <p> Sudah punya akun?<a href="formlogin.php"> Login di sini </a></p>
        </form>
      </div>
    </div>
  </div>
  <?php
        if(isset($_POST['Submit'])) {
            $nama= $_POST['nama'];
            $email= $_POST['email'];
            $password = $_POST['password'];
            $usrname= $_POST['usrname'];

            // include database connection file
            include_once("config.php");

            // Insert user data into table
            $result= mysqli_query($koneksi, "INSERT INTO user(nama,email,password,usrname) VALUES('$nama','$email','$password','$usrname')");

            // Show message when user added
            if ($result) {
              echo '<div class="alert">Anda berhasil mendaftar! Klik <a href="formlogin.php">di sini</a> untuk login.</div>';
                
            }
        }
        ?>


</body>
</html>