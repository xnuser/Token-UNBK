<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$token	= $_POST['token'];

	//validasi id mahasiswa dalam database

	//input data ke table mahasiswa dalam database akademik
	$input	="INSERT INTO token3 (token)
			VALUES ('$token')";
	$query_input =mysql_query($input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('Token Server 3 Berhasil diinput!');
			document.location='input.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Token Server 3  Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>