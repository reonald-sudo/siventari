<div class="content">

    <div class="">
        <?php Flasher::flash(); ?>
    </div>


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data <?= $data['judul']; ?></h3>
            <!-- cetak -->
            <a href="<?= BASEURL; ?>/Sekertaris/cetakDataAll" class="btn btn-warning ml-2 btn-sm float-right">
                <i class="fa fa-print"> Cetak Data</i>
            </a>
            <!-- tambah -->
            <a href="<?= BASEURL; ?>/Sekertaris/tambah" class="btn btn-success btn-sm float-right">
                <i class="fa fa-plus-circle"> Tambah Data</i>
            </a>
        </div>
        <div class="card-body">
            <table id="mytable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Barang</th>
                        <th>Kondisi</th>
                        <th width=41%"">Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Barang</th>
                        <th>Kondisi</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['sekertaris'] as $sekertaris) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $sekertaris['id_pengajuan']; ?></td>
                            <td><?= $sekertaris['barang']; ?></td>
                            <td><?= $sekertaris['kondisi']; ?></td>
                            <td>

                                <a href="<?= BASEURL; ?>/Sekertaris/edit/<?= $sekertaris['id']; ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="fa fa-edit"> Edit</i>
                                </a>

                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?= $sekertaris['id'] ?>">
                                    <i class="fa fa-eye"> View</i>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="myModal<?= $sekertaris['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Gambar Barang</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <img src="../dist/img/<?= $sekertaris['foto']; ?>" alt="" srcset="" width="100%">
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- BUTTON REPAIR -->
                                <!-- Button to Open the Modal Repair-->
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#repair<?= $sekertaris['id'] ?>">
                                    <i class="fa fa-wrench"> Service</i>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="repair<?= $sekertaris['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Barang Diservice <b>[<?= $sekertaris['barang']; ?>]</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="container">
                                                <form action="<?= BASEURL; ?>/BarangDiPerbaiki/tambahData/<?= $sekertaris['id']; ?>" method="post">
                                                    <div class=" mb-3">
                                                        <label style="display: none;" for="" class="form-label">ID</label>
                                                        <input type="hidden" class="form-control" id="" name="barang" value="<?= $sekertaris['id']; ?>">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label style="display: none;" for="" class="form-label">ID BARANG</label>
                                                        <input type="hidden" class="form-control" id="" name="idBarang" value="<?= $sekertaris['id_pengajuan']; ?>">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" style="display: none;" class="form-label">Barang</label>
                                                        <input type="hidden" class="form-control" id="" name="barang" value="<?= $sekertaris['barang']; ?>">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" style="display: none;" class="form-label">Alokasi</label>
                                                        <input type="hidden" class="form-control" id="" name="alokasi" value="SEKERTARIS">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Toko Komputer</label>
                                                        <select class="form-control" id="" name="tokoKomputer">
                                                            <option value="" selected disabled hidden>Pilih Lokasi Service</option>
                                                            <?php
                                                            foreach ($data['service'] as $row) {
                                                            ?>
                                                                <option value="<?= $row['id_service_center']; ?>"> <?= strtoupper($row['service_center']) ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>


                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Tanggal Service</label>
                                                        <input type="date" class="form-control" id="" name="tanggalService">
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


                                <!-- BUTTON BARANG RUSAK -->
                                <!-- Button to Open the Modal Repair-->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#rusak<?= $sekertaris['id'] ?>">
                                    <i class="fa fa-ban"> Rusak</i>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="rusak<?= $sekertaris['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Barang Rusak <b>[<?= $sekertaris['barang']; ?>]</b></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="container">
                                                <form action="<?= BASEURL; ?>/BarangRusak/tambahData/<?= $sekertaris['id']; ?>" method="post">
                                                    <div class=" mb-3">
                                                        <label style="display: none;" for="" class="form-label">ID</label>
                                                        <input type="hidden" class="form-control" id="" name="barang" value="<?= $sekertaris['id']; ?>">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" style="display: none;" class="form-label">Barang</label>
                                                        <input type="hidden" class="form-control" id="" name="barang" value="<?= $sekertaris['barang']; ?>">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" style="display: none;" class="form-label">Alokasi</label>
                                                        <input type="hidden" class="form-control" id="" name="alokasi" value="SEKERTARIS">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Tanggal Rusak</label>
                                                        <input type="date" class="form-control" id="" name="tanggalRusak">
                                                    </div>
                                                    <div class=" mb-3">
                                                        <label for="" class="form-label">Status</label>
                                                        <input type="text" class="form-control" id="" name="status" value="Rusak" readonly>
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



                                <a href="<?= BASEURL; ?>/Sekertaris/hapus/<?= $sekertaris['id']; ?>" class="btn btn-danger btn-sm mr-1" onclick="javascript: return confirm('Konfirmasi data akan dihapus');">
                                    <i class="fa fa-trash"> Hapus</i>
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