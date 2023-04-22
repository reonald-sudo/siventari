<?php

class Kasubag_model
{
    private $table = 'kasubag';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangKasubag()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangKasubagById($id)
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

        if ($error === 4) {
            $imageDefault = 'no-image.png';
            return $imageDefault;
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

    public function tambahDataKasubag($data, $files)
    {
        $query = "INSERT INTO kasubag
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

    public function hapusDataKasubag($id)
    {
        $query = "DELETE FROM kasubag WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataKasubag($data, $files)
    {
        $query = "UPDATE kasubag SET
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

    public function cetakDataAllKasubag()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
