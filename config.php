<?php
require_once 'db.meekro.php'; 


// Defaultní nastavení pro produkční server
$user = 'dobrodruzi.cz';
$password = '';
$dbName = 'dobrodruzi_py';
$host = '127.0.0.1'; 



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli("$host", "$user", "$password", "$dbName");
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Error connecting to database'); 
}


// Nastavení připojení k databázi
DB::$user = $user;
DB::$password = $password;
DB::$dbName = $dbName;
DB::$host = $host;
DB::$encoding = 'utf8mb4';


