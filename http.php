
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Paho Mqtt --!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Protocol Http</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready( function() {

        setInterval( function() {
          $("#ceksuhu").load('./http/ceksuhu.php');
          $("#cekkelembabanU").load('./http/cekkelembabanU.php');
          $("#cekkelembabanT").load('./http/cekkelembabanT.php');
          $("#respon_suhu").load('./http/respon_suhu.php');
          $("#respon_kelembabanU").load('./http/respon_kelembabanU.php');
          $("#respon_kelembabanT").load('./http/respon_kelembabanT.php');
        }, 1000);

      });
    </script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mqtt & Http <sup>Protocol</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-server"></i>
                    <span>Mqtt Protocol</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http.php">
                    <i class="fas fa-fw fa-server"></i>
                    <span>Http Protocol</span></a>
            </li>

            <!-- Nav Item - Tables
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Tabel</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4 class="text-center h3 mb-4 text-gray-80" style="font-weight: bold;"><i>Monitoring Sensor Menggunakan HTTP</i></h4>
                    <div class="row">
                        <div class="col-sm-4">
                             <div class="card" style="text-align: center;">
                                <div class="card-header" style="background-color: #fff; font-weight:bold; color: rgba(0, 128, 225, 0.8); font-size: 12px;">Suhu</div>
                                    <div class="card-body">
                                    <img src="img/suhu.png" alt="" style="width:44px;"><br><br>
                                    <h5 id="ceksuhu"  name="far" class="card-title" style="font-size: 42px;" >0</h5><br>
                                     <p id="tgl" style="color: rgba(0, 128, 225, 0.8); font-weight:bold;"></p>
                                    </div>
                                <div class="card-footer" style="background-color: #fff; color: #000; font-size: 17px;"> <p id="respon_suhu" class="card-title" style="font-size: 20px;">Waktu Respon</p><br></div>
                            </div>
                        </div>

                    <div class="col-sm-4">
                        <div class="card" style="text-align: center;">
                            <div class="card-header" style="background-color: #fff; font-weight:bold; color: rgba(0, 128, 225, 0.8); font-size: 12px;">Kelembaban Udara</div>
                                 <div class="card-body">
                                    <img src="img/hum.png" alt="" style="width:44px;"><br><br>
                                    
                                    <h5 id="cekkelembabanU" class="card-title" style="font-size: 42px;">0</h5><br>
                                    <p id="tgl1" style="color: rgba(0, 128, 225, 0.8); font-weight:bold;"></p>
                                    </div>
                                <div class="card-footer" style="background-color: #fff; color: #000; font-size: 17px;"> <p id="respon_kelembabanU"  name="timeF" class="card-title" style="font-size: 20px;">Waktu Respon</p><br></div>
                            </div>
                        </div>

                    <div class="col-sm-4">
                        <div class="card" style="text-align: center;">
                            <div class="card-header" style="background-color: #fff; font-weight:bold; color: rgba(0, 128, 225, 0.8); font-size: 12px;">Kelembaban Tanah</div>
                                <div class="card-body">
                                    <img src="img/moisture.png" alt="" style="width:44px;"><br><br>
                                    <h5 id="cekkelembabanT"  name="hum" class="card-title" style="font-size: 42px;">0</h5><br>
                                    <p id="tgl2" style="color: rgba(0, 128, 225, 0.8); font-weight:bold;"></p>               
                                </div>
                            <div class="card-footer" style="background-color: #fff; color: #000; font-size: 17px;"> <p id="respon_kelembabanT" class="card-title" style="font-size: 20px;">Waktu Respon</p><br></div>
                        </div>
                    </div>

                                   <!-- Earnings (Monthly) Card Example -->
  

        

          
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Mqtt and Http Client 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<script>
  var today = new Date();
  var days = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

var sekarang =  days[today.getDay()];
today = sekarang + ',' + ' ' + mm + '-' + dd + '-' + yyyy;
document.getElementById("tgl").innerHTML = today;
document.getElementById("tgl1").innerHTML = today;
document.getElementById("tgl2").innerHTML = today;
  // console.log(today);
  
</script>
 

</body>

</html>
