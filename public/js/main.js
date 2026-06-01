/* ============================================
   MAIN.JS — Muhammad Zohaib Portfolio
   ============================================ */

/* ---- Navbar scroll effect ---- */
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
});

/* ---- Hamburger menu ---- */
const hamburger = document.getElementById('hamburger');
const navLinks  = document.getElementById('navLinks');
if (hamburger) {
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
}

/* ---- Active nav link on scroll ---- */
const sections = document.querySelectorAll('section[id]');
const navAnchors = document.querySelectorAll('.nav-links li a');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(sec => {
        if (window.scrollY >= sec.offsetTop - 80) current = sec.id;
    });
    navAnchors.forEach(a => {
        a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
});

/* ---- Skill bar animation on scroll ---- */
const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.querySelectorAll('.skill-bar-fill').forEach(bar => {
                bar.style.width = bar.getAttribute('data-width') + '%';
            });
        }
    });
}, { threshold: 0.2 });

const skillGrid = document.querySelector('.skill-cards-grid');
if (skillGrid) skillObserver.observe(skillGrid);

/* ---- Project filter ---- */
const filterBtns = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        projectCards.forEach(card => {
            const cardFilter = card.dataset.filter || '';
            const show = filter === 'all' || cardFilter.includes(filter);
            card.style.display = show ? 'block' : 'none';
        });
    });
});

/* ---- Typed text effect ---- */
const typedEl = document.getElementById('typedText');
if (typedEl) {
    const words = ['Problem Solver', 'Full Stack Developer', 'Laravel Expert', 'PHP Devloper' , 'Bootstrap Expert','Responsive Web Designer'];
    let wi = 0, ci = 0, deleting = false;
    function type() {
        const word = words[wi];
        typedEl.textContent = deleting ? word.substring(0, ci--) : word.substring(0, ci++);
        if (!deleting && ci === word.length + 1) { deleting = true; setTimeout(type, 1400); return; }
        if (deleting && ci === 0) { deleting = false; wi = (wi + 1) % words.length; }
        setTimeout(type, deleting ? 60 : 100);
    }
    type();
}
