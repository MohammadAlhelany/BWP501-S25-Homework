<?php
session_start();
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO events (name) VALUES (?)");
    $stmt->execute([$_POST['title']]);
    header("Location: dashboard.php"); exit;
}
?>
<form method="POST">
    <input type="text" name="title" placeholder="Event Title" required>
    <button type="submit">Add Event</button>
</form>