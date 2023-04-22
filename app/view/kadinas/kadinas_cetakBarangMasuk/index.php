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

        <div>
            <div>
                <canvas id="barangMasuk"></canvas>
            </div>
        </div>
        <br>

        <!-- januari -->
        <table class="table table-bordered table-hover mb-3">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Total Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Januari</td>
                    <th><?= $data['hitungBarangMasukJanuari']; ?> Data</th>
                </tr>
                <tr>
                    <td>Februari</td>
                    <th><?= $data['hitungBarangMasukFebruari']; ?> Data</th>
                </tr>
                <tr>
                    <td>Maret</td>
                    <th><?= $data['hitungBarangMasukMaret']; ?> Data</th>
                </tr>
                <tr>
                    <td>April</td>
                    <th><?= $data['hitungBarangMasukApril']; ?> Data</th>
                </tr>
                <tr>
                    <td>Mei</td>
                    <th><?= $data['hitungBarangMasukMei']; ?> Data</th>
                </tr>
                <tr>
                    <td>Juni</td>
                    <th><?= $data['hitungBarangMasukJuni']; ?> Data</th>
                </tr>
                <tr>
                    <td>Juli</td>
                    <th><?= $data['hitungBarangMasukJuli']; ?> Data</th>
                </tr>
                <tr>
                    <td>Agustus</td>
                    <th><?= $data['hitungBarangMasukAgustus']; ?> Data</th>
                </tr>
                <tr>
                    <td>September</td>
                    <th><?= $data['hitungBarangMasukSeptember']; ?> Data</th>
                </tr>
                <tr>
                    <td>Oktober</td>
                    <th><?= $data['hitungBarangMasukOktober']; ?> Data</th>
                </tr>
                <tr>
                    <td>November</td>
                    <th><?= $data['hitungBarangMasukNovember']; ?> Data</th>
                </tr>
                <tr>
                    <td>Desember</td>
                    <th><?= $data['hitungBarangMasukDesember']; ?> Data</th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengajuan</th>
                    <th>Alokasi</th>
                    <th>Tanggal Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['masuk'] as $barangPengajuanCetakBerkala) : ?>
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const barangMasuk = document.getElementById('barangMasuk');

            // barang rusak
            new Chart(barangMasuk, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                    datasets: [{
                        label: '# Banyak Barang Masuk',
                        data: [<?= $data['hitungBarangMasukJanuari']; ?>, <?= $data['hitungBarangMasukFebruari']; ?>, <?= $data['hitungBarangMasukMaret']; ?>, <?= $data['hitungBarangMasukApril']; ?>, <?= $data['hitungBarangMasukMei']; ?>, <?= $data['hitungBarangMasukJuni']; ?>, <?= $data['hitungBarangMasukJuli']; ?>, <?= $data['hitungBarangMasukAgustus']; ?>, <?= $data['hitungBarangMasukSeptember']; ?>, <?= $data['hitungBarangMasukOktober']; ?>, <?= $data['hitungBarangMasukNovember']; ?>, <?= $data['hitungBarangMasukDesember']; ?>],
                        borderWidth: 1,
                        backgroundColor: '#579BB1'
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

    </div>
</body>