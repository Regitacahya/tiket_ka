<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-sm col-md-12">
                <thead class="thead-light">
                    <tr>
                        <th>Kode Booking</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Kereta</th>
                        <th>Berangkat</th>
                        <th>Tiba</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php foreach ($join3 as $key) : ?>
                    <tr>
                        <td><?php echo $key->kode ?></td>
                        <td><?php echo $key->tgl_reservasi ?></td>
                        <td><?php echo $key->nama_pemesan ?></td>
                        <td><?php echo $key->nama_ka ?></td>
                        <td><?php echo $key->asal ?></td>
                        <td><?php echo $key->tujuan ?></td>
                        <td><?php echo $key->kelas ?></td>
                        <td>
                            <a href="/reservasi/detail/<?php echo $key['id_ka']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="/reservasi/edit/<?php echo $key['id_ka']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/reservasi/delete/<?php echo $key['id_ka']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>