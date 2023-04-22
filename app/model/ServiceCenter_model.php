<?php

class ServiceCenter_model
{
    private $table = 'service';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangServiceCenter()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangServiceCenterById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_service_center=:id_service_center ');
        $this->db->bind('id_service_center', $id);
        return $this->db->single();
    }

    public function tambahDataServiceCenter($data)
    {
        $query = "INSERT INTO service
        VALUES
        ( :id_service_center, :service_center, :alamat, :no_telp)";

        $this->db->query($query);
        $this->db->bind('id_service_center', $data['idServiceCenter']);
        $this->db->bind('service_center', $data['serviceCenter']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['noTelp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataServiceCenter($id)
    {
        $query = "DELETE FROM service WHERE id_service_center=:id_service_center";
        $this->db->query($query);
        $this->db->bind('id_service_center', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataServiceCenter($data)
    {
        $query = "UPDATE service SET
        service_center = :service_center,
        alamat = :alamat,
        no_telp = :no_telp
        WHERE id_service_center = :id_service_center";

        $this->db->query($query);
        $this->db->bind('id_service_center', $data['idServiceCenter']);
        $this->db->bind('service_center', $data['serviceCenter']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['noTelp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cetakDataAllServiceCenter()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
