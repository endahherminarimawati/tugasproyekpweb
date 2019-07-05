<?php
//init
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];
//deklarasi variable dan memasukan data nama yang di ambil dari daftar.html melalui method=POST
//deklarasi variable dan memasukan data kelamin yang di ambil dari daftar.html melalui method=POST
//deklarasi variable dan memasukan data agama yang di ambil dari daftar.html melalui method=POST
//deklarasi variable dan memasukan data alamat yang di ambil dari daftar.html melalui method=POST
//deklarasi variable dan memasukan data jurusan1 yang di ambil dari daftar.html melalui method=POST
//deklarasi variable dan memasukan data jurusan2 yang di ambil dari daftar.html melalui method=POST

//write to nama data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $nama);
fwrite($txtdata,"\t");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat jarak dengan tab
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

//write to jenis kelamin data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $kelamin);
fwrite($txtdata,"\t");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat jarak dengan tab
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

//write to agama data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $agama);
fwrite($txtdata,"\t");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat jarak dengan tab
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

//write to alamat data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $alamat);
fwrite($txtdata,"\t");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat jarak dengan tab
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

//write to jurusan1 data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $jurusan1);
fwrite($txtdata,"\t");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat jarak dengan tab
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

//write to jurusan2 data
$txtdata = fopen("../tugas/data/data.txt","a");
fwrite($txtdata, $jurusan2);
fwrite($txtdata,"\n");
fclose($txtdata);
//data yang sudah diinputkan akan disimpan ke file data.txt serta dibuka file(fopen)
//untuk menulis data yang sudah diisi secara otomatis ke folder data dengan file data.txt yang sudah diinput di folder daftar.php
//membuat baris baru
//sebagai penutup sebuah file yang sudah di buka dan ditulis sebelumnya 

$message = "Berhasil di simpan";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script>location.href='/tugas/daftar.html';</script>";

?>