<html>
<head>
<title>for</title>
</head>
<body>
<h2> Penggunaan Kontrol for </h2>
<b>Nama bulan : </b><br>
<?php
$bulan=array("januari","februari","maret","april","mei","juni",
"juli","agustus","September","oktober","november","desember");
for($i=0;$i<count ($bulan);$i++)
{
   echo(($i+1)."$bulan[$i] <br>");
}
?>
</body>
</html>