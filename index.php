<?php
include 'db.php';

$highlighted_stmt = $pdo->query("SELECT * FROM events_en ORDER BY id DESC LIMIT 2");
$highlights = $highlighted_stmt->fetchAll();
$all_events = $pdo->query("SELECT * FROM events_en ORDER BY name ASC")->fetchAll();
$recent_stmt = $pdo->query("SELECT * FROM events_en ORDER BY id DESC LIMIT 2");
$recent_events = $recent_stmt->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syrian Virtual University Activities</title>
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/styles.css">
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="evnets.php">events</a></li>
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
                <img src="assets/img/Menu.png" alt="" id="modeimg">
            </button>
            <button class="moon" id="mode">
                <img src="assets/img/moon.png" alt="">
            </button>
        </div>
    </header>
    <main>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="assets/img/Arrow.png" alt="Arrow" style="height: 15px;">
        </button>
        <div class="text-center section1-title">
            Highlighted
        </div>

        <div class="row justify-content-center">
            <?php foreach($highlights as $event): ?>
            <div class="col-auto card1">
                <div class="card" style="width: 18rem;">
                    <div id="carousel-<?= $event['id'] ?>" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/<?= $event['img'] ?>" class="d-block w-100">
                            </div>
                            <?php if(!empty($event['img2'])): ?>
                            <div class="carousel-item">
                                <img src="assets/img/<?= $event['img2'] ?>" class="d-block w-100">
                            </div>
                            <?php endif; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $event['id'] ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $event['id'] ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $event['name'] ?></h5>
                        <p class="card-text"><?= $event['summary'] ?></p>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-<?= $event['id'] ?>">
                            Event Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-<?= $event['id'] ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?= $event['name'] ?> Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li><strong>Date:</strong> <?= $event['date'] ?></li>
                                <li><strong>Location:</strong> <?= $event['location'] ?></li>
                                <li><strong>Summary:</strong> <?= $event['summary'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>




        <div class="text-center section1-title mt-5">
            Sections
        </div>


        <div class="container">

            <div class="row mt-3 justify-content-center" id="filter-buttons">
                <div class="col-auto">
                    <button class="btn mb-2 me-1 active" data-filter="all">Show
                        all</button>
                    <button class="btn mb-2 mx-1" data-filter="family">Family</button>
                    <button class="btn mb-2 mx-1" data-filter="educational">Educational</button>
                    <button class="btn mb-2 mx-1" data-filter="sports">Sports</button>
                    <button class="btn mb-2 mx-1" data-filter="creative">Creative</button>
                </div>
            </div>

            <div class="row px-2 mt-4 gap-3 justify-content-center" id="filterable-cards">
                <?php foreach($all_events as $event): ?>
                <div class="card p-0" data-name="<?php echo trim($event['tag']); ?>">
                    <img src="assets/img/<?= $event['img'] ?>" alt="img" />
                    <div class="card-body">
                        <h6 class="card-title"><?= $event['name'] ?></h6>
                        <p class="card-text"><?= substr($event['summary'], 0, 100) ?>...</p>

                        <a href="event.php#section-<?= $event['id'] ?>" class="btn btn-primary">
                            View Full Details
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="text-center section1-title mt-5">
            Recently Added
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <?php foreach($recent_events as $event): ?>
                <div class="col-auto card-recent">
                    <div class="card" style="width: 18rem;">
                        <div id="carousel-recent-<?= $event['id'] ?>" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/<?= $event['img'] ?>" class="d-block w-100">
                                </div>
                                <?php if(!empty($event['img2'])): ?>
                                <div class="carousel-item">
                                    <img src="assets/img/<?= $event['img2'] ?>" class="d-block w-100">
                                </div>
                                <?php endif; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-recent-<?= $event['id'] ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-recent-<?= $event['id'] ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $event['name'] ?></h5>
                            <p class="card-text"><?= substr($event['summary'], 0, 100) ?>...</p>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-recent-<?= $event['id'] ?>">
                                Event Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-recent-<?= $event['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5"><?= $event['name'] ?> Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><strong>Date:</strong> <?= $event['date'] ?></li>
                                    <br>
                                    <li><strong>Location:</strong> <?= $event['location'] ?></li>
                                    <br>
                                    <li><strong>Details:</strong> <?= $event['summary'] ?></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Get a ticket</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br>
        <section>
            <h2>Development Team:</h2>
            <ul id="student">
                <li class="user">
                    <p>Amr shairea: amr_306948 <br></p>
                    <img src="assets/img/Amr.jpeg" alt="Amr" class="photo">
                </li>
                <li class="user">
                    <p>Mohammad Alhelany: mohammad_303008 <br></p>
                    <img src="assets/img/muhammed.jpeg" alt="Mohammad" class="photo">
                </li>
                <li class="user">
                    <p>Ahmed abo thaljeh: ahmed_295021 <br></p>
                    <img src="assets\img\ahmad.jpg" alt="Ahmed" class="photo">
                </li>
                <li class="user">
                    <p>Amena alnajjar: amena_292060 <br></p>
                    <img src="assets/img/aamina.jpg" alt="Amena" class="photo">
                </li>
                <li class="user">
                    <p>Bisan atiyh: bisan_309227 <br></p>
                    <img src="assets/img/bissan.jpg" alt="Bisan" class="photo">
                </li>
            </ul>
        </section>
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
    <script src="assets/js/main.js"></script>
</body>
</html>