<section class="projects" id="projects">
    <div class="container">

        <h2 class="section-title">
            My <span class="highlight">Projects</span>
        </h2>

        <p class="section-sub">
            Explore my advanced and interactive-style UI & Laravel projects
        </p>

        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="laravel">Laravel</button>
            <button class="filter-btn" data-filter="fullstack">Fullstack</button>
            <button class="filter-btn" data-filter="ai">AI</button>
            <button class="filter-btn" data-filter="ui">UI</button>
        </div>

        @php
        $projects = [
            [
                'title'  => 'Moxa Website',
                'desc'   => 'Modern and responsive portfolio website showcasing creativity, skills, and development expertise',
                'tags'   => ['Laravel', 'PHP', 'AI APIs'],
                'filter' => 'laravel ai',
                'theme'  => 'orange',
                'image'  => 'images/moxa.png',
                'placeholder' => 'https://placehold.co/400x200/e87722/ffffff?text=Laravel+Toolkit',
            ],
            [
                'title'  => 'Personal Portfolio Website',
                'desc'   => 'Responsive portfolio website built with Laravel and modern UI animations.',
                'tags'   => ['Laravel', 'CSS', 'PHP'],
                'filter' => 'laravel ui',
                'theme'  => 'red',
                'image'  => 'images/portfolio.png',
                'placeholder' => 'https://placehold.co/400x200/e74c3c/ffffff?text=Portfolio',
            ],
            [
                'title'  => 'Client Management System',
                'desc'   => 'Dynamic system built using Laravel and MySQL for managing clients.',
                'tags'   => ['Laravel', 'MySQL'],
                'filter' => 'laravel fullstack',
                'theme'  => 'green',
                'image'  => 'images/mangemnt.png',
                'placeholder' => 'https://placehold.co/400x200/2ecc71/ffffff?text=Client+System',
            ],
            [
                'title'  => 'students Management System',
                'desc'   => 'CRUD-based stock and inventory system using Laravel.',
                'tags'   => ['Laravel', 'CRUD'],
                'filter' => 'fullstack laravel',
                'theme'  => 'blue',
                'image'  => 'images/student.png',
                'placeholder' => 'https://placehold.co/400x200/3498db/ffffff?text=Inventory',
            ],
            [
                'title'  => 'E-Commerce Store',
                'desc'   => 'Online shopping system with cart and checkout features.',
                'tags'   => ['Laravel', 'JavaScript'],
                'filter' => 'ui fullstack',
                'theme'  => 'brown',
                'image'  => 'images/com.png',
                'placeholder' => 'https://placehold.co/400x200/8B4513/ffffff?text=E-Commerce',
            ],
             [
                'title'  => 'Instant Conference Call Web',
                'desc'   => 'Real-time instant conference call web application enabling seamless audio/video communication through browser.',
                'tags'   => ['JavaScript', 'Bootsrap'],
                'filter' => 'ui fullstack',
                'theme'  => 'brown',
                'image'  => 'images/call.png',
                'placeholder' => 'https://placehold.co/400x200/8B4513/ffffff?text=E-Commerce',
            ],
        ];
        @endphp

        <div class="projects-grid">

            @foreach($projects as $project)
            <div class="project-card" data-filter="{{ $project['filter'] ?? '' }}">

                <div class="project-card-top project-top--{{ $project['theme'] }}">
                    <img
                        src="{{ asset($project['image']) }}"
                        alt="{{ $project['title'] }}"
                        class="project-img"
                        
                    >
                </div>

                <div class="project-card-body">
                    <h3>{{ $project['title'] ?? '' }}</h3>
                    <p>{{ $project['desc'] ?? '' }}</p>

                    <div class="project-tags">
                        @foreach($project['tags'] as $tag)
                            <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <div class="project-links">
                        <a href="#" class="btn-sm btn-outline-sm">Live Demo</a>
                        <a href="#" class="btn-sm btn-primary-sm">View Code</a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</section>