<section class="hire" id="hire">
    <div class="container">
        <h2 class="section-title">Why You Should <span class="highlight">Hire Me</span></h2>
        <p class="section-sub">
            I build clean, responsive, and scalable web applications with modern technologies.
             Recently, I developed advanced web solutions with AI integrations, including PDF tools, Code AI, and Image Generation APIs.
              Currently pursuing a BS in Computer Science and continuously improving my web development skills.

        </p>

        <div class="hire-cards">
            @php
            $hireReasons = [
            ['icon' => 'fas fa-film', 'title' => 'Real-World full stack & AI Skills', 'desc' => 'I have built real-world projects for commerce, medical data, conference apps and AI toolkit with traditional web apps with full-stack end-to-end.'],
            ['icon' => 'fas fa-heart', 'title' => 'Clean & User-Focused UI', 'desc' => 'I care about UX experiences: balance to create interfaces that feel like they actually feel easy to use.'],
            ['icon' => 'fas fa-sync-alt', 'title' => 'Reliable & Easy to Work With', 'desc' => 'I deliver in GOOD time, communicate well often, get feedback positively, adapt processes to work with you.'],
            ];
            @endphp

            @foreach($hireReasons as $reason)
            <div class="hire-card">
                <div class="hire-card-icon">
                    <i class="{{ $reason['icon'] }}"></i>
                </div>
                <h3>{{ $reason['title'] }}</h3>
                <p>{{ $reason['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>