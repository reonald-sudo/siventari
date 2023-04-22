<div class="card">
    <div class="card-header mb-0">
        <img src="<?= BASEURL2; ?>/dist/img/gambar1.jpg" alt="" style="width: 200px;" class="float-right pl-3">
        <h4>Good Morning, admin !</h4>
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

    <!-- CARD 1 -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $data['peripheral']; ?></h3>

                <p>Inventaris Peripheral</p>
            </div>
            <div class="icon">
                <i class="fa fa-cloud"></i>
            </div>
            <a href="<?= BASEURL; ?>/DashboardInventaris" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- CARD 2  -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $data['ruangan']; ?></h3>

                <p>Inventaris Ruangan</p>
            </div>
            <div class="icon">
                <i class="fa fa-cloud"></i>
            </div>
            <a href="<?= BASEURL; ?>/Dashboard" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- CARD 3 -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $data['distributor_service']; ?></h3>

                <p>Distributor & Service</p>
            </div>
            <div class="icon">
                <i class="fa fa-cloud"></i>
            </div>
            <a href="<?= BASEURL; ?>/DashboardDistributor" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <!-- CARD 4 -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $data['pengguna']; ?></h3>

                <p>Pengguna Siventari</p>
            </div>
            <div class="icon">
                <i class="fa fa-cloud"></i>
            </div>
            <a href="<?= BASEURL; ?>/Pengguna" class="small-box-footer">Masuk <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

</section>
</div>
</div>