<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Alat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                            <label for="nama">Kode</label>
                            <input type="text" name="kode" class="form-control" id="kode">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alat</label>
                            <input type="text" name="Alat" class="form-control" id="Alat">
                            <small class="form-text text-danger"><?= form_error('Alat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Waktu Sewa</label>
                            <input type="text" name="waktu_sewa" class="form-control" id="waktu_sewa">
                            <small class="form-text text-danger"><?= form_error('waktu_sewa'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>