<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>index.php/pelanggan/tambah" class="btn btn-primary">Tambah
                Data Pelangan</a>
        </div>
    </div>

    
    
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Pelanggan</h3>
            
            <ul class="list-group">
                <?php foreach ($Pelanggan as $P) : ?>
                <li class="list-group-item list-group-item-primary">
                <?= $P['id']; ?><td>.</td><?= $P['nama']; ?> <td>:</td> <?= $P['alamat']; ?>
                    <a href="<?= base_url(); ?>pelanggan/hapus/<?= $P['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>index.php/pelanggan/ubah/<?=$P['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>index.php/pelanggan/detail/<?= $P['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
            
        </div>
    </div>
                

</div>