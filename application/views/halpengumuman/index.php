<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data
                    <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>halpengumuman/tambah" class="btn btn-primary">Tambah Pengumuman</a>
        </div>
    </div>
    <br>


    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Pengumuman</h3>
            <ul class="list-group">
                <?php foreach ($halpengumuman as $bpd) : ?>
                    <li class="list-group-item">
                        <?= $bpd['pengumuman']; ?>
                        <a href="<?= base_url(); ?>halpengumuman/hapus/<?= $bpd['id'] ?>" class="badge badge-danger float-right" onclick="return confirm('yakin mau menghapus data?');">Hapus</a>

                        <a href="<?= base_url(); ?>halpengumuman/ubah/<?= $bpd['id'] ?>" class="badge badge-success float-right">Ubah</a>

                        <a href="<?= base_url(); ?>halpengumuman/detail/<?= $bpd['id'] ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>