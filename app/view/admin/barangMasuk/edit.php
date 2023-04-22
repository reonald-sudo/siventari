<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah data masuk <b>[ <?= $data['masuk']['id_barang']; ?> ]</b></h3>
            <a href="<?= BASEURL; ?>/BarangMasuk" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form method="post" action="<?= BASEURL; ?>/BarangMasuk/editData">
                <div class="mb-3">
                    <label for="" class="form-label" style="display: none;">ID</label>
                    <input type="hidden" class="form-control" id="" value="<?= $data['masuk']['id']; ?>" name="id">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ID Barang</label>
                    <input type="text" class="form-control" id="" value="<?= $data['masuk']['id_barang']; ?>" name="idBarang" readonly>
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="" value="<?= $data['masuk']['barang']; ?>" name="barang">
                </div>
                <div class=" mb-3">
                    <div class="form-group">
                        <label for="alokasi">Alokasi</label>
                        <select class="form-control" id="alokasi" name="alokasi">
                            <option value="" selected disabled hidden>Pilih Lokasi Alokasi</option>
                            <option value="kadinas">KADINAS</option>
                            <option value="sekertaris">SEKERTARIS</option>
                            <option value="kasubag">KASUBAG</option>
                            <option value="kabid">KABID</option>
                            <option value="office">OFFICE</option>
                            <option value="it">IT</option>
                        </select>
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="" value="<?= $data['masuk']['tanggal_masuk']; ?>" name="tanggal_masuk">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Distributor</label>
                    <select class="form-control" id="" name="distributor">
                        <option value="" selected disabled hidden>Pilih Distributor Barang</option>
                        <?php
                        foreach ($data['distributor'] as $row) {
                        ?>
                            <option value="<?= $row['id_distributor']; ?>"> <?= strtoupper($row['distributor']) ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>


        </div>
    </div>
</div>
</section>

</div>