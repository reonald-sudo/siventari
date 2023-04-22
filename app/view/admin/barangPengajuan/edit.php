<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah data pengajuan <b>[ <?= $data['pengajuan']['id_pengajuan']; ?> ]</b></h3>
            <a href="<?= BASEURL; ?>/BarangPengajuan" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form method="post" action="<?= BASEURL; ?>/BarangPengajuan/editData">
                <div class="mb-3">
                    <label for="" class="form-label">ID Pengajuan Barang</label>
                    <input type="text" class="form-control" id="" value="<?= $data['pengajuan']['id_pengajuan']; ?>" name="idPengajuanBarang" readonly>
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Pengajuan</label>
                    <input type="text" class="form-control" id="" value="<?= $data['pengajuan']['pengajuan']; ?>" name="pengajuan">
                </div>
                <div class=" mb-3">
                    <div class="form-group">
                        <label for="alokasi">Alokasi</label>
                        <select class="form-control" id="alokasi" name="alokasi">
                            <option value="" selected hidden>Pilih lokasi alokasi</option>
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
                    <label for="" class="form-label">Tanggal Pengajuan</label>
                    <input type="date" class="form-control" id="" value="<?= $data['pengajuan']['tanggal_pengajuan']; ?>" name="tanggal_pengajuan">
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Status</label>
                    <input type="text" class="form-control" id="" value="<?= $data['pengajuan']['status']; ?>" name="status" readonly>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>


        </div>
    </div>


</div>
</section>
</div>
</div>