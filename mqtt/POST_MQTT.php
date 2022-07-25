 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "mqtt");
 if(isset($_POST["SUHU"]) && isset($_POST["HUMIDITY"]) && isset($_POST["MOISTURE"]) && isset($_POST["RESPON_SUHU"]) && isset($_POST["RESPON_KELEMBABAN"]) && isset($_POST["RESPON_MOISTURE"]))
 {
  $suhu = mysqli_real_escape_string($connect, $_POST["SUHU"]);
  $kelembaban = mysqli_real_escape_string($connect, $_POST["HUMIDITY"]);
  $moisture = mysqli_real_escape_string($connect, $_POST["MOISTURE"]);
  $Respon_Suhu = mysqli_real_escape_string($connect, $_POST["RESPON_SUHU"]);
  $Respon_Kelembaban = mysqli_real_escape_string($connect, $_POST["RESPON_KELEMBABAN"]);
  $Respon_Moisture = mysqli_real_escape_string($connect, $_POST["RESPON_MOISTURE"]);
  if($_POST["Id"] != '')  
  {  
    //update post  
    $sql = "UPDATE mqtt_tabel SET suhu = '".$suhu."', kelembaban = '".$kelembaban."', moisture = '".$moisture."', respon_suhu = '".$Respon_Suhu."', respon_kelembaban = '".$Respon_Kelembaban."', respon_moisture = '".$Respon_Moisture." WHERE id = '".$_POST["Id"]."'";  
    mysqli_query($connect, $sql);  
  }  
  else  
  {  
    //insert post  
    $sql = "INSERT INTO mqtt_tabel(suhu,kelembaban,moisture,respon_suhu,respon_kelembaban,respon_moisture) VALUES ('".$suhu."', '".$kelembaban."', '".$moisture."','".$Respon_Suhu."', '".$Respon_Kelembaban."', '".$Respon_Moisture."')";  
    mysqli_query($connect, $sql);  
    echo mysqli_insert_id($connect);  
  }
 }  
 ?> 