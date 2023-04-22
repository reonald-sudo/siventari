<?php

require_once('../app/core/Controller.php');

class DashboardDistributor extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Distributor';
        $data['distributor'] = $this->model('DashboardDistributor_model')->getRowCountDistributor();
        $data['service'] = $this->model('DashboardDistributor_model')->getRowCountService();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/dashboardDistributor/index', $data);
        $this->view('templates/footer');
        $this->view('templates/script');
    }
}
