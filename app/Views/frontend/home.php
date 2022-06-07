<?= $this->extend('layout/frontend-layout'); ?>

<?= $this->section('content'); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="image/war1.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Welcome to Fengshui and Wariga Belog Application</h3>
                        <h1 class="display-3 text-white mb-3">Ketahui Ramalan Hari Baik dan Sifatmu di Sini</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Jangan sampai salah langkah dalam menentukan hari untuk event spesialmu!</h5>
                        <a href="<?= route_to('fengshui') ?>" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Ramalan Fengshui</a>
                        <a href="<?= route_to('wariga') ?>" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Wariga Belog</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="image/feng.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Welcome to Fengshui and Wariga Belog Application</h3>
                        <h1 class="display-3 text-white mb-3">Ramalan Berdasarkan Riset dari Para Ahli</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Don't forget to share this website to your friends and family!</h5>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-10 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">About Us</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Wariga Belog</span> & <span class="text-secondary">Fengshui</span></h1>
            <h5 class="text-muted mb-3">Aplikasi Wariga Belog dan Fengshui ini dibangun untuk memenuhi project akhir mata kuliah Integrasi dan Migrasi Sistem 2022.</h5>
            <p class="mb-4">Aplikasi ini dibangun oleh dua orang, Meira dan Widi menggunakan Framework Bahasa PHP : Codeigniter Versi 4</p>
            <ul class="list-inline">
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat perhitungan hari baik bepergian berdasarkan saptawara</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat ramalan sifat berdasarkan panca sadha dan pangarasan</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat ramalan sifat berdasarkan angka</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat perhitungan hari baik pindah rumah berdasarkan shio</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat ramalan sifat berdasarkan shio</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>Memuat rekomendasi jenis usaha berdasarkan shio</h5>
                </li>
            </ul>
            <a href="<?= route_to('user.about') ?>" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Our Services</h4>
        </div>
        <div class="row pb-3">
            <div class="col-md-8 col-lg-6 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Fengshui</h3>
                    <p>Fengshui atau hongsui berasal dari bahasa Mandarin 風 (fēng) yang berarti angin dan 水 (shuǐ) yang berarti air adalah sistem Cina kuno yang memuat pengaturan spasial, struktur atau tempat, dan orientasi yang berhubungan dengan aliran energi agar selaras dengan kekuatan rohani yang menghuni tempat itu sehingga dapat hidup dalam harmoni.</p>
                    <a class="text-uppercase font-weight-bold" href="<?= route_to('fengshui') ?>">Get Started</a>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Wariga Belog</h3>
                    <p>Wariga belog didasarkan pada perhitungan-perhitungan urip atau neptu baik dari individu sendiri maupun dengan urip atau neptu dari alam. Oleh karena itu, prinsip penataan perilaku individu selalu ditekankan pada penerapan dan pengalaman masing-masing individu sebagai bentuk kesadaran individu akan kehidupannya dengan alam.</p>
                    <a class="text-uppercase font-weight-bold" href="<?= route_to('wariga') ?>">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Team Start -->
<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Team Member</h4>
        <h1 class="display-4 m-0">Meet Our <span class="text-primary">Team Member</span></h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-8">
            <div class="team card position-center overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="image/meira.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Nyoman Meira Dewantari Armi</h5>
                        <i>2005551120 - MB C</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-8">
            <div class="team card position-center overflow-hidden border-0 mb-4">
                <img class="card-img-top" src="image/photo_2022-06-07_08-44-14.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Ni Kadek Widiartini</h5>
                        <i>2005551128 - MB C</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">More Info</h4>
        <h1 class="display-4 m-0"><span class="text-primary">Blog</span> Tentang Wariga Belog dan Fengshui</h1>
    </div>
    <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="image/shio.jpg" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Kepribadian berdasarkan shio seseorang</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="image/kp.jpg" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Kepribadian seseorang berdasarkan wariga</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="image/Screenshot 2022-06-07 053048.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Penentuan Hari Baik</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<?= $this->endsection(); ?>