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
  <tr>
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DATA PEMBELI</title>
</head>
 <?php
 error_reporting(0);
 $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
mysql_select_db("ecommerce") or die ("Gagal membuka database.");
?>
 <h2><center>DATA PEMBELI</center></h2>
 <table width="955" height="45" border="2" align="center" cellpadding="1" cellspacing="1" bordercolor="#08A941">
      <th width="55" height="55" bgcolor="#08A941"><div align="center">Nama Pembeli</div></th>
      <th width="50" height="55" bgcolor="#08A941"><div align="center">Telepon</div></th>
	  <th width="50" height="55" bgcolor="#08A941"><div align="center">Produk</div></th>
	  <th width="50" height="55" bgcolor="#08A941"><div align="center">Alamat</div></th>
      <th width="55" height="55" bgcolor="#08A941"><div align="center">Tanggal Pembelian</div></th>
      </tr>
      <?php
$query = "select * from orders";
$result = mysql_query($query, $sambung);
//$no = 0;
while ($buff = mysql_fetch_array($result)){
//$no++;
?>
      <tr>
        <td><div align="center"><?php echo $buff['nama_lengkap']; ?></div></td>
        <td><div align="center"><?php echo $buff['telepon']; ?></div></td>
        <td><div align="center"><?php echo $buff['product']; ?></div></td>
		<td><div align="center"><?php echo $buff['alamat']; ?>"</div></td>
        <td><div align="center"><?php echo $buff['tanggal']; ?></div></td>		
      <?php
};
mysql_close($sambung);
?>
  </table>
   </td>
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
