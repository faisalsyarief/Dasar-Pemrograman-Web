<html>
<head>
<title>Faisal Syarifuddin</title>
</head>
<body>
<h2>Latihan 2</h2>
<pre>
<?php
	$file1 = $_FILES["faisal1"];
	$nama_file = $file1["name"];
	$nama_tmp = $file1["tmp_name"];
	$upload_dir = "c:/upload_dir/";
	@move_uploaded_file($nama_tmp,$upload_dir,$nama_file);
	echo("Nama File 1 : <b>$nama_file</b> <br>");
?>
<?php
	$file2 = $_FILES["faisal2"];
	$nama_file = $file2["name"];
	$nama_tmp = $file2["tmp_name"];
	$upload_dir = "c:/upload_dir/";
	@move_uploaded_file($nama_tmp,$upload_dir,$nama_file);
	echo("Nama File 2 : <b>$nama_file</b> <br>");
?>
<?php
	$file3 = $_FILES["faisal3"];
	$nama_file = $file3["name"];
	$nama_tmp = $file3["tmp_name"];
	$upload_dir = "c:/upload_dir/";
	@move_uploaded_file($nama_tmp,$upload_dir,$nama_file);
	echo("Nama File 3 : <b>$nama_file</b> <br>");
?>
</pre>
</body>
</html>