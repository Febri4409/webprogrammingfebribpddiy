<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pengumuman
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="pengumuman">Pengumuman</label>
                            <input type="text" class="form-control" id="pengumuman" name="pengumuman">
                            <small class="form-text text-danger"><?= form_error('pengumuman'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>