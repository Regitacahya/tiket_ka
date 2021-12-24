<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header bg-gradient-purple"></div>
        <div class="card-body">
            <h5 style="padding-bottom:10px"><?= $title ?></h5>
            <a href="jadwal/tambah" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah </a>
            <br><br>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Kereta</th>
                    <th>Tujuan</th>
                    <th>Berangkat</th>
                    <th>Tiba</th>
                    <th>Kelas</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th><i class="fas fa-cogs"></i></th>
                </tr>
                <?php
                $no = 1;
                foreach ($jadwal as $key) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?= $key['nama_ka'] ?></td>
                        <td><?= $key['nama_stasiun'] ?></td>
                        <td><?= date('d-m-Y', strtotime($key['tgl_berangkat'])) . "<br>" . $key['jam_berangkat']; ?></td>
                        <td><?= date('d-m-Y', strtotime($key['tgl_sampai'])) . "<br>" . $key['jam_tiba']; ?></td>
                        <td><?= $key['kelas'] ?></td>
                        <td><?= $key['harga'] ?></td>
                        <td><?= $key['stok'] ?></td>
                        <td>
                            <a href="/jadwal/detail/<?php echo $key['id_ka']; ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="/jadwal/edit/<?php echo $key['id_ka']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="/jadwal/delete/<?php echo $key['id_ka']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>