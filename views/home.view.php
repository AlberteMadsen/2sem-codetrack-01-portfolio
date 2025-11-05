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
                <p>I’m a positive and curious person who thrives in a good team dynamic. I love collaborating with others, sharing ideas, and creating a space where everyone feels included and inspired. My curiosity often turns into a stream of “why” and “what if” questions — not because I doubt, but because I’m eager to understand and explore new perspectives.
                    I’m driven by both the creative spark of an idea and the satisfaction of seeing a project come to life. I like to start strong and stay ahead of deadlines — I’d rather be prepared than stressed at the last minute. That mindset helps me keep focus and deliver high-quality results.
                    </p>
            <p>
                In the long run, I hope to be part of a creative team where collaboration and trust are key — and maybe one day lead such a team myself. I believe good leadership is about balance: structure, positivity, and making sure everyone feels heard.
                People often describe me as punctual, energetic, and easy to talk to — someone who brings both focus and good vibes to any project..
            </p>
            </div>
            <div class="intro-image">
                <img src="fotos/profil-alberte.jpeg" alt="Headshot of Alberte looking happy" class="profile-image">
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
                    <p>--Klik for at se billedet i fuld skærm--</p>
                    <p>Den bedste måde for mig, at lære programmer at kende, er ved at sidde og teste knapperne og finde ud af hvad de forskellige funktioner kan. Ved dette eksempel sad jeg og testede Illustrator, som jeg var nysgerrig på hvad kunne. Dette er et af de første eksempler på mine test.
                     </p>
                </div>
            </div>
        </article>

        <!-- Slide 1 (Billede med modal) -->
        <article class="slide clickable-slide" onclick="openModal('fotos/face.png')">
            <div class="image-wrapper">
                <img src="fotos/face.png" alt="Best Grapes">
                <div class="overlay">
                    <h2>Best Grapes</h2>
                    <p>--Klik for at se billedet i fuld skærm--</p>
                    <p>Den bedste måde for mig, at lære programmer at kende, er ved at sidde og teste knapperne og finde ud af hvad de forskellige funktioner kan. Ved dette eksempel sad jeg og testede Illustrator, som jeg var nysgerrig på hvad kunne. Dette er et af de første eksempler på mine test.
                    </p>
                </div>
            </div>
        </article>

        <!-- Slide 3 (Nyt billede med modal fullscreen) -->
        <article class="slide clickable-slide" onclick="openModal('fotos/Skærmbillede 2025-09-05 kl. 08.37.13.png')">
            <div class="image-wrapper">
                <img src="fotos/Skærmbillede 2025-09-05 kl. 08.37.13.png" alt="Portfolio Parfume">
                <div class="overlay">
                    <h2>Portfolio Parfume</h2>
                    <p>Klik for at se billedet i fuld skærm</p>
                </div>
            </div>
        </article>



        <!-- Slide 4 -->
        <article class="slide clickable-slide" onclick="openModal('fotos/plakat.png')">
            <div class="image-wrapper">
                <img src="fotos/plakat.png" alt="Projekt 4">
                <div class="overlay">
                    <h2>Projekt 4</h2>
                    <p>Kort beskrivelse af projekt 4</p>
                </div>
            </div>
        </article>

        <!-- Slide 4 -->
        <article class="slide clickable-slide" onclick="openModal('fotos/poster.png')">
            <div class="image-wrapper">
                <img src="fotos/poster.png" alt="Projekt 5">
                <div class="overlay">
                    <h2>Projekt 4</h2>
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
        width: 100%;
        height: 100%;
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

<br>
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
