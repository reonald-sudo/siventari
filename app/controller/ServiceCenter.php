<?php

class ServiceCenter extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Service Center';
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/serviceCenter/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Service Center';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/serviceCenter/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('ServiceCenter_model')->tambahDataServiceCenter($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Service Center';
        $data['cetak'] = $this->model('ServiceCenter_model')->cetakDataAllServiceCenter();

        $this->view('templates/header', $data);
        $this->view('admin/serviceCenter/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Service Center';
        $data['service'] = $this->model('ServiceCenter_model')->getBarangServiceCenterById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/serviceCenter/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('ServiceCenter_model')->editDataServiceCenter($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('ServiceCenter_model')->hapusDataServiceCenter($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/ServiceCenter');
            exit;
        }
    }
}
