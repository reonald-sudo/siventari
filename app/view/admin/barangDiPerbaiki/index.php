<div class="content">

    <div>
        <?= Flasher::flash(); ?>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data <?= $data['judul']; ?></h3>

            <!-- cetak -->
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak Data</i>
            </button>

        </div>
        <div class="card-body">
            <table id="mytable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Service</th>
                        <th>Tanggal Service</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Service</th>
                        <th>Tanggal Service</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['perbaiki'] as $diperbaiki) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $diperbaiki['id_barang']; ?></td>
                            <td><?= $diperbaiki['barang']; ?></td>
                            <td><?= $diperbaiki['alokasi']; ?></td>
                            <td><?= $diperbaiki['toko_komputer']; ?></td>
                            <td><?= $diperbaiki['tanggal_service']; ?></td>
                            <td>

                                <a href="<?= BASEURL; ?>/barangDiPerbaiki/edit/<?= $diperbaiki['id']; ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="<?= BASEURL; ?>/BarangDiPerbaiki/hapus/<?= $diperbaiki['id']; ?>" class="btn btn-danger btn-sm mr-1" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
                                    <i class="fa fa-trash"></i>
                                </a>

                                <!-- Button to Open the Modal Repair-->
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#selesai<?= $diperbaiki['id'] ?>">
                                    <i class="fa fa-check"></i>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="selesai<?= $diperbaiki['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Barang Selesai Diservice <b>[<?= $diperbaiki['barang']; ?>]</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="container">
                                                <form action="<?= BASEURL; ?>/BarangDiperbaiki/selesai/<?= $diperbaiki['id']; ?>" method="post" enctype="multipart/form-data">
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label mt-3">ID Barang</label>
                                                        <input type="text" name="idPengajuan" id="" class="form-control" value="<?= $diperbaiki['id_barang']; ?>" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="barang" class="form-label">Barang</label>
                                                        <input type="text" class="form-control" readonly id="barang" value="<?= $diperbaiki['barang']; ?>" name="barang">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="kondisi" class="form-label">Kondisi</label>
                                                        <input type="text" class="form-control" id="kondisi" value="Baik" name="kondisi" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="alokasi" class="form-label">Alokasi</label>
                                                        <input type="text" class="form-control" id="alokasi" value="<?= $diperbaiki['alokasi']; ?>" name="alokasi" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="foto" class="form-label">Foto Barang Selesai di Service</label>
                                                        <input type="file" class="form-control" id="foto" value="" name="foto" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-success float-right mb-3">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
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
                    <form action="<?= BASEURL; ?>/BarangDiPerbaiki/cetakFilter" id="print" method="post">
                        <input type="date" name="dari">
                        <input type="date" name="sampai">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="print">Cetak</button>
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