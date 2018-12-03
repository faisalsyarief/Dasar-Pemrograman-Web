<?php session_start();
if(isset($_SESSION['admin']))
  unset($_SESSION['admin']);
{
echo "<script>alert('Anda telah logout!');</script>";
echo "<script>javascript:window.location='home.php'</script>";
}
?>