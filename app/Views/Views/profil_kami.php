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
    <title>Beranda</title>
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
    <!-- <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn btn-light btn-lg" type="button">GET STARTED</button>
        </div>

    </div> -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="auto" height="600px" src="ambulans.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img width="auto" height="600px" src="pilihan igd.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="ambulans.jpg" class="img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pilihan igd.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->



    <!-- Main content area -->
    <div class="container-sm">
        <div class="container my-5 d-grid gap-5">
            <div class="p-5 border">
                <h6 class="display-6" class="fw-bold">Sejarah RSU Al-Rohmah</h6><br>
                <!-- <div class="clearfix">
                    <img src="IGD DEPAN 2.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..."> -->

                <p>
                    Berawal dorongan untuk membantu masyarakat di daerah Jajag – Banyuwangi agar lebih dekat dengan fasilitas kesehatan,
                    Ikatan Persatuan Haji Indonesia yang merupakan penggagas pertama menghimpun bersama tokoh masyarakat berperan aktif
                    dalam memenuhi kebutuhan masyarakat akan kesehatan serta sebagai upaya dalam syiar agama Islam melalui aktivitas bakti sosial
                    dan kemasyarakatan yang awalnya merupakan Balai Pengobatan Al - Rohmah dan berkembang hingga saat ini menjadi Rumah Sakit Umum Al - Rohmah.
                </p>

                <p>
                    Rumah Sakit yang berlokasi di jantung Kecamatan Gambiran Desa Jajag, tepatnya di Jl. A Yani No. 37 Jajag - Banyuwangi mulai beroperasi pada tanggal
                    30 Agustsus 1995 dengan jumlah tempat tidur adalah 3 tempat tidur. Lokasi berada di depan kantor Kecamatan Gambiran yang merupakan gerbang wilayah Banyuwangi Selatan,
                    sehingga mempermudah masyarakat dalam mengakses pelayanan Rumah Sakit Umum Al - Rohmah.
                </p>

                <p>
                    Pada tahun 2003 RSU Al - Rohmah menjadi rumah sakit khusus ibu dan anak. Seiring berjalannya waktu kemudian di tahun 2015 s/d sekarang menjadi rumah sakit umum kelas D dan bekerja sama dengan BPJS Kesehatan.
                </p>
            </div>
            <!-- </div> -->
        </div>

        <div class="container-sm">
            <div class="p-5 border">
                <h6 class="display-6">Visi</h6>
                <p>
                    Menjadi Rumah Sakit pilihan utama masyarakat yang bermutu dan paripurna<br>
                    <br>
                <h6 class="display-6">Misi</h6>
                <p>
                    1. Memberikan pelayanan yang terjangkau dengan berfokus pada kepuasan dan keselamatan pasien serta pelanggan lainnya<br>
                    2. Menyediakan tenaga kerja yang terampil serta sarana dan prasarana yang memadai<br>
                    <br>
                <h6 class="display-6">Motto</h6>
                <p>
                    Layananku Ibadahku
            </div>
        </div><br><br>


        <div class="container-sm">
            <div class="p-5 border">
                <h6 class="display-6">Standar Pelayanan Kualitas RSU Al-Rohmah</h6><br>
                <div class="container my-3 d-grid gap-3">
                    <table class="table align-middle">
                        <thead>
                            <tr class="table-active">
                                <th scope="col">NO</th>
                                <th scope="col" class="col-sm-2 col-md-12">Akreditasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sudah terakreditasi versi 2007 pada tanggal 5 Desember tahun 2011 dengan hasil Akreditasi Penuh</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tahun 2016 terakreditasi versi 2012 pada tanggal 14 Desember 2016 dengan hasil lulus perdana</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Tahun 2017 melaksanakan Survey Verifikasi Akreditasi Progsus versi 2012 dan tambahan 6 BAB</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Tahun 2018 melaksanakan Survey Verifikasi ke 2 Akreditasi Progsus versi 2012, 6 Pokja lanjutan ditambah 5 progsus</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Tahun 2019 merencanakan Akreditasi versi SNARS BAB I pada tahun 2019</td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><br><br>

        <div class="container-sm">
            <div class="p-5 border">
                <h6 class="display-6">SDM RSU Al-Rohmah</h6><br>
                <img src="Struktur organisasi AR Update.png" class="img-fluid img-thumbnail" alt="">
                <div class="container my-3 d-grid gap-3">
                    <table class="table align-middle">
                        <thead>
                            <tr class="table-active">
                                <th scope="col">NO</th>
                                <th scope="col" class="col-sm-2 col-md-4">Jabatan Struktural</th>
                                <th scope="col" class="col-sm-2 col-md-4">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Direktur</td>
                                <td>drg. Asri Kusuma Djadi, MMR</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Wadir Keuangan & Umum</td>
                                <td>Rahajeng Windaresti, SE, MMRS</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>KaBid Penunjang</td>
                                <td>Ns. Indah Lestari Wahyuningsih, S.Kep</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>KaBid YanMed</td>
                                <td>dr. Khadiroh Putri Firdaus</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>KaBid Keperawatan</td>
                                <td>Ns. Moh. Ghozi, S.Kep</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>KaBag Keuangan</td>
                                <td>Yoyon Sudarwanto</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>KaBag Umum & Perencanaan</td>
                                <td>Gihartik</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>KasuBag Kepegawaian</td>
                                <td>Andespa Yuanita N, A.Md</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>KasuBag Tata Usaha</td>
                                <td>Agustina Pipit, SKM</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>KasuBag Perlengkapan</td>
                                <td>Yoyok Dwi Romadhon</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        1. Dokter Spesialis : 9 Orang<br>
                        2. Dokter Umum : 6 Orang<br>
                        3. Dokter Gigi : 1 Orang<br>
                        4. Perawat : 40 Orang <br>
                        5. Bidan : 10 Orang <br>
                        6. Fisioterapi : 1 Orang <br>
                        7. Penunjang Medis : 21 Orang <br>
                        8. Umum : 40 Orang
                </div>
            </div>
        </div>
    </div><br><br>

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/wa_chat') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></script>

    <?= $this->include('layout/script') ?>
</body>

</html>