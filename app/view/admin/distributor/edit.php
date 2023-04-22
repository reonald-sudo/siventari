<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/Distributor" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/Distributor/editData" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">ID Distributor</label>
                    <input type="text" class="form-control" id="" value="<?= $data['distributor']['id_distributor']; ?>" name="id_distributor" readonly>
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label">Distributor </label>
                    <input type="text" class="form-control" id="distributor" value="<?= $data['distributor']['distributor']; ?>" name="distributor">
                </div>
                <div class=" mb-3">
                    <label for=jumlah" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="<?= $data['distributor']['alamat']; ?>" name="alamat">
                </div>
                <div class=" mb-3">
                    <label for="kondisi" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="noTelp" value="<?= $data['distributor']['no_telp']; ?>" name="noTelp">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
</section>
</div>
</div>