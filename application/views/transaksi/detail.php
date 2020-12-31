<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header card bg-dark text-white">
                    Detail Data Transaksi
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                        <tr>
                                <th scope="row">Id Transaksi</th>
                                <td>:</td>
                                <td><?= $Transaksi['id'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $Transaksi['nama'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kenadaraan</th>
                                <td>:</td>
                                <td><?= $Transaksi['kendaraan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tujuan</th>
                                <td>:</td>
                                <td><?= $Transaksi['tujuan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Biaya</th>
                                <td>:</td>
                                <td><?= $Transaksi['biaya'] ?></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>index.php/transaksi" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>