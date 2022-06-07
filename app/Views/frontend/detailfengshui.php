<?= $this->extend('layout/frontend-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Kepribadian Anda Berdasarkan Shio Anda</strong></div>
                <div class="card-body">
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <th scope="col">Angka</th>
                                <th scope="col">Shio</th>
                                <th scope="col">Kepribadian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $angkashio ?></td>
                                <td><?= array_key_exists('shio', $usaha) ? $usaha['shio'] : "" ?></td>
                                <td><?= array_key_exists('kepribadian', $shio) ? $shio['kepribadian'] : "" ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header"><strong>Rekomendasi Jenis Usaha Berdasarkan Shio Anda</strong></div>
                <div class="card-body">
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <th scope="col">Angka</th>
                                <th scope="col">Shio</th>
                                <th scope="col">Jenis Usaha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $angkashio ?></td>
                                <td><?= array_key_exists('shio', $usaha) ? $usaha['shio'] : "" ?></td>
                                <td><?= array_key_exists('jenis_usaha', $usaha) ? $usaha['jenis_usaha'] : "" ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>