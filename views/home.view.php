<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Welcome - I'm Alberte<span class="accent"> Multimedia Designer</span></h1>
        <p class="tagline">Welcome to my Portfolio-page.</p>
        <a href="/contact" class="button">Contact Me</a>
        <style>
            body {
                margin: 0;
                background: #e8e8e7;
                font-family: sans-serif;
                text-align: center;
            }

            svg {
                width: 1200px;
                height: 100px;
            }

            path {
                stroke: #3498db;
                stroke-width: 8;
                fill: none;
                stroke-linecap: round;
                animation: wave 3s ease-in-out infinite alternate;
            }

            @keyframes wave {
                0% {
                    d: path("M 50 80 C 150 20, 300 120, 550 60");
                }
                100% {
                    d: path("M 50 60 C 180 100, 320 30, 550 80");
                }
            }
        </style>
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
                <svg class="wave-line" viewBox="0 0 400 40">
                    <path d="M 50 30 C 100 10, 200 50, 350 20"
                          fill="none"
                          stroke="#3498db"
                          stroke-width="4"
                          stroke-linecap="round" />
                </svg>
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

        <!-- Slide 1 (Billede med modal) -->
        <article class="slide clickable-slide" onclick="openModal('fotos/Portfolie-Fritid.png')">
            <div class="image-wrapper">
                <img src="fotos/Portfolie-Fritid.png" alt="Best Grapes">
                <div class="overlay">
                    <h2>Best Grapes</h2>
                    <p>Klik for at se billedet i fuld skærm</p>
                </div>
            </div>
        </article>

        <!-- Slide 2 (Projekt med link) -->
        <article class="slide clickable-slide">
            <a href="http://sem1-tema6.maf013.dk/Forside.html" target="_blank" class="image-wrapper">
                <img src="fotos/Skærmbillede 2025-09-03 kl. 20.26.24.png" alt="Skærmbillede af Visit Køge">
                <div class="overlay">
                    <h2>Visit Køge</h2>
                    <p>Se mit projekt om Køge – klik for at besøge siden</p>
                </div>
            </a>
        </article>

        <!-- Slide 3 -->
        <article class="slide clickable-slide">
            <div class="image-wrapper">
                <img src="fotos/soundstage.png" alt="Soundstage projekt">
                <div class="overlay">
                    <h2>Soundstage</h2>
                    <p>Et spændende projekt med fokus på lyd og design</p>
                </div>
            </div>
        </article>

        <!-- Slide 4 -->
        <article class="slide clickable-slide">
            <div class="image-wrapper">
                <img src="fotos/projekt4.png" alt="Projekt 4">
                <div class="overlay">
                    <h2>Projekt 4</h2>
                    <p>Kort beskrivelse af projekt 4</p>
                </div>
            </div>
        </article>

        <!-- Slide 5 -->
        <article class="slide clickable-slide">
            <div class="image-wrapper">
                <img src="fotos/projekt5.png" alt="Projekt 5">
                <div class="overlay">
                    <h2>Projekt 5</h2>
                    <p>Kort beskrivelse af projekt 5</p>
                </div>
            </div>
        </article>

    </div>
</section>

<!-- Modal (popup i fuld skærm) -->
<div id="imageModal" class="modal" onclick="closeModalOutside(event)">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" class="modal-content" src="" alt="Fullscreen Image">
</div>

<style>
    /* Slider styling */
    .slider-aboutme {
        width: 1200px;
        max-width: 98vw;
        height: 800px;
        margin: 0 auto;
        padding: 50px 0;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
    }
    .slider-aboutme::-webkit-scrollbar { display: none; }
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
        background: #eee;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        transform: scale(0.96);
        opacity: 0.85;
        transition: transform 0.3s, opacity 0.3s;
    }
    .slider-aboutme .slide:hover {
        transform: scale(1.02);
        opacity: 1;
    }

    /* Billede + overlay */
    .image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .image-wrapper img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }
    .overlay {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(0,0,0,0.90);
        color: #fff;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 12px;
        padding: 1rem;
    }
    .image-wrapper:hover .overlay {
        opacity: 1;
    }

    /* Modal styling med rettelser */
    .modal {
        visibility: hidden;
        opacity: 0;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease, visibility 0.3s;
    }
    .modal.show {
        visibility: visible;
        opacity: 1;
    }
    .modal-content {
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
    }
    .close {
        position: absolute;
        top: 30px;
        right: 40px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }
    .close:hover { color: #3498db; }

    @media (max-width: 1200px) {
        .slider-aboutme {
            width: 100vw;
            height: auto;
            padding: 20px 0;
        }
        .slider-aboutme .slide {
            width: 95vw;
            height: auto;
        }
    }
</style>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById("imageModal");
        modal.classList.add("show");
        document.getElementById("modalImage").src = imageSrc;
    }

    function closeModal() {
        const modal = document.getElementById("imageModal");
        modal.classList.remove("show");
    }

    // Luk modal, når man klikker udenfor billedet
    function closeModalOutside(event) {
        if (event.target === document.getElementById("imageModal")) {
            closeModal();
        }
    }
</script>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Explore More</h2>
        <svg class="wave-line" viewBox="0 0 400 40">
            <path d="M 50 30 C 100 10, 200 50, 350 20"
                  fill="none"
                  stroke="#3498db"
                  stroke-width="4"
                  stroke-linecap="round" />
        </svg>
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
