<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

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
</div>