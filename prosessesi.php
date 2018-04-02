<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$sesi	= $_POST['sesi'];
	$waktu	= $_POST['waktu'];
	
	//validasi id mahasiswa dalam database

	//input data ke table mahasiswa dalam database akademik
	$input	="INSERT INTO sesi (sesi, waktu) VALUES ('$sesi', '$waktu')";
	$query_input =mysql_query($input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('Sesi Berhasil diinput!');
			document.location='input.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Sesi Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>