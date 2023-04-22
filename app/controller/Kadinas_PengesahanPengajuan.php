<?php

class Kadinas_PengesahanPengajuan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Pengesahan Barang Pengajuan';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();


        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/pengesahanPengajuan/index', $data);
        $this->view('templates/script');
    }

    public function verifikasi()
    {
        if ($this->model('Kadinas_PengesahanPengajuan_model')->verifikasiDataPengesahanPengajuanKadinas($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Kadinas_PengesahanPengajuan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Kadinas_PengesahanPengajuan');
            exit;
        }
    }

    public function Pengajuan()
    {
        $data['judul'] = 'Cetak Data Barang Pengajuan';
        $data['kop'] = 'Berkala Bulanan Pengajuan Barang';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();


        // januari
        $data['hitungPengajuanJanuari'] = $this->model('KasubagBerkala_model')->hitungPengajuanJanuari();

        // Februari
        $data['hitungPengajuanFebruari'] = $this->model('KasubagBerkala_model')->hitungPengajuanFebruari();

        // Maret
        $data['hitungPengajuanMaret'] = $this->model('KasubagBerkala_model')->hitungPengajuanMaret();

        // April
        $data['hitungPengajuanApril'] = $this->model('KasubagBerkala_model')->hitungPengajuanApril();

        // Mei
        $data['hitungPengajuanMei'] = $this->model('KasubagBerkala_model')->hitungPengajuanMei();

        // Juni
        $data['hitungPengajuanJuni'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuni();

        // Juli
        $data['hitungPengajuanJuli'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuli();

        // Agustus
        $data['hitungPengajuanAgustus'] = $this->model('KasubagBerkala_model')->hitungPengajuanAgustus();

        // September
        $data['hitungPengajuanSeptember'] = $this->model('KasubagBerkala_model')->hitungPengajuanSeptember();

        // Oktober
        $data['hitungPengajuanOktober'] = $this->model('KasubagBerkala_model')->hitungPengajuanOktober();

        // November
        $data['hitungPengajuanNovember'] = $this->model('KasubagBerkala_model')->hitungPengajuanNovember();

        // Desember
        $data['hitungPengajuanDesember'] = $this->model('KasubagBerkala_model')->hitungPengajuanDesember();

        $this->view('templates/header', $data);

        $this->view('kadinas/kadinas_cetakPengajuan/index', $data);
        $this->view('templates/script');
    }

    public function BarangMasuk()
    {
        $data['judul'] = 'Cetak Data Barang Masuk';
        $data['kop'] = 'Berkala Bulanan Barang Masuk';
        $data['masuk'] = $this->model('BarangMasuk_model')->getAllBarangMasuk();

        // januari
        $data['hitungBarangMasukJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJanuari();

        // Februari
        $data['hitungBarangMasukFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukFebruari();

        // Maret
        $data['hitungBarangMasukMaret'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMaret();

        // April
        $data['hitungBarangMasukApril'] = $this->model('KasubagBerkala_model')->hitungBarangMasukApril();

        // Mei
        $data['hitungBarangMasukMei'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMei();

        // Juni
        $data['hitungBarangMasukJuni'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuni();

        // Juli
        $data['hitungBarangMasukJuli'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuli();

        // Agustus
        $data['hitungBarangMasukAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangMasukAgustus();

        // September
        $data['hitungBarangMasukSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukSeptember();

        // Oktober
        $data['hitungBarangMasukOktober'] = $this->model('KasubagBerkala_model')->hitungBarangMasukOktober();

        // November
        $data['hitungBarangMasukNovember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukNovember();

        // Desember
        $data['hitungBarangMasukDesember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukDesember();

        $this->view('templates/header', $data);
        $this->view('kadinas/kadinas_cetakBarangMasuk/index', $data);
        $this->view('templates/script');
    }

    public function DiPerbaiki()
    {
        $data['judul'] = 'Cetak Data Barang Diperbaiki';
        $data['kop'] = 'Berkala Bulanan Barang Diperbaiki';
        $data['perbaiki'] = $this->model('BarangDiperbaiki_model')->getAllBarangDiPerbaiki();

        // januari
        $data['hitungBarangDiPerbaikiJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJanuari();

        // Februari
        $data['hitungBarangDiPerbaikiFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiFebruari();

        // Maret
        $data['hitungBarangDiPerbaikiMaret'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMaret();

        // April
        $data['hitungBarangDiPerbaikiApril'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiApril();

        // Mei
        $data['hitungBarangDiPerbaikiMei'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMei();

        // Juni
        $data['hitungBarangDiPerbaikiJuni'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuni();

        // Juli
        $data['hitungBarangDiPerbaikiJuli'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuli();

        // Agustus
        $data['hitungBarangDiPerbaikiAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiAgustus();

        // September
        $data['hitungBarangDiPerbaikiSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiSeptember();

        // Oktober
        $data['hitungBarangDiPerbaikiOktober'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiOktober();

        // November
        $data['hitungBarangDiPerbaikiNovember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiNovember();

        // Desember
        $data['hitungBarangDiPerbaikiDesember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiDesember();

        $this->view('templates/header', $data);
        $this->view('kadinas/kadinas_cetakBarangDiPerbaiki/index', $data);
        $this->view('templates/script');
    }

    public function Rusak()
    {
        $data['judul'] = 'Cetak Data Barang Rusak';
        $data['kop'] = 'Berkala Bulanan Barang Rusak';
        $data['rusak'] = $this->model('BarangRusak_model')->getAllBarangRusak();

        // januari
        $data['hitungBarangRusakJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJanuari();

        // Februari
        $data['hitungBarangRusakFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakFebruari();

        // Maret
        $data['hitungBarangRusakMaret'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMaret();

        // April
        $data['hitungBarangRusakApril'] = $this->model('KasubagBerkala_model')->hitungBarangRusakApril();

        // Mei
        $data['hitungBarangRusakMei'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMei();

        // Juni
        $data['hitungBarangRusakJuni'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuni();

        // Juli
        $data['hitungBarangRusakJuli'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuli();

        // Agustus
        $data['hitungBarangRusakAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangRusakAgustus();

        // September
        $data['hitungBarangRusakSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakSeptember();

        // Oktober
        $data['hitungBarangRusakOktober'] = $this->model('KasubagBerkala_model')->hitungBarangRusakOktober();

        // November
        $data['hitungBarangRusakNovember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakNovember();

        // Desember
        $data['hitungBarangRusakDesember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakDesember();

        $this->view('templates/header', $data);

        $this->view('kadinas/kadinas_cetakBarangRusak/index', $data);
        $this->view('templates/script');
    }





    // AAAAAAAAAAAAAAAAA
    public function Kadinas()
    {
        $data['judul'] = 'Cetak Data Barang Kadinas';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakKadinas/index', $data);
        $this->view('templates/script');
    }

    public function Sekertaris()
    {
        $data['judul'] = 'Cetak Data Barang Sekertaris';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakSekertaris/index', $data);
        $this->view('templates/script');
    }

    public function Kasubag()
    {
        $data['judul'] = 'Cetak Data Barang Kasubag';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakKasubag/index', $data);
        $this->view('templates/script');
    }

    public function Kabid()
    {
        $data['judul'] = 'Cetak Data Barang Kabid';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakKabid/index', $data);
        $this->view('templates/script');
    }

    public function Office()
    {
        $data['judul'] = 'Cetak Data Barang Office';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakOffice/index', $data);
        $this->view('templates/script');
    }

    public function It()
    {
        $data['judul'] = 'Cetak Data Barang IT';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kadinas/kadinas_cetakIt/index', $data);
        $this->view('templates/script');
    }
}
