<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controller;
use App\Dto\ProjectDto;
use App\Http\Request;
use App\Http\Response;

/**
 * Controller for handling requests to the projects page.
 *
 * Provides actions for rendering the projects page with a list of projects.
 */
class ProjectController extends Controller
{
    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function index(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'projects', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }

    /**
     * Get list of projects to display.
     *
     * @return array<int, ProjectDto>
     */
    private function getProjects(): array
    {
        return [
            new ProjectDto(
                title: 'Digital guestbook',
                description: 'I have changed the text and added a field to the "Sign" button. So when you click on "Click here to sign my Guestbook!" you can fill in fields such as Name, Website, Message, and my added field: Background/Profession. The project started on 26/08-2025. ',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/bog.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://guestbook.hejfremtid.dk',
            ),
            new ProjectDto(
                title: 'Style Switcher',
                description: 'Here I worked with a drop-down menu that gives the website a new look. I added the page “Sky.” The project started on 04/09-2025.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/Kontakt.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://styleswitcher.hejfremtid.dk/index.html',
            ),
            new ProjectDto(
                title: 'A/B test',
                description: 'On this website, I changed the colors using the normally choices of colors that appear appealing and are used on mainstream websites, and another variant where there is an unusual use of colors. The project started on 11/09-2025.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'fotos/a-b.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'http://2sem-codetrack-04-ab-test.test/',
            ),
            new ProjectDto(
                title: 'Project-Presentation',
                description: 'A project I really enjoyed making, but also presenting, was this project, which I have included in this website. The project being “referred to” was made in Figma, where I learned to create moving animations, which I spent a lot of time fine-tuning. The project started on 18/09-2025.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/Presentation.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://project-presentation.hejfremtid.dk',
            ),
            new ProjectDto(
                title: 'Mini CRM',
                description: 'Due to pressure from other projects, I didn’t get to work much on this project. However, I managed to add a client with help. The project started on 29/09-2025.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/circle.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'http://2sem-codetrack-06-mini-crm.test/login',
            ),
            new ProjectDto(
                title: 'UI-Widget generator',
                description: 'Here I changed the text and border line as the starting point when entering the website. The project started on 03/10-2025.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/ui.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://ui-widget.hejfremtid.dk',
            ),
            new ProjectDto(
                title: 'Wordpress',
                description: 'This was a completely different world for me — one that personally made a bit more sense. The idea of putting together a “puzzle” just clicks in my mind. This project was definitely an eye-opener for me. Here, I made some changes to the layout and added various images. The project started on 10/10/2025.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/paper.avif',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://wp-test.hejfremtid.dk/wp-admin/site-editor.php?canvas=edit&p=%2Fwp_template%2Fextendable%2F%2Fpage-with-title',
            ),
            new ProjectDto(
                title: 'Visual-Novel',
                description: 'This project was definitely my favorite, as it is very visual. I had to create a story that could unfold in different ways, depending on which path you take. The project started on 22/10-25',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'fotos/Visuel.avif',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://visual-novel.hejfremtid.dk',
            ),

        ];
    }
}
