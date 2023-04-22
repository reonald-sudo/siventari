<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah <?= $data['judul']; ?> <b>[ <?= $data['perbaiki']['barang']; ?>, Alokasi <?= $data['perbaiki']['alokasi']; ?> - <?= $data['perbaiki']['toko_komputer']; ?>]</b></h3>
            <a href="<?= BASEURL; ?>/BarangDiPerbaiki" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form method="post" action="<?= BASEURL; ?>/BarangDiPerbaiki/editData">
                <div class="mb-3">
                    <label for="" class="form-label" style="display: none;">ID</label>
                    <input type="hidden" class="form-control" id="" value="<?= $data['perbaiki']['id']; ?>" name="id">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="" value="<?= $data['perbaiki']['barang']; ?>" name="barang">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Alokasi</label>
                    <input type="text" class="form-control" id="" value="<?= $data['perbaiki']['alokasi']; ?>" name="alokasi">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Lokasi Service</label>
                    <input type="text" class="form-control" id="" value="<?= $data['perbaiki']['toko_komputer']; ?>" name="toko_komputer">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Tanggal Service</label>
                    <input type="date" class="form-control" id="" value="<?= $data['perbaiki']['tanggal_service']; ?>" name="tanggal_service">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>


        </div>
    </div>
</div>
</section>

</div>