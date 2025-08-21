<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Welcome - i'm Alberte<span class="accent">Multimedia Designer</span></h1>
        <p class="tagline">Welcome to my Portfolio-page.</p>
        <a href="/contact" class="button">Contact Me</a>
        <style>
            body {
                margin: 0;
                background: #e8e8e7;
                font-family: sans-serif;
                text-align: center;
            }

            header {
                padding: 100px 20px;
            }

            header h1 {
                font-size: 3rem;
                color: #5047b5;
                margin-bottom: 40px;
            }

            svg {
                width: 1200px;
                height: 100px;
            }


            path {
                stroke: #3498DBFF; /* rolig blå tone */
                color: #2980b9;
                stroke-width: 8;
                fill: none;
                stroke-linecap: round;
                animation: wave 3s ease-in-out infinite alternate;
            }

            @keyframes wave{
                0% {
                    d: path("M 50 80 C 150 20, 300 120, 550 60");
                }
                100% {
                    d: path("M 50 60 C 180 100, 320 30, 550 80");
                }
            }



        </style>
        </head>
        <svg viewBox="0 0 600 120">
            <path d="M 50 80 C 150 20, 300 120, 550 60" fill="#3498db"/>
        </svg>
    </div>
</section>



<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">About Me</h2>
                <p>I'm a passionate web developer with a particular interest in user-friendly design and clean code.
                   Through my projects, I strive to create solutions that not only work well
                   but also make a real difference for users.</p>
                <p>With a keen eye for detail and a commitment to staying current with web technologies,
                   I bring ideas to life through elegant and efficient code.</p>
            </div>
            <div class="intro-image">
                <img src="images/profile-landscape.jpg" alt="Headshot of Abigail looking happy" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Explore More</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projects</h3>
                <p>See examples of my recent projects and solutions</p>
            </a>
            <a href="/about" class="link-card">
                <h3>About</h3>
                <p>Learn more about my background and technical skills</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Contact</h3>
                <p>Let's discuss your next project</p>
            </a>
        </div>
    </div>
</section>
