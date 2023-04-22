<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/ServiceCenter" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/ServiceCenter/editData" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">ID Service Center</label>
                    <input type="text" class="form-control" id="" value="<?= $data['service']['id_service_center']; ?>" name="idServiceCenter" readonly>
                </div>
                <div class="mb-3">
                    <label for="serviceCenter" class="form-label">ServiceCenter</label>
                    <input type="text" class="form-control" id="serviceCenter" value="<?= $data['service']['service_center']; ?>" name="serviceCenter">
                </div>
                <div class=" mb-3">
                    <label for=jumlah" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="<?= $data['service']['alamat']; ?>" name="alamat">
                </div>
                <div class=" mb-3">
                    <label for="kondisi" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="noTelp" value="<?= $data['service']['no_telp']; ?>" name="noTelp">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
</section>
</div>
</div>