<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8d8e63315b.js" crossorigin="anonymous"></script>
    <title>Creative.Dev</title>
</head>
<body>
<header>
    <img class="header-img" src="images/Banner-contact.webp" alt="contact header">
</header>
<main>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Me</a>
        <a href="projects.php">Projects</a>
        <a href="cv.php">CV</a>
        <a href="contact.php">Contact Me</a>
    </nav>
    <section>
        <div class="banner-wrapper">
            <div class="banner-content" alt="background picture">
                <div class="contact">
                    <div class="contact-title">
                        <h1>Contact Form</h1>
                    </div>
                    <!-- form -->
                    <div class="form-container">
                        <form class="form">
                            <div class="form-name">
                                <input type="text" id="name" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-email">
                                <input type="email" id="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-message">
                                <textarea id="message" name="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="center-align">
                                <a href="#">submit</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
