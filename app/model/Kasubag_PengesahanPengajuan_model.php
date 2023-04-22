<?php
class Kasubag_PengesahanPengajuan_model
{
    private $table = 'pengajuan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function verifikasiDataPengesahanPengajuanKasubag($data)
    {
        $query = "UPDATE pengajuan SET
        pengajuan = :pengajuan,
        alokasi = :alokasi,
        tanggal_pengajuan = :tanggal_pengajuan,
        status = :status
        WHERE id_pengajuan = :id_pengajuan";

        $this->db->query($query);
        $this->db->bind('pengajuan', $data['pengajuanKasubag']);
        $this->db->bind('alokasi', $data['alokasiKasubag']);
        $this->db->bind('tanggal_pengajuan', $data['tanggalPengajuanKasubag']);
        $this->db->bind('status', $data['statusKasubag']);

        $this->db->bind('id_pengajuan', $data['idPengajuanKasubag']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
