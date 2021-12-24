<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('pemesan/update') ?>" method="post">
                <div class="form-group row">
                    <input type="hidden" name="id_pemesan" value="<?= $pemesan['id_pemesan']; ?>">
                    <label for="nama" class="col-sm-2 label">Nama Pemesan</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama_pemesan" class="form-control" value="<?= $pemesan['nama_pemesan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" name="email" class="form-control" value="<?= $pemesan['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">No Telepon</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_telp" class="form-control" value="<?= $pemesan['no_telp']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control" value="<?= $pemesan['alamat']; ?>">
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