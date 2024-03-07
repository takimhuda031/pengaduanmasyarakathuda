<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pengaduan masyarakat - Login</title>
  <style>
    /* Custom CSS for styled form */
/* Custom CSS for styled form */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background: linear-gradient(to bottom, #778899 0%, white 50%, #778899 100%);
}

.container {
  width: 100%;
  max-width: 400px;
}

.card {
  border: none;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #000;
  color: #fff;
}

.card-body {
  padding: 60px;
}

.form-control {
  border-radius: 25px;
  color: #000; /* Mengubah warna teks menjadi hitam */
  font-size: 1.1rem;
}

.btn-user {
  border-radius: 25px;
  font-size: 1.1rem;
}

.text-center {
  margin-bottom: 20px;
  color: #fff;
}

.small {
  font-size: 0.9rem;
  color: #fff;
}

</style>
 

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">aplikasi pengaduan masyarakat</h1>
                  </div>
                  <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="masukkan username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="login!">
                    </a>
                  <hr>
                  <div class="text-center">
                    belum punya akun?
                    <a class="small" href="register.php">register</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index2.php">Masuk sebagai admin / petugas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

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
