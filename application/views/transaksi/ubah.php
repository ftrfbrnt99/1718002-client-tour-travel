<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header card bg-dark text-white">
                    Form Ubah Data Transaksi
                </div>
                <div class="card-body card bg-secondary text-white">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $Transaksi['id']; ?>">
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $Transaksi['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan">Kendaraan</label>
                            <input type="text" name="kendaraan" class="form-control" id="kendaraan" value="<?= $Transaksi['kendaraan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kendaraan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" name="tujuan" class="form-control" id="tujuan" value="<?= $Transaksi['tujuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="text" name="biaya" class="form-control" id="biaya" value="<?= $Transaksi['biaya']; ?>">
                            <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                        </div>
                        
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>