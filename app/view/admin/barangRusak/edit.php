<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data <?= $data['judul']; ?> <b>[ <?= $data['rusak']['barang']; ?> , Alokasi <?= $data['rusak']['alokasi']; ?>]</b></h3>
            <a href="<?= BASEURL; ?>/BarangRusak" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form method="post" action="<?= BASEURL; ?>/BarangRusak/editData">
                <div class="mb-3">
                    <label for="" class="form-label" style="display: none;">ID</label>
                    <input type="hidden" class="form-control" id="" value="<?= $data['rusak']['id']; ?>" name="id">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="" value="<?= $data['rusak']['barang']; ?>" name="barang">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Alokasi</label>
                    <input type="text" class="form-control" id="" value="<?= $data['rusak']['alokasi']; ?>" name="alokasi">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Tanggal Masuk</label>
                    <input type="text" class="form-control" id="" value="<?= $data['rusak']['tanggal_masuk']; ?>" name="tanggal_masuk">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Status</label>
                    <input type="date" class="form-control" id="" value="<?= $data['rusak']['status']; ?>" name="status">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>


        </div>
    </div>
</div>
</section>

</div>