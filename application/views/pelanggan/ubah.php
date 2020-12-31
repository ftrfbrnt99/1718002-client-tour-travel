<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header card bg-dark text-white">
                    Form Ubah Data Pelanggan
                </div>
                <div class="card-body card bg-secondary text-white">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $Pelanggan['id']; ?>">
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $Pelanggan['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $Pelanggan['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" class="form-control" id="asal" value="<?= $Pelanggan['asal']; ?>">
                            <small class="form-text text-danger"><?= form_error('asal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" name="tujuan" class="form-control" id="tujuan" value="<?= $Pelanggan['tujuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
                        </div>
                        
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>