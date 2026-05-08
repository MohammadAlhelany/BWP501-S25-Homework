<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit; }
require '../db.php';

$events = $pdo->query("SELECT * FROM events_en")->fetchAll();

?>

<h2>Event Management</h2>
<a href="add_event.php">Add New Event</a> | <a href="logout.php">Logout</a>
<br> <br>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Adress</th>
        <th>Tag</th>
        <th>Date</th>
        <th>Location</th>
        <th>Description</th>
        <th>Img_1</th>
        <th>Img_2</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($events as $row): ?>
    <?php $image1Path = "../assets/img/" . $row['img'];
    $image2Path = "../assets/img/" . $row['img2'];
    ?>
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['tag'] ?></td>
        <td><?= $row['date'] ?></td>
        <td><?= $row['location'] ?></td>
        <td><?= $row['summary'] ?></td>
        <td><img src="<?= $image1Path ?>"></td>
        <td><img src="<?= $image2Path ?>"></td>
        <td> <!--Adress-->
            <a href="edit_event.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete_event.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


