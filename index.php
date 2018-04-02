<html>
<head>
<title>SMK NEGERI 2 SPN</title>
<link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/slider-def.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="wrapper">
  <div id="header"><h2><b>
UJIAN NASIONAL BERBASIS KOMPUTER (UNBK)</br></br>
 <?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM sesi WHERE no IN
		(
		SELECT max(no) as no FROM sesi ORDER BY sesi
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['sesi']);
				{
	?>
SESI: <?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?></br><?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM sesi WHERE no IN
		(
		SELECT max(no) as no FROM sesi ORDER BY waktu
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['waktu']);
				{
	?>
WAKTU: <?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</b></h2></div>
<div id="navigasi">
<marquee>
<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM informasi WHERE no IN
		(
		SELECT max(no) as no FROM informasi ORDER BY info
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['info']);
				{
	?>
	<?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</marquee>
</div>
<div id="kiri"><h2>TOKEN SERVER 3:</h2></br><div id="token"><b>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM token3 WHERE no IN
		(
		SELECT max(no) as no FROM token3 ORDER BY token
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['token']);
				{
	?>
	<?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</b></div></div>
</div>
<div id="tengah"><h2>TOKEN SERVER 2:</h2></br><div id="token"><b>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM token2 WHERE no IN
		(
		SELECT max(no) as no FROM token2 ORDER BY token
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['token']);
				{
	?>
	<?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</b></div>
</div>
<div id="kanan"><h2>TOKEN SERVER 1:</h2></br><div id="token"><b>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat	="SELECT * FROM token1 WHERE no IN
		(
		SELECT max(no) as no FROM token1 ORDER BY token
		)";
		$Tampil = mysql_query($Lihat);
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$token	= stripslashes ($hasil['token']);
				{
	?>
	<?=$token?><div align="center"></div>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</b></div>
</div>
<div class="clear">
</div>
<div id="footer">
</br>
<div>

<!-- Slider -->
    <div id="slider">
      <div class="slides">
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>WELCOME</h1>
              <h2>Selamat datang di Laboratorium Komputer SMK Negeri 2 Sungai Penuh. SMK Negeri 2 Sungai Penuh merupakan SMK Rujukan di Kota Sungai Penuh.</br>
              memiliki 7 Program Keahlian yang sudah terakreditasi. </h2>
            </div>
          </div>
          <div class="image">
            <img src="img/1.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Mari Jujur Demi Masa Depan</h1>
              <h2>Hastag Ujian Nasional Berbasis Komputer saat tahun ini masih mengutamakan masalah Kejujuran, agar kita tak lengah bahwa KEJUJURAN merupakan keberhasilan yang nyata.</h2>
            </div>
          </div>
          <div class="image">
            <img src="img/2.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Albert Enstein</h1>
              <h2>Creativity is contagious, Pass it on.</h2>
            </div>
          </div>
          <div class="image">
            <img src="img/3.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Mamfaatkan Waktu sebaik mungkin</h1>
              <h2>Sangat bijaksana jika kita memanfaatkan waktu sebaik mungkin, sifat gegabah hanya akan membawa anda ke jalan yang salah.</h2>
            </div>
          </div>
          <div class="image">
            <img src="img/4.jpg">
          </div>
        </div>
      </div>
      <div class="switch">
        <ul>
          <li>
            <div class="on"></div>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>

</div>

</script></div></br></br></br></br></br></br></br></br></br>
<div align="center">
<h2>DISELANGGARAKAN OLEH:</br>SMK NEGERI 2 SUNGAI PENUH</br>&copy 2018</h2></div>
</div>
</div>
<div align="center">
Powered By Wira Ade Putra</div>
</body>
</html>
