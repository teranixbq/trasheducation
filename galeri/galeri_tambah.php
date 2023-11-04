<?php
include 'connect.php';

$gambar = isset($_POST['gambar']);
$keterangan = $_POST['keterangan'];


//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$filetmp = $_FILES['gambar']['tmp_name'];
$uploadfile = "../img/fotogaleri/";

move_uploaded_file($filetmp, $uploadfile . $namafile);

$query = "INSERT INTO galeri(gambar, keterangan) VALUES('$namafile', '$keterangan')";

$result = mysqli_query($connect, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = '../upload.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = '../upload.php'
    </script>
<?php } ?>