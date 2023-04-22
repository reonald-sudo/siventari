<body onload="window.print()">
    <style>
        .rangkaSurat {
            width: 980px;
            margin: 0 auto;
            background-color: #fff;
            height: 500px;
            padding: 20px;
        }

        table {
            padding: 2px;
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }

        .kiri {
            text-align: justify;
            line-height: 5px;
        }

        .kanan {
            text-align: right;
        }
    </style>

    <div class=" rangkaSurat">

        <!-- KOP SURAT -->
        <table width="100%" style="border-bottom: 5px solid #000;">
            <tr>
                <td><img src="<?= BASEURL2; ?>/dist/img/banjarbaru.png" style="width: 150px;"></td>
                <td class="tengah">
                    <h2>PEMERINTAH KOTA BANJARBARU</h2>
                    <h2><b>DINAS PENANAMAN MODAL DAN PELAYANAN</b></h2>
                    <h2><b>TERPADU SATU PINTU</b></h2>
                    <h6>Alamat : Jl. Husni Thamrin No.1 Banjarbaru Fax. (0511) 4781711 Telp. (0511) 4781886</h6>
                    <h6>Website :http://dpmptsp.banjarbarukota.go.id/E-mail : dpmptsp@banjarbarukota.go.id</h6>
                </td>
            </tr>
        </table>

        <br>
        <h4 class="tengah"><b>Rekap Data <?= $data['kop']; ?></b></h4>
        <br>

        <!-- januari -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Januari</td>
                    <th><?= $data['hitungBarangRusakJanuari']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakJanuari'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- februari -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Februari</td>
                    <th><?= $data['hitungBarangRusakFebruari']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakFebruari'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- maret -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maret</td>
                    <th><?= $data['hitungBarangRusakMaret']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakMaret'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- April -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>April</td>
                    <th><?= $data['hitungBarangRusakApril']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakApril'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Mei -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mei</td>
                    <th><?= $data['hitungBarangRusakMei']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakMei'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Juni -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juni</td>
                    <th><?= $data['hitungBarangRusakJuni']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakJuni'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Juli -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juli</td>
                    <th><?= $data['hitungBarangRusakJuli']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakJuli'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Agustus -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Agustus</td>
                    <th><?= $data['hitungBarangRusakAgustus']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakAgustus'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- September -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>September</td>
                    <th><?= $data['hitungBarangRusakSeptember']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakSeptember'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Oktober -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Oktober</td>
                    <th><?= $data['hitungBarangRusakOktober']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakOktober'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>


        <!-- November -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>November</td>
                    <th><?= $data['hitungBarangRusakNovember']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakNovember'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Desember -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Desember</td>
                    <th><?= $data['hitungBarangRusakDesember']; ?></th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Alokasi</th>
                    <th>Tanggal Rusak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakDesember'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['alokasi']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['tanggal_masuk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>



        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!-- TANDA TANGAN -->
        <table width="100%">
            <tr>
                <td class="kanan">
                    <h4>Banjarbaru, 1 Januari 2023</h4>
                </td>
            </tr>
            <tr>
                <td><br><br><br><br><br>
            </tr>
            <tr>
                <td class="kanan">
                    <h4>Kepala Dinas</h4>
                </td>
            </tr>
        </table>

    </div>
</body>