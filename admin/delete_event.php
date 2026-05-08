<?php
session_start();
require '../db.php';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}
header("Location: dashboard.php"); exit;