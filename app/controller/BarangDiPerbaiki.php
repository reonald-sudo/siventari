<?php

require_once('../app/core/Controller.php');

class BarangDiPerbaiki extends Controller
{
    // INDEX
    public function index()
    {
        $data['judul'] = 'Barang Diperbaiki';
        $data['perbaiki'] = $this->model('BarangDiperbaiki_model')->getAllBarangDiPerbaiki();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangDiPerbaiki/index', $data);
        $this->view('templates/script');
    }

    // EDIT
    public function edit($id)
    {
        $data['judul'] = 'Barang Diperbaiki';
        $data['perbaiki'] = $this->model('BarangDiPerbaiki_model')->getBarangDiPerbaikiById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangDiPerbaiki/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('BarangDiPerbaiki_model')->editDataBarangDiPerbaiki($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        }
    }

    public function tambahData($id)
    {
        if ($this->model('BarangDiPerbaiki_model')->tambahDataBarangDiPerbaiki($_POST) > 0) {

            $this->model('Kadinas_model')->hapusDataKadinas($id);
            $this->model('Sekertaris_model')->hapusDataSekertaris($id);
            $this->model('Kasubag_model')->hapusDataKasubag($id);
            $this->model('Kabid_model')->hapusDataKabid($id);
            $this->model('Office_model')->hapusDataOffice($id);
            $this->model('It_model')->hapusDataIt($id);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        }
    }

    public function selesai($id)
    {
        if ($this->model('BarangDiperbaiki_model')->hapusDataBarangDiPerbaiki($id) > 0) {
            if ($_POST['alokasi'] === 'KADINAS') {
                $this->model('Kadinas_model')->tambahDataKadinas($_POST, $_FILES);
            } elseif ($_POST['alokasi'] === 'SEKERTARIS') {
                $this->model('Sekertaris_model')->tambahDataSekertaris($_POST, $_FILES);
            } elseif ($_POST['alokasi'] === 'KASUBAG') {
                $this->model('Kasubag_model')->tambahDataKasubag($_POST, $_FILES);
            } elseif ($_POST['alokasi'] === 'KABID') {
                $this->model('Kabid_model')->tambahDataKabid($_POST, $_FILES);
            } elseif ($_POST['alokasi'] === 'OFFICE') {
                $this->model('Office_model')->tambahDataOffice($_POST, $_FILES);
            } elseif ($_POST['alokasi'] === 'IT') {
                $this->model('It_model')->tambahDataIt($_POST, $_FILES);
            }

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        }
    }

    // HAPUS
    public function hapus($id)
    {
        if ($this->model('BarangDiPerbaiki_model')->hapusDataBarangDiPerbaiki($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/BarangDiPerbaiki');
            exit;
        }
    }

    // CETAK DATA BY FILTER
    public function cetakFilter()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Diperbaiki';
        $data['filter'] = $this->model('BarangDiPerbaiki_model')->getDataFromBetweenDates($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangDiPerbaiki/cetakFilter', $data);
    }
}
