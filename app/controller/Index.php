<?php

require_once('../app/core/Controller.php');

class Home extends Controller
{
    public function index()
    {
        print_r('ads');
        die;
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


        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/home/index', $data);

        $this->view('templates/footer');
        $this->view('templates/script');
    }
}
