
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-sm">
            <a href="beranda" class="navbar-brand"></a>
            <img src="logo ar.png" alt="" width="115" height="80">
            <button data-trigger="navbar_main" type="button" class="navbar-toggler" data-bs-target="navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="beranda" class="nav-link" class="fw-bolder"> Home</a>
                    <li class="nav-item">
                        <a href="jadwal_dokter" class="nav-link" class="fw-bolder">Jadwal Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a href="layanan" class="nav-link" class="fw-bolder"> Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="info_kesehatan" class="nav-link" class="fw-bolder"> Info Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a href="hak_kewajiban_pasien" class="nav-link" class="fw-bolder"> Hak & Kewajiban Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a href="infokami" class="nav-link" class="fw-bolder"> Info Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark d-lg-none">
        <div class="container-fluid">
            <div class="offcanvas-header">  
                <button class="btn-close float-end"></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="beranda">Home </a> </li>
                <li class="nav-item"><a class="nav-link" href="jadwal_dokter"> Jadwal Dokter </a></li>
                <li class="nav-item"><a class="nav-link" href="layanan"> Layanan </a></li>
                <li class="nav-item active"> <a class="nav-link" href="info_kesehatan">Info Kesehatan </a> </li>
                <li class="nav-item"><a class="nav-link" href="hak_kewajiban_pasien"> Hak & Kewajiban Pasien </a></li>
                <li class="nav-item"><a class="nav-link" href="infokami"> Info Kami </a></li>
            </ul>
        </div> <!-- container-fluid.// -->
    </nav>

    <script>
        
        function close_offcanvas(){
            document.querySelector('.mobile-offcanvas.show').classList.remove('show');
            document.body.classList.remove('offcanvas-active');
        }

        function show_offcanvas(offcanvas_id){
            console.log(offcanvas_id);
            document.getElementById(offcanvas_id).classList.add('show');
            document.body.classList.add('offcanvas-active');
        }

        document.addEventListener("DOMContentLoaded", function(){
        
            document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
                let offcanvas_id = everyelement.getAttribute('data-trigger');
                console.log(offcanvas_id);
                everyelement.addEventListener('click', function (e) {
                e.preventDefault();
                    show_offcanvas(offcanvas_id);
                });
            });

            document.querySelectorAll('.btn-close').forEach(function(everybutton){
                everybutton.addEventListener('click', function (e) { 
                    close_offcanvas();
                });
            });

        }); 
    </script>