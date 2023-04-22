<?php

require_once('../app/core/Controller.php');

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Inventaris Ruangan';
        $data['kadinas'] = $this->model('Dashboard_model')->getRowCountKadinas();
        $data['sekertaris'] = $this->model('Dashboard_model')->getRowCountSekertaris();
        $data['kasubag'] = $this->model('Dashboard_model')->getRowCountKasubag();
        $data['kabid'] = $this->model('Dashboard_model')->getRowCountKabid();
        $data['office'] = $this->model('Dashboard_model')->getRowCountOffice();
        $data['it'] = $this->model('Dashboard_model')->getRowCountIt();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footer');
        $this->view('templates/script');
    }
}
