<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah data masuk </h3>
            <a href="<?= BASEURL; ?>/BarangMasuk" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/BarangMasuk/tambahData" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">ID Barang</label>
                    <select class="form-control js-example-basic-single" id="idPengajuan" name="idPengajuan">
                        <option value="" selected disabled hidden>Pilih ID Pengajuan Barang</option>
                        <?php
                        foreach ($data['pengajuan'] as $row) {
                        ?>
                            <option value="<?= $row['id_pengajuan']; ?>"> <?= strtoupper($row['id_pengajuan']) ?> = <?= $row['pengajuan']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="barang" readonly name="namaBarang">
                </div>
                <div class=" mb-3">
                    <div class="form-group ">
                        <label for="alokasi">Alokasi</label>
                        <!-- <select class="form-control" id="alokasi" name="alokasi">
                            <option value="" selected disabled hidden>Pilih Lokasi Alokasi</option>
                            <option value="kadinas">KADINAS</option>
                            <option value="sekertaris">SEKERTARIS</option>
                            <option value="kasubag">KASUBAG</option>
                            <option value="kabid">KABID</option>
                            <option value="office">OFFICE</option>
                            <option value="it">IT</option>
                        </select> -->
                        <input type="text" class="form-control" id="alokasi" readonly name="alokasi">
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="" name="tanggalMasuk">
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

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

</section>

</div>