<?php
require_once('../app/core/Database.php');


class Dashboard_model
{
    private $tableKadinas = 'kadinas';
    private $tableSekertaris = 'sekertaris';
    private $tableKasubag = 'kasubag';
    private $tableKabid = 'kabid';
    private $tableOffice = 'office';
    private $tableIt = 'it';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // KADINAS
    public function getRowCountKadinas()
    {
        $query = 'SELECT * FROM ' . $this->tableKadinas;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // SEKERTARIS
    public function getRowCountSekertaris()
    {
        $query = 'SELECT * FROM ' . $this->tableSekertaris;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // KASUBAG
    public function getRowCountKasubag()
    {
        $query = 'SELECT * FROM ' . $this->tableKasubag;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // KABID
    public function getRowCountKabid()
    {
        $query = 'SELECT * FROM ' . $this->tableKabid;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // OFFICE
    public function getRowCountOffice()
    {
        $query = 'SELECT * FROM ' . $this->tableOffice;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // IT
    public function getRowCountIt()
    {
        $query = 'SELECT * FROM ' . $this->tableIt;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
