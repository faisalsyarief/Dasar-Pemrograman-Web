<html>
<head>
<title>Penggunaan Modularisasi</title>
</head>
<body>
<h2> Penggunaan require_once </h2>
<pre>
<?php
require_once("function.php");
echo("Luas segi empat dengan p = 2 dan l = 4 adalah ".luas(2,4)."<br>");
require_once("function.php");
echo("Luas segi empat dengan p = 5 dan l = 4 adalah ".luas(5,4));
?>
</pre>
</body>
</html>
