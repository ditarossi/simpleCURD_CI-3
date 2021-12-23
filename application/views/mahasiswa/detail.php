<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['NIM']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['Nama']; ?></h6>
                <p class="card-text"><?= $mahasiswa['Email']; ?></p>
                <p class="card-text"><?= $mahasiswa['Prodi']; ?></p>
                <a href="<?php echo base_url(); ?>mahasiswa/index" class="btn btn-primary">Back</a>
            </div>
        </div>

        </div>
    </div>
</div>