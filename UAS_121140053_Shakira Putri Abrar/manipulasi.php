<?php
require_once 'config.php';

class ManipulateData
{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    //Menambahkan data baru ke dalam tabel
    public function addData($name, $email, $fakultas, $radio, $browser, $ipAddress){
        $sql = "INSERT INTO murid (name, email, fakultas, radio, browser, ip_address) 
                VALUES ('$name', '$email', '$fakultas', '$radio', '$browser', '$ipAddress')";
        return $this->conn->query($sql);
    }

     //Metode mengambil semua data dari tabel
    public function getAllData(){
        $sql = "SELECT * FROM murid";
        $result = $this->conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    
    // Metode untuk menghapus data tabel berdasarkan ID
    public function deleteData($id, $newName){
        $sql = "DELETE from murid WHERE id=$id";
        return $this->conn->query($sql);
    }
}

$manipulator = new ManipulateData($conn);

// Menggunakan metode getAllData untuk mendapatkan semua data dari tabel dan menampilkannya
$data = $manipulator->getAllData();
foreach ($data as $row) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
}
?>