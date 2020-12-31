<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header card bg-dark text-white">
                    Detail Data Pelanggan
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                        <tr>
                                <th scope="row">Id Pelanggan</th>
                                <td>:</td>
                                <td><?= $Pelanggan['id'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $Pelanggan['nama'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $Pelanggan['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Asal</th>
                                <td>:</td>
                                <td><?= $Pelanggan['asal'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tujuan</th>
                                <td>:</td>
                                <td><?= $Pelanggan['tujuan'] ?></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>index.php/Pelanggan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>