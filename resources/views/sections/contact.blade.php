<section class="contact" id="contact">
    <div class="container">
        <h2 class="section-title">Contact <span class="highlight">Me</span></h2>
        <p class="contact-tagline">Let's build something together</p>
        <p class="section-sub">
            Open to remote opportunities, freelance projects, and collaborations.
        </p>

        {{-- Alerts form  --}}
        @if(session('success'))
            <div class="alert alert-success">✅ {{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>❌ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Project / Topic" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-full">
                Send Message <i class="fas fa-paper-plane"></i>
            </button>
        </form>

        <div class="contact-info">
            <a href="mailto:zohaiblatif006@gmail.com" class="contact-link">
                <i class="fas fa-envelope"></i> zohaiblatif006@gmail.com
            </a>
        </div>
    </div>
</section>