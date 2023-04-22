<div class="content">

    <div class="">
        <?php Flasher::flash(); ?>
    </div>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data <?= $data['judul']; ?></h3>
            <!-- cetak -->
            <a href="<?= BASEURL; ?>/Distributor/cetakDataAll" class="btn btn-warning ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak Data</i>
            </a>
            <!-- tambah -->
            <a href="<?= BASEURL; ?>/Distributor/tambah" class="btn btn-success btn-sm float-right">
                <i class="fa fa-plus-circle"> Tambah Data</i>
            </a>
        </div>
        <div class="card-body">
            <table id="mytable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Distributor</th>
                        <th>Distributor</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Distributor</th>
                        <th>Distributor</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['distributor'] as $distributor) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $distributor['id_distributor']; ?></td>
                            <td><?= $distributor['distributor']; ?></td>
                            <td><?= $distributor['alamat']; ?></td>
                            <td><?= $distributor['no_telp']; ?></td>
                            <td>

                                <a href="<?= BASEURL; ?>/Distributor/edit/<?= $distributor['id_distributor']; ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="<?= BASEURL; ?>/Distributor/hapus/<?= $distributor['id_distributor']; ?>" class="btn btn-danger btn-sm mr-1" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
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