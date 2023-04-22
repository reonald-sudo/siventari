<div class="content">

    <div class="">
        <?php Flasher::flash(); ?>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data <?= $data['judul']; ?></h3>
            <!-- cetak -->
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak By Tanggal</i>
            </button>

            <button type="button" data-toggle="modal" data-target="#cetakByAlokasi" class="btn btn-secondary ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak By Alokasi</i>
            </button>

            <button type="button" data-toggle="modal" data-target="#cetakByBarang" class="btn btn-info ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak By Barang</i>
            </button>

            <a href="<?= BASEURL; ?>/BarangMasuk/cetakAll" class="btn btn-sm float-right btn-dark"><i class="fa fa-print"> Cetak Keseluruhan</i></a>

            <!-- tambah -->
            <a href="<?= BASEURL; ?>/barangMasuk/tambah" class="btn btn-success btn-sm float-right mr-2">
                <i class="fa fa-plus-circle"> Tambah Data</i>
            </a>
        </div>
        <div class="card-body">
            <table id="mytable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Tanggal Masuk</th>
                        <th>Distributor</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Tanggal Masuk</th>
                        <th>Distributor</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['masuk'] as $masuk) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $masuk['id_barang']; ?></td>
                            <td><?= $masuk['barang']; ?></td>
                            <td><?= $masuk['alokasi']; ?></td>
                            <td><?= $masuk['tanggal_masuk']; ?></td>
                            <td><?= $masuk['distributor']; ?></td>
                            <td>

                                <a href="<?= BASEURL; ?>/BarangMasuk/edit/<?= $masuk['id']; ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="<?= BASEURL; ?>/BarangMasuk/cetak/<?= $masuk['id']; ?>" class="btn btn-warning btn-sm mr-1">
                                    <i class="fa fa-print"></i>
                                </a>

                                <a href="<?= BASEURL; ?>/BarangMasuk/hapus/<?= $masuk['id']; ?>" class="btn btn-danger btn-sm mr-1" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <!-- Modal cetak by tanggal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cetak Berdasarkan Tanggal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/BarangMasuk/cetakFilter" id="print" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="">Dari Tanggal</label>
                                <input type="date" class=" form-control" name="dari">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="">Sampai Tanggal</label>
                                <input type="date" class="form-control" name="sampai">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="print">Cetak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cetak by alokasi-->
    <div class="modal fade" id="cetakByAlokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cetakByAlokasi">Cetak Berdasarkan Alokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/BarangMasuk/cetakFilterByAlokasi" id="printAlokasi" method="post">
                        <div class="form-group">
                            <label for="">Filter berdasarkan alokasi</label>
                            <input type="text" class="form-control" name="filterByAlokasi" id="" placeholder="kadinas">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="printAlokasi">Cetak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cetak by barang-->
    <div class="modal fade" id="cetakByBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cetakByBarang">Cetak Berdasarkan Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/BarangMasuk/cetakFilterByBarang" id="printBarang" method="post">
                        <div class="form-group">
                            <label for="">Filter berdasarkan nama barang</label>
                            <input type="text" class="form-control" name="filterByBarang" id="" placeholder="UPS">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="printBarang">Cetak</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('../app/view/templates/script.php') ?>
    <?php require_once('../app/view/templates/scriptsdatatables.php') ?>
    <?php require_once('../app/view/templates/cssdatatables.php') ?>
    <script>
        $(function() {
            $('#mytable').DataTable()
        });
    </script>
</div>

</div>

</section>
</div>
</div>
<br>