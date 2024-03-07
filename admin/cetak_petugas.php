<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pengaduan masyarakat - admin</title>
  <style>
  /* Custom CSS for the print button */
  .btn-warning {
    margin: 20px;
  }

  /* Custom CSS for the iframe */
  iframe {
    margin: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  /* Custom CSS for the table borders */
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
</style>


  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <h3 class="m-0 font-weight-bold" align="center">PEMERINTAH KABUPATEN MUARO JAMBI</h3>
              <h4 class="m-0 font-weight-bold" align="center">DESA TALANG BUKIT KEC BAHAR UTARA</h4>
              <h6 class="m-0 font-weight-bold" align="center">Jalan Utama Desa Talang Bukit Kode Pos 36365</h6>
              <br><br>
              <h5 class="m-0 font-weight-bold" align="center">Laporan Petugas</h5>
              <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>ID petugas</th>
                      <th>Nama petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telp</th>
                      <th>Level</th>
                    </tr>
                  <?php 
                    require '../koneksi.php';
                    $sql=mysql_query("Select * from petugas");
                    while ($data=mysql_fetch_array($sql)) {
                      ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>

                <br><br>
                <h6 class="m-0 font-weight-bold" align="right">Talang Bukit, <?php echo date('d m y'); ?></h6>
                 <h6 class="m-0 font-weight-bold" align="right">Petugas,</h6><br><br><br>
                  <h6 class="m-0 font-weight-bold" align="right"><?php echo $_SESSION['nama']; ?></h6>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
