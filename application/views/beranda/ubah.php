<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Berita
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $beranda['id']; ?>">
                        <div class="form-group">
                            <label for="berita">Berita</label>
                            <input type="text" class="form-control" id="berita" name="berita" value="<?= $beranda['berita']; ?>">
                            <small class="form-text text-danger"><?= form_error('berita'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>