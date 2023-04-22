<?php
require_once('../app/core/Database.php');


class DashboardDistributorService_model
{
    private $tableDistributor = 'distributor';
    private $tableService = 'service';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // PENGAJUAN
    public function getRowCountDistributor()
    {
        $query = 'SELECT * FROM ' . $this->tableDistributor;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // MASUK
    public function getRowCountService()
    {
        $query = 'SELECT * FROM ' . $this->tableService;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
