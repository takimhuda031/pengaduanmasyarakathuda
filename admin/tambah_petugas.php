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
    /* Custom CSS for form */
.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

select {
  cursor: pointer;
}

input[type="submit"],
input[type="reset"] {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #0056b3;
}

.btn-primary {
  background-color: #4e73df;
  border-color: #4e73df;
}

.btn-primary:hover {
  background-color: #2e59d9;
  border-color: #2653d4;
}

.btn-warning {
  background-color: #f6c23e;
  border-color: #f6c23e;
}

.btn-warning:hover {
  background-color: #f4b30d;
  border-color: #f4b30d;
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
  <div class="card-header font-weight-bold text-primary">
    Tambah Petugas
  </div>
  <div class="card-body">
    <form action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label for="id_petugas">id petugas :</label>
        <?php echo '<input class="form-control" type="text" readonly value= '.rand(1, 25) . ' name="id_petugas">'; ?>
      </div>
      <div class="form-group cols-sm-6">
        <label>Nama petugas</label>
        <input type="text" name="nama_petugas" value="" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Username</label>
        <input type="text" name="username" value="" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Password</label>
        <input type="text" name="password" value="" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Telp</label>
        <input type="text" name="telp" value="" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Level</label>
        <select class="form-control" name="level">
          <option>==pilih==</option>
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select>
      </div>
      <div class="form-group cols-sm-6">
        <input type="submit" value="simpan" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
    </form>
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