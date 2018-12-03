<html>
<head>
<title>TIFA SHOP</title>
<script language="JavaScript">
function cek() 
{
	var index=form_input.selectedIndex;
	form_input.value=form_input[index].value;
}
function cek_data()
{
  if
				(form_input.username.value=="faisal") 
				{
					alert("Username belum diisi !")
					form_input.username.focus();
					return false;
				}else{
  if
				(form_input.email.value=="ichaltkj96@gmail.com")
				{
					alert("E-Mail belum diisi !")
					form_input.email.focus();
					return false;
				}else{
  if 
				(form_input.password.value=="faisalshop")
				{
						alert("Password belum diisi !");
						form_input.password.focus();
						return false;
				}else{
						return true;
				}
				}
				}
	}
	function konfirmasi() 
	{
			 var jwb=confirm("Ulangi pengisian data?");
			 if (jwb==true)
			 {
						form_input.username.value="";
						form_input.email.value="";
						form_input.password.value="";
						
			 }
		}
</script>
</head>
<body>
<h2><center>Login</center></h2>
<table align="center" bgcolor="silver" cellspacing="1">
<form name="form_input" action="berhasil.php" method="get" onSubmit="return cek_data()">
		
<h4> <i> <font face="arial" color="silver"> <a href="desain1.php" target="fkanan"> <center> Click disini untuk kembali ke Home</a> </font> </center> </i> </h4> </br>							
</form>
</table>
</body>
</html>