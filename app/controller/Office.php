<?php

class Office extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Office';
        $data['office'] = $this->model('Office_model')->getAllBarangOffice();
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/office/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Office';
        $data['barangMasuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/office/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('Office_model')->tambahDataOffice($_POST, $_FILES) > 0) {

            $this->model('BarangMasuk_model')->hapusDataBarangMasukByIdBarang($_POST['idPengajuan']);

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Office');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Office');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Peripheral Office';
        $data['cetak'] = $this->model('Office_model')->cetakDataAllOffice();

        $this->view('templates/header', $data);
        $this->view('admin/office/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Office';
        $data['office'] = $this->model('Office_model')->getBarangOfficeById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/office/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Office_model')->editDataOffice($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Office');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Office');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Office_model')->hapusDataOffice($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Office');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Office');
            exit;
        }
    }
}
