<section class="about" id="about">
    <div class="container">
        <h2 class="section-title">About <span class="highlight">Me</span></h2>

        <div class="about-grid">
            <div class="about-info">
                <p><strong>Name:</strong>Muhammad Zohaib</p>
                <p><strong>Email:</strong> zohaiblatif006@gmail.com</p>

                <p class="about-bio">
                    I'm a Full-Stack Web Developer from Pakistan, passionate about turning ideas into clean, user-friendly
                    digital products. I specialize in building scalable web applications using modern JavaScript frameworks,
                    focusing on writing maintainable code and delivering smooth, high-performance experiences for real users.
                    I thrive in collaborative environments and enjoy solving complex problems with elegant, efficient solutions.
                </p>
            </div>

            <div class="about-blocks">
                <div class="about-block">
                    <h3><i class="fas fa-briefcase"></i> Experience</h3>
                    <p>
                        Worked at <strong>Al-SHIFA innovation</strong>, where I contributed to building modern, responsive websites
                        and delivered solid frontend and problem-solving. I closely followed industry best practices,
                        and GitHub for version control, seeking code reviews to improve code quality.
                    </p>
                </div>

                <div class="about-block">
                    <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                    <p>
                        Studied <strong>Web Development</strong> through code-export self learning, real projects and
                        professional methods. I am currently pursuing a <strong>BS in Computer Science</strong> to strengthen
                        my foundations in programming, software engineering and modern technologies.
                    </p>
                </div>
            </div>
        </div>

        <h3 class="what-i-can-do-title">What I Can Do</h3>
        <div class="what-i-can-do">
            @php
            $capabilities = [
                ['icon' => 'fas fa-desktop', 'title' => 'Modern Frontend Experiences', 'desc' => 'Build awesome accessible UIs using HTML and  CSS, Bootstrap focusing on clean layouts, smooth animations & responsive design.'],
                ['icon' => 'fas fa-plug', 'title' => 'APIs & Backend Logic', 'desc' => 'Design RESTful APIs with php and laravel, and work with databases to store and manage data efficiently.'],
                ['icon' => 'fas fa-globe', 'title' => 'End-to-End Web Apps', 'desc' => 'Take a project from idea to deployment using GitHub, manage tasks and integrations, ensuring finalized and functional ship to date.'],
                ['icon' => 'fas fa-users', 'title' => 'Teamwork & Problem-Solving', 'desc' => 'Collaborate using Git, meet deadlines, and bring clarity to deliver reliable solutions on time.'],
            ];
            @endphp

            @foreach($capabilities as $cap)
            <div class="capability-card">
                <i class="{{ $cap['icon'] }}"></i>
                <h4>{{ $cap['title'] }}</h4>
                <p>{{ $cap['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="contact-me-center">
            <a href="#contact" class="btn btn-primary">Contact Me</a>
        </div>
    </div>
</section>
