<!doctype html>
<html lang="en">
<style>
    .baca_selengkapnya {
        color: blue;
        cursor: pointer;
    }

    h1 {
        text-align: center;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="logo ar.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/css/main.css">
    <title>Info Kesehatan</title>
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
                    <!-- <h5>Info Kesehatan</h5> -->
                </div>
            </div>
        </div>
    </div>



    <div class="container my-3 d-grid gap-3">
        <h6 class="display-6 fw-bold">Artikel Kesehatan RSU Al-Rohmah</h6>
        <div class="p-5 border" , class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Minum air putih saat puasa</h5>
                            <img src="aturan minum air putih.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Ketika seseorang berpuasa, pada jam-jam tertentu tubuh akan kekurangan</p>
                            <span class="baca_selengkapnya" data-pesan="pesan">Baca Selengkapnya...</span>
                            <div class="pesan">
                                <p> Dikutip dari link wikipedia, jQuery itu bersifat gratis, dan bersifat kode sumber terbuka dibawah lisensi MIT.
                                    Sintaks pada jQuery didesain untuk memudahkan dalam navigasi sebuah dokumen, pemilihan elemen DOM, pembuatan animasi, penanganan event, dan pengembangan aplikasi berbasis Ajax. jQuery juga menyediakan kemampuan bagi para pengembang untuk dapat membuat plug-in pada pustaka JavaScript ini. Ini memungkinan mereka untuk membuat abstraksi pada interaksi dan animasi tingkat-rendah, efek lanjutan, serta tampilan widget yang dapat dimodifikasi. Pendekatan modular pada jQuery memungkinkan kita dalam pembuatan halaman Web yang dinamis dan aplikasi berbasis Web yang ajib.
                                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">
                                    </script>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $(".pesan").hide();
                                            $(".baca_selengkapnya").click(function() {
                                                pesan = $(this).data('pesan');
                                                $("." + pesan).slideDown('slow');
                                                $(this).hide();
                                            })
                                        });
                                    </script>
                                <p class="text-muted"> <i class="bi bi-calendar-check-fill"></i>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('d M Y', strtotime('2022-10-27'));
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kolesterol</h5>
                            <img src="kolesterol.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Ketika seseorang berpuasa, pada jam-jam tertentu tubuh akan kekurangan</p>
                            <span class="baca_selengkapnya" data-pesan="pesan2">Baca Selengkapnya...</span>
                            <div class="pesan2">
                                <p> Dikutip dari link alodokter.com, Kolesterol adalah salah satu jenis lemak yang terdapat di dalam tubuh.
                                    Kolesterol memiliki fungsi penting bagi tubuh. Namun, jika kadarnya melebihi batas normal, kolesterol akan menumpuk di pembuluh darah
                                    dan membentuk plak yang dapat menyumbat pembuluh darah <br> </p>
                                <p> Kolesterol adalah lemak yang diproduksi secara alami oleh organ hati. Lemak ini juga bisa ditemukan dalam makanan yang berasal dari hewan,
                                    seperti daging dan susu. Di dalam tubuh, kolesterol diperlukan untuk membentuk sel-sel sehat, memproduksi sejumlah hormon, dan menghasilkan vitamin D.
                                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">
                                    </script>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $(".pesan2").hide();
                                            $(".baca_selengkapnya").click(function() {
                                                pesan = $(this).data('pesan');
                                                $("." + pesan).slideDown('slow');
                                                $(this).hide();
                                            })
                                        });
                                    </script>
                                <p class="text-muted"> <i class="bi bi-calendar-check-fill"></i>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('d M Y', strtotime('2022-11-01'));
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/wa_chat') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></script>

    <?=$this->include('layout/script')?>
</body>

</html>