<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('stasiun/simpan') ?>" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Kode Stasiun</label>
                    <div class="col-sm-4">
                        <input type="text" name="kode_stasiun" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama_stasiun" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="submit" value="submit" class="btn btn-info">
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php $this->endSection(); ?>