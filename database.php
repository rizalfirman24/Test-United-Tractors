<?php

class Database{
    var $host ="localhost";
    var $uname ="root";
    var $pass ="";
    var $db ="db_akademik";

    var $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    function tampil() {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);
    
        if ($result === false) {
            echo "Error: " . $this->conn->error;
            return null;
        }
        return $result;
    }

    function simpan($nama, $alamat, $umur) {
        $sql = "INSERT INTO mahasiswa (nama,alamat,umur) VALUES ('$nama','$alamat',$umur)";
        
        if ($this->conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: ". $sql. "<br>". $this->conn->error;
        }
    }

    function hapus($id) {
        $sql = "DELETE FROM mahasiswa WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }
}
?>