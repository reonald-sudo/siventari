<?php

class Sekertaris extends Controller
{
    public function index()
    {
        $data['judul'] = 'Inventaris Sekertaris';
        $data['sekertaris'] = $this->model('Sekertaris_model')->getAllBarangSekertaris();
        $data['service'] = $this->model('ServiceCenter_model')->getAllBarangServiceCenter();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/sekertaris/index', $data);
        $this->view('templates/script');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Inventaris Sekertaris';
        $data['barangMasuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/sekertaris/tambah', $data);
        $this->view('templates/script');
    }

    public function tambahData()
    {
        if ($this->model('Sekertaris_model')->tambahDataSekertaris($_POST, $_FILES) > 0) {

            $this->model('BarangMasuk_model')->hapusDataBarangMasukByIdBarang($_POST['idPengajuan']);
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        }
    }

    public function cetakDataAll()
    {
        $data['judul'] = 'Cetak Data';
        $data['kop'] = 'Inventaris Peripheral Sekertaris';
        $data['cetak'] = $this->model('Sekertaris_model')->cetakDataAllSekertaris();

        $this->view('templates/header', $data);
        $this->view('admin/sekertaris/cetakDataAll', $data);
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Inventaris Sekertaris';
        $data['sekertaris'] = $this->model('Sekertaris_model')->getBarangSekertarisById($id);

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('admin/sekertaris/edit', $data);
        $this->view('templates/script');
    }

    public function editData()
    {
        if ($this->model('Sekertaris_model')->editDataSekertaris($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Sekertaris_model')->hapusDataSekertaris($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Sekertaris');
            exit;
        }
    }

    public function MenampilkanBarang()
    {
        echo json_encode($this->model('Pengajuan_model')->MenampilkanBarangPengajuanById($_POST['idPengajuan']));
    }
}
