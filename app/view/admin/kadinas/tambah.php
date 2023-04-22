<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/KepalaDinas" class="btn btn-primary btn-sm float-right">
                <i class="fa fa-chevron-left"> Kembali</i>
            </a>
        </div>

        <div class="card-body">

            <form action="<?= BASEURL; ?>/KepalaDinas/tambahData" method="post" enctype="multipart/form-data">
                <div class=" mb-3">
                    <label for="" class="form-label">ID Barang Masuk</label>
                    <select class="form-control js-example-basic-single idPengajuan" id="idPengajuan" name="idPengajuan">
                        <option value="" selected disabled hidden>Pilih ID Barang Masuk</option>
                        <?php
                        foreach ($data['barangMasuk'] as $row) {
                        ?>
                            <option value="<?= $row['id_barang']; ?>"><?= strtoupper($row['id_barang']) ?>, <?= $row['barang']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="text" class="form-control barangMasuk" readonly id="barangMasuk" value="" name="barang">
                </div>

                <div class=" mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" class="form-control" id="kondisi" value="Baik" name="kondisi" readonly>
                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" value="" name="foto">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(document).ready(function() {
            $('#idPengajuan').change(function() {
                const idPengajuan = $("#idPengajuan").val();

                $.ajax({
                    url: 'http://localhost/wahyu/public/KepalaDinas/MenampilkanBarangMasuk',
                    data: {
                        idPengajuan: idPengajuan
                    },
                    method: 'post',
                    dataType: 'json',

                    success: function(data) {
                        $('#barangMasuk').val(data.barang_b);
                        // alert('cuy');
                    }
                });
            });
        });
    </script>

</div>
</section>
</div>
</div>