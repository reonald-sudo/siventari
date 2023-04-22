<div class="row">

    <!-- PENGAJUAN -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $data['pengajuan']; ?></h3>

                <p>Data Pengajuan</p>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="<?= BASEURL; ?>/BarangPengajuan" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- BARANG MASUK -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $data['barangMasuk']; ?></h3>

                <p>Data Barang Masuk</p>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="<?= BASEURL; ?>/BarangMasuk" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- BARANG DIPERBAIKI -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $data['barangDiPerbaiki']; ?></h3>

                <p>Data Barang DiPerbaiki</p>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="<?= BASEURL; ?>/BarangDiPerbaiki" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- BARANG RUSAK-->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $data['barangRusak']; ?></h3>

                <p>Data Barang Rusak</p>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="<?= BASEURL; ?>/BarangRusak" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

</section>
</div>
</div>