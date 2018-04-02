<html>
<head>
<title>SMK NEGERI 2 SPN</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<script>
function CloseAndRefresh()
  {
     opener.location.reload(true);
     self.close();
  }
</script>
<div id="wrapper">
  <div id="header"><h2><b>
UJIAN NASIONAL BERBASIS KOMPUTER (UNBK)</br>
 
</b></h2></div>
<div id="navigasi">
<marquee>
Selamat Datang PROTEK SMK Negeri 2 Sungai Penuh
</marquee>
</div>
<div id="kiri"><h2>TOKEN SERVER 3:</h2></br>

	<form action="prosestoken3.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


		<tr>
			<td height="40">&nbsp;</td>
			<td>TOKEN :</td>
			<td><input type="text" name="token" size="12"></td>
		</tr>
		
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>


</div>
</div>
<div id="tengah"><h2>TOKEN SERVER 2:</h2></br>
	<form action="prosestoken2.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


		<tr>
			<td height="40">&nbsp;</td>
			<td>TOKEN :</td>
			<td><input type="text" name="token" size="12"></td>
		</tr>
		
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>

</div>
<div id="kanan"><h2>TOKEN SERVER 1:</h2></br>
	<form action="prosestoken1.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


		<tr>
			<td height="40">&nbsp;</td>
			<td>TOKEN :</td>
			<td><input type="text" name="token" size="12"></td>
		</tr>
		
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>

</div>
<div class="clear">
</div>
<div id="footer">
	<form action="prosesinfo.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="40">&nbsp;</td>
			<td>&nbsp;</td>
			<td><font size="4" color="blue"><b>Masukan Informasi</b></font></td>
		</tr>

		<tr>
			<td height="40">&nbsp;</td>
			<td>informasi :</td>
			<td><textarea rows="4" cols="50" name="info"></textarea></td>
			
		</tr>
		
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>
</br>
	<form action="prosessesi.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="40">&nbsp;</td>
			<td>&nbsp;</td>
			<td><font size="4" color="blue"><b>ATUR SESI</b></font></td>
		</tr>

		<tr>
			<td height="40">&nbsp;</td>
			<td>SESI :</td>
			<td><input type="text" name="sesi" size="2" value="1"></td>
			<td>WAKTU :</td>
			<td><input type="text" name="waktu" size="25" value="08.00 - 10.00 WIB"></td>
			
		</tr>
		
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>
</body>
</html>
