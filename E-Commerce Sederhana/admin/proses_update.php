<?php
include "koneksi.php";
$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$harga_barang=$_POST['harga_barang'];
	   $file_name= $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
     move_uploaded_file($file_tmp,"images/".$file_name);
$query=mysql_query("update product set jenis_barang='$jenis_barang', harga_barang='$harga_barang', gambar_product='$file_name' where kode_barang='$kode_barang'");
if($query){
echo "<script>javascript:window.location='data_product.php'</script>";
?>
<a href="tabel_brg.php">Lihat data di Tabel</a><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>