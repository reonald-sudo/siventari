<div class="content">

    <div class="">
        <?php Flasher::flash(); ?>
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
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Tanggal Rusak</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Alokasi</th>
                        <th>Tanggal Rusak</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['rusak'] as $rusak) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $rusak['barang']; ?></td>
                            <td><?= $rusak['alokasi']; ?></td>
                            <td><?= $rusak['tanggal_masuk']; ?></td>
                            <td><?= $rusak['status']; ?></td>
                            <td>

                                <a href="<?= BASEURL; ?>/BarangRusak/edit/<?= $rusak['id']; ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="<?= BASEURL; ?>/BarangRusak/hapus/<?= $rusak['id']; ?>" class="btn btn-danger btn-sm mr-1" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
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
                    <form action="<?= BASEURL; ?>/BarangRusak/cetakFilter" id="print" method="post">
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
<br>