<?php
require_once('../app/core/Database.php');


class DashboardInventaris_model
{
    private $tablePengajuan = 'pengajuan';
    private $tableBarangMasuk = 'barangmasuk';
    private $tableBarangDiPerbaiki = 'barangdiperbaiki';
    private $tableBarangRusak = 'barangrusak';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // PENGAJUAN
    public function getRowCountPengajuan()
    {
        $query = 'SELECT * FROM ' . $this->tablePengajuan;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MASUK
    public function getRowCountBarangMasuk()
    {
        $query = 'SELECT * FROM ' . $this->tableBarangMasuk;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // DIPERBAIKI
    public function getRowCountDiPerbaiki()
    {
        $query = 'SELECT * FROM ' . $this->tableBarangDiPerbaiki;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // RUSAK
    public function getRowCountBarangRusak()
    {
        $query = 'SELECT * FROM ' . $this->tableBarangRusak;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
