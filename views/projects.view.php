<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var \App\Dto\ProjectDto[] $projects */

$this->extend('layout');
?>

<?php $this->start('title', 'Projects') ?>



<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            My Projects
        </h1>

        <!-- Bølget linje under overskriften -->
        <svg class="wave-line" viewBox="0 0 400 40">
            <path d="M 50 30 C 100 10, 200 50, 350 20" fill="none" stroke="#3498db" stroke-width="4" stroke-linecap="round"/>
        </svg>

        <style>
            .wave-line {
                width: 180px; /* kortere end forsiden */
                height: 20px;
                margin: 10px auto 30px; /* centrér under overskriften */
                display: block;
            }

            /* Animation af bølgen */
            @keyframes waveAnim {
                0% {
                    d: path("M 50 30 C 100 10, 200 50, 350 20");
                }
                100% {
                    d: path("M 50 20 C 110 40, 210 10, 350 30");
                }
            }

            .wave-line path {
                animation: waveAnim 3s ease-in-out infinite alternate;
            }
        </style>


        <p class="page-intro">
            Welcome to my project showcase! Here you'll find a collection of my recent work, highlighting my skills in web development and software engineering. Each project demonstrates my commitment to creating clean, efficient, and user-friendly solutions.
        </p>
    </div>
</section>


    <title>Vertikal centered slider med luft</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }



        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fafafa;
            padding: 2rem;
        }

        section.slider {
            width: 1000px;
            height: 800px;                  /* lidt større viewport */
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
            padding: 50px 0;                /* luft foroven og forneden */

        }
        section.slider::-webkit-scrollbar {
            display: none;
        }

        .slides {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px; /* lidt mere afstand mellem slides */
        }

        article.slide {
            scroll-snap-align: center;
            width: 80%;
            height: 400px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            background: #eee;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s, opacity 0.3s;
            transform: scale(0.9);
            opacity: 0.7;
        }

        /* Den slide der ender i midten */
        article.slide:target {
            transform: scale(1);
            opacity: 1;
        }
    </style>
</head>
<body>

<main>
    <section class="slider" aria-label="Vertikal slider">
        <div class="slides">
            <article class="slide" id="s1">Guestbook</article>

            <article class="slide" id="s2">Iværksætter</article>
            <article class="slide" id="s3">Soundstage</article>
            <article class="slide" id="s4">Projekt 4</article>
            <article class="slide" id="s5">Projekt 5</article>
        </div>
    </section>
</main>

</body>
</html>

