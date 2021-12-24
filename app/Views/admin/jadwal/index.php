<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <div class="row">
        <div class="col-md py-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-3">Daftar Jadwal Kereta Api</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <button type="button" class="btn btn-primary tombolTambahJadwal mb-2" data-toggle="modal" data-target="#formModalJadwal"><i class="fas fa-plus-circle"></i> Tambah Data Jadwal</button> -->
                            <a href="<?= base_url('jadwal/input'); ?>" type="button" class="btn btn-primary tombolTambahJadwal mb-2"><i class="fas fa-plus-circle"></i> Tambah Data Jadwal</a>
                            <!-- <a href="<?= base_url('hapus/semua/jadwal'); ?>" class="btn btn-danger mb-2" onclick="return confirm('Yakin ?')" data-toggle="tooltip" data-placement="bottom" title="Hapus Semua Data Jadwal ?"><i class="fas fa-trash-alt"></i></a> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
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
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jdwl as $j) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $j['nama_ka'] ?></td>
                                        <td><?= $j['nama_stasiun'] ?></td>
                                        <td><?= date('d-m-Y', strtotime($j['tgl_berangkat'])) . "<br>" . $j['jam_berangkat']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($j['tgl_sampai'])) . "<br>" . $j['jam_tiba']; ?></td>
                                        <td><?= $j['kelas'] ?></td>
                                        <td><?= $j['harga'] ?></td>
                                        <td><?= $j['stok'] ?></td>
                                        <td>
                                            <a href="<?= site_url('jadwal/detail/') . $j['id_ka'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="<?= site_url('jadwal/edit/') . $j['id_ka']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?= site_url('jadwal/delete/') . $j['id_ka'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

<?php $this->endSection(); ?>