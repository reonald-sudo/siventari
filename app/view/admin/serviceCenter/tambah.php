<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/ServiceCenter" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/ServiceCenter/tambahData" method="post">
                <div class="mb-3">
                    <label for="idServiceCenter" class="form-label">ID Service Center</label>
                    <input type="text" class="form-control" id="idServiceCenter" value="" name="idServiceCenter">
                </div>
                <div class="mb-3">
                    <label for="serviceCenter" class="form-label">Service Center</label>
                    <input type="text" class="form-control" id="serviceCenter" value="" name="serviceCenter">
                </div>
                <div class=" mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="" name="alamat">
                </div>
                <div class=" mb-3">
                    <label for="noTelp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="noTelp" value="" name="noTelp">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
</section>
</div>
</div>