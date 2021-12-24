<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('jadwal/simpan') ?>" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Nama Kereta</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama_ka" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Stasiun Asal</label>
                    <div class="col-sm-4">
                        <select name="asal" id="asal" class="form-control">
                            <option value="">--Pilih--</option>
                            <?php foreach ($asal as $a) : ?>
                                <option value="<?= $a['id_stasiun'] ?>"><?= $a['nama_stasiun'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Stasiun Tujuan</label>
                    <div class="col-sm-4">
                        <select name="tujuan" id="tujuan" class="form-control">
                            <option value="">--Pilih--</option>
                            <?php foreach ($tujuan as $t) : ?>
                                <option value="<?= $t['id_stasiun'] ?>"><?= $t['nama_stasiun'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Tanggal Berangkat</label>
                    <div class="col-sm-4">
                        <input type="date" name="tgl_berangkat" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Tanggal Tiba</label>
                    <div class="col-sm-4">
                        <input type="date" name="tgl_sampai" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Jam Berangkat</label>
                    <div class="col-sm-4">
                        <input type="text" name="jam_berangkat" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Jam Tiba</label>
                    <div class="col-sm-4">
                        <input type="text" name="jam_tiba" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 label"> Kelas</label>
                    <div class="col-sm-4">
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Eksekutif">Eksekutif</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Ekonomi">Ekonomi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Harga</label>
                    <div class="col-sm-4">
                        <input type="text" name="harga" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label"> Stok</label>
                    <div class="col-sm-4">
                        <input type="text" name="stok" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="submit" value="Submit" class="btn btn-info">
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php $this->endSection(); ?>