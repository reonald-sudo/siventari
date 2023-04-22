<?php

class Distributor_model
{
    private $table = 'distributor';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangDistributor()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangDistributorById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_distributor=:id_distributor');
        $this->db->bind('id_distributor', $id);
        return $this->db->single();
    }

    public function tambahDataDistributor($data)
    {
        $query = "INSERT INTO distributor
        VALUES
        ( :id_distributor, :distributor, :alamat, :no_telp)";

        $this->db->query($query);
        $this->db->bind('id_distributor', $data['idDistributor']);
        $this->db->bind('distributor', $data['distributor']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['noTelp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataDistributor($id)
    {
        $query = "DELETE FROM distributor WHERE id_distributor=:id_distributor";
        $this->db->query($query);
        $this->db->bind('id_distributor', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataDistributor($data)
    {
        $query = "UPDATE distributor SET
        distributor = :distributor,
        alamat = :alamat,
        no_telp = :no_telp
        WHERE id_distributor = :id_distributor";

        $this->db->query($query);
        $this->db->bind('distributor', $data['distributor']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['noTelp']);

        $this->db->bind('id_distributor', $data['id_distributor']);

        // print_r($this->db);
        // die;

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cetakDataAllDistributor()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
