<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header card bg-dark text-white">
                    Form Tambah Data Transaksi
                </div>
                <div class="card-body card bg-secondary text-white">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id">Id Transaksi</label>
                            <input type="text" name="id" class="form-control" id="id">
                            <small class="form-text text-danger"><?= form_error('id'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan">Kendaraan</label>
                            <input type="text" name="kendaraan" class="form-control" id="kendaraan">
                            <small class="form-text text-danger"><?= form_error('kendaraan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">tujuan</label>
                            <input type="text" name="tujuan" class="form-control" id="tujuan">
                            <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="text" name="biaya" class="form-control" id="biaya">
                            <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>