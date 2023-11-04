<!-- content -->


<?php include_once 'header.php'; ?>


<div class="container my-5 p-5">
    <div class="pb-4 text-center fs-3 ">
        <a class="p-2 f-white rounded border-bottom border-end borderdark bg-msg border-3 text-decoration-none shadow-lg ">Upload Foto</a>
    </div>
    <div class="card im-box">
        <h5 class="card-header">Upload Foto</h5>
        <div class="card-body">
            <button type="button" class="btn btn-success bg-msg borderdark border-2" data-bs-toggle="modal" data-bs-target="#upload">
                Tambah Foto
            </button>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Keterangan</th>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $data = mysqli_query($connect, "SELECT * FROM galeri");
                    foreach ($data as $row) :  ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><img src="<?= "img/fotogaleri/" . $row['gambar'] ?>" width="70" height="70"></td>
                            <td><?= substr($row['keterangan'], 0, 200) . '.' ?></td>
                            <td>
                                <a class="badge bg-danger" href="galeri/galeri_hapus.php?id_galeri=<?= $row['id_galeri'] ?>" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ./content -->


<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Tambah Gambar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="galeri/galeri_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
                        <label for="">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="3" cols="100"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="uploadgambar" class="btn btn-success">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>