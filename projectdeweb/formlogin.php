<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Pendaftaran</title>
  <style>
    .error{
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

    .error label{
      color: black;
    }

    </style>

</head>
<body>
  <div class="background">
  <div class="transbox">
	<div class="formpendaftaran">
  <form action="proseslogin.php" method="POST">
      <h1>Login</h1>

    <label>Username</label><br>
    <input type="text" name="usrname" ><br>

    <label>Password</label><br>
    <input type="password" name="password" >
  
    <input type="submit">
    <p> Belum punya akun?<a href="register.php"> Register di sini </a></p>
        
  </form>
</div>
</div>
</div>

<?php if(isset($_GET['pesan'])) { ?>
       <div class="error">
        <label><?php echo $_GET['pesan']; ?></label>
    </div>
<?php 
} 
?>


</body>
</html>