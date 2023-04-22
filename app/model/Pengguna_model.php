<?php

class Pengguna_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangPengguna()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangPenggunaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengguna($data)
    {
        $query = "INSERT INTO user
        VALUES
        ('', :username, :hak_akses, :password)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('hak_akses', $data['hakAkses']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengguna($id)
    {
        $query = "DELETE FROM user WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataPengguna($data)
    {
        $query = "UPDATE user SET
        username = :username,
        hak_akses = :hak_akses,
        password = :password
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('hak_akses', $data['hakAkses']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function MenampilkanBarangPengajuan($a)
    {
        $query = $a;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowArray();
    }
}
