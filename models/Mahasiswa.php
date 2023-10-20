<?php

require_once 'connection.php';
class Mahasiswa
{
    protected $fillable = "nobp, nama, kelas, tmp_lahir, tgl_lahir, jenis_kelamin, alamat, nomor_hp, email, foto, created_at";
    protected $table_name = "mahasiswa";
    public function create($data): string
    {
        global $conn;
        $result = mysqli_query(
            $conn,
            "INSERT INTO $this->table_name ($this->fillable) VALUES ($data)"
        );

        if (!$result) {
            echo mysqli_error($conn);
            return false;
        }
        return $result;
    }
}
