<?php

    $konek = mysqli_connect("localhost", "root", "123", "mqtt");
    if(!$konek) {
        die("Koneksi gagal:". mysqli_connect_error());
    }
    //baca data dari database
    $sql = mysqli_query($konek, "select * from mqtt_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $suhu = $data['respon_suhu'];

    //uji
    if($suhu == "") $suhu = 0;
   echo "<p>Waktu respon adalah: ".$suhu." detik </p>";

?>
