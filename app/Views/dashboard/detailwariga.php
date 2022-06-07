<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header"><strong>Hari Baik Bepergian Berdasarkan Saptawara </strong></div>
                <div class="card-body">

                    <table id="vertical-1">
                        <?php foreach ($saptawara as $sapta) { ?>
                            <tr>
                                <td><?= $sapta['hari_pergi']; ?> </td>
                                <td> : </td>
                                <td><?= $sapta['keterangan']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <br><br><br><br><br><br>

                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="card-header"><strong>Sifat Anda Berdasarkan Pancasadha</strong></div>
                <div class="card-body">

                    <table id="vertical-1">

                        <tr>

                            <td><?= array_key_exists('pancasadha', $tanggal) ? $tanggal['pancasadha'] : "" ?></td>
                            <td><?= array_key_exists('sifat', $pancasudha) ? $pancasudha['sifat'] : "" ?></td>
                        </tr>

                    </table>


                </div>
            </div>

            <!-- <div class="col-md-4"> -->
            <div class="card">
                <div class="card-header"><strong>Sifat Anda Berdasarkan Pangasaran</strong></div>
                <div class="card-body">

                    <table id="vertical-1">
                        <tr>

                            <td><?= array_key_exists('pangarasan', $tanggal) ? $tanggal['pangarasan'] : "" ?></td>
                            <td><?= array_key_exists('sifat', $pangarasan) ? $pangarasan['sifat'] : "" ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header"><strong>Keberuntungan Sandang Pangan</strong></div>
                <div class="card-body">

                    <table id="vertical-1">

                        <tr>
                            <td>Umur : <?= $umur; ?> tahun</td>
                        </tr>
                        <tr>
                            <td>Keterangan : </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Urip : </td>
                            <td> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header"><strong>Hari Baik Anda Berdasarkan Pananggal</strong></div>
                <div class="card-body">

                    <table id="vertical-1">

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>