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

        <!-- ISI SURAT -->
        <table width="100%">
            <tr>
                <td class="kiri" width="10%">
                    <h4>No</h4>
                    <h4>Perihal</h4>
                </td>
                <td>
                    <h4>:</h4>
                    <h4>:</h4>
                </td>
                <td>
                    <h4 width="40%"> PEN/01/DTK-1A/2022</h4>
                    <h4> Pengajuan</h4>
                </td>
                <td width="60%" class="kanan">
                    <h4>Banjarbaru 1 Januari 2023</h4>
                    <p style="opacity: 0;">PROP TABLE</p>
                </td>
            </tr>
        </table>
        <br>
        <br>

        <!-- TUJUAN SURAT -->
        <table class="kiri">
            <tr>
                <td>
                    <h4>Kepada</h4>
                    <h4>Kepala Staff Bagian Sarana Prasarana</h4>
                    <h4>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h4>
                    <h4>Jl. Husni Thamrin No.1</h4>
                    <h4>Banjarbaru</h4>
                </td>
            </tr>
        </table>

        <br>
        <br>

        <!-- DENGAN HORMAT -->
        <table class="kiri">
            <tr>
                <td>
                    <h4>Dengan diterbitkannya surat ini, Bermaksud untuk mengajukan permohonan pengadaan barang sesuai kebutuhan alokasi yaitu berupa : </h4>
                    <br><br><br><br><br>

                    <h4>1. <?= $data['pengajuan']['pengajuan']; ?> - Alokasi <?= $data['pengajuan']['alokasi']; ?></h4>

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <h4>Permohonan tersebut kami ajukan sehubungan dengan keperluan barang disesuaikan alokasi. Demikian surat permohonan ini dibuat dengan sebenarnya Terimakasih atas waktu dan perhatian Bapak/Ibu.</h4>
                </td>
            </tr>
        </table>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
                    <h4>Admin</h4>
                </td>
            </tr>
        </table>

    </div>
</body>