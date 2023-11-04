<?php
include 'connect.php';
$id_galeri = $_GET['id_galeri'];

$delete = mysqli_query($connect, "DELETE FROM galeri WHERE id_galeri= $id_galeri");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = '../upload.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = '../upload.php'
    </script>
<?php } ?>