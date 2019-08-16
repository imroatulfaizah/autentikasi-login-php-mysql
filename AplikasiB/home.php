<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login Aplikasi B</title>
<body bgcolor="#008080">
	<div align='center'>
		<br><br><br><br><br><br><br><br>
   <h1>Selamat Datang di Halaman Kami</h1>
   <h1></h1><b><?php echo $username;?></b></h1>
   <h1>Anda Sudah Berada di Blog Kami</h1>
   <h2>Apakah Anda Ingin Log Out?</h2>
   <a href="logout.php"><b>Logout</b></a>
</div>

</body>
