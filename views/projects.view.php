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
            Welcome to my project showcase! Here you'll find a collection of my recent work, highlighting my skills in web development and software engineering. Each project demonstrates my commitment to creating clean, efficient, and user-friendly solutions.
        </p>
    </div>
</section>

<main>
    <section class="project-grid">
        <?php foreach ($projects as $i => $project): ?>
            <div class="project-row<?= $i % 2 ? ' project-row--reverse' : '' ?>">
                <div class="project-image">
                    <img src="<?= htmlspecialchars($project->image) ?>" alt="<?= htmlspecialchars($project->title) ?>">
                </div>
                <div class="project-content">
                    <h2><?= htmlspecialchars($project->title) ?></h2>
                    <p class="project-description"><?= htmlspecialchars($project->description) ?></p>
                    <div class="technologies"><?= htmlspecialchars($project->technologies) ?></div>
                    <div class="project-actions">
                        <a href="<?= htmlspecialchars($project->link) ?>" target="_blank">View Project</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>


