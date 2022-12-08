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
        <h6 class="display-6">Artikel Kesehatan RSU Al-Rohmah</h6>
        <div class="p-5 border" , class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manfaat Mengonsumsi Buah Lemon</h5>
                            <img src="manfaat konsumsi buah lemon.jpeg" class="card-img-top" alt="...">
                            <p class="card-text"><br>Di balik rasanya yang asam, ada banyak sekali manfaat lemon yang sayang untuk dilewatkan. </p>
                            <span class="baca_selengkapnya" data-pesan="pesan">Baca Selengkapnya...</span>
                            <div class="pesan">
                                <p>Lemon mengandung beragam nutrisi yang menjadikannya baik untuk kesehatan, mulai dari
                                    meningkatkan daya tahan tubuh hingga mencegah penyakit jantung. <br>
                                    Lemon merupakan salah satu buah yang cukup banyak dikonsumsi oleh masyarakat Indonesia. Rasanya yang asam membuat lemon
                                    jarang dikonsumsi langsung, sehingga sering dicampur dengan makanan atau minuman lain, seperti salad atau teh hangat, untuk
                                    memberikan cita rasa yang segar. <br><br>
                                    Maka, kita harus lebih rajin mengonsumsi lemon dalam keseharian karena banyak manfaatnya. Untuk informasi dan konsultasi lebih
                                    lanjut oleh ahli Gizi kami.
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
                            <h5 class="card-title">Manfaat Madu Menghilangkan Jerawat</h5>
                            <img src="manfaat madu menghilangkan jerawat.jpeg" class="card-img-top" alt="...">
                            <p class="card-text"><br>Madu sudah tak asing kita temui dalam berbagai produk, baik madu murni, olahan, atau makanan dan minuman ringan. </p>
                            <span class="baca_selengkapnya" data-pesan="pesan2">Baca Selengkapnya...</span>
                            <div class="pesan2">
                                <p>Madu merupakan hasil hubungan simbiosis mutualisme antara lebah dan tanaman.
                                    Madu sangat populer dalam dunia kesehatan, karena penggunaannya yang sejak dulu sebagai obat tradisional. Selain enak dikonsumsi, madu juga bermanfaat
                                    untuk kesehatan kulit wajah. <br><br>
                                    Manfaat madu untuk wajah semakin maksimal jika dikombinasikan dengan bahan alami lainnya. Madu menjadi bahan alami yang cukup efektif
                                    untuk mengatasi jerawat. Kandungan antioksidan, antibakteri, dan nutrisi lainnya mampu membuat kondisi kulit tetap terjaga. <br><br>
                                    Madu memiliki kandungan antibakteri dan antiradang yang digunakan sebagai bahan alami untuk mengatasi jerawat. Menghilangkan bekas luka jerawat dengan madu cukup mudah,
                                    kamu dapat menjadikan madu sebagai salah satu bahan masker untuk wajah. Madu juga berfungsi sebagai pelembab alami untuk kulit wajah sehingga menurunkan risiko peradangan.
                                </p>
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
                                    echo date('d M Y', strtotime('2022-11-18'));
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penyebab Anak Tiba-Tiba Demam</h5>
                            <img src="penyebab anak tiba tiba demam.jpeg" class="card-img-top" alt="...">
                            <p class="card-text"><br>Demam pada anak adalah kondisi demam yang dialami oleh anak-anak.</p>
                            <span class="baca_selengkapnya" data-pesan="pesan3">Baca Selengkapnya...</span>
                            <div class="pesan3">
                                <p>Demam terjadi ketika suhu tubuh anak melebihi batas normal, yaitu di atas 37,2 derajat celcius, apabila pengukuran dilakukan dari ketiak dan 37,8 derajat
                                    celcius saat diukur melalui mulut. Kebanyakan demam pada anak disebabkan oleh infeksi atau oenyakit tertentu. Suhu tubuh yang tinggi dapat
                                    mempersulit bakteri dan virus penyebab infeksi untuk bertahan hidup.Bisa jadi demam pada anak merupakan bentuk pertahanan tubuh yang berarti
                                    baik. Namun, penting juga untuk tetap waspada.
                                </p>
                                <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">
                                </script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $(".pesan3").hide();
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
                                    echo date('d M Y', strtotime('2022-11-15'));
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tips Atasi Demam</h5>
                            <img src="tips atasi demam.jpeg" class="card-img-top" alt="...">
                            <p class="card-text">Orang tua tidak perlu khawatir apabila Si Kecil mengalami demam</p>
                            <span class="baca_selengkapnya" data-pesan="pesan4">Baca Selengkapnya...</span>
                            <div class="pesan4">
                                <p>merupakan pertanda bahwa sistem kekebalan tubuh sedang bekerja melawan infeksi yang masuk ke dalam tubuh. Orang tua bisa mencegah
                                    demam pada anak dengan mengajarkan anak beberapa metode untuk menjaga kebersihan diri. <br><br>
                                    Menurunkan demam anak memang bisa dilakukan dengan perawatan rumahan. Namun orang tua perlu memantau dengan jeli perkembangan perawatan
                                    yang diberikan. Bila demam tak kunjung mereda setelah 2 hari sebaiknya segera membawanya ke dokter.
                                </p>
                                <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">
                                </script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $(".pesan4").hide();
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
                                    echo date('d M Y', strtotime('2022-11-18'));
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


    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-light', 'shadow');
            } else {
                nav.classList.remove('bg-light', 'shadow');
            }
        });
    </script>
</body>

</html>