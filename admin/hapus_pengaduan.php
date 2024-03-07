<?php
// Menghubungkan ke database
require '../koneksi.php';

$id=$_GET['id'];

$sql = mysql_query("DELETE FROM pengaduan WHERE id_pengaduan = '$id'");

if ($sql) { ?>

        <script type="text/javascript">
            alert('Data berhasil dihapus');
            window.location='admin.php?url=lihat_pengaduan';
        </script>
<?php } ?>