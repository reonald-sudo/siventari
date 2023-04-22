<?php

require_once('../app/core/Controller.php');

class DashboardInventaris extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Inventaris';
        $data['pengajuan'] = $this->model('DashboardInventaris_model')->getRowCountPengajuan();
        $data['barangMasuk'] = $this->model('DashboardInventaris_model')->getRowCountBarangMasuk();
        $data['barangDiPerbaiki'] = $this->model('DashboardInventaris_model')->getRowCountDiPerbaiki();
        $data['barangRusak'] = $this->model('DashboardInventaris_model')->getRowCountBarangRusak();


        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/dashboardInventaris/index', $data);
        $this->view('templates/footer');
        $this->view('templates/script');
    }
}
