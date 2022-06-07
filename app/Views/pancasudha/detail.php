<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4 mb-3">Detail Panca Sudha</h2>
            <div class="card">
                <div class="card-header">
                    Panca Sudha
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $panca['pancasudha']; ?></h5>
                    <p class="card-text"><b>Sifat : <?= $panca['sifat']; ?></b></p>
                    <a href="/pancasudha" class="btn btn-primary">BACK</a>
                    <a href="/pancasudha" class="btn btn-warning">EDIT</a>
                    <a href="/pancasudha" class="btn btn-danger">DELETE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>