<?php
   $awal = microtime(true);
    $konek = mysqli_connect("localhost", "root", "123", "mqtt");

    //baca data dari database
    $sql = mysqli_query($konek, "select * from http_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $kelembabanT = $data['kelembabanT'];

    //uji
    if($kelembabanT == "") $kelembabanT = 0;
 //get time in micro seconds(1 millionth)
    //cek nilai suhu
   for ($i=1; $i<=10000000; $i++)
   {
      $kelembabanT;
   }

   $akhir =microtime(true);
   $lama = $akhir-$awal;
   $konversi = number_format($lama, 2);
   echo "<p>".$kelembabanT." % </p>";
   
   
    
   
    

?>
