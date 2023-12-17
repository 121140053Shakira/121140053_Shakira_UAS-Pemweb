<?php

// Start session
session_start();

// Include database configuration
require_once 'config.php';

// Include ManipulateData class
require_once 'manipulasi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
    die();
    $name = validateInput($_POST["name"]);
    $email = validateInput($_POST["email"]);
    $fakultas = validateInput($_POST["fakultas"]);
    $radio = validateInput($_POST["radio"]);

    // Validasi input
    if (!empty($name) && !empty($email) && !empty($fakultas) && !empty($radio)) {
        $conn = $conn->prepare("INSERT INTO murid (name, email, fakultas, radio) VALUES (?, ?, ?, ?)");
        $conn->bind_param("ssii", $name, $nim, $fakultas, $radio);

        if ($conn->execute()) {
            echo "Data Berhasil disimpan ke database";
        } else {
            echo "Data Gagal Disimpan. Error: " .$sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        echo "Data tidak valid. Harap mengisi semua kolom yang dibutuhkan.";
    }
}

function validateInput($data) {
    // Validasi data input
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getBrowser() {
    //Untuk informasi browser pengguna
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    return $userAgent;
}

function getIPAddress() {
    //Untukalamat IP pengguna
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    return $ipAddress;
}
?>