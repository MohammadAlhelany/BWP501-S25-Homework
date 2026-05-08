<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="body">
    <header>
        <nav>
            <ul>
                <li><a href="index.php" data-ar="الرئيسة" data-en="Home">Home</a></li>
                <li><a href="evnets.php" data-ar="النشاطات" data-en="events">events</a></li>
                <li><a href="event.php" data-ar="تفاصيل النشاطات" data-en="events detail">events detail</a></li>
                <li class="active"><a href="about.php" data-ar="من نحن" data-en="about">about</a></li>
                <li><a href="contact.php" data-ar="تواصل" data-en="contact">contact</a></li>
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
        <!-- Back to Top Button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="assets/img/Arrow.png" alt="Arrow" style="height: 15px;">
        </button>

        <!-- Project Goal -->
        <section>
            <h2 data-en="Goal of the Guide" data-ar="هدف الدليل">Goal of the Guide</h2>
            <p data-en="To provide SVU students with a centralized platform to discover university activities, including academic webinars, training workshops, and student community gatherings."
                data-ar="تزويد طلاب الجامعة الافتراضية السورية بمنصة موحدة لاكتشاف النشاطات الجامعية، بما في ذلك الندوات عبر الإنترنت، ورشات العمل التدريبية، ولقاءات المجتمع الطلابي.">
                To provide SVU students with a centralized platform to discover university activities, including academic webinars, training workshops, and student community gatherings.
            </p>
        </section>
        <hr>

        <!-- Project Vision -->
        <section>
            <h2 data-en="Our Vision" data-ar="رؤيتنا">Our Vision</h2>
            <p data-en="To bridge the gap in distance learning by fostering a vibrant virtual campus where students can engage, collaborate, and grow beyond the digital classroom."
                data-ar="سد الفجوة في التعليم عن بُعد من خلال تعزيز حرم جامعي افتراضي حيوي حيث يمكن للطلاب التفاعل والتعاون والنمو خارج القاعات الدراسية الرقمية.">
                To bridge the gap in distance learning by fostering a vibrant virtual campus where students can engage, collaborate, and grow beyond the digital classroom.
            </p>
        </section>
        <hr>

        <!-- Event Selection Criteria -->
        <section>
            <h2 data-en="Event Criteria" data-ar="معايير الفعاليات">Event Criteria</h2>
            <ol>
                <li>
                    <h3 data-en="Academic Integrity:" data-ar="النزاهة الأكاديمية:">Academic Integrity:</h3>
                    <p data-en="All events must align with the educational standards and professional goals of the Syrian Virtual University."
                        data-ar="يجب أن تتماشى جميع الفعاليات مع المعايير التعليمية والأهداف المهنية للجامعة الافتراضية السورية.">
                        All events must align with the educational standards and professional goals of the Syrian Virtual University.
                    </p>
                </li>
                <li>
                    <h3 data-en="Accessibility:" data-ar="سهولة الوصول:">Accessibility:</h3>
                    <p data-en="Events are designed to be accessible to students regardless of their geographical location or time zone."
                        data-ar="تم تصميم الفعاليات لتكون متاحة للطلاب بغض النظر عن موقعهم الجغرافي أو منطقتهم الزمنية.">
                        Events are designed to be accessible to students regardless of their geographical location or time zone.
                    </p>
                </li>
            </ol>
        </section>
        <hr>

        <section>
            <h2 data-ar="فريق تطوير المشروع" data-en="Development Team:">Development Team:</h2>
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