<?php $this->extend('template'); ?>
<?php $this->section('isi'); ?>
<div class="container">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?= base_url('jadwal'); ?>">Home</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
    <div class="row">
        <div class="col-md py-3">
            <h5 class="text-muted mb-3">Detail Jadwal Kereta</h5>
            <div class="card" style="width: 32rem;">
                <div class="card-header bg-gradient-purple"></div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td class="text-bold">Nama Kereta</td>
                            <td><?= $jadwal['nama_ka'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Rute</td>
                            <td><?= $jadwal['nama_stasiun'] ?> - <?= $jadwal['nama_stasiun'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold"> Waktu Keberangkatan</td>
                            <td><?= date('d-m-Y', strtotime($jadwal['tgl_berangkat'])) ?> <br> <?= $jadwal['jam_berangkat'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Waktu Tiba</td>
                            <td><?= date('d-m-Y', strtotime($jadwal['tgl_sampai'])) ?><br><?= $jadwal['jam_tiba'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Kelas</td>
                            <td><?= $jadwal['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Harga</td>
                            <td><?= $jadwal['harga'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-bold">Status</td>
                            <td><?= $jadwal['stok'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>