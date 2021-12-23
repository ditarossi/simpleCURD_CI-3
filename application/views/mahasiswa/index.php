<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6 mt-3">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form method="post" action="">
                <div class="input-group">
                    <input type="text" class="form-control" name="kunci" placeholder="Cari Data Mahasiswa..">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Mahasiswa</h3>
            <?php if( empty($mahasiswa) ) :?>
                <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan
                </div>
            <?php endif ?>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs['Nama']?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['ID'] ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin hapus data ?')">Delete</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['ID'] ?>" class="badge badge-primary float-right" >Detail</a>
                        <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['ID'] ?>" class="badge badge-warning float-right" >Edit</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>

        <!--Form Tambah PopUp
        <div class="model fade" id="contoh" role="dialog" arialabelledby="modalLabel" aria-hidden="true">>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    
                   <form action="" method="post">
                       <div class="form-group">
                            <label for="NIM">NIM </label>
                            <input type="text" name="NIM" class="form-control" id="NIM">
                            <small class="form-text text-danger"><?= form_error('NIM') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Nama">Nama </label>
                            <input type="text" name="Nama" class="form-control" id="Nama">
                            <small class="form-text text-danger"><?= form_error('Nama') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Email">Email </label>
                            <input type="email" name="Email" class="form-control" id="Email">
                            <small class="form-text text-danger"><?= form_error('Email') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Prodi">Prodi</label>
                            <select class="form-control" id="Prodi" name="Prodi">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" type="submit" >Tambah Data</button>
                   </form>
                </div>
            </div>

            </div>
        </div>
    </div>-->