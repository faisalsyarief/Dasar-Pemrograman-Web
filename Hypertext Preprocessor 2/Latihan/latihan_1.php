<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faisal Syarifuddin</title>
</head>
<body>
<h2>Latihan 1</h2>
Clik <a href>refresh</a> untuk melakukan penambahan bilangan ! </br>
<?php
if(file_exists("D:\\inc.txt"))
{
	$fo=fopen("D:\\inc.txt","r");
	$bil=fread($fo,filesize("D:\\inc.txt"));
	$bil++;
	
	$fo=fopen("D:\\inc.txt","r+");
	fwrite($fo,$bil);
	fclose($fo);
	echo("Sekarang bilangan ke <b> $bil </b>");
}else
{
	$fo=fopen("D:\\inc.txt","w");
	fwrite($fo,"0");
	echo("File berhasil dibuat");
	fclose($fo);
}
?>
</body>
</html>