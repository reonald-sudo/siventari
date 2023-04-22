<?php

class Kabid extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Kabid';
        $data['kabid'] = $this->model('Kabid_model')->getAllBarangKabid();
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kabid/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Kabid';
        $data['barangMasuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kabid/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('Kabid_model')->tambahDataKabid($_POST, $_FILES) > 0) {

            $this->model('BarangMasuk_model')->hapusDataBarangMasukByIdBarang($_POST['idPengajuan']);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Peripheral Kabid';
        $data['cetak'] = $this->model('Kabid_model')->cetakDataAllKabid();

        $this->view('templates/header', $data);
        $this->view('admin/kabid/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Kabid';
        $data['kabid'] = $this->model('Kabid_model')->getBarangKabidById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/kabid/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Kabid_model')->editDataKabid($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kabid_model')->hapusDataKabid($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Kabid');
            exit;
        }
    }
}
