<?php

class It extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris IT';
        $data['it'] = $this->model('It_model')->getAllBarangIt();
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/it/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris IT';
        $data['barangMasuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/it/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('It_model')->tambahDataIt($_POST, $_FILES) > 0) {

            $this->model('BarangMasuk_model')->hapusDataBarangMasukByIdBarang($_POST['idPengajuan']);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/It');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/It');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Peripheral IT';
        $data['cetak'] = $this->model('It_model')->cetakDataAllIt();

        $this->view('templates/header', $data);
        $this->view('admin/it/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris IT';
        $data['it'] = $this->model('It_model')->getBarangItById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/it/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('It_model')->editDataIt($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/It');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/It');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('It_model')->hapusDataIt($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/It');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/It');
            exit;
        }
    }
}
