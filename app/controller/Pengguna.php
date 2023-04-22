<?php

class Pengguna extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Pengguna Siventari';
        $data['pengguna'] = $this->model('Pengguna_model')->getAllBarangPengguna();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/pengguna/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Data Pengguna Siventari';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/pengguna/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('Pengguna_model')->tambahDataPengguna($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Data Pengguna Siventari';
        $data['pengguna'] = $this->model('Pengguna_model')->getBarangPenggunaById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/pengguna/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Pengguna_model')->editDataPengguna($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Pengguna_model')->hapusDataPengguna($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Pengguna');
            exit;
        }
    }
}
