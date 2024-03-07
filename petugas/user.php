<!DOCTYPE html>
<html lang="en">
<div class="card-body">
    <form action="username.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group cols-sm-6">
        <label>username</label>
        <?php echo '<input type="text" name="username" value='.rand(0000, 9999).' class="form-control" readonly>'; ?>
      </div>
      <div class="card-body">
    <form action="password.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group cols-sm-6">
        <label>password</label>
        <?php echo '<input type="text" name="password" value='.rand(0000, 9999).' class="form-control" readonly>'; ?>
      </div>
      <div class="card-body">
    <form action="validasi.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group cols-sm-6">
        <label>validasi</label>
        <?php echo '<input type="text" name="validasi" value='.rand(0000, 9999).' class="form-control" readonly>'; ?>
      </div>