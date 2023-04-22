<?php

require_once('../app/core/Controller.php');

class BarangPengajuan extends Controller
{
    // INI TAMPILAN UNTUK MENAMPILKAN TABEL 
    public function index()
    {
        $data['judul'] = 'Barang Pengajuan';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangPengajuan/index', $data);
        $this->view('templates/script');
    }

    // INI TAMPILAN EDIT DATA PADA BARANG PENGAJUAN
    public function edit($id)
    {
        $data['judul'] = 'Edit Barang Pengajuan';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getPengajuanById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangPengajuan/edit', $data);
        $this->view('templates/script');
    }

    // INI LOGIC EDIT DATA PADA BARANG PENGAJUAN
    public function editData()
    {
        if ($this->model('Pengajuan_model')->EditDataPengajuan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        }
    }

    // INI TAMPILAN TAMBAH DATA PADA BARANG PENGAJUAN
    public function tambah()
    {
        $data['judul'] = 'Tambah Data Barang Pengajuan';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/barangPengajuan/tambah', $data);
        $this->view('templates/script');
    }

    // INI LOGIC MENAMBAH DATA
    public function tambahData()
    {
        if ($this->model('Pengajuan_model')->tambahDataPengajuan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        }
    }

    // CETAK DATA
    public function cetak($id)
    {
        $data['judul'] = 'Cetak Data';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getPengajuanById($id);

        $this->view('templates/header', $data);
        $this->view('admin/barangPengajuan/cetak', $data);
    }

    // CETAK DATA BY TANGGAL
    public function cetakFilter()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Pengajuan';
        $data['filter'] = $this->model('Pengajuan_model')->getDataFromBetweenDates($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangPengajuan/cetakFilter', $data);
    }

    // CETAK DATA BY ALOKASI
    public function cetakFilterByAlokasi()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Pengajuan';
        $data['filter'] = $this->model('Pengajuan_model')->getDataFromAlokasi($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangPengajuan/cetakByAlokasi', $data);
    }

    // CETAK DATA BY BARANG
    public function cetakFilterByBarang()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Pengajuan';
        $data['filter'] = $this->model('Pengajuan_model')->getDataFromBarang($_POST);

        $this->view('templates/header', $data);
        $this->view('admin/barangPengajuan/cetakByBarang', $data);
    }

    // CETAK DATA ALL
    public function cetakAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Pengajuan';
        $data['filter'] = $this->model('Pengajuan_model')->cetakAll();

        $this->view('templates/header', $data);
        $this->view('admin/barangPengajuan/cetakAll', $data);
    }

    // INI LOGIC MENGHAPUS DATA
    public function hapus($id)
    {
        if ($this->model('Pengajuan_model')->hapusDataPengajuan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/BarangPengajuan');
            exit;
        }
    }
}
