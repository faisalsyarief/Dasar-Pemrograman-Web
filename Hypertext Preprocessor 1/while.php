<html>
<head>
<title>while</title>
</head>
<body>
<h2> Penggunaan Kontrol While </h2>
<?php
  $hari=array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
  $i=0;
  While($i<count($hari))
  {
     echo("Hari ke".($i+1))." adalah ".$hari[$i]."<br>";
	 $i++;
  }
?>
</body>
</html>
