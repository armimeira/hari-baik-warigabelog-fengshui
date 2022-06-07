<?= $this->extend('layout/frontend-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><strong>Hari Baik Berpergian Berdasarkan Saptawara </strong></div>
                <div class="card-body">

                    <table id="vertical-1">
                        <?php foreach ($saptawara as $sapta) { ?>
                            <tr>
                                <td><?= $sapta['hari_pergi']; ?></td>
                                <td><?= $sapta['keterangan']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-2">
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
            <div class="card mt-2">
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
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Hari Baik/Buruk Berdasarkan Penanggal</strong></div>
                <div class="card-body">
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <!--<th scope="col">Name</th>-->

                                <th scope="col">Pananggal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kategori Hari</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?= array_key_exists('pananggal', $tanggal) ? $tanggal['pananggal'] : "" ?></td>
                                <td> <?= array_key_exists('keterangan', $panang) ? $panang['keterangan'] : "" ?></td>
                                <td><?= array_key_exists('kategori_hari', $panang) ? $panang['kategori_hari'] : "" ?></td>

                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card mt-2">
                <div class="card-header"><strong>Hari Baik/Buruk Berdasarkan Sasih</strong></div>
                <div class="card-body">
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <!--<th scope="col">Name</th>-->

                                <th scope="col">Bulan</th>
                                <th scope="col">Sasih</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kategori Hari</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?= array_key_exists('sasih', $tanggal) ? $tanggal['sasih'] : "" ?></td>
                                <td><?= array_key_exists('sasih', $sasih) ? $sasih['sasih'] : "" ?></td>
                                <td><?= array_key_exists('keterangan', $sasih) ? $sasih['keterangan'] : "" ?></td>
                                <td><?= array_key_exists('kategori_hari', $sasih) ? $sasih['kategori_hari'] : "" ?></td>

                                </td>
                            </tr>


                        </tbody>

                    </table>
                </div>
            </div>

            <!-- <div class="col-md-4"> -->
        </div>
    </div>
</div>
<?= $this->endsection(); ?>