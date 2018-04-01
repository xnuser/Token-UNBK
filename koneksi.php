<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("MySQL Error !<br>");
		}
	$Koneksi = mysql_select_db("dev");
		if (!$Koneksi){
		die ("DBase Error !");
		}
?>