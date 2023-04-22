<div class="card">
    <div class="card-header mb-0">
        <img src="<?= BASEURL2; ?>/dist/img/gambar1.jpg" alt="" style="width: 200px;" class="float-right pl-3">
        <h4>Good Morning, Dr. Hj. Rahmah Khairita, MM !</h4>
        <p><em>Today <?= date('l') ?>, <?= date('F Y'); ?></em></p>
        <p id="timestamp" class="badge badge-success"></p>
    </div>
</div>

<div class="card">
    <div class="card-header mb-0">
        <img src="dist/img/landing.jpg" alt="" style="width: 200px;" class="float-right pl-3">
        <h4>Berita terbaru DPMPTSP Banjarbaru</h4>
        <p><em>Berikut merupakan beberapa berita terbaru tanggal, <?= date('d F Y'); ?></em></p>
        <p id="timestamp" class="badge badge-success"></p>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide mb-3 p-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= BASEURL2; ?>/dist/img/kantor.jpg" style="margin-top: -179px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mal Pelayanan Publik Satu Pintu</h5>
                    <p>Terwujudnya banjarbaru sebagai kota pelayanan yang berkarakter dalam perizinan terpadu satu pintu yang prima dan bebas kkn.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL2; ?>/dist/img/isra-miraj.jpg" style="margin-top: -244px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Peringatan Isra Mi'raj</h5>
                    <p>Keluarga Besar Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Banjarbaru Mengucapkan Selamat memperingati Isra Miraj 1444 H.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL2; ?>/dist/img/berita2.jpg" style="margin-top: -222px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Musyawarah Komwil VAPEKSI Regional Kalimantan</h5>
                    <p>Selamat Datang di Kota Banjarbaru Peserta Musyawarah Komwil V
                        APEKSI Regional Kalimantan.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

<div class="row">

    <div class="card col-lg-6">
        <div class="card-body">
            <h6 style="text-align: center;">PENGAJUAN INVENTARIS</h6>
            <canvas id="pengajuan"></canvas>
        </div>
    </div>

    <div class="card col-lg-6">
        <div class="card-body">
            <h6 style="text-align: center;">BARANG MASUK</h6>
            <canvas id="barangMasuk"></canvas>
        </div>
    </div>

    <div class="card col-lg-6">
        <div class="card-body">
            <h6 style="text-align: center;">BARANG DIPERBAIKI</h6>
            <canvas id="barangDiPerbaiki"></canvas>
        </div>
    </div>

    <div class="card col-lg-6">
        <div class="card-body">
            <h6 style="text-align: center;">BARANG RUSAK</h6>
            <canvas id="barangRusak"></canvas>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const pengajuan = document.getElementById('pengajuan');
    const barangMasuk = document.getElementById('barangMasuk');
    const barangDiPerbaiki = document.getElementById('barangDiPerbaiki');
    const barangRusak = document.getElementById('barangRusak');

    // pengajuan
    new Chart(pengajuan, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# Banyak Pengajuan',
                data: [<?= $data['hitungPengajuanJanuari']; ?>, <?= $data['hitungPengajuanFebruari']; ?>, <?= $data['hitungPengajuanMaret']; ?>, <?= $data['hitungPengajuanApril']; ?>, <?= $data['hitungPengajuanMei']; ?>, <?= $data['hitungPengajuanJuni']; ?>, <?= $data['hitungPengajuanJuli']; ?>, <?= $data['hitungPengajuanAgustus']; ?>, <?= $data['hitungPengajuanSeptember']; ?>, <?= $data['hitungPengajuanOktober']; ?>, <?= $data['hitungPengajuanNovember']; ?>, <?= $data['hitungPengajuanDesember']; ?>],
                borderWidth: 1,
                backgroundColor: '#243763'
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

    // barang masuk
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

    // barang diperbaiki
    new Chart(barangDiPerbaiki, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# Banyak Barang Diperbaiki',
                data: [<?= $data['hitungBarangDiPerbaikiJanuari']; ?>, <?= $data['hitungBarangDiPerbaikiFebruari']; ?>, <?= $data['hitungBarangDiPerbaikiMaret']; ?>, <?= $data['hitungBarangDiPerbaikiApril']; ?>, <?= $data['hitungBarangDiPerbaikiMei']; ?>, <?= $data['hitungBarangDiPerbaikiJuni']; ?>, <?= $data['hitungBarangDiPerbaikiJuli']; ?>, <?= $data['hitungBarangDiPerbaikiAgustus']; ?>, <?= $data['hitungBarangDiPerbaikiSeptember']; ?>, <?= $data['hitungBarangDiPerbaikiOktober']; ?>, <?= $data['hitungBarangDiPerbaikiNovember']; ?>, <?= $data['hitungBarangDiPerbaikiDesember']; ?>],
                borderWidth: 1,
                backgroundColor: '#939B62'
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

    // barang rusak
    new Chart(barangRusak, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# Banyak Barang Rusak',
                data: [<?= $data['hitungBarangRusakJanuari']; ?>, <?= $data['hitungBarangRusakFebruari']; ?>, <?= $data['hitungBarangRusakMaret']; ?>, <?= $data['hitungBarangRusakApril']; ?>, <?= $data['hitungBarangRusakMei']; ?>, <?= $data['hitungBarangRusakJuni']; ?>, <?= $data['hitungBarangRusakJuli']; ?>, <?= $data['hitungBarangRusakAgustus']; ?>, <?= $data['hitungBarangRusakSeptember']; ?>, <?= $data['hitungBarangRusakOktober']; ?>, <?= $data['hitungBarangRusakNovember']; ?>, <?= $data['hitungBarangRusakDesember']; ?>],
                borderWidth: 1,
                backgroundColor: '#C27664'
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

</section>
</div>
</div>