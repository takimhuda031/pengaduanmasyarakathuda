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
    /* CSS untuk tabel */
body {
  font-family: Arial, sans-serif;
  background-color: #f8f9fc;
  margin: 0;
  padding: 0;
}

.card {
  margin: 20px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-header {
  background-color: #4e73df;
  color: white;
  border-radius: 10px 10px 0 0;
  font-weight: bold;
  padding: 10px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
}

input[type="text"],
textarea,
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 5px;
  margin-bottom: 15px;
}

input[type="file"] {
  margin-top: 5px;
  margin-bottom: 15px;
}

.btn {
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #2e59d9;
}
  </style>
  

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header text-primary">
    Detail Pengaduan
  </div>
  <div class="card-body">
      <?php 
      require '../koneksi.php';
      $sql=mysql_query("select * from pengaduan where id_pengaduan='$_GET[id]'");
      $data=mysql_fetch_array($sql);
      if ($sql) {
      ?>
  <br>
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
     <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Isi laporan</label>
        <textarea name="isi_laporan" rows="7" class="form-control" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Bukti foto</label><br>
        <img src="../img/<?php echo $data['foto']; ?>" width=600>
      </div>
    </form>
  <?php } ?>
  </div>
  <div>
    <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
      </span>
      <span class="text">Kembali</span>
    </a>
  
    <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('yakin akan diproses?')">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Proses Verifikasi</span>
    </a>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>