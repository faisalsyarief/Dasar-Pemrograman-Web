<?php
session_start();
include "koneksi.php";
$admin_name = $_POST['admin_name'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE admin_name='$admin_name'";
$hasil = mysql_query($query) or die ("Error");
$data = mysql_fetch_array($hasil);

if(($password)==$data['password'])
{
$_SESSION['admin_name']=$admin_name;
echo "<script>javascript:window.location='admin/home.php'</script>";
}
else {
echo "<script>alert('Login Gagal!');javascript:history.go(-1);</script>";
}
?>