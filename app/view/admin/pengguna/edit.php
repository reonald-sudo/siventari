<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/Pengguna" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/Pengguna/editData" method="post">
                <div class="mb-3">
                    <label for="" class="form-label" style="display: none;">ID</label>
                    <input type="hidden" class="form-control" id="" value="<?= $data['pengguna']['id']; ?>" name="id">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="" value="<?= $data['pengguna']['username']; ?>" name="username">
                </div>
                <div class=" mb-3">
                    <label for="hakAkses" class="form-label">Hak Akses</label>
                    <input type="text" class="form-control" id="hakAkses" value="<?= $data['pengguna']['hak_akses']; ?>" name="hakAkses">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" value="<?= $data['pengguna']['password']; ?>" name="password">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
</section>
</div>
</div>