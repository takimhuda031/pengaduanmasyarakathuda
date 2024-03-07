<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pangaduan masyarakat - masyarakat</title>
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
</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header font-weight-bold text-primary">
    Tulis Pengaduan
  </div>
  <div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group cols-sm-6">
        <label>ID Pengaduan</label>
        <?php echo '<input type="text" name="id_pengaduan" value='.rand(0000, 9999).' class="form-control" readonly>'; ?>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tanggal pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/y'); ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $_SESSION['nama']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis laporan</label>
        <textarea name="isi_laporan" rows="7" class="form-control"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Unggah foto</label>
        <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif">
        <font color="red"> *tipe yang bisa diupload adalah .jpg, .jpeg, .png, .gif</font>
      </div>
      <div class="form-group cols-sm-6">
        <input type="submit" value="simpan" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
    </form>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
