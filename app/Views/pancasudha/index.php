<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4 mb-3">Daftar Panca Sudha</h1>
            <table class="table table-striped table-info">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pancasudha</th>
                        <th scope="col">Sifat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($panca as $p) : ?>
                        <tr>

                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['pancasudha']; ?></td>
                            <td><?= $p['sifat']; ?></td>
                            <td><a href="/pancasudha/<?= $p['slug']; ?>" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>