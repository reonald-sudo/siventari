<?php

class Distributor extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Distributor';
        $data['distributor'] = $this->model('Distributor_model')->getAllBarangDistributor();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/distributor/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Distributor';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/distributor/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('Distributor_model')->tambahDataDistributor($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Distributor';
        $data['cetak'] = $this->model('Distributor_model')->cetakDataAllDistributor();

        $this->view('templates/header', $data);
        $this->view('admin/distributor/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Distributor';
        $data['distributor'] = $this->model('Distributor_model')->getBarangDistributorById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/distributor/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Distributor_model')->editDataDistributor($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Distributor_model')->hapusDataDistributor($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Distributor');
            exit;
        }
    }
}
