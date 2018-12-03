<html>
<head>
<title>upload</title>
</head>
<body>
<h2> Penggunaan upload </h2>
<?php
  $nama_file=$HTTP_POST_FILES["file1"]["name"];
  $tmp_dir=$HTTP_POST_FILES["file1"]["tmp_name"];
  copy($tmp_dir,"c:/upload_dir/$nama_file");
  echo("Nama file : <b>$nama_file</b>");
?>
</body>
</html>
