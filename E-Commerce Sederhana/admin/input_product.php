<html>
<body>
<head>
<title>TIFA SHOP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="menu1_files/mbcsmbmenu1.css" type="text/css" />
</head>
<style type="text/css">
<!--
body {
	background-image: url(online_shopping.jpg);
}
.style2 {font-family: "Lucida Calligraphy"}
.style3 {font-family: "Lucida Calligraphy"; font-weight: bold; }
-->
</style><center>
<table width="1109" height="725" border="0">
  <tr>
    <td height="225" colspan="4"><div align="center"><img src="E-commerce-Portals.jpg" width="1102" height="223">
<ul id="ebul_mbmenu1_2" class="ebul_mbmenu1" style="display: none;">
<li><a href="data_pembeli.php" title="">Data Pembeli</a></li>
<li><a href="tambah_product.php" title="">Tambah</a></li>
<li><a href="data_product.php" title="">Edit</a></li>
</ul>

<ul id="mbmenu1ebul_table" class="mbmenu1ebul_menulist" style="width: 529px; height: 30px;">
  <li class="spaced_li"><a href="home.php"><img id="mbi_mbmenu1_1" src="menu1_files/mb_home.gif" name="mbi_mbmenu1_1" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Home" title="" /></a></li>
  <li class="spaced_li"><a><img id="mbi_mbmenu1_2" src="menu1_files/mb_product.gif" name="mbi_mbmenu1_2" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Product" title="" /></a></li>
  <li class="spaced_li"><a href="testimoni.php"><img id="mbi_mbmenu1_3" src="menu1_files/mb_testimoni.gif" name="mbi_mbmenu1_3" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Testimoni" title="" /></a></li>
  <li class="spaced_li"><a href="contact.php"><img id="mbi_mbmenu1_4" src="menu1_files/mb_contact.gif" name="mbi_mbmenu1_4" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Contact" title="" /></a></li>
  <li><a href="../home.php"><img id="mb_logout_1" src="menu1_files/mb_logout.gif" name="mb_logout_1" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Logout" title="" /></a></li>
</ul>
</div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="4">
	<div align="center">
<div align="center">
  <script type="text/javascript" src="menu1_files/mbjsmbmenu1.js"></script>
</div>

</div></td>
<td width="189"></td>
    </tr>
  <tr>
  <td height="210" colspan="4"> <div align="center"><marquee><a href="images/sepatu1.jpg"><img src="images/sepatu1.jpg" width="100" height="100" /></a> 
  <a href="images/sepatu2.jpg"><img src="images/sepatu2.jpg" width="100" height="100" /></a> 
  <a href="images/sepatu3.jpg"><img src="images/sepatu3.jpg" width="100" height="100" /></a> 
  <a href="images/sepatu4.jpg"><img src="images/sepatu4.jpg" width="100" height="100" /></a> 
  <a href="images/sepatu5.jpg"><img src="images/sepatu5.jpg" width="100" height="100" /></a> 
  <a href="images/1.jpg"><img src="images/1.jpg" width="100" height="100" /></a>  
  <a href="images/2.jpg"><img src="images/2.jpg" width="100" height="100" /></a> 
  <a href="images/3 .jpg"><img src="images/3 .jpg" width="100" height="100" /></a> 
  <a href="images/4 .jpg"><img src="images/4 .jpg" width="100" height="100" /></a> 
  <a href="images/5 .jpg"><img src="images/5 .jpg" width="100" height="100" /></a> 
  <a href="images/topi1.jpg"><img src="images/topi1.jpg" width="100" height="100" /></a> 
  <a href="images/topi2.jpg"><img src="images/topi2.jpg" width="100" height="100" /></a>
  <a href="images/topi3.jpg"><img src="images/topi3.jpg" width="100" height="100" /></a> 
  <a href="images/topi4.jpg"><img src="images/topi4.jpg" width="100" height="100" /></a> 
  <a href="images/topi5.jpg"><img src="images/topi5.jpg" width="100" height="100" /></a>
  <a href="images/gelang1.jpg"><img src="images/gelang1.jpg" width="100" height="100" /></a>
  <a href="images/gelang2.jpg"><img src="images/gelang2.jpg" width="100" height="100" /></a> 
  <a href="images/gelang3.jpg"><img src="images/gelang3.jpg" width="100" height="100" /></a> 
  <a href="images/gelang 4.jpg"><img src="images/gelang 4.jpg" width="100" height="100" /></a> 
  <a href="images/gelang5.jpg"><img src="images/gelang5.jpg" width="100" height="100" /></a></marquee> </div> 

  <?php
include "koneksi.php";
      $kode_barang= $_POST['kode_barang'];
      $jenis_barang = $_POST['jenis_barang'];
      $harga_barang = $_POST['harga_barang'];
	   $file_name= $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
	 move_uploaded_file($file_tmp,"images/".$file_name);
                 
$query = mysql_query("insert into product values  
('$kode_barang','$jenis_barang','$harga_barang','$file_name')");
echo "Data Telah disimpan<br>
<a href=\"home.php\">Kembali</a>";
?>
<p>&nbsp;</p>

<tr>
    <td height="63" colspan="4"><div align="center">      
      <p class="style3">Copyright@2016</p>
      <p class="style3"><marquee>Created By Faisal &amp; Tiara </marquee></p>
    </div></td>
  </tr>
</table>
</body>
</center>
</html>

