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
				(form_input.username.value=="") 
				{
					alert("Username belum diisi !")
					form_input.username.focus();
					return false;
				}else{
  if
				(form_input.email.value=="")
				{
					alert("E-Mail belum diisi !")
					form_input.email.focus();
					return false;
				}else{
  if 
				(form_input.password.value=="")
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
<tr bgcolor="gray">
<td bgcolor="#4682B4" width="140"><font color="white" >Username</font></td>
<td bgcolor="#9FAFDF" width="340"><input type="text" name="username" size="30"></td>
</tr>

<tr>
<td bgcolor="#4682B4" width="140"><font color="white" >E-Mail</font></td>
<td bgcolor="#9FAFDF" width="340"><input type="text" name="email" size="30"></td>
</tr>	

<tr>
<td bgcolor="#4682B4" width="140"><font color="white">Password</font></td>
<td bgcolor="#9FAFDF" width="340"><input type="password" name="password" size="40"></td>
</tr>
			
<tr>
<td bgcolor="#4682B4" width="140"></td>
<td bgcolor="#9FAFDF" width="340"><input type="submit" name="Login" value="Send">
									  <input type="reset" name="Clear" value="Clear"></td>
</tr>
								
</form>
</table>
</body>
</html>