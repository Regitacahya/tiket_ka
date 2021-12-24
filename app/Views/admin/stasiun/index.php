<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <a href="stasiun/tambah" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah </a>
            <br><br>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Kode Stasiun</th>
                    <th>Nama Stasiun</th>
                    <th><i class="fas fa-cogs"></i></th>
                </tr>
                <?php
                $no = 1;
                foreach ($stasiun as $key) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $key['kode_stasiun']; ?></td>
                        <td><?php echo $key['nama_stasiun']; ?></td>
                        <td>
                            <a href="/stasiun/edit/<?php echo $key['id_stasiun']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="/stasiun/delete/<?php echo $key['id_stasiun']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>