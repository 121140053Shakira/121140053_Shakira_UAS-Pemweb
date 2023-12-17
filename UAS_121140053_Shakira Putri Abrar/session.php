<?php

// Start session
session_start();

$_SESSION['user'] = [
    'name' => 'Shakira Putri Abrar',
    'email' => 'shakira@gmail.com',
    'option' => 'Fakultas Teknologi Industri',
    'radio' => 'Perempuan',
    'browser' => getBrowser(),
    'ip_address' => getIPAddress(),
];

$user = $_SESSION['user'];

echo "Hello, $user[name]!";
?>

<?php
function getBrowser() {
    //Informasi dari browser pengguna
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    return $userAgent;
}

function getIPAddress() {
    //Alamat dari IP pengguna
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    return $ipAddress;
}
?>