<?php include 'header.php'; ?>

<body>
    <div class="container-fluid p-5 ">
        <div class="text-center fs-1  ">
            <a class="p-2 f-white rounded border borderdark bg-msg border-2 text-decoration-none shadow-lg ">Galeri</a>
        </div>
        <div class="row gy-4 p-5 border borderlight border-2 bg-msg shadow-lg">
            <?php
            $data = mysqli_query($connect, "SELECT * FROM galeri");
            foreach ($data as $row) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="col">
                        <div class="card border bordermsg border-4 shadow ">
                            <img src="<?= "img/fotogaleri/" . $row['gambar'] ?>" class="card-img-top img-fluid">
                            <div class="card-body border borderdark border-2 text-center shadow-lg">
                                <h5 class="card-title"><?= $row['keterangan'] ?></h5>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>