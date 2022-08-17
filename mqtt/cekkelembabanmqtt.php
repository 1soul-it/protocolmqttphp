<?php

    $konek = mysqli_connect("localhost", "root", "123", "mqtt");

    //baca data dari database
    $sql = mysqli_query($konek, "select * from mqtt_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $kelembaban = $data['kelembaban'];

    //uji
    if($kelembaban == "") $kelembaban = 0;
 
   echo "<p>".$kelembaban." % </p>";
   
    
   
    

?>
