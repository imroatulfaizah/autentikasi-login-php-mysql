<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "autentikasi";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);
?>