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
	  <ul id="mbmenu1ebul_table" class="mbmenu1ebul_menulist" style="width: 529px; height: 30px;">
  <li class="spaced_li"><a href="home.php"><img id="mbi_mbmenu1_1" src="menu1_files/mb_home.gif" name="mbi_mbmenu1_1" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Home" title="" /></a></li>
  <li class="spaced_li"><a href="data_product.php"><img id="mbi_mbmenu1_2" src="menu1_files/mb_product.gif" name="mbi_mbmenu1_2" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Product" title="" /></a></li>
  <li class="spaced_li"><a href="testimoni.php"><img id="mbi_mbmenu1_3" src="menu1_files/mb_testimoni.gif" name="mbi_mbmenu1_3" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Testimoni" title="" /></a></li>
  <li class="spaced_li"><a href="contact.php"><img id="mbi_mbmenu1_4" src="menu1_files/mb_contact.gif" name="mbi_mbmenu1_4" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Contact" title="" /></a></li>
  <li><a href="login.php"><img id="mbi_mbmenu1_5" src="menu1_files/mb_login.gif" name="mbi_mbmenu1_5" width="105" height="30" style="vertical-align: bottom;" border="0" alt="Login" title="" /></a></li>
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
  
<head><title>TIFA SHOP</title>
</head>
<body><center><a href=""></a>
<?php

include "koneksi.php";
	$nama_lengkap = $_POST['nama_lengkap'];
	$telepon 	  = $_POST['telepon'];
	$product 	  = $_POST['product'];
	$alamat 	  = $_POST['alamat'];
	$tanggal 	  = $_POST['tanggal'];	

	$sqlstr=mysql_query("insert into orders values ('$nama_lengkap', '$telepon', '$product', '$alamat', '$tanggal')")or die(mysql_error());

	if($sqlstr)
	{
		echo("Data berhasil disimpan<br>");
	}
	else
	{
		echo("Data gagal disimpan <br>");
	}
	@mysql_close($idkoneksi);
?><br>
<h1>Registrasi Berhasil</h1>
<h2>Tunggu Informasi Selanjuntnya</h2>
<a href="js_registrasi.php">Kembali</a>
<a href="data_product.php">Lihat Barang</a>
</center></body>
<tr>
    <td height="63" colspan="4"><div align="center">      
      <p class="style3">Copyright@2016</p>
      <p class="style3"><marquee>Created By Faisal &amp; Tiara </marquee></p>
    </div>
	</td>
	</tr>
</table>
</table>
</body>
</center>
</html>

