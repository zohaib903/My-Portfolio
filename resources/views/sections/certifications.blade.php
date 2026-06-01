<section class="certifications" id="certifications">
    <div class="container">
        <h2 class="section-title"><span class="highlight">Certifications</span></h2>

        <div class="cert-grid">
            @php
            $certs = [
                [
                    'title' => 'Advance Web Development',
                    'from'  => 'Exelance Delivered Lahore',
                    'image' => 'images/certificate exe.jpeg',
                    'theme' => 'orange',
                ],
                [
                    'title' => 'Laravel Development',
                    'from'  => 'Self-Learning & Projects',
                    'image' => 'images/certificate laravel.jpeg',
                    'theme' => 'green',
                ],
                [
                    'title' => 'Full stack Web Developer',
                    'from'  => 'Al-Shifa innovation',
                    'image' => 'images/In progress',
                    'theme' => 'teal',
                ],
            ];
            @endphp

            @foreach($certs as $cert)
            <div class="cert-card">
                <div class="cert-icon">
                    <img
                        src="{{ asset($cert['image']) }}"
                        alt="{{ $cert['title'] }}"
                        class="cert-img"
                        onerror="this.src='https://placehold.co/80x80/e87722/ffffff?text=CERT'"
                    >
                </div>
                <div class="cert-badge">
                    <div class="cert-badge-header cert-header--{{ $cert['theme'] }}">
                        <span>&#9733;</span>
                        <span>CERTIFICATE</span>
                    </div>
                    <div class="cert-badge-body">
                        <h4>{{ $cert['title'] }}</h4>
                        <p>{{ $cert['from'] }}</p>
                        <div class="cert-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>