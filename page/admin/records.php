<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Residence Records</title>
  <link rel="icon" href="assets/img/qr.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<!--factory 1-98-->
<section class="content">
<div class="container-fluid">
<div class="row">  
<div class="col-lg-12 col-12">
<div class="card card">
<div class="card-header">
<h2 style="font-size: 30px; text-align: center;"><b>Recidence Records</b></h2>
</div>


<div class="card-body">
     <div class="row">
                    <div class="col-12">
                       <div class="card-body p-0" style="height: 100vh;">
                <table class="table table-head-fixed text-nowrap table-hover" id="">
                <thead style="text-align:center;">
                    <th>Fullname</th>
                    <th>Suffix</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Contact No</th>
                    <th>Occupation</th>
                    <th>Citizenship</th>
                    <th>Complete Address</th>
                    <th>Fully Vaccinated</th>
                    <th>Voter</th>
            </thead>
            <tbody style="text-align:center;">
            <?php
                include '../../process/conn.php';
                ini_set("memory_limit", "-1");
                set_time_limit(60000);
                $query = "SELECT * FROM resident_details";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    foreach($stmt->fetchAll() as $j){
                        echo '<tr>
                            <td>'.strtoupper($j['full_name']).'</td>
                            <td>'.strtoupper($j['suffix']).'</td>
                            <td>'.$j['Birthdate'].'</td>
                            <td>'.$j['age'].'</td>
                            <td>'.strtoupper($j['gender']).'</td>
                            <td>'.strtoupper($j['civil_status']).'</td>
                            <td>'.$j['contact_no'].'</td>
                            <td>'.strtoupper($j['occupation']).'</td>
                            <td>'.strtoupper($j['citizenship']).'</td>
                            <td>'.$j['complete_address'].'</td>
                            <td>'.strtoupper($j['vaccinated']).'</td>
                            <td>'.strtoupper($j['voters']).'</td>
                        </tr>';       
                    }
                }
            ?>
            </tbody>
                </table>
              </div>
                    </div>
                  </div>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="node_modules/jquery/../../dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- toastr -->
<script type="text/javascript" src="node_modules/sweetalert/../../dist/sweetalert.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<script type="text/javascript">
   var printCount =1;
    var waiting_time=printCount * 500;
    setTimeout(print_data, waiting_time);
    function print_data(){  
         window.print();
    }
</script>
</body>
</html>