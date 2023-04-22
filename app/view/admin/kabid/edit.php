<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/Kabid" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/Kabid/editData" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label" style="display: none;">ID</label>
                    <input type="hidden" class="form-control" id="" value="<?= $data['kabid']['id']; ?>" name="id">
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label">ID Pengajuan Barang</label>
                    <input type="text" class="form-control" id="barang" value="<?= $data['kabid']['id_pengajuan']; ?>" name="idPengajuan" readonly>
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="text" class="form-control" id="barang" value="<?= $data['kabid']['barang']; ?>" name="barang">
                </div>
                <div class=" mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" class="form-control" id="kondisi" value="<?= $data['kabid']['kondisi']; ?>" name="kondisi" readonly>
                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" value="<?= $data['kabid']['foto']; ?>" name="foto">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
</section>
</div>
</div>