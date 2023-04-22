<?php require_once('../app/config/config.php') ?>

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
                        <th>ID Pengajuan</th>
                        <th>Pengajuan</th>
                        <th>Alokasi</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Pengajuan</th>
                        <th>Alokasi</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['pengajuan'] as $Kadinas_pengajuan) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $Kadinas_pengajuan['id_pengajuan']; ?></td>
                            <td><?= $Kadinas_pengajuan['pengajuan']; ?></td>
                            <td><?= $Kadinas_pengajuan['alokasi']; ?></td>
                            <td><?= $Kadinas_pengajuan['tanggal_pengajuan']; ?></td>
                            <td><?= $Kadinas_pengajuan['status']; ?></td>
                            <td>


                                <!-- BUTTON VERIFIED -->
                                <!-- Button to Open the Modal Repair-->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rusak<?= $Kadinas_pengajuan['id_pengajuan'] ?>">
                                    <i class="fa fa-check"> Verifikasi</i>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="rusak<?= $Kadinas_pengajuan['id_pengajuan'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Verifikasi <b>[<?= $Kadinas_pengajuan['pengajuan']; ?>] Alokasi [<?= $Kadinas_pengajuan['alokasi']; ?>]</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="container">
                                                <form action="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan/verifikasi/<?= $Kadinas_pengajuan['id_pengajuan']; ?>" method="post">
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label" style="display: none;">ID Pengajuan</label>
                                                        <input type="hidden" class="form-control" id="" name="idPengajuanKasubag" value="<?= $Kadinas_pengajuan['id_pengajuan']; ?>" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Barang Di Ajukan</label>
                                                        <input type="text" class="form-control" id="" name="pengajuanKasubag" value="<?= $Kadinas_pengajuan['pengajuan']; ?>" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Alokasi</label>
                                                        <input type="text" class="form-control" id="" name="alokasiKasubag" value="<?= $Kadinas_pengajuan['alokasi']; ?>" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Tanggal_pengajuan</label>
                                                        <input type="date" class="form-control" id="" name="tanggalPengajuanKasubag" value="<?= $Kadinas_pengajuan['tanggal_pengajuan']; ?>" readonly>
                                                    </div>
                                                    <div class=" mb-3">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <select class="form-control" id="status" name="statusKasubag">
                                                                <option value="" selected disabled hidden>Verifikasi Pengajuan</option>
                                                                <option value="belum acc">Belum acc</option>
                                                                <option value="ditolak">Ditolak</option>
                                                                <option value="Acc">Acc</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success mb-2 col-12">Submit</button>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

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
                    <form action="<?= BASEURL; ?>/BarangPengajuan/cetakFilter" id="print" method="post">
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