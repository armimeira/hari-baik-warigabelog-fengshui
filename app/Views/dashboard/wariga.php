<?= $this->extend('layout/dashboard-layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php if ($birth != null) { ?>
                        <a href="<?= route_to('detailwariga', $birth) ?>" class="btn btn-primary">Show Detail</a>
                    <?php } ?>
                    <br>
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <th scope="col">Wuku</th>
                                <th scope="col">Saptawara</th>
                                <th scope="col">Pancasadha</th>
                                <th scope="col">Pangarasan</th>
                                <th scope="col">Sasih</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= array_key_exists('wuku', $tanggal) ? $tanggal['wuku'] : "" ?></td>
                                <td><?= array_key_exists('saptawara', $tanggal) ? $tanggal['saptawara'] : "" ?></td>
                                <td><?= array_key_exists('pancasadha', $tanggal) ? $tanggal['pancasadha'] : "" ?></td>
                                <td><?= array_key_exists('pangarasan', $tanggal) ? $tanggal['pangarasan'] : "" ?></td>
                                <td><?= array_key_exists('sasih', $tanggal) ? $tanggal['sasih'] : "" ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header font-italic"><strong>Please input your name and birth of date</strong></div>
                <div class="card-body">
                    <form action="<?= route_to('wariga'); ?>" method="GET" id="add-wariga-form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name.." value="<?= $name ?>">
                            <span class="text-danger error-test name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Birth of date</label>
                            <input type="text" class="form-control datepicker" name="birth" id="birth" placeholder="yyyy-mm-dd" value="<?= $birth ?>">
                            <span class=" text-danger error-test birth_error"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-warning">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table">
                        <thead>
                            <tr>
                                <!--<th scope="col">Name</th>-->

                                <th scope="col">Tahunsaka</th>
                                <th scope="col">Ingkel</th>
                                <th scope="col">Jejepan</th>
                                <th scope="col">Lintang</th>
                                <th scope="col">Rakam</th>
                                <th scope="col">Watekmadya</th>
                                <th scope="col">Watekalit</th>
                                <th scope="col">Neptu</th>
                                <th scope="col">Ekajalarsi</th>
                                <th scope="col">Zodiak</th>
                                <th scope="col">Pratiti</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td><?= array_key_exists('tahun_saka', $tanggal) ? $tanggal['tahun_saka'] : "" ?></td>
                                <td><?= array_key_exists('ingkel', $tanggal) ? $tanggal['ingkel'] : "" ?></td>
                                <td><?= array_key_exists('jejepan', $tanggal) ? $tanggal['jejepan'] : "" ?></td>
                                <td><?= array_key_exists('lintang', $tanggal) ? $tanggal['lintang'] : "" ?></td>
                                <td><?= array_key_exists('rakam', $tanggal) ? $tanggal['rakam'] : "" ?></td>
                                <td><?= array_key_exists('watek_madya', $tanggal) ? $tanggal['watek_madya'] : "" ?></td>
                                <td><?= array_key_exists('watek_alit', $tanggal) ? $tanggal['watek_alit'] : "" ?></td>
                                <td><?= array_key_exists('neptu', $tanggal) ? $tanggal['neptu'] : "" ?></td>
                                <td><?= array_key_exists('eka_jala_rsi', $tanggal) ? $tanggal['eka_jala_rsi'] : "" ?></td>
                                <td><?= array_key_exists('zodiak', $tanggal) ? $tanggal['zodiak'] : "" ?></td>
                                <td><?= array_key_exists('pratiti', $tanggal) ? $tanggal['pratiti'] : "" ?></td>

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
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>