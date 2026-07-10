<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container">
        <h1>Terima Kasih!</h1>
        <p>Feedback kamu sudah kami terima.</p>
        <a href="<?= site_url('contact') ?>" class="button button-primary">Kembali</a>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>