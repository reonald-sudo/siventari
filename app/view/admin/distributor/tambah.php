<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/Distributor" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/Distributor/tambahData" method="post">
                <div class="mb-3">
                    <label for="idDistributor" class="form-label">ID Distributor</label>
                    <input type="text" class="form-control" id="idDistributor" value="" name="idDistributor">
                </div>
                <div class="mb-3">
                    <label for="distributor" class="form-label">Distributor</label>
                    <input type="text" class="form-control" id="distributor" value="" name="distributor">
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