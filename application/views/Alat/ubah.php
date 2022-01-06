<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Sewa Alat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kode" value="<?= $Alat['kode']; ?>">
                        <div class="form-group">
                            <label for="nama">Alat</label>
                            <input type="text" name="Alat" class="form-control" id="Alat" value="<?= $Alat['Alat']; ?>">
                            <small class="form-text text-danger"><?= form_error('Alat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $Alat['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Waktu Sewa</label>
                            <input type="text" name="waktu_sewa" class="form-control" id="waktu_sewa" value="<?= $Alat['waktu_sewa']; ?>">
                            <small class="form-text text-danger"><?= form_error('waktu_sewa'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>