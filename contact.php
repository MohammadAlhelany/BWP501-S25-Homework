<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="body">
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="evnets.php">events</a></li>
                <li><a href="event.php">events detail</a></li>
                <li><a href="about.php">about</a></li>
                <li class="active"><a href="contact.php">contact</a></li>
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

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow p-4">
                    <h2 class="mb-4 text-center">Contact Us</h2>

                    <div id="messageBox"></div>

                    <form id="contactForm">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" id="message" required></textarea>
                        </div>

                        <button type="btnSubmit" class="btn btn-primary w-100">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="card shadow p-4 mt-4">
                    <h3 class="mb-3">Alternative Contact Information</h3>

                    <p><strong>Email:</strong> support@vuevents.com</p>
                    <p><strong>Phone:</strong> +963 999 999 999</p>
                    <p><strong>Instagram:</strong> @vu_events</p>
                    <p><strong>Facebook:</strong> Virtual University Events</p>
                </div>
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
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</html>