<?php

session_start();

// membaca username dari form login
$username = $_POST['username'];
// membaca password dari form login
$password = $_POST['password'];

// membuat URL GET request ke sistem A
$url = "http://localhost/Autentikasi_login/AplikasiA/service.php?username=".$username."&password=".$password."&api=1234"; 

// mengirim GET request ke sistem A dan membaca respon XML dari sistem A
$bacaxml = simplexml_load_file($url);

// membaca data XML hasil dari respon sistem A
foreach($bacaxml->response as $respon)
{
  // jika responnya TRUE maka login sukses
  // jika FALSE maka login gagal
  if ($respon == "TRUE"){
  	echo "Login Sukses";

  	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");

  }
  else if ($respon == "FALSE"){
  	echo "Login Gagal";
  }
}  

?>