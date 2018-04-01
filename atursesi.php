<html>
<head>
	<title>Input Token Server 1</title>
</head>
<body>
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
			<td><input type="text" name="sesi" size="2"></td>
			<td>WAKTU :</td>
			<td><input type="text" name="waktu" size="25"></td>
			
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