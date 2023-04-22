<?php

require_once('../app/core/Database.php');

class BarangMasuk_model
{

    private $table = 'barangmasuk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangMasuk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangMasukById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBarangMasuk($data)
    {
        $query = "INSERT INTO barangmasuk
        VALUES
        ('', :id_barang, :barang, :alokasi, :tanggal_masuk, :distributor)";

        $this->db->query($query);
        $this->db->bind('id_barang', $data['idPengajuan']);
        $this->db->bind('barang', $data['namaBarang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_masuk', $data['tanggalMasuk']);
        $this->db->bind('distributor', $data['distributor']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarangMasuk($id)
    {
        $query = "DELETE FROM barangmasuk WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataBarangMasukByIdBarang($id)
    {
        $query = "DELETE FROM barangmasuk WHERE id_barang=:id_barang";
        $this->db->query($query);
        $this->db->bind('id_barang', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getDataFromBetweenDates($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "tanggal_masuk >= " . "'" .  $data['dari'] . "'" . ' AND ' . 'tanggal_masuk <= ' . "'" . $data['sampai'] . "'");
        return $this->db->resultSet();
    }

    public function getDataFromAlokasi($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "alokasi = " . "'" . $data['filterByAlokasi'] . "'");
        return $this->db->resultSet();
    }

    public function getDataFromBarang($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "barang = " . "'" . $data['filterByBarang'] . "'");
        return $this->db->resultSet();
    }

    public function cetakAll()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function editDataBarangMasuk($data)
    {
        $query = "UPDATE barangmasuk SET
        id_barang = :id_barang,
        barang = :barang,
        alokasi = :alokasi,
        tanggal_masuk = :tanggal_masuk,
        distributor = :distributor
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id_barang', $data['idBarang']);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('distributor', $data['distributor']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function MenampilkanBarangMasukById($data)
    {
        $query = "SELECT barang as barang_b FROM barangmasuk WHERE id_barang = '$data'";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }
}
