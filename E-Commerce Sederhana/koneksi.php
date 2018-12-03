<?php
	$host = "localhost";
	$user = "root";
	$pswd = "";
	$db = "ecommerce";

	$idkoneksi=mysql_connect($host,$user,$pswd) or die("Koneksi dengan <b>$db</b> gagal ");
	$iddatabase=mysql_select_db($db);
?>