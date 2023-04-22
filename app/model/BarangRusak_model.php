<?php

require_once('../app/core/Database.php');

class BarangRusak_model
{

    private $table = 'barangrusak';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangRusak()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangRusakById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function hapusDataBarangRusak($id)
    {
        $query = "DELETE FROM barangrusak WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getDataFromBetweenDates($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "tanggal_masuk >= " . "'" .  $data['dari'] . "'" . ' AND ' . 'tanggal_masuk <= ' . "'" . $data['sampai'] . "'");
        return $this->db->resultSet();
    }

    public function editDataBarangRusak($data)
    {
        $query = "UPDATE barangrusak SET
        barang = :barang,
        alokasi = :alokasi,
        tanggal_masuk = :tanggal_masuk,
        status = :status
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataBarangRusak($data)
    {
        $query = "INSERT INTO barangrusak
        VALUES
        ('', :barang, :alokasi, :tanggal_masuk, :status)";

        $this->db->query($query);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_masuk', $data['tanggalRusak']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
