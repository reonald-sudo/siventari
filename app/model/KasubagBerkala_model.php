<?php

require_once('../app/core/Database.php');

class KasubagBerkala_model
{
    private $tablePengajuan = 'pengajuan';
    private $tableBarangMasuk = 'barangmasuk';
    private $tableBarangDiPerbaiki = 'barangdiperbaiki';
    private $tableBarangRusak = 'barangrusak';

    private $tableKadinas = 'kadinas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // PENGAJUAN
    // JANUARI
    public function hitungPengajuanJanuari()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 1";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAllPengajuanJanuari()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 1");
        return $this->db->resultSet();
    }

    // FEBRUARI
    public function getAllPengajuanFebruari()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 2");
        return $this->db->resultSet();
    }

    public function hitungPengajuanFebruari()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 2";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MARET
    public function getAllPengajuanMaret()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 3");
        return $this->db->resultSet();
    }

    public function hitungPengajuanMaret()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 3";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // APRIL
    public function getAllPengajuanApril()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 4");
        return $this->db->resultSet();
    }

    public function hitungPengajuanApril()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 4";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MEI
    public function getAllPengajuanMei()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 5");
        return $this->db->resultSet();
    }

    public function hitungPengajuanMei()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 5";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JUNI
    public function getAllPengajuanJuni()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 6");
        return $this->db->resultSet();
    }

    public function hitungPengajuanJuni()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 6";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JULI
    public function getAllPengajuanJuli()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 7");
        return $this->db->resultSet();
    }

    public function hitungPengajuanJuli()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 7";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // AGUSTUS
    public function getAllPengajuanAgustus()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 8");
        return $this->db->resultSet();
    }

    public function hitungPengajuanAgustus()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 8";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // SEPTEMBER
    public function getAllPengajuanSeptember()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 9");
        return $this->db->resultSet();
    }

    public function hitungPengajuanSeptember()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 9";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // OKTOBER
    public function getAllPengajuanOktober()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 10");
        return $this->db->resultSet();
    }

    public function hitungPengajuanOktober()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 10";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // NOVEMBER
    public function getAllPengajuanNovember()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 11");
        return $this->db->resultSet();
    }

    public function hitungPengajuanNovember()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 11";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // DESEMBER
    public function getAllPengajuanDesember()
    {
        $this->db->query("SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 12");
        return $this->db->resultSet();
    }

    public function hitungPengajuanDesember()
    {
        $query = "SELECT * FROM . $this->tablePengajuan WHERE MONTH (tanggal_pengajuan) = 12";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }


    // --------------------------------------------------------------------
    // BARANG DI PERBAIKI
    // JANUARI
    public function getAllBarangDiPerbaikiJanuari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 1");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiJanuari()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 1";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
    // FEBRUARI
    public function getAllBarangDiPerbaikiFebruari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 2");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiFebruari()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 2";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MARET
    public function getAllBarangDiPerbaikiMaret()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 3");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiMaret()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 3";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // APRIL
    public function getAllBarangDiPerbaikiApril()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 4");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiApril()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 4";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MEI
    public function getAllBarangDiPerbaikiMei()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 5");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiMei()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 5";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JUNI
    public function getAllBarangDiPerbaikiJuni()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 6");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiJuni()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 6";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JULI
    public function getAllBarangDiPerbaikiJuli()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 7");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiJuli()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 7";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // AGUSTUS
    public function getAllBarangDiPerbaikiAgustus()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 8");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiAgustus()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 8";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // SEPTEMBER
    public function getAllBarangDiPerbaikiSeptember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 9");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiSeptember()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 9";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // OKTOBER
    public function getAllBarangDiPerbaikiOktober()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 10");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiOktober()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 10";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // NOVEMBER
    public function getAllBarangDiPerbaikiNovember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 11");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiNovember()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 11";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // DESEMBER
    public function getAllBarangDiPerbaikiDesember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 12");
        return $this->db->resultSet();
    }

    public function hitungBarangDiPerbaikiDesember()
    {
        $query = "SELECT * FROM . $this->tableBarangDiPerbaiki WHERE MONTH (tanggal_service) = 12";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // --------------------------------------------------------------------
    // BARANG Masuk
    // JANUARI
    public function getAllBarangMasukJanuari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 1");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukJanuari()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 1";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
    // FEBRUARI
    public function getAllBarangMasukFebruari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 2");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukFebruari()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 2";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MARET
    public function getAllBarangMasukMaret()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 3");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukMaret()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 3";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // APRIL
    public function getAllBarangMasukApril()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 4");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukApril()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 4";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MEI
    public function getAllBarangMasukMei()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 5");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukMei()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 5";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JUNI
    public function getAllBarangMasukJuni()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 6");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukJuni()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 6";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JULI
    public function getAllBarangMasukJuli()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 7");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukJuli()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 7";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // AGUSTUS
    public function getAllBarangMasukAgustus()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 8");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukAgustus()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 8";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // SEPTEMBER
    public function getAllBarangMasukSeptember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 9");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukSeptember()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 9";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // OKTOBER
    public function getAllBarangMasukOktober()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 10");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukOktober()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 10";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // NOVEMBER
    public function getAllBarangMasukNovember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 11");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukNovember()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 11";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // DESEMBER
    public function getAllBarangMasukDesember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 12");
        return $this->db->resultSet();
    }

    public function hitungBarangMasukDesember()
    {
        $query = "SELECT * FROM . $this->tableBarangMasuk WHERE MONTH (tanggal_masuk) = 12";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }


    // --------------------------------------------------------------------
    // BARANG RUSAK
    // JANUARI
    public function getAllBarangRusakJanuari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 1");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakJanuari()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 1";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
    // FEBRUARI
    public function getAllBarangRusakFebruari()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 2");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakFebruari()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 2";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MARET
    public function getAllBarangRusakMaret()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 3");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakMaret()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 3";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // APRIL
    public function getAllBarangRusakApril()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 4");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakApril()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 4";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MEI
    public function getAllBarangRusakMei()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 5");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakMei()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 5";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JUNI
    public function getAllBarangRusakJuni()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 6");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakJuni()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 6";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // JULI
    public function getAllBarangRusakJuli()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 7");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakJuli()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 7";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // AGUSTUS
    public function getAllBarangRusakAgustus()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 8");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakAgustus()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 8";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // SEPTEMBER
    public function getAllBarangRusakSeptember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 9");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakSeptember()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 9";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // OKTOBER
    public function getAllBarangRusakOktober()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 10");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakOktober()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 10";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // NOVEMBER
    public function getAllBarangRusakNovember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 11");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakNovember()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 11";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // DESEMBER
    public function getAllBarangRusakDesember()
    {
        $this->db->query("SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 12");
        return $this->db->resultSet();
    }

    public function hitungBarangRusakDesember()
    {
        $query = "SELECT * FROM . $this->tableBarangRusak WHERE MONTH (tanggal_masuk) = 12";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
