<?php

class It_model
{
    private $table = 'it';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangIt()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangItById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function upload($data)
    {
        $namaFile = $data['foto']['name'];
        $ukuranFile = $data['foto']['size'];
        $error = $data['foto']['error'];
        $tmpName = $data['foto']['tmp_name'];


        if ($error === 4) {
            $imageDefault = 'no-image.png';
            return $imageDefault;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        // print_r($ekstensiGambar);
        // die;

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                alert('yang anda upload bukan gambar');
                </script>";
            return false;
        }

        if ($ukuranFile > 1000000) {
            echo "<script>
                alert('ukuran gambar terlalu besar');
                </script>";
            return false;
        }

        move_uploaded_file($tmpName, '../dist/img/' . $namaFile);
        return $namaFile;
    }

    public function tambahDataIt($data, $files)
    {
        $query = "INSERT INTO it
        VALUES
        ('', :id_pengajuan, :barang, :kondisi, :foto)";

        $this->db->query($query);
        $this->db->bind('id_pengajuan', $data['idPengajuan']);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('kondisi', $data['kondisi']);
        $this->db->bind('foto', $this->upload($files));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataIt($id)
    {
        $query = "DELETE FROM it WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataIt($data, $files)
    {
        $query = "UPDATE it SET
        id_pengajuan = :id_pengajuan,
        barang = :barang,
        kondisi = :kondisi,
        foto = :foto
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id_pengajuan', $data['idPengajuan']);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('kondisi', $data['kondisi']);
        $this->db->bind('foto', $this->upload($files));
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cetakDataAllIt()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
