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

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pengajuan</th>
                    <th>Barang</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['cetakIt'] as $barangPengajuanCetakBerkala) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $barangPengajuanCetakBerkala['id_pengajuan']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['barang']; ?></td>
                        <td><?= $barangPengajuanCetakBerkala['kondisi']; ?></td>
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