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
</style>

<body>
    <?= $this->include('layout/navbar') ?>

    <!-- Banner Image  -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="auto" height="600px" src="Ambulans.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption banner-title d-none d-md-block">
                    <!-- <h5>Jadwal Dokter</h5> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Main content area -->
    <div class="container-sm">
        <div class="p-5 border">
            <h6 class="display-6 fw-bold">Jadwal Dokter RSU Al-Rohmah</h6>
            <!-- <div class="container my-3 d-grid gap-3"> -->
            <table class="table align-middle">
                <thead>
                    <tr class="table-active">
                        <th scope="col">NO</th>
                        <th scope="col">POLI</th>
                        <th scope="col">DOKTER</th>
                        <th scope="col">HARI</th>
                        <th scope="col">JADWAL</th>
                        <!-- <th scope="col" class="col-sm-2 col-md-12">JENIS LAYANAN</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Poli Gigi</td>
                        <td>drg Suliyani</td>
                        <td>Senin s.d Sabtu</td>
                        <td>08.00-13.00 WIB</td>
                        <!-- <td>Bracket, Scalling, Veneer, gigi tiruan, dsb</td> -->
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Poli Spesialis Penyakit Dalam</td>
                        <td>dr. Fitri Primadani, Sp.PD</td>
                        <td>Senin s.d Jumat</td>
                        <td>12.30-14.30 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Sabtu</td>
                        <td>12.30-14.30 WIB (Dengan Perjanjian)</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>dr. Rizky Satya Pradana, Sp.PD</td>
                        <td>Senin s.d Jumat</td>
                        <td>08.00-11.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Rabu s.d Kamis</td>
                        <td>19.30-21.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Sabtu</td>
                        <td>08.00-10.00 WIB (Dengan Perjanjian)</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Poli Spesialis Mata</td>
                        <td>dr. Yoan Ary Widyanti, Sp.M</td>
                        <td>Senin, Selasa, & Kamis</td>
                        <td>09.00-11.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Poli Spesialis Orthopedi & Traumatologi</td>
                        <td>dr. Risandy Harry P, Sp.OT</td>
                        <td>Selasa & Kamis</td>
                        <td>07.00 s.d Selesai</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Poli Gizi</td>
                        <td>Agista Rahardiyani, S.ST, Gz</td>
                        <td>Senin s.d Sabtu</td>
                        <td>09.00 - 13.00 WIB</td>
                        <!-- <td>Konsultasi diit penyakit, peningkatan/penurunan berat badan, gizi anak, & gizi usia lanjut</td> -->
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Poli Umum</td>
                        <td>dr. Dwi Sunu Budhiardjo</td>
                        <td>Selasa, Kamis, & Sabtu</td>
                        <td>08.00 - 13.30 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Poli Spesialis Anak</td>
                        <td>dr. Karel Anggrek, Sp. A</td>
                        <td>Senin-Sabtu</td>
                        <td>11.30 - 13.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Poli Spesialis Kandungan</td>
                        <td>dr. Norman Yusuf, Sp. OG</td>
                        <td>Senin, Rabu, & Jumat</td>
                        <td>07.00 - 08.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Poli Spesialis Bedah</td>
                        <td>dr. Caryl Augustine J, M.Biomed, Sp. B</td>
                        <td>Senin, Rabu, & Sabtu</td>
                        <td>09.00 - 11.00 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Poli Spesialis Radiologi</td>
                        <td>dr. Satinta Febrianti, Sp. Rad</td>
                        <td>Selasa & Kamis</td>
                        <td>13.00 - 14.30 WIB</td>
                        <!-- <td>-</td> -->
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Jumat</td>
                        <td>12.00-13.30 WIB (Dengan Perjanjian)</td>
                        <!-- <td>-</td> -->
                    </tr>
                </tbody>
            </table>
            <!-- </div> -->
        </div>
    </div><br>

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/wa_chat') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></script>
    
    <?=$this->include('layout/script')?>
</body>

</html>