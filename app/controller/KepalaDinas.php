<?php

require_once('../app/core/Controller.php');

class KepalaDinas extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Kadinas';
        $data['kadinas'] = $this->model('Kadinas_model')->getAllBarangKadinas();
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kadinas/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Kadinas';
        $data['barangMasuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kadinas/tambah', $data);
        $this->view('templates/script');
    }

    public function MenampilkanBarang()
    {
        echo json_encode($this->model('Pengajuan_model')->MenampilkanBarangPengajuanById($_POST['idPengajuan']));
    }

    public function MenampilkanBarangMasuk()
    {
        echo json_encode($this->model('BarangMasuk_model')->MenampilkanBarangMasukById($_POST['idPengajuan']));
    }

    public function MenampilkanAlokasi()
    {
        echo json_encode($this->model('Pengajuan_model')->MenampilkanAlokasiPengajuanById($_POST['idPengajuan']));
    }

    public function tambahData()
    {
        if ($this->model('Kadinas_model')->tambahDataKadinas($_POST, $_FILES) > 0) {

            $this->model('BarangMasuk_model')->hapusDataBarangMasukByIdBarang($_POST['idPengajuan']);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kadinas_model')->hapusDataKadinas($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Kadinas';
        $data['kadinas'] = $this->model('Kadinas_model')->getBarangKadinasById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kadinas/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Kadinas_model')->editDataKadinas($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/KepalaDinas');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Peripheral Kepala Dinas';
        $data['cetak'] = $this->model('Kadinas_model')->cetakDataAllKadinas();

        $this->view('templates/header', $data);
        $this->view('admin/kadinas/cetakDataAll', $data);
    }
}
