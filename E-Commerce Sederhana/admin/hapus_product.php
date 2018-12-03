<?php
 $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
mysql_select_db("ecommerce") or die ("Gagal membuka database.");

 $delete = mysql_query("delete from product where kode_barang='$_GET[kode_barang]'");
 
 if ($delete)
{
echo"<script>alert('Data Berhasil Dihapus');
		document.location='data_product.php'</script>";
}else{
echo"data gagal dihapus";
}
?>