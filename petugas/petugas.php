
<?php
session_start();
if (!isset($_SESSION['nama'])) {
  die("anda belum login");
}if ($_SESSION['level']!="petugas") {
  die("anda bukan petugas");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pangaduan masyarakat - petugas</title>
  <style>
   /* Sidebar */
#accordionSidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 225px;
  z-index: 1;
  background: #f8d7da; /* gradient-warning */
  color: #ffffff;
  transition: all 0.3s;
}

#accordionSidebar .sidebar-brand {
  padding: 0.5rem 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
}

#accordionSidebar .sidebar-brand .sidebar-brand-icon {
  margin-right: 0.5rem;
}

#accordionSidebar .sidebar-brand-text {
  font-weight: bold;
}

#accordionSidebar .nav-item {
  margin-top: 15px;
}

#accordionSidebar .nav-item a {
  color: #ffffff;
  padding: 0.5rem 1rem;
  display: block;
}

#accordionSidebar .nav-item a:hover {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.1);
}

#accordionSidebar .active {
  background-color: rgba(255, 255, 255, 0.1);
}

/* Content Wrapper */
#content-wrapper {
  margin-left: 225px;
  transition: all 0.3s;
}

/* Topbar */
.topbar {
  background-color: #ffffff;
  border-bottom: 1px solid #e3e6f0;
  transition: all 0.3s;
}

/* Footer */
.sticky-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: #ffffff;
  border-top: 1px solid #e3e6f0;
  padding: 10px 0;
}

/* Responsive Sidebar */
@media (min-width: 768px) {
  #accordionSidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 225px;
    z-index: 1;
    background: green; /* gradient-warning */
    color: #ffffff;
  }

  #accordionSidebar .nav-item {
    margin-top: 15px;
  }

  #accordionSidebar .nav-item a {
    color: #ffffff;
  }

  #accordionSidebar .nav-item a:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
  }

  #accordionSidebar .active {
    background-color: rgba(255, 255, 255, 0.1);
  }

  /* Content Wrapper */
  #content-wrapper {
    margin-left: 130px;
  }
}

  </style>


  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column" style=":padding: 5px;">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa- keyboard"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Desa Talang Bukit</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="petugas.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item -  -->
      <li class="nav-item">
        <a class="nav-link" href="?url=verifikasi_pengaduan">
          <i class="fas fa-edit"></i>
          <span>Verifikasi Pengaduan</span></a>
      </li>

      <!-- Nav Item -  -->
      <li class="nav-item">
        <a class="nav-link" href="../logout2.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>keluar</span></a>
      </li>

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
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h1>Aplikasi pelaporan pengaduan masyarakat</h1>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <?php include 'halaman_petugas.php'; ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <!-- <span>Copyright &copy; Your Website 2019</span> -->
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

  <!-- Logout Modal-->

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
