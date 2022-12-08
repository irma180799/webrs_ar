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
    <title>Layanan</title>
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
                    <!-- <h5>Layanan</h5> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Main content area -->
    <div class="container my-3 d-grid gap-3">
        <h6 class="display-6">Layanan RSU Al-Rohmah</h6>
        <div class="p-5 border" , class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="ambulans.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ambulans 24 Jam</h5>
                            <p class="card-text">Tersedia Ambulans 24 jam yang siaga melayani pasien dengan segera, cepat, tepat, dan aman.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="pilihan igd.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UGD 24 Jam</h5>
                            <p class="card-text">Unit layanan medis yang beroperasi 24 jam dengan menyediakan penanganan bagi pasien gawat darurat yang dilakukan oleh Dokter Umum dan Perawat yang berpengalaman. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="poli rajal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Poliklinik Rawat Jalan</h5>
                            <p class="card-text">Poliklinik merupakan salah satu layanan di rumah sakit yang memberikan pelayanan rawat jalan kepada pasien, sesuai dengan spesialisasi yang dibutuhkannya. Di RSU Al-Rohmah tersedia 10 macam poliklinik yang ditangani oleh para dokter senior. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="ifrs.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Instalasi Farmasi</h5>
                            <p class="card-text">Instalasi Farmasi adalah unit pelaksana fungsional yang menyelenggarakan seluruh kegiatan pelayanan kefarmasian di Rumah Sakit.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="vaksin.Jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Vaksinasi</h5>
                            <p class="card-text">Vaksinasi Covid-19 dalam rangka untuk mengurangi penyebaran virus corona dan mencegah terjadinya dampak buruk.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="hhhh.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Radiologi</h5>
                            <p class="card-text">Pemeriksaan radiologi membantu dokter dalam upaya mendiagnosis dan mengobati penyakit dengan memberi pasien informasi dari hasil tes radiologi yang tepat waktu dan dapat diandalkan.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="kelas vip.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Rawat Inap Dewasa</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="kamar rawat inap anak.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Rawat Inap Anak</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="HCU.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HCU</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="picu nicu2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PICU</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="picu nicu2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NICU</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="KAMAR BERSALIN (VK).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Bersalin (VK)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="OK.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Operasi (OK)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="USG KANDUNGAN (4D).JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">USG Kandungan 4D</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="USG ABDOMEN.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">USG Abdomen</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div><br></br>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="lab 2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Labolatorium</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card h-100">
                        <img src="USG KANDUNGAN (4D).JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">USG Kandungan 4D</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col">
                    <div class="card h-100">
                        <img src="USG ABDOMEN.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">USG Abdomen</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div> -->
            </div>



        </div>
    </div><br>

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