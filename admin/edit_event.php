<?php
session_start();
require '../db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
$stmt->execute([$id]);
$event = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("UPDATE events SET name = ? WHERE id = ?");
    $stmt->execute([$_POST['title'], $id]);
    header("Location: dashboard.php");
}
?>
<form method="POST">
    <input type="text" name="title" value="<?= $event['name'] ?>">
    <button type="submit">Update</button>
</form>