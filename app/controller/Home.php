<?php

require_once('../app/core/Controller.php');

class Home extends Controller
{

    public function index()
    {
        if (isset($_SESSION['hak_akses'])) {
            if ($_SESSION['hak_akses'] == 'admin') {
                $this->admin();
            } elseif ($_SESSION['hak_akses'] == 'kadinas') {
                $this->kadinas();
            } elseif ($_SESSION['hak_akses'] == 'kasubag') {
                $this->kasubag();
            }
        } else {
            $this->view('login/index');
        }
    }

    public function admin()
    {
        $data['judul'] = 'Home';

        // MEGHITUNG BARIS RUANGAN
        $data['kadinas'] = $this->model('Dashboard_model')->getRowCountKadinas();
        $data['sekertaris'] = $this->model('Dashboard_model')->getRowCountSekertaris();
        $data['kasubag'] = $this->model('Dashboard_model')->getRowCountKasubag();
        $data['kabid'] = $this->model('Dashboard_model')->getRowCountKabid();
        $data['office'] = $this->model('Dashboard_model')->getRowCountOffice();
        $data['it'] = $this->model('Dashboard_model')->getRowCountIt();

        $data['ruangan'] = $data['kadinas'] + $data['sekertaris'] + $data['kasubag'] + $data['kabid'] + $data['office'] + $data['it'];

        // MENGHITUNG BARIS INVENTARIS PERIPHERAL
        $data['pengajuan'] = $this->model('DashboardInventaris_model')->getRowCountPengajuan();
        $data['barangMasuk'] = $this->model('DashboardInventaris_model')->getRowCountBarangMasuk();
        $data['barangDiPerbaiki'] = $this->model('DashboardInventaris_model')->getRowCountDiPerbaiki();
        $data['barangRusak'] = $this->model('DashboardInventaris_model')->getRowCountBarangRusak();

        $data['peripheral'] = $data['pengajuan'] + $data['barangMasuk'] + $data['barangDiPerbaiki'] + $data['barangRusak'];

        // MENGHITUNG BARIS DISTRIBUTOR DAN SERVICE CENTER
        $data['distributor'] = $this->model('DashboardDistributorService_model')->getRowCountDistributor();
        $data['service'] = $this->model('DashboardDistributorService_model')->getRowCountService();

        $data['distributor_service'] = $data['distributor'] + $data['service'];

        // MENGHITUNG BARIS PENGGUNA SIVENTARI
        $data['pengguna'] = $this->model('DashboardPengguna_model')->getRowCountPengguna();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/home/index', $data);

        $this->view('templates/footer');
        $this->view('templates/script');
    }

    public function kadinas()
    {
        $data['judul'] = 'kadinas';

        // pengajuan chart
        $data['hitungPengajuanJanuari'] = $this->model('KasubagBerkala_model')->hitungPengajuanJanuari();
        $data['hitungPengajuanFebruari'] = $this->model('KasubagBerkala_model')->hitungPengajuanFebruari();
        $data['hitungPengajuanMaret'] = $this->model('KasubagBerkala_model')->hitungPengajuanMaret();
        $data['hitungPengajuanApril'] = $this->model('KasubagBerkala_model')->hitungPengajuanApril();
        $data['hitungPengajuanMei'] = $this->model('KasubagBerkala_model')->hitungPengajuanMei();
        $data['hitungPengajuanJuni'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuni();
        $data['hitungPengajuanJuli'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuli();
        $data['hitungPengajuanAgustus'] = $this->model('KasubagBerkala_model')->hitungPengajuanAgustus();
        $data['hitungPengajuanSeptember'] = $this->model('KasubagBerkala_model')->hitungPengajuanSeptember();
        $data['hitungPengajuanOktober'] = $this->model('KasubagBerkala_model')->hitungPengajuanOktober();
        $data['hitungPengajuanNovember'] = $this->model('KasubagBerkala_model')->hitungPengajuanNovember();
        $data['hitungPengajuanDesember'] = $this->model('KasubagBerkala_model')->hitungPengajuanDesember();

        // barang masuk
        $data['hitungBarangMasukJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJanuari();
        $data['hitungBarangMasukFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukFebruari();
        $data['hitungBarangMasukMaret'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMaret();
        $data['hitungBarangMasukApril'] = $this->model('KasubagBerkala_model')->hitungBarangMasukApril();
        $data['hitungBarangMasukMei'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMei();
        $data['hitungBarangMasukJuni'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuni();
        $data['hitungBarangMasukJuli'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuli();
        $data['hitungBarangMasukAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangMasukAgustus();
        $data['hitungBarangMasukSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukSeptember();
        $data['hitungBarangMasukOktober'] = $this->model('KasubagBerkala_model')->hitungBarangMasukOktober();
        $data['hitungBarangMasukNovember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukNovember();
        $data['hitungBarangMasukDesember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukDesember();

        // barang diperbaiki
        $data['hitungBarangDiPerbaikiJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJanuari();
        $data['hitungBarangDiPerbaikiFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiFebruari();
        $data['hitungBarangDiPerbaikiMaret'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMaret();
        $data['hitungBarangDiPerbaikiApril'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiApril();
        $data['hitungBarangDiPerbaikiMei'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMei();
        $data['hitungBarangDiPerbaikiJuni'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuni();
        $data['hitungBarangDiPerbaikiJuli'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuli();
        $data['hitungBarangDiPerbaikiAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiAgustus();
        $data['hitungBarangDiPerbaikiSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiSeptember();
        $data['hitungBarangDiPerbaikiOktober'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiOktober();
        $data['hitungBarangDiPerbaikiNovember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiNovember();
        $data['hitungBarangDiPerbaikiDesember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiDesember();

        // barang rusak
        $data['hitungBarangRusakJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJanuari();
        $data['hitungBarangRusakFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakFebruari();
        $data['hitungBarangRusakMaret'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMaret();
        $data['hitungBarangRusakApril'] = $this->model('KasubagBerkala_model')->hitungBarangRusakApril();
        $data['hitungBarangRusakMei'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMei();
        $data['hitungBarangRusakJuni'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuni();
        $data['hitungBarangRusakJuli'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuli();
        $data['hitungBarangRusakAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangRusakAgustus();
        $data['hitungBarangRusakSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakSeptember();
        $data['hitungBarangRusakOktober'] = $this->model('KasubagBerkala_model')->hitungBarangRusakOktober();
        $data['hitungBarangRusakNovember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakNovember();
        $data['hitungBarangRusakDesember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakDesember();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/home/index', $data);

        $this->view('templates/footer');
        $this->view('templates/script');
    }

    public function kasubag()
    {
        $data['judul'] = 'kasubag';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kasubag/home/index', $data);

        $this->view('templates/footer');
        $this->view('templates/script');
    }
}
