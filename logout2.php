<?php
session_start();
unset($_SESSION['nama']);
session_destroy();
header('location:index2.php');
?>