<html>
<head>
	<title>View Data Mahasiswa</title>
</head>
<body>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM token1 ORDER BY token DESC LIMIT 1";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['token']);
				{
	?>
	<P><?=$token?><div align="center"></div></p>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
	</table>
</body>
</html>