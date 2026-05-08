<?php
$host = 'db.fr-pari1.bengt.wasmernet.com';
$port = '10272';
$db   = 'db8jeT7CYYuG5XQuN4pmPZmz';
$user = 'e15d285b7d208000c333f4f5a3ea';
$pass = '069fe15d-285b-7e4e-8000-25a25bcd99c2';
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