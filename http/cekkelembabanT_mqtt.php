<?php
   $awal = microtime(true);
    $konek = mysqli_connect("localhost", "root", "", "testing");

    //baca data dari database
    $sql = mysqli_query($konek, "select * from tes_tbl order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $humidity = $data['kelembaban'];

    //uji
    if($humidity == "") $humidity = 0;
 //get time in micro seconds(1 millionth)
    //cek nilai suhu
   for ($i=1; $i<=10000000; $i++)
   {
      $humidity;
   }

   $akhir =microtime(true);
   $lama = $akhir-$awal;
   $konversi = number_format($lama, 2);
   // echo "<p>Waktu respon adalah: ".$konversi." detik </p>";
   echo $humidity;
   
    
   
    

?>