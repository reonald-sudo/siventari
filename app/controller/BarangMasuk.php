<?php

require_once('../app/core/Controller.php');

class barangMasuk extends Controller
{
    public function __construct()
    {
        if ($_SESSION['hak_akses'] != 'admin') {
            $data['judul'] = '403';

            $this->view('templates/header', $data);
            $this->view('templates/navbar');
            $this->view('templates/sidebar');
            $this->view('templates/contentHeader', $data);

            $this->view('templates/403', $data);
            $this->view('templates/script');
            die;
        }
    }

    public function index()
    {
        $data['judul'] = 'Barang Masuk';
        $data['masuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangMasuk/index', $data);
        $this->view('templates/script');
    }

    public function edit($id)
    {
        $data['judul'] = 'Barang Masuk';
        $data['masuk'] = $this->model('BarangMasuk_model')->getBarangMasukById($id);
        $data['distributor'] = $this->model('Distributor_model')->getAllBarangDistributor();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangMasuk/edit', $data);
        $this->view('templates/script');
    }

    // INI LOGIC EDIT DATA PADA BARANG PENGAJUAN
    public function editData()
    {

        if ($this->model('BarangMasuk_model')->editDataBarangMasuk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        }
    }


    public function tambah()
    {
        $data['judul'] = 'Tambah Data Barang Masuk';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getPengajuanById($id);
        $data['distributor'] = $this->model('Distributor_model')->getAllBarangDistributor();
        $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangMasuk/tambah', $data);
        $this->view('templates/script');
    }

    // INI LOGIC MENAMBAH DATA 
    public function tambahData()
    {
        if ($this->model('BarangMasuk_model')->tambahDataBarangMasuk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        }
    }

    // INI LOGIC MENGHAPUS DATA 
    public function hapus($id)
    {
        if ($this->model('BarangMasuk_model')->hapusDataBarangMasuk($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/BarangMasuk');
            exit;
        }
    }

    // CETAK DATA
    public function cetak($id)
    {
        $data['judul'] = 'Cetak Data';
        $data['pengajuan'] = $this->model('BarangMasuk_model')->getBarangMasukById($id);
        $this->view('templates/header', $data);
        $this->view('admin/barangMasuk/cetak', $data);
    }

    // CETAK DATA BY ALOKASI
    public function cetakFilterByAlokasi()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Masuk';
        $data['filter'] = $this->model('BarangMasuk_model')->getDataFromAlokasi($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangMasuk/cetakByAlokasi', $data);
    }

    // CETAK DATA BY BARANG
    public function cetakFilterByBarang()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Masuk';
        $data['filter'] = $this->model('BarangMasuk_model')->getDataFromBarang($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangMasuk/cetakByBarang', $data);
    }

    // CETAK DATA ALL
    public function cetakAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Masuk';
        $data['filter'] = $this->model('BarangMasuk_model')->cetakAll();

        $this->view('templates/header', $data);
        $this->view('admin/barangMasuk/cetakAll', $data);
    }

    // CETAK DATA BY FILTER
    public function cetakFilter()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Barang Masuk';
        $data['filter'] = $this->model('BarangMasuk_model')->getDataFromBetweenDates($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangMasuk/cetakFilter', $data);
    }
}
