<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="row">
        <div class="col-md py-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-3">Ubah Data Jadwal Kereta</h5>
                    <form action="<?php echo site_url('jadwal/update') ?>" method="post">
                        <input type="hidden" name="id_ka" id="id_ka" value=" <?= $jdwl['id_ka']; ?>">
                        <div class="form-group row">
                            <label for="nama_ka" class="col-sm-4 col-form-label">Nama Kereta</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_ka" class="form-control" value=" <?= $jdwl['nama_ka']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal" class="col-sm-4 label">Asal</label>
                            <div class="col-sm-8">
                                <?php
                                foreach ($asal as $s) :
                                    $options[$s['id_stasiun']] = $s['nama_stasiun'];
                                endforeach;
                                $data = [
                                    'class' => 'form-control',
                                ];
                                echo form_dropdown('asal', $options, $jdwl['asal'], $data);
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan" class="col-sm-4 label">Tujuan</label>
                            <div class="col-sm-8">
                                <?php
                                foreach ($tujuan as $t) :
                                    $options[$t['id_stasiun']] = $t['nama_stasiun'];
                                endforeach;
                                $data = [
                                    'class' => 'form-control',
                                ];
                                echo form_dropdown('tujuan', $options, $jdwl["tujuan"], $data);
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_berangkat" class="col-sm-4 label">Tanggal Berangkat</label>
                            <div class="col-sm-8">
                                <input type="date" name="tgl_berangkat" class="form-control" value=" <?= $jdwl['tgl_berangkat']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_tiba" class="col-sm-4 label">Tanggal Tiba</label>
                            <div class="col-sm-8">
                                <input type="date" name="tgl_sampai" class="form-control" value=" <?= $jdwl['tgl_sampai']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jam_berangkat" class="col-sm-4 label">Jam Berangkat</label>
                            <div class="col-sm-8">
                                <input type="time" name="jam_berangkat" class="form-control" value=" <?= $jdwl['jam_berangkat']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jam_tiba" class="col-sm-4 label">Jam Tiba</label>
                            <div class="col-sm-8">
                                <input type="time" name="jam_tiba" class="form-control" value=" <?= $jdwl['jam_tiba']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelas" class="col-sm-4 label">Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" name="kelas" class="form-control" value=" <?= $jdwl['kelas']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-4 label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" name="harga" class="form-control" value=" <?= $jdwl['harga']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-4 label">Stok</label>
                            <div class="col-sm-8">
                                <input type="text" name="stok" class="form-control" value=" <?= $jdwl['stok']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>