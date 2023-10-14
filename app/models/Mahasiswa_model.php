<?php

class Mahasiswa_model
{
    // private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;

    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM mahasiswa');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        // var_dump($id);
        $this->db->query('SELECT * FROM mahasiswa WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa (id, nim, nama, email, jurusan)
                VALUES
                ('', :nim, :nama, :email, :jurusan)";
        
        $this->db->query($query);

        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    
    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
        nim = :nim,
        nama = :nama,
        email = :email,
        jurusan = :jurusan
        WHERE id = :id";
        
        $this->db->query($query);

        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }




}
