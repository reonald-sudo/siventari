<?php

require_once('../app/core/Database.php');

class BarangDiPerbaiki_model
{

    private $table = 'barangdiperbaiki';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangDiperbaiki()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangDiperbaikiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function hapusDataBarangDiPerbaiki($id)
    {
        $query = "DELETE FROM barangdiperbaiki WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getDataFromBetweenDates($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "tanggal_service >= " . "'" .  $data['dari'] . "'" . ' AND ' . 'tanggal_service <= ' . "'" . $data['sampai'] . "'");
        return $this->db->resultSet();
    }

    public function editDataBarangDiPerbaiki($data)
    {
        $query = "UPDATE barangdiperbaiki SET
        barang = :barang,
        alokasi = :alokasi,
        toko_komputer = :toko_komputer,
        tanggal_service = :tanggal_service
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('toko_komputer', $data['toko_komputer']);
        $this->db->bind('tanggal_service', $data['tanggal_service']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataBarangDiPerbaiki($data)
    {
        $query = "INSERT INTO barangdiperbaiki
        VALUES
        ('', :id_barang, :barang, :alokasi, :toko_komputer, :tanggal_service)";

        $this->db->query($query);
        $this->db->bind('id_barang', $data['idBarang']);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('toko_komputer', $data['tokoKomputer']);
        $this->db->bind('tanggal_service', $data['tanggalService']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
