<?php
include 'db.php';
$all_events_en = $pdo->query("SELECT * FROM events_en")->fetchAll();
$all_events_ar = $pdo->query("SELECT * FROM events_ar")->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Details</title>
  <link rel="icon" type="image/jpg" href="assets/img/Wander Sryia.jpg">
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
    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title">Book Event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <form id="bookingForm">
              <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" id="userName" required>
              </div>
            </form>

            <div id="successMessage" class="alert alert-success d-none">
              Booking successful!
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary" onclick="submitBooking()">
              Confirm Booking
            </button>
          </div>

        </div>
      </div>
    </div>
    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Book Event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <label>Your Name:</label>
            <input type="text" id="userName" class="form-control" placeholder="Enter your name">
            <div id="bookingMessage" class="mt-3"></div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" onclick="confirmBooking()">Confirm Booking</button>
          </div>
        </div>
      </div>
    </div>
<body class="body">
  <header>
    <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="evnets.php">events</a></li>
                <li class="active"><a href="event.php">events detail</a></li>
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
        <img src="assets/img/America.jpeg" alt="English" id="flag-en" class="lang-flag active" onclick="setLanguage('en')">

        <img src="assets/img/Syria.jpeg" alt="Arabic" id="flag-ar" class="lang-flag" onclick="setLanguage('ar')">
      </div>
    </div>
  </header>
  <main>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <img src="assets/img/Arrow.png" alt="Arrow" style="height: 15px;">
    </button>

    <?php foreach($all_events_en as $index => $row): ?>
    <section id="section-<?php echo $row['id']; ?>">
      <div class="card" style="margin: 20px; background-color: #192B38; color: white;">

        <div class="row justify-content-center">
          <div class="col-auto p-3">
            <div class="card" style="width: 200px;">
              <img src="assets/img/<?php echo $row['img']; ?>" alt="">
            </div>
          </div>
          <div class="col-auto p-3">
            <div class="card" style="width: 200px;">
              <img src="assets/img/<?php echo $row['img2']; ?>" alt="">
            </div>
          </div>
        </div>

        <div class="row justify-content-center m-5">
          <div class="col-auto card1Text">
            <strong><?php echo $row['name']; ?></strong>
            <ul>
              <li>Date: <?php echo $row['date']; ?></li>
              <li>Location: <?php echo $row['location']; ?></li>
              <li>Address: <?php echo $row['address']; ?></li>
              <li>Details: <?php echo $row['summary']; ?></li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="d-flex justify-content-center gap-2 m-3">
            <button type="button" class="btn btn-primary">Share</button>
            <button type="button" class="btn btn-secondary" onclick="bookEvent()">Add to calendar</button>
          </div>
        </div>

        <?php
            $next_index = ($index + 1) % count($all_events_en);
            $related = $all_events_en[$next_index];
        ?>

        <div class="accordion p-5" id="accordion-<?= $row['id']; ?>">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $row['id']; ?>">
                Related Event
              </button>
            </h2>
            <div id="collapse-<?= $row['id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordion-<?= $row['id']; ?>">
              <div class="accordion-body" style="color: black;">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/<?= $related['img']; ?>" alt="" style="width: 150px;">
                  </div>
                  <div class="col">
                    <strong><?= $related['name']; ?>: </strong>
                    <p><?= $related['summary']; ?></p>
                    <a href="#section-<?= $related['id']; ?>" class="btn btn-sm btn-outline-primary">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <?php endforeach; ?>
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