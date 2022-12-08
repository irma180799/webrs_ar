<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/css/main.css">
    <link href="logo ar.png" rel="shortcut icon">
    <title>Info Kami</title>
</head>
<style>
    .banner-image {
        background-image: url(Ambulans.jpg);
        background-size: cover;
    }
</style>

<body>
    <?= $this->include('layout/navbar') ?>

    <!-- Banner Image  -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="auto" height="600px" src="Ambulans.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption banner-title d-none d-md-block">
                    <!-- <h5>Info Kami</h5> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Main content area -->
    <div class="container my-3 d-grid gap-3">
        <h6 class="display-6 fw-bold">Info Kami</h6>

        <div class="p-5 border container">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.6497072718282!2d114.17877888592236!3d-8.440996409869967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3ff9aaaaaaaab%3A0x6011304fcc153f27!2sRSU%20AL%20-%20Rohmah!5e0!3m2!1sid!2sid!4v1668167406168!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="p-5 border container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="display-6">Alamat</h6>
                    <p>Jalan Jenderal Ahmad Yani No.37, Dusun Petahunan, Jajag, Kec. Gambiran, Kabupaten Banyuwangi, Jawa Timur 68486</p>
                </div>
                <div class="col-md-6">

                    <h6 class="display-6">Social Media</h6>
                    <div class="d-flex social-media">
                        <a target="_blank" href="https://www.instagram.com/rsalrohmah/?igshid=YmMyMTA2M2Y%3D"><img width="48px" height="48px" src="<?= base_url('instagram.png') ?>" alt=""></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6282141028720&text=<?= urlencode('Saya ingin konsultasi') ?>"><img width="48px" height="48px" src="<?= base_url('whatsapp.png') ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/wa_chat') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></script>
    
    <?=$this->include('layout/script')?>
</body>

</html>