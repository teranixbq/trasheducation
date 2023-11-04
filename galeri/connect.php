<?php
$connect = mysqli_connect(
    '<host>',
    '<username>',
    '<password>',
    '<dbname>'
);
if (!$connect) {
    echo 'Gagal terhubung ke database';
    die;
}
