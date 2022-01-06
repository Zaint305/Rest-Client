<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Alat
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $Alat['Alat']; ?></h5>
                    <p class="card-text"><?= $Alat['harga']; ?></p>
                    <p class="card-text"><?= $Alat['waktu_sewa']; ?></p>
                    <a href="<?= base_url(); ?>Alat" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>