<?php

// koneksi ke database di sistem A
mysql_connect("localhost", "root", "");
mysql_select_db("autentikasi");

// membaca username dari GET request
$user = $_GET['username'];
// membaca password dari GET request
$pass = $_GET['password'];
// membaca kode API dari GET request
$api = $_GET['api'];

// jika kode API nya '1234' maka lakukan proses validasi username dan password
// jika kode API nya salah, maka proses validasi tidak dilakukan (diberikan respon "FALSE")
if ($api == "1234")
{
   // membaca data password user berdasar usernamenya
   $query = "SELECT * FROM user WHERE username = '$user'";
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);
   $password = $data['password'];

   // mencocokkan password user dari db dan dari GET request
   // jika cocok, maka responnya TRUE, jika tidak cocok responnya FALSE
   if ($pass == $password) $response = "TRUE";
   else $response = "FALSE";
}
else $response = "FALSE";

// membuat header dokumen XML
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";

// membuat tag data respon pada dokumen XML
echo "<data>";
echo "<response>".$response."</response>";
echo "</data>";
?>