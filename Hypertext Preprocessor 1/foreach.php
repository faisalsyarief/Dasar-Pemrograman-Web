<html>
<head>
<title>for</title>
</head>
<body>
<h2> Pengguna Kontrol Foreach </h2>
<b> Nama Bulan : </b><br>
<?php
$i=0;$bulan=array("januari","februari","maret","april","mei","juni","juli",
"agustus","september","oktober","november","desember");
foreach($bulan as $bln)
{
   echo(($i+1)."$bln <br>");
   $i++;
}
?>
</body>
</html>