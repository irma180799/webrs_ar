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
    <title>Daftar Dokter</title>
</head>
<style>
    .banner-image {
        background-image: url(Ambulans.jpg);
        background-size: cover;
    }

    .utama {
        width: 100%;
        overflow: hidden;
    }

    .isi {
        width: 50%;
        height: 100%;
        margin: auto;
        overflow: hidden;
    }

    .isi_gambar {
        width: 25%;
        float: left;
    }

    .isi2 {
        width: 400%;

    }

    .utama img {
        width: 100%;
        float: left;
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
                    <!-- <h5>Hak & Kewajiban Pasien</h5> -->
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5 d-grid gap-5">
        <div class="p-5 border">
            <h6 class="display-6 fw-bold">Hak dan Kewajiban Pasien</h6><br>
            <img src="hak kewajiban pasien.jpg" class="img-fluid" alt="...">
        </div>
    </div>

    <!-- <div class="utama">
        <div class="isi">
            <div class="isi2" id="slide">
                <div class="isi_gambar">
                    <img id="slide" src="mcu.jpg">
                </div>
                <div class="isi_gambar">
                    <img id="slide" src="lab.jpg">
                </div>
                <div class="isi_gambar">
                    <img id="slide" src="mcu.jpg">
                </div>
                <div class="isi_gambar">
                    <img id="slide" src="lab.jpg">
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript">
        var a = -100;
        setInterval(function() {
            if (a != 0) {
                slide = document.getElementById('slide');
                slide.style = "margin-left:" + a + "%;transition: 1s ease-in;";
                if (a == -300) {
                    a = 0;
                } else {
                    a = a + -100;
                }
                return a;

            } else {
                slide = document.getElementById('slide');
                slide.style = "margin-left:" + a + "%;";
                if (a == -300) {
                    a = 0;
                } else {
                    a = a + -100;
                }
                return a;
            }

        }, 2000);
    </script> -->

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/wa_chat') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></script>
    
    <?=$this->include('layout/script')?>
</body>

</html>