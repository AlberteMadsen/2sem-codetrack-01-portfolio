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

<br>
<br>
<section class="projects-header" style="margin-bottom: 2.5rem;">
    <div class="container">
        <h2 class="section-heading" style="font-size:2.2rem; margin-bottom:0.7rem; text-align:left;">Previous Projects</h2>
        <svg class="wave-line" viewBox="0 0 400 40" style="width:180px; height:20px; display:block; margin:10px 0 30px 0;">
            <path d="M 50 30 C 100 10, 200 50, 350 20" fill="none" stroke="#3498db" stroke-width="4" stroke-linecap="round"/>
        </svg>
    </div>
</section>

<section class="slider slider-aboutme" aria-label="Vertikal slider">
    <div class="slides">
        <article class="slide" id="s1">Guestbook</article>
        <article class="slide clickable-slide" id="s2">
            <a href="http://sem1-tema6.maf013.dk/Forside.html" target="_blank" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%; color:inherit; text-decoration:none;">
                <img src="images/visit-koege.jpg" alt="Visit Køge" style="max-width:80%; max-height:220px; border-radius:8px; margin-bottom:1rem; box-shadow:0 2px 8px rgba(0,0,0,0.1);" />
                <span style="font-size:2rem; font-weight:600;"></span>
                <span style="margin-top:1rem; font-size:1rem; color:#2980b9;">Klik for at besøge siden</span>
            </a>
        </article>
        <article class="slide" id="s3">Soundstage</article>
        <article class="slide" id="s4">Projekt 4</article>
        <article class="slide" id="s5">Projekt 5</article>
    </div>
</section>

<style>
    .slider-aboutme {
        width: 1200px;
        max-width: 98vw;
        height: 800px;
        margin: 0 auto;
        padding: 50px 0;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
        background: none;
        box-shadow: none;
    }
    .slider-aboutme::-webkit-scrollbar {
        display: none;
    }
    .slider-aboutme {
        scrollbar-width: none;
    }
    .slider-aboutme .slides {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 35px;
        width: 100%;
    }
    .slider-aboutme .slide {
        scroll-snap-align: center;
        width: 90%;
        height: 400px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.7rem;
        background: #eee;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        transition: transform 0.3s, opacity 0.3s;
        transform: scale(0.96);
        opacity: 0.78;
    }
    .slider-aboutme .slide:target {
        transform: scale(1.03);
        opacity: 1;
    }
    .wave-line {
        width: 180px;
        height: 20px;
        margin: 10px 0 30px 0;
        display: block;
    }
    .projects-header .container {
        max-width: 1200px;
        padding-left: 2rem;
    }
    .section-heading {
        text-align: left;
    }

    /* Hover-effekt på klikbare bokse */
    .slider-aboutme .clickable-slide {
        cursor: pointer;
        transition: box-shadow 0.3s, background 0.3s;
    }
    .slider-aboutme .clickable-slide:hover,
    .slider-aboutme .clickable-slide:focus-within {
        background: #e3f3fc;
        box-shadow: 0 8px 32px rgba(52,152,219,0.15);
    }

    @media (max-width: 1200px) {
        .slider-aboutme {
            width: 100vw;
            max-width: 100vw;
            padding: 10px 0;
        }
        .slider-aboutme .slide {
            width: 98vw;
        }
        .projects-header .container {
            padding-left: 1rem;
        }
    }
</style>
<br>
<br>

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
