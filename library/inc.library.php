<?php
#script set zona waktu berdasarkan yang ada dikomputer
date_default_timezone_set ("Asia/Jakarta");
?>

	function buatkode($tabel, $inisial) {
		$struktur 	= mysql_query("select * FROM $tabel");
        $field 		= mysql_field_name($struktur,0);
        $panjang	= mysql_field_len($struktur,0);
        
        $qry		= mysql_query("SELECT MAX(".$field.") FROM
".$tabel);
		$row		= mysql_fetch_array($qry);
        if ($row(0)=="") {
        		$angka=0;
        }
        else {
        		$angka = substr($row[0], strlen($inisial));
        }
        
        $angka++;
        $angka =strval($angka);
        $tmp	= "";
        for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka));
$i++) {
			$tmp=$tmp."0";
        }
        return $inisial.$tmp.$angka;
      }
      
      
$kodebaru = buatkode("siswa", "S"); #dengan script berikut maka hasil akan tersimpan di dalam variable $kodebaru

#script fungsi untuk membalik format tanggal dari indonesa (day-month-year) ke english (year-month-day)
function InggrisTgl ($tanggal){
	$tgl=substr($tanggal,0,2);
    $bln=substr($tanggal,3,2);
    $thn=substr($tanggal,6,4);
    $awal="thn-$bln-$tgl";
    return $awal;
}

#untuk memanggil syntax diatas anda tinggal memanggilnya misal
#contoh
$tanggal="04-03-2013";
echo InggrisTgl ($tanggal);

#hasil
2013-03-04

#script fungsi untuk membalik format tanggal dari english (year-month-day)ke indonesa (day-month-year)
function IndonesiaTgl($tanggal1){
	$tgl=substr($tanggal,8,2);
    $bln=subtsr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
    $awal="$tgl-$bln-$thn";
    return $awal;
} 

#untuk memanggil syntax diatas anda tinggal memanggilnya misal
#contoh
$tanggal="2013-03-04";
echo IndonesiaTgl ($tanggal);

#hasil
04-03-2013

#membuat format untuk tampilan angka misal 1000000 menjadi 1.000.000, berikut scriptcnya
function format_angka($angka) {
	$hasil = number_format ($angka,0, ",",".");
    return $hasil;
}

#untuk memanggil fungsi diatas
#contoh 1
echo format_angka(1000000);

#contoh 2
$uang = 1000000;
echo format_angka($uang);


 