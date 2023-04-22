<?php

class Kasubag_PengesahanPengajuan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Pengesahan Barang Pengajuan';
        $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kasubag/pengesahanPengajuan/index', $data);
        $this->view('templates/script');
    }

    public function verifikasi()
    {
        if ($this->model('Kasubag_PengesahanPengajuan_model')->verifikasiDataPengesahanPengajuanKasubag($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Kasubag_PengesahanPengajuan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Kasubag_PengesahanPengajuan');
            exit;
        }
    }

    public function CetakBerkala()
    {
        $data['judul'] = 'Cetak Data Laporan Berkala Inventaris';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kasubag/kasubag_cetakPengajuan/index', $data);
        $this->view('templates/script');
    }

    public function CetakBerkala2()
    {
        $data['judul'] = 'Cetak Data Laporan Berkala Ruangan';
        // $data['pengajuan'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');
        $this->view('templates/contentHeader', $data);

        $this->view('kasubag/kasubag_cetakPengajuan/berkalaRuangan', $data);
        $this->view('templates/script');
    }

    public function CetakBerkalaPengajuan()
    {
        $data['judul'] = 'Cetak Data Barang Pengajuan';
        $data['kop'] = 'Berkala Bulanan Pengajuan Barang';

        // januari
        $data['cetakJanuari'] = $this->model('KasubagBerkala_model')->getAllPengajuanJanuari();
        $data['hitungPengajuanJanuari'] = $this->model('KasubagBerkala_model')->hitungPengajuanJanuari();

        // Februari
        $data['cetakFebruari'] = $this->model('KasubagBerkala_model')->getAllPengajuanFebruari();
        $data['hitungPengajuanFebruari'] = $this->model('KasubagBerkala_model')->hitungPengajuanFebruari();

        // Maret
        $data['cetakMaret'] = $this->model('KasubagBerkala_model')->getAllPengajuanMaret();
        $data['hitungPengajuanMaret'] = $this->model('KasubagBerkala_model')->hitungPengajuanMaret();

        // April
        $data['cetakApril'] = $this->model('KasubagBerkala_model')->getAllPengajuanApril();
        $data['hitungPengajuanApril'] = $this->model('KasubagBerkala_model')->hitungPengajuanApril();

        // Mei
        $data['cetakMei'] = $this->model('KasubagBerkala_model')->getAllPengajuanMei();
        $data['hitungPengajuanMei'] = $this->model('KasubagBerkala_model')->hitungPengajuanMei();

        // Juni
        $data['cetakJuni'] = $this->model('KasubagBerkala_model')->getAllPengajuanJuni();
        $data['hitungPengajuanJuni'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuni();

        // Juli
        $data['cetakJuli'] = $this->model('KasubagBerkala_model')->getAllPengajuanJuli();
        $data['hitungPengajuanJuli'] = $this->model('KasubagBerkala_model')->hitungPengajuanJuli();

        // Agustus
        $data['cetakAgustus'] = $this->model('KasubagBerkala_model')->getAllPengajuanAgustus();
        $data['hitungPengajuanAgustus'] = $this->model('KasubagBerkala_model')->hitungPengajuanAgustus();

        // September
        $data['cetakSeptember'] = $this->model('KasubagBerkala_model')->getAllPengajuanSeptember();
        $data['hitungPengajuanSeptember'] = $this->model('KasubagBerkala_model')->hitungPengajuanSeptember();

        // Oktober
        $data['cetakOktober'] = $this->model('KasubagBerkala_model')->getAllPengajuanOktober();
        $data['hitungPengajuanOktober'] = $this->model('KasubagBerkala_model')->hitungPengajuanOktober();

        // November
        $data['cetakNovember'] = $this->model('KasubagBerkala_model')->getAllPengajuanNovember();
        $data['hitungPengajuanNovember'] = $this->model('KasubagBerkala_model')->hitungPengajuanNovember();

        // Desember
        $data['cetakDesember'] = $this->model('KasubagBerkala_model')->getAllPengajuanDesember();
        $data['hitungPengajuanDesember'] = $this->model('KasubagBerkala_model')->hitungPengajuanDesember();

        $this->view('templates/header', $data);

        $this->view('kasubag/kasubag_cetakPengajuan/pengajuan', $data);
        $this->view('templates/script');
    }

    public function CetakBerkalaBarangMasuk()
    {
        $data['judul'] = 'Cetak Data Barang Masuk';
        $data['kop'] = 'Berkala Bulanan Barang Masuk';

        // januari
        $data['cetakJanuari'] = $this->model('KasubagBerkala_model')->getAllBarangMasukJanuari();
        $data['hitungBarangMasukJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJanuari();
        // Februari
        $data['cetakFebruari'] = $this->model('KasubagBerkala_model')->getAllBarangMasukFebruari();
        $data['hitungBarangMasukFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangMasukFebruari();

        // Maret
        $data['cetakMaret'] = $this->model('KasubagBerkala_model')->getAllBarangMasukMaret();
        $data['hitungBarangMasukMaret'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMaret();

        // April
        $data['cetakApril'] = $this->model('KasubagBerkala_model')->getAllBarangMasukApril();
        $data['hitungBarangMasukApril'] = $this->model('KasubagBerkala_model')->hitungBarangMasukApril();

        // Mei
        $data['cetakMei'] = $this->model('KasubagBerkala_model')->getAllBarangMasukMei();
        $data['hitungBarangMasukMei'] = $this->model('KasubagBerkala_model')->hitungBarangMasukMei();

        // Juni
        $data['cetakJuni'] = $this->model('KasubagBerkala_model')->getAllBarangMasukJuni();
        $data['hitungBarangMasukJuni'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuni();

        // Juli
        $data['cetakJuli'] = $this->model('KasubagBerkala_model')->getAllBarangMasukJuli();
        $data['hitungBarangMasukJuli'] = $this->model('KasubagBerkala_model')->hitungBarangMasukJuli();

        // Agustus
        $data['cetakAgustus'] = $this->model('KasubagBerkala_model')->getAllBarangMasukAgustus();
        $data['hitungBarangMasukAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangMasukAgustus();

        // September
        $data['cetakSeptember'] = $this->model('KasubagBerkala_model')->getAllBarangMasukSeptember();
        $data['hitungBarangMasukSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukSeptember();

        // Oktober
        $data['cetakOktober'] = $this->model('KasubagBerkala_model')->getAllBarangMasukOktober();
        $data['hitungBarangMasukOktober'] = $this->model('KasubagBerkala_model')->hitungBarangMasukOktober();

        // November
        $data['cetakNovember'] = $this->model('KasubagBerkala_model')->getAllBarangMasukNovember();
        $data['hitungBarangMasukNovember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukNovember();

        // Desember
        $data['cetakDesember'] = $this->model('KasubagBerkala_model')->getAllBarangMasukDesember();
        $data['hitungBarangMasukDesember'] = $this->model('KasubagBerkala_model')->hitungBarangMasukDesember();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/barangMasuk', $data);
        $this->view('templates/script');
    }

    public function CetakBerkalaBarangDiPerbaiki()
    {
        $data['judul'] = 'Cetak Data Barang DiPerbaiki';
        $data['kop'] = 'Berkala Bulanan Barang DiPerbaiki';

        // januari
        $data['cetakJanuari'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiJanuari();
        $data['hitungBarangDiPerbaikiJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJanuari();
        // Februari
        $data['cetakFebruari'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiFebruari();
        $data['hitungBarangDiPerbaikiFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiFebruari();

        // Maret
        $data['cetakMaret'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiMaret();
        $data['hitungBarangDiPerbaikiMaret'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMaret();

        // April
        $data['cetakApril'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiApril();
        $data['hitungBarangDiPerbaikiApril'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiApril();

        // Mei
        $data['cetakMei'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiMei();
        $data['hitungBarangDiPerbaikiMei'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiMei();

        // Juni
        $data['cetakJuni'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiJuni();
        $data['hitungBarangDiPerbaikiJuni'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuni();

        // Juli
        $data['cetakJuli'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiJuli();
        $data['hitungBarangDiPerbaikiJuli'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiJuli();

        // Agustus
        $data['cetakAgustus'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiAgustus();
        $data['hitungBarangDiPerbaikiAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiAgustus();

        // September
        $data['cetakSeptember'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiSeptember();
        $data['hitungBarangDiPerbaikiSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiSeptember();

        // Oktober
        $data['cetakOktober'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiOktober();
        $data['hitungBarangDiPerbaikiOktober'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiOktober();

        // November
        $data['cetakNovember'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiNovember();
        $data['hitungBarangDiPerbaikiNovember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiNovember();

        // Desember
        $data['cetakDesember'] = $this->model('KasubagBerkala_model')->getAllBarangDiPerbaikiDesember();
        $data['hitungBarangDiPerbaikiDesember'] = $this->model('KasubagBerkala_model')->hitungBarangDiPerbaikiDesember();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/barangDiPerbaiki', $data);
        $this->view('templates/script');
    }

    public function CetakBerkalaBarangRusak()
    {
        $data['judul'] = 'Cetak Data Barang DiPerbaiki';
        $data['kop'] = 'Berkala Bulanan Barang DiPerbaiki';

        // januari
        $data['cetakJanuari'] = $this->model('KasubagBerkala_model')->getAllBarangRusakJanuari();
        $data['hitungBarangRusakJanuari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJanuari();
        // Februari
        $data['cetakFebruari'] = $this->model('KasubagBerkala_model')->getAllBarangRusakFebruari();
        $data['hitungBarangRusakFebruari'] = $this->model('KasubagBerkala_model')->hitungBarangRusakFebruari();

        // Maret
        $data['cetakMaret'] = $this->model('KasubagBerkala_model')->getAllBarangRusakMaret();
        $data['hitungBarangRusakMaret'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMaret();

        // April
        $data['cetakApril'] = $this->model('KasubagBerkala_model')->getAllBarangRusakApril();
        $data['hitungBarangRusakApril'] = $this->model('KasubagBerkala_model')->hitungBarangRusakApril();

        // Mei
        $data['cetakMei'] = $this->model('KasubagBerkala_model')->getAllBarangRusakMei();
        $data['hitungBarangRusakMei'] = $this->model('KasubagBerkala_model')->hitungBarangRusakMei();

        // Juni
        $data['cetakJuni'] = $this->model('KasubagBerkala_model')->getAllBarangRusakJuni();
        $data['hitungBarangRusakJuni'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuni();

        // Juli
        $data['cetakJuli'] = $this->model('KasubagBerkala_model')->getAllBarangRusakJuli();
        $data['hitungBarangRusakJuli'] = $this->model('KasubagBerkala_model')->hitungBarangRusakJuli();

        // Agustus
        $data['cetakAgustus'] = $this->model('KasubagBerkala_model')->getAllBarangRusakAgustus();
        $data['hitungBarangRusakAgustus'] = $this->model('KasubagBerkala_model')->hitungBarangRusakAgustus();

        // September
        $data['cetakSeptember'] = $this->model('KasubagBerkala_model')->getAllBarangRusakSeptember();
        $data['hitungBarangRusakSeptember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakSeptember();

        // Oktober
        $data['cetakOktober'] = $this->model('KasubagBerkala_model')->getAllBarangRusakOktober();
        $data['hitungBarangRusakOktober'] = $this->model('KasubagBerkala_model')->hitungBarangRusakOktober();

        // November
        $data['cetakNovember'] = $this->model('KasubagBerkala_model')->getAllBarangRusakNovember();
        $data['hitungBarangRusakNovember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakNovember();

        // Desember
        $data['cetakDesember'] = $this->model('KasubagBerkala_model')->getAllBarangRusakDesember();
        $data['hitungBarangRusakDesember'] = $this->model('KasubagBerkala_model')->hitungBarangRusakDesember();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/barangRusak', $data);
        $this->view('templates/script');
    }



    // AAAAAAAAAAAAAAAAA
    public function Kadinas()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris Kadinas';
        $data['cetakKadinas'] = $this->model('Kadinas_model')->getAllBarangKadinas();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/kadinas', $data);
        $this->view('templates/script');
    }

    public function Sekertaris()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris Sekertaris';
        $data['cetakSekertaris'] = $this->model('Sekertaris_model')->getAllBarangSekertaris();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/sekertaris', $data);
        $this->view('templates/script');
    }

    public function Kasubag()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris Kasubag';
        $data['cetakKasubag'] = $this->model('Kasubag_model')->getAllBarangKasubag();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/kasubag', $data);
        $this->view('templates/script');
    }

    public function Kabid()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris Kabid';
        $data['cetakKabid'] = $this->model('Kabid_model')->getAllBarangKabid();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/kabid', $data);
        $this->view('templates/script');
    }

    public function Office()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris Office';
        $data['cetakOffice'] = $this->model('Office_model')->getAllBarangOffice();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/office', $data);
        $this->view('templates/script');
    }

    public function It()
    {
        $data['judul'] = 'Cetak Data Barang Inventaris Kadinas';
        $data['kop'] = 'Barang Inventaris It';
        $data['cetakIt'] = $this->model('It_model')->getAllBarangIt();

        $this->view('templates/header', $data);
        $this->view('kasubag/kasubag_cetakPengajuan/it', $data);
        $this->view('templates/script');
    }
}
