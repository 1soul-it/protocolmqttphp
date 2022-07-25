<?php
$awal = microtime(true);
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "" ,"mqtt");

//baca data yang dikirim esp32
$suhu =$_GET['suhu'];
for ($a=1; $a<=10000000; $a++)
   {
      $suhu;
   }

   $akhir1 =microtime(true);
   $lama1 = $akhir1-$awal;
   $konversi1 = number_format($lama1, 2);

$KelembabanUdara=$_GET['kelembabanU'];
for ($b=1; $b<=10000000; $b++)
   {
      $KelembabanUdara;
   }

   $akhir2 =microtime(true);
   $lama2 = $akhir2-$awal;
   $konversi2 = number_format($lama2, 2);
$KelembabanTanah =$_GET['kelembabanT'];
for ($c=1; $c<=10000000; $c++)
   {
      $KelembabanTanah;
   }

   $akhir3 =microtime(true);
   $lama3 = $akhir3-$awal;
   $konversi3 = number_format($lama3, 2);

//mengembalikan id menjadi 1 jika kosong
mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
//simpan data sensor ke table tb_sensor

$simpan = mysqli_query($konek, "INSERT INTO http_tabel(suhu,kelembabanU,kelembabanT,respon_suhu,respon_kelembabanU,respon_kelembabanT)
VALUES('$suhu','$KelembabanUdara','$KelembabanTanah','$konversi1','$konversi2','$konversi3')");

if($simpan)
    echo"berhasil disimpan";
else 
    echo"gagal simpan";


?>