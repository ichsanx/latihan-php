<?php
# Konek ke WEb Server Lokal
$myHost = "localhost";
$myuser = "root";
$mypass = "";
$mydbs  = "sipusta"; // nama database

# Konek ke Web Server Lokal
$koneksidb = mysql_connect ($myhost, $myuser, $mypass);
if (! $koneksidb) {
	echo "Koneksi MySql gagal, periksa Host/ User/ Password-nya
!";
	}
	
	# Memilih database pd MySQL Server
	mysql_select_db ($mydbs) or die ("Database <b>$myDbs</b> tidak
ditemukan !");
	?>