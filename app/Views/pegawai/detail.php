<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Pegawai</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/..." class="img-fluid rounded-start" alt="Foto Pegawai">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pegawai['nama'] ?></h5>
                            <p class="card-text"><b>NIP : </b><?= $pegawai['nip']; ?></p>
                            <p class="card-text"><b>Jabatan : </b><?= $pegawai['jabatan']; ?></p>
                            <p class="card-text"><b>Unit Kerja : </b><?= $pegawai['unit_kerja']; ?></p>
                            <p class="card-text"><small class="text-muted">Nomor WA : <?= $pegawai['nomor_wa']; ?></small></p>

                            <a href="" class="btn-warning">Edit</a>
                            <a href="" class="btn-danger">Delete</a>
                            <br><br>
                            <a href="/pegawai">Kembali ke Daftar Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>