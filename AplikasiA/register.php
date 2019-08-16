<!DOCTYPE html>
<html>
<head>
  <title>regiter</title>
  <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body background="gambar/bc.jpg">
<h2 style="background-color: #f1f1f1">Register Form </h2>
</body>
</html>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<form action="prosesregister.php" method="post">
<div align='center' style="background-color: #000080">
  <img src="gambar/avatar1.gif">
</div>
<div class="container">
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><button value="Daftar" type="submit"> REGITRASI</button> 
</div>
<div class="container">
  <input class="cancelbtn" value="Batal" type="reset"></td></tr>
  <tr><span colspan="2" align="center" class="psw">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></span></tr>
</div>
  </form>
</div>