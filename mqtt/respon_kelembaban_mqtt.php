<?php

    $konek = mysqli_connect("localhost", "root", "", "mqtt");
    if(!$konek) {
        die("Koneksi gagal:". mysqli_connect_error());
    }
    //baca data dari database
    $sql = mysqli_query($konek, "select * from mqtt_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $kelembaban = $data['respon_kelembaban'];

    //uji
    if($kelembaban == "") $kelembaban = 0;
   echo "<p>Waktu respon adalah: ".$kelembaban." detik </p>";

?>