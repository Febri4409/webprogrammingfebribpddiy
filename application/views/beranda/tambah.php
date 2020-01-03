<style>
    .label1 {
        display: block;
        width: 700px;
    }
</style>

<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Berita
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="label1" for="berita">Berita</label>
                            <input type="text" class="form-control" id="berita" name="berita">
                            <small class="form-text text-danger"><?= form_error('berita'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>