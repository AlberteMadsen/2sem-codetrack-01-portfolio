<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'About Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            About Me
        </h1>
        <!-- Kun den bølgede SVG! -->
        <svg class="wave-line" viewBox="0 0 400 40">
            <path d="M 50 30 C 100 10, 200 50, 350 20" fill="none" stroke="#3498db" stroke-width="4" stroke-linecap="round"/>
        </svg>
        <style>
            .wave-line {
                width: 180px;
                height: 20px;
                margin: 10px auto 30px;
                display: block;
            }
            .wave-line path {
                animation: waveAnim 3s ease-in-out infinite alternate;
            }
            @keyframes waveAnim {
                0% { d: path("M 50 30 C 100 10, 200 50, 350 20"); }
                100% { d: path("M 50 20 C 110 40, 210 10, 350 30"); }
            }
            .page-heading, h1 {
                border-bottom: none !important;
            }
        </style>
        <p class="page-intro">
            Here you get to know more about my journey, skills, and passion for web development.
        </p>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-heading">Bio</h2>

                <p>
                    I’ve always been a creative thinker with a bit of a “popcorn brain” — full of spontaneous ideas and new directions to explore. As a multimedia designer, I’m especially passionate about concept development and the visual side of design — how colors, shapes, and imagery can influence people in the real world.
                </p>
                <p>
                    My process is intuitive and playful, especially in the early stages of a project where everything is open and ideas can take any shape. I love that part — where creativity flows freely, and every thought could become something meaningful.
                </p>
                <p>
                    What makes me unique is my ability to connect creativity with people — I naturally think about group dynamics, emotions, and how ideas fit into real contexts. At the same time, I approach every project with a professional mindset, keeping deadlines and client goals in focus.
                    In the future, I hope to grow even more in the idea development phase, especially within fields like advertising or creative communication — places where I can push boundaries, experiment, and turn fresh ideas into powerful concepts.
                </p>
            </div>

            <div class="about-image">
               <br>
                <br>
                <br>
                <img src="fotos/egeskov.png" alt="Picture of Alberte" class="portrait-image">
            </div>

        </div>
    </div>
</section>

<section class="skills section-padding">
    <div class="container">
        <h2 class="section-heading">Skills</h2>
        <div class="skill-items">
            <span class="skill-tag">Figma</span>
            <span class="skill-tag">Graphic Design</span>
            <span class="skill-tag">Ideation</span>
            <span class="skill-tag">Project Planning</span>
            <span class="skill-tag">Creativity</span>
            <span class="skill-tag">Photoshop</span>
            <span class="skill-tag">Illustrator</span>
            <span class="skill-tag">InDesign</span>
            <span class="skill-tag">Graphic Design</span>
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>


        </div>
    </div>
</section>
