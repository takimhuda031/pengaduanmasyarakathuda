<?php
require 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $id = $_POST['id_pengaduan'];
    $tgl = date('y/m/d');
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $isi = $_POST['isi_laporan'];
    $foto = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];
    $status = 0;

    // Query untuk menyimpan data pengaduan
    $sql = mysql_query("INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, nama, isi_laporan, foto, status) VALUES ('$id', '$tgl', '$nik', '$nama', '$isi', '$foto', '$status')");

    // Pindahkan file foto ke direktori yang ditentukan
    move_uploaded_file($file, "img/" . $foto);

    // Periksa apakah query berhasil dijalankan
    if ($sql) {
        echo '<script type="text/javascript">';
        echo 'alert("Data berhasil disimpan!");';
        echo 'window.location.href = "masyarakat.php?url=lihat_pengaduan";';
        echo '</script>';
    } else {
        // Jika query gagal, tampilkan pesan kesalahan
        echo "Error: " . mysql_error();
    }
}
?>
