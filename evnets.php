<?php
include 'db.php';

$all_events = $pdo->query("SELECT * FROM events_en ORDER BY id DESC")->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/main.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="body">
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="evnets.php">events</a></li>
                <li><a href="event.php">events detail</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
            <button><img src="assets/img/close-icon.png"></button>
        </nav>
        <div>
            <h1>
                Syrian Virtual University Activities
            </h1>
            <div><img src="assets\img\logo.jpg" alt="Logo"></div>
            <button class="menu">
                <img src="assets/img/Menu.png" alt="">
            </button>
            <button class="moon" id="mode">
                <img src="assets/img/moon.png" alt="">
            </button>
            <div class="language-selector">
                <img src="assets/img/America.jpeg" alt="English" id="flag-en" class="lang-flag active"
                    onclick="setLanguage('en')">

                <img src="assets/img/Syria.jpeg" alt="Arabic" id="flag-ar" class="lang-flag" onclick="setLanguage('ar')">
            </div>
        </div>
    </header>
    <main>
        <!-- Scroll to top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="assets/img/Arrow.png" alt="Arrow" style="height: 15px;">
        </button>

        <!-- Filters -->
        <div class="row gap-2 justify-content-center m-3">
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Section
                    </button>
                    <ul class="dropdown-menu" id="filterSection">
                        <li><button class="dropdown-item" type="button" data-filter="all">Show All</button></li>
                        <li><button class="dropdown-item" type="button" data-filter="Educational">Educational</button></li>
                        <li><button class="dropdown-item" type="button" data-filter="Sports">Sports</button></li>
                        <li><button class="dropdown-item" type="button" data-filter="Creative">Creative</button></li>
                        <li><button class="dropdown-item" type="button" data-filter="Family">Family</button></li>
                    </ul>
                </div>
            </div>

        <!-- Cards -->
        <div class="container">
            <div class="row justify-content-center" id="filterEvent">
                <?php foreach($all_events as $event): ?>
                <div class="col-auto mb-4 card-container">
                    <div class="card" style="width: 18rem;" data-section="<?= trim($event['tag']) ?>">
                        <img src="assets/img/<?= $event['img'] ?>" class="d-block w-100" alt="<?= $event['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $event['name'] ?></h5>
                            <p class="card-text"><?= $event['summary'] ?></p>
                            <a href="event.php#section-<?= $event['id'] ?>" class="btn btn-primary">Event Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>



    <footer class="text-center text-white py-4 mt-5" style="background:#192B38;">
        <h5>Virtual University Events Guide</h5>
        <p>Developed by Amr , mohammed , Ahmad , Bessan, and Amna</p>
        <p>Email: support@vuevents.com | Phone: +963 999 999 999</p>
        <p>&copy; 2026 All Rights Reserved</p>
        <div>
            <img src="assets/img/Facebook.png">
            <img src="assets/img/Telegram.png">
            <img src="assets/img/LinkedIn.png">
            <img src="assets/img/Instagram.png">
        </div>
    </footer>


</body>

</html>