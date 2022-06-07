<?= $this->extend('layout/frontend-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php if ($birth != null) { ?>
                        <a href="<?= route_to('detailfengshui', $birth) ?>" class="btn btn-success mb-3">Show Detail</a>
                    <?php } ?>
                    <br>
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Tahun Lahir</th>
                                <th scope="col">Angka Kua</th>
                                <th scope="col">Sifat Baik</th>
                                <th scope="col">Sifat Buruk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><?= $name ?></td>
                                <td><?= $gender ?></td>
                                <td><?= $birth ?></td>
                                <td><?= $mingkua ?></td>
                                <td><?= array_key_exists('sifat_baik', $fengshui) ? $fengshui['sifat_baik'] : "" ?></td>
                                <td><?= array_key_exists('sifat_buruk', $fengshui) ? $fengshui['sifat_buruk'] : "" ?></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header font-italic"><strong>Please input your name, gender <br>and year of birth</strong></div>
                <div class="card-body">
                    <form action="<?= route_to('fengshui'); ?>" method="GET" id="add-fengshui-form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name.." value="<?= $name ?>">
                            <span class="text-danger error-test name_error"></span>
                        </div>
                        <p>
                            <label for="gender">Gender</label><br>
                            <input type="radio" name="gender" value="Laki-laki"> Laki-laki <br>
                            <input type="radio" name="gender" value="Perempuan"> Perempuan <br>
                        </p>
                        <div class="form-group mt-3">
                            <label for="">Year of birth</label>
                            <input type="text" class="form-control" name="birth" placeholder="Enter your birth of date.." value="<?= $birth ?>">
                            <span class="text-danger error-test birth_error"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table table-striped table">
                            <thead>
                                <tr>
                                    <!--<th scope="col">Name</th>-->

                                    <th scope="col">Shio</th>
                                    <th scope="col">Konflik Shio</th>
                                    <th scope="col">Arah Rumah</th>
                                    <th scope="col">Bulan Baik Pindah Rumah</th>
                                    <th scope="col">Bulan Buruk Pindah Rumah</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><?= array_key_exists('jenis_shio', $pindah) ? $pindah['jenis_shio'] : "" ?></td>
                                    <td><?= array_key_exists('konflik', $pindah) ? $pindah['konflik'] : "" ?></td>
                                    <td><?= array_key_exists('arah', $pindah) ? $pindah['arah'] : "" ?></td>
                                    <td><?= array_key_exists('bulan_baik', $pindah) ? $pindah['bulan_baik'] : "" ?></td>
                                    <td><?= array_key_exists('bulan_buruk', $pindah) ? $pindah['bulan_buruk'] : "" ?></td>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endsection(); ?>