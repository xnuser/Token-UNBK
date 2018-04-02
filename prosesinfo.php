<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$info	= $_POST['info'];
	
	//validasi id mahasiswa dalam database

	//input data ke table mahasiswa dalam database akademik
	$input	="INSERT INTO informasi (info) VALUES ('$info')";
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