<?php include 'header.php'; ?>
<div class="pt-5 text-center fs-3 ">
    <a class="p-2 f-white rounded border-bottom border-end borderdark bg-msg border-3 text-decoration-none shadow-lg ">Hubungi Kami</a>
</div>
<form method="POST">
    <div class="container content-center my-4 p-4 bg-msg fw-bold">
        <div class="container p-3 bordermsg border-5 shadow-lg">
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label class="form-label px-2 rounded-pill bg-light shadow ">Nama</label>
                        <input type="text" class="form-control border border-4 shadow-lg" name="nama" placeholder="Nama">
                    </div>
                    <div class="col">
                        <label class="form-label px-2 rounded-pill bg-light shadow">Email</label>
                        <input type="email" class="form-control border border-4 shadow-lg" name="email" placeholder="example@gmail.com">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label px-2 rounded-pill bg-light shadow">Subjek</label>
                <input type="text" class="form-control border border-4 shadow-lg " name="subjek" placeholder="Subjek">
            </div>
            <div class="mb-3 ">
                <label class="form-label px-2 rounded-pill bg-light shadow">Pesan</label>
                <textarea class="form-control border border-4 shadow-lg" name="pesan" rows="3"></textarea>
            </div>
            <button type="submit" name="kirim" class="btn btn-light btn-md borderdark border-bottom border-3 shadow-lg">Kirim</button>

        </div>
        <?php include 'kirim.php'; ?>

    </div>

</form>

<!-- id="exampleFormControlTextarea1"  -->
<?php include 'footer.php'; ?>