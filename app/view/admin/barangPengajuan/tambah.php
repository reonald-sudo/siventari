<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/BarangPengajuan" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/BarangPengajuan/tambahData" method="post">
                <div class="mb-3">
                    <label for="idPengajuanBarang" class="form-label">ID Pengajuan Barang</label>
                    <input type="text" class="form-control" id="idPengajuanBarang" value="" name="idPengajuanBarang">
                </div>
                <div class=" mb-3">
                    <label for="pengajuan" class="form-label">Pengajuan</label>
                    <input type="text" class="form-control" id="pengajuan" value="" name="pengajuan">
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
                    <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
                    <input type="date" class="form-control" id="tanggal_pengajuan" value="" name="tanggal_pengajuan">
                </div>
                <div class=" mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" value="Belum acc" name="status" readonly>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>
</section>
</div>
</div>