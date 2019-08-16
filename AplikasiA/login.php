<!DOCTYPE html>
<html>
<head>
  <title> login</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body background="gambar/bc.jpg">
<h2 style="background-color: #f1f1f1">Login Form </h2>
</body>
</html>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title >Form Login</title>
  <form action="proseslogin.php" method="post">
<div align='center' style="background-color: #ffe4b5">
  <img src="gambar/avatar.png" alt="Avatar" class="avatar">
</div>
<div class="container">
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><button value="Login" type="submit">LOGIN</button></tr>
</div>
<div class="container" style="background-color:#f1f1f1">
  <input class="cancelbtn" value="Batal" type="reset">
  <tr><span colspan="2" align="center" class="psw">Belum Punya akun ? <a href="register.php"><b>Daftar</b></a></span></tr>
</div>
  </form>
</div>