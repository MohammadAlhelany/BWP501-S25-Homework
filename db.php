<?php
$host = 'db.fr-pari1.bengt.wasmernet.com';
$port = '10272';
$db   = 'dbhzpDpPoH4WtxKNdTEBtmfx';
$user = 'e040267b75268000f8198ca1b125';
$pass = '069fe040-267b-7610-8000-eaeafc30152a';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     // echo "Connected successfully";
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>