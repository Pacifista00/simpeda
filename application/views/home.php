<div style="min-height:100vh;" class="position-relative">
    <!-- Jumbotron start -->
    <div class="jumbotron p-5 overflow-hidden">
        <div class="container">
            <div class="container text-start">
                <div class="hero row align-items-start">
                    <div class="jumbotitle col-9 mt-5 mb-5 pb-1">
                        <h1 class="display-2 fw-bold">SELAMAT DATANG!</h1>
                        <p class="col-md-8 fs-5">Atur penggunaan <span>Listrik</span>mu sebaik mungkin. Masa depan bisa menyala dengan hemat <span>Energi</span>.</p>
                        <a href="<?= base_url('auth'); ?>"><button class="btn btn-primary btn-lg tombol ms-0 mb-5">Let's Go!</button></a>
                    </div>
                    <div class="colright col-3 jumboimg">
                        <img src="<?= base_url('assets/icons/Saly-16.png'); ?>" alt="Saly">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron end -->
    <!-- content start -->
    <section class="page-section mt-5 mb-5 pt-5" id="services" >
        <div class="container">
            <div class="text-center title">
                <h2 class="section-heading text-uppercase text-black">Services</h2>
                <h3 class="section-subheading text-muted">Fitur apa saja yang tersedia disini.</h3>
            </div>
            <div class="row text-center mt-5" style="font-family: Montserrat;">
                <div class="content col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="<?= base_url('assets/icons/Flash.png'); ?>" alt="">
                    </span>
                    <h4 class="text-black">Cepat</h4>
                    <p class="text-muted">Monitoring dapat dilakukan dimanapun hanya dengan menyediakan koneksi internet.</p>
                </div>
                <div class="content col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="<?= base_url('assets/icons/Clock.png'); ?>" alt="">
                    </span>
                    <h4 class="text-black">Real-Time</h4>
                    <p class="text-muted">Pemantauan pada alat dilakukan dalam waktu nyata atau secara langsung.</p>
                </div>
                <div class="content col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="<?= base_url('assets/icons/Chart.png'); ?>" alt="">
                    </span>
                    <h4 class="text-black">Akurat</h4>
                    <p class="text-muted">Akurasi data yang ditampilkan dari hasil monitoring cukup akurat.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- content end -->

    <!-- contact us start-->
    <div class="container mb-5">
        <div class="text-center mt-5 pt-5 contactform title">
            <h2 class="section-heading text-uppercase text-black">Mengalami masalah?</h2>
            <h3 class="section-subheading text-muted mb-4">Jangan ragu untuk bertanya pada kami.</h3>
            <a href="https://api.whatsapp.com/send?phone=6285157212192" class="btn btn-primary tombol mb-5">Tanyakan</a>
        </div>
    </div>
    <!-- contact us end -->
</div>