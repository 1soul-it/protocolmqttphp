<?php
   $awal = microtime(true);
    $konek = mysqli_connect("localhost", "root", "123", "mqtt");
    if(!$konek) {
        die("Koneksi gagal:". mysqli_connect_error());
    }
    //baca data dari database
    $sql = mysqli_query($konek, "select * from http_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $kelembabanU = $data['kelembabanU'];

    //uji
    if($kelembabanU == "") $kelembabanU = 0;
 //get time in micro seconds(1 millionth)
    //cek nilai suhu
   for ($i=1; $i<=10000000; $i++)
   {
      $kelembabanU;
   }

   $akhir =microtime(true);
   $lama = $akhir-$awal;
   $konversi = number_format($lama, 2);
   

   echo "<p>Waktu respon adalah: ".$konversi." detik </p>";
   
    
   
    

?>
