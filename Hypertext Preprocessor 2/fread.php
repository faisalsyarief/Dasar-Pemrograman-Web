<html>
<head>
<title>Pemrosesan File</title>
</head>
<body>
<h2> Pembacaan Data </h2>
<?php
$file='C:\\Teks.txt';
if(file_exists($file))
{  $fo=fopen($file,"r");
   $isi=fread($fo,filesize("$file"));
   echo("Isi dari file <b> $file </b> adalah <b>\" $isi \" </b>");
   fclose($fo);
}else
{
   echo("File <b> $file </b> tidak ada !");
}

?>
</body>
</html>
