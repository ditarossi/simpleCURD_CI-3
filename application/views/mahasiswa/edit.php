<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    
                   <form action="" method="post">
                       <input type="hidden" name="ID" value="<?= $mahasiswa['ID']; ?>">
                       <div class="form-group">
                            <label for="NIM">NIM </label>
                            <input value=<?= $mahasiswa['NIM'] ?> type="text" name="NIM" class="form-control" id="NIM">
                            <small class="form-text text-danger"><?= form_error('NIM') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Nama">Nama </label>
                            <input value=<?= $mahasiswa['Nama'] ?> type="text" name="Nama" class="form-control" id="Nama">
                            <small class="form-text text-danger"><?= form_error('Nama') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Email">Email </label>
                            <input value=<?= $mahasiswa['Email'] ?> type="email" name="Email" class="form-control" id="Email">
                            <small class="form-text text-danger"><?= form_error('Email') ?></small>
                       </div>
                       <div class="form-group">
                            <label for="Prodi">Prodi</label>
                            <select value=<?= $mahasiswa['Prodi'] ?> class="form-control" id="Prodi" name="Prodi">
                                <?php foreach($Prodi as $j) : ?>
                                    <?php if($j == $mahasiswa['Prodi']) : ?>
                                        <option value="<?= $j ;?>" selected><?= $j ;?></option>
                                    <?php else :?>
                                        <option value="<?= $j ;?>" ><?= $j ;?></option>
                                    <?php endif; ?>
                                <?php endforeach ;?>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" name="edit" type="submit" >Edit Data</button>
                   </form>
                </div>
            </div>

        </div>
    </div>
</div>