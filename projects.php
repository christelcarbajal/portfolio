<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/project.css">
    <title>Creative.Dev</title>
</head>
<body>
<header>
    <img class="header-img" src="./images/Banner-projectDev.webp" alt="projects header">
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
        <div class="main">
            <h2>My <span style="color:#bdff38">Projects</span></h2>
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('games')"> Games</button>
                <button class="btn" onclick="filterSelection('vr')"> AR / VR</button>
                <button class="btn" onclick="filterSelection('ml')"> Machine Learning / AI</button>
                <button class="btn" onclick="filterSelection('ux&ui')"> UX / UI</button>
                <button class="btn" onclick="filterSelection('web')"> Web Development</button>
                <button class="btn" onclick="filterSelection('other')"> Other</button>
            </div>

            <!-- Portfolio Gallery Grid -->
            <div class="row">

                <div class="column games">
                    <div class="content">
                        <img src="./images/projects/game-rollermadness.webp" alt="Game"><br>
                        <h4>Roller Madness</h4>
                        <p>Roller Madness is a game that consist of two levels.
                            The main goal is to collect the max amount shown. #Unity</p>
                    </div>
                </div>

                <div class="column games">
                    <div class="content">
                        <img src="./images/projects/game-box-shooter.webp" alt="Game"><br>
                        <h4>Game: Box Shooter</h4>
                        <p>This game is a shooter game. Each color cube has a different value.
                            The goal is to reach the score shown before you run out of time. #Unity</p>
                    </div>
                </div>

                <div class="column vr">
                    <div class="content">
                        <img src="./images/projects/vr-bird.webp" alt="VR">
                        <h4>Bird VR World</h4>
                        <p>Bird VR World is a 3D reconstruction of Bird Rotterdam.
                            The main objective of this project was to bring people closer to each other
                            within the pandemic. #Unity</p>
                    </div>
                </div>

                <div class="column ml">
                    <div class="content">
                        <img src="./images/projects/gesturebeat.webp" alt="ML">
                        <h4>GestureBeat</h4>
                        <p>GestureBeat is a tool where the user can make "music" with different
                            hand poses through machine learning.
                            Try it out: <a href="https://stud.hosted.hr.nl/1011926/gesturebeat/">GestureBeat</a> </p>
                    </div>
                </div>

                <div class="column ml">
                    <div class="content">
                        <img src="./images/projects/cover-DanceFlow.webp" alt="ML">
                        <h4>danceFlow</h4>
                        <p>The goal of this project was not only to bring the public closer to each other,
                            but also for interacting and connecting with digital artists.
                            Here's the link to the school showcase:
                            <a href="https://cmgt.hr.nl/project/danceflow">danceFlow</a></p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/wireflow1-tamagotchi.webp" alt="Wireflow">
                        <h4>Concept ideation </h4>
                        <p>Wireflow </p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-Dragonbot.webp" alt="Poster">
                        <h4>Poster 1</h4>
                        <p>Dragonbot</p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-Eco-plant.webp" alt="Poster">
                        <h4>Poster 2</h4>
                        <p>Eco Plant</p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-ontwerpen1.webp" alt="Poster">
                        <h4>Poster 3</h4>
                        <p>Specialize Me: Design 1.0</p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-ontwerpen2.webp" alt="Poster">
                        <h4>Poster 4</h4>
                        <p>Specialize Me: Design 2.0</p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-ondernemen.webp" alt="Poster">
                        <h4>Poster 5</h4>
                        <p>Specialize Me: Entrepreneurial 1.0</p>
                    </div>
                </div>

                <div class="column ux&ui">
                    <div class="content">
                        <img src="./images/projects/poster-BirdWorld.webp" alt="Poster">
                        <h4>Poster 6</h4>
                        <p>Bird VR World</p>
                    </div>
                </div>

                <div class="column other">
                    <div class="content">
                        <img src="./images/projects/solarsystem.webp" alt="Solar System">
                        <h4>Application: Solar System</h4>
                        <p>This application was made for educational purposes, it was a recreation of the solar system that shows the relative positions and motions of the planets and moons according to the heliocentric (sun centred) model. #Unity</p>
                    </div>
                </div>

                <div class="column web">
                    <div class="content">
                        <img src="./images/projects/reservation1.webp" alt="Web">
                        <h4>Web: Reservation system 1.0</h4>
                        <p>This project was the first big assignment I had to do and it was based on making a reservation system for a real employer.
                            I not only made the reservation system but also a full website with some functionalities.
                            Both in front- and back-end. </p>
                    </div>
                </div>

                <div class="column web">
                    <div class="content">
                        <img src="./images/projects/reservation2.webp" alt="Web">
                        <h4>Web: Reservation system 2.0</h4>
                        <p>After learning the basics and getting more experience making websites I wanted to do an iteration on the layout and functionality to improve my first application. </p>
                    </div>
                </div>

                <div class="column web">
                    <div class="content">
                        <img src="./images/projects/game-magazine.webp" alt="Web">
                        <h4>Web: Magazine</h4>
                        <p>Game Collection Magazine</p>
                    </div>
                </div>

                <div class="column other">
                    <div class="content">
                        <img src="./images/projects/dragonbot.webp" alt="Dragonbot">
                        <h4>IoT (Internet of Things): Dragonbot</h4>
                        <p>Dragonbot was made for educational purposes.
                            3D printed and connected with a micro-controller.</p>
                    </div>
                </div>

<!--                <div class="column web">-->
<!--                    <div class="content">-->
<!--                        <img src="./images/projects/game-magazine.webp" alt="Web">-->
<!--                        <h4>Web: Magazine</h4>-->
<!--                        <p>Magazine</p>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- END GRID -->
            </div>

            <!-- END MAIN -->
        </div>
    </section>
</main>
<script src="./js/main.js"></script>
</body>
</html>
