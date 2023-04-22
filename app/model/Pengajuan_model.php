<?php

require_once('../app/core/Database.php');

class Pengajuan_model
{

    private $table = 'pengajuan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengajuan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengajuanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pengajuan=:id_pengajuan ');
        $this->db->bind('id_pengajuan', $id);
        return $this->db->single();
    }

    public function tambahDataPengajuan($data)
    {
        $query = "INSERT INTO pengajuan
        VALUES
        ( :id_pengajuan, :pengajuan, :alokasi, :tanggal_pengajuan, :status)";

        $this->db->query($query);
        $this->db->bind('id_pengajuan', $data['idPengajuanBarang']);
        $this->db->bind('pengajuan', $data['pengajuan']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_pengajuan', $data['tanggal_pengajuan']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDataFromBetweenDates($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "tanggal_pengajuan >= " . "'" .  $data['dari'] . "'" . ' AND ' . 'tanggal_pengajuan <= ' . "'" . $data['sampai'] . "'");
        return $this->db->resultSet();
    }

    public function getDataFromAlokasi($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "alokasi = " . "'" . $data['filterByAlokasi'] . "'");
        return $this->db->resultSet();
    }

    public function getDataFromBarang($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . "pengajuan = " . "'" . $data['filterByBarang'] . "'");
        return $this->db->resultSet();
    }

    public function cetakAll()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function hapusDataPengajuan($id)
    {
        $query = "DELETE FROM pengajuan WHERE id_pengajuan=:id_pengajuan";
        $this->db->query($query);
        $this->db->bind('id_pengajuan', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataPengajuan($data)
    {
        $query = "UPDATE pengajuan SET
        pengajuan = :pengajuan,
        alokasi = :alokasi,
        tanggal_pengajuan = :tanggal_pengajuan,
        status = :status
        WHERE id_pengajuan = :id_pengajuan";

        $this->db->query($query);
        $this->db->bind('pengajuan', $data['pengajuan']);
        $this->db->bind('alokasi', $data['alokasi']);
        $this->db->bind('tanggal_pengajuan', $data['tanggal_pengajuan']);
        $this->db->bind('status', $data['status']);

        $this->db->bind('id_pengajuan', $data['idPengajuanBarang']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function MenampilkanBarangPengajuanById($data)
    {
        $query = "SELECT pengajuan as pengajuan_b FROM pengajuan WHERE id_pengajuan = '$data'";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function MenampilkanAlokasiPengajuanById($data)
    {
        $query = "SELECT alokasi as alokasi_b FROM pengajuan WHERE id_pengajuan = '$data'";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();

        // var_dump($row);
        // die;

        // echo json_encode($row);
        // return $row;

        // return json_encode($row);

        // print_r($row);
        // die;
    }
}
