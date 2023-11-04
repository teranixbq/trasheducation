<div class="fw-normal">
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once "phpmail/PHPMailer.php";
    require_once "phpmail/Exception.php";
    require_once "phpmail/OAuth.php";
    require_once "phpmail/POP3.php";
    require_once "phpmail/SMTP.php";
    if (isset($_POST['kirim'])) {

        $mail = new PHPMailer;

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];

        $mail->isSMTP();
        $mail->Host = "tls://smtp.gmail.com"; //server
        $mail->SMTPAuth = true;

        //Email dan Password Akun Google
        $mail->Username = "<your email>";
        $mail->Password = "<your password>";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;


        $mail->setFrom('<your email client>', 'Client');
        $mail->addAddress($email, $nama); //email dan nama pengirim

        $mail->isHTML(true);
        $mail->Subject = $subjek; //subject
        $mail->Body    = $pesan; //isi email
        $mail->addReplyTo($email); //membalas pesan dari pengirim

        if (!$mail->send()) { ?>
            <div class="mt-3">
                <a class="alert alert-danger text-decoration-none" role="alert">
                    <?php echo "Gagal Mengirim Periksa Kembali ! "; ?>
                </a>
            </div>
        <?php } else { ?>
            <div class="mt-3">
                <a class="alert alert-success text-decoration-none" role="alert">
                    <?php echo "Pesan Berhasil Terkirim"; ?>
                </a>
            </div>
    <?php }
    }
    ?>
</div>