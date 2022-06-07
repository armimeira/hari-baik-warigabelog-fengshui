<?= $this->extend('layout/frontend-layout'); ?>

<?= $this->section('content'); ?>
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
            <a href="" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
        </div>
    </div>
</div>
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
<!-- About End -->
<?= $this->endsection(); ?>