<?php
require_once('../app/core/Database.php');


class DashboardPengguna_model
{
    private $tablePengguna = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // PENGAJUAN
    public function getRowCountPengguna()
    {
        $query = 'SELECT * FROM ' . $this->tablePengguna;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
