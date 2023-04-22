<?php

require_once('../app/core/Controller.php');

class BarangRusak extends Controller
{
    public function index()
    {
        $data['judul'] = 'Barang Rusak';
        $data['rusak'] = $this->model('BarangRusak_model')->getAllBarangRusak();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangRusak/index', $data);
        $this->view('templates/script');
    }

    public function edit($id)
    {
        $data['judul'] = 'Barang Rusak';
        $data['rusak'] = $this->model('BarangRusak_model')->getBarangRusakById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangRusak/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('BarangRusak_model')->editDataBarangRusak($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('BarangRusak_model')->hapusDataBarangRusak($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        }
    }

    // CETAK DATA BY FILTER
    public function cetakFilter()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Rusak';
        $data['filter'] = $this->model('BarangRusak_model')->getDataFromBetweenDates($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangRusak/cetakFilter', $data);
    }

    public function tambahData($id)
    {
        if ($this->model('BarangRusak_model')->tambahDataBarangRusak($_POST) > 0) {

            $this->model('Kadinas_model')->hapusDataKadinas($id);
            $this->model('Sekertaris_model')->hapusDataSekertaris($id);
            $this->model('Kasubag_model')->hapusDataKasubag($id);
            $this->model('Kabid_model')->hapusDataKabid($id);
            $this->model('Office_model')->hapusDataOffice($id);
            $this->model('It_model')->hapusDataIt($id);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/BarangRusak');
            exit;
        }
    }
}
