<?php
 
    $konek = mysqli_connect("localhost", "root", "", "mqtt");

    //baca data dari database
    $sql = mysqli_query($konek, "select * from mqtt_tabel order by id desc"); //data terakhir akan berada diatas

  
    //baca data atas
    $data = mysqli_fetch_array($sql);
    $moisture = $data['moisture'];

    //uji
    if($moisture == "") $moisture = 0;
 
    echo "<p>".$moisture." % </p>";
   
   
    
   
    

?>