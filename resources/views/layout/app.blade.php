<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Muhammad Zohaib – Full Stack Developer specializing in Laravel, Java script, PHP, Mysql,  Bootsrap & CSS.">
    <meta name="author" content="Muhammad Zohaib">
    <title>Muhammad Zohaib – Full web Stack Developer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google Fonts -->
     <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
 <canvas id="ember-canvas"> </canvas>
    @include('sections.navbar')

    @include('sections.hero')

    @include('sections.skills')

    @include('sections.projects')

    @include('sections.about')

    @include('sections.hire')

    @include('sections.certifications')

    @include('sections.contact')

    @include('sections.footer')

    <script src="{{ asset('js/main.js') }}"></script>
   


    <script>
const canvas = document.getElementById('ember-canvas');
const ctx = canvas.getContext('2d');
let W, H, particles = [], animId;

function resize() {
  W = canvas.width = canvas.offsetWidth * devicePixelRatio;
  H = canvas.height = canvas.offsetHeight * devicePixelRatio;
}

function rand(a, b) { return a + Math.random() * (b - a); }

function spawnParticle() {
  const size = rand(1.2, 5.5);
  const brightness = rand(0.4, 1.0);
  const typeRoll = Math.random();
  let color;
  if (typeRoll < 0.55) {
    color = `rgba(${Math.round(rand(220,255))},${Math.round(rand(80,140))},${Math.round(rand(10,40))},${brightness})`;
  } else if (typeRoll < 0.8) {
    color = `rgba(${Math.round(rand(240,255))},${Math.round(rand(160,210))},${Math.round(rand(30,80))},${brightness*0.85})`;
  } else {
    color = `rgba(${Math.round(rand(200,240))},${Math.round(rand(60,100))},${Math.round(rand(5,25))},${brightness*0.6})`;
  }
  return {
    x: rand(W*0.05, W*0.95), y: rand(H*0.7, H+20),
    size, color,
    vx: rand(-0.6,0.6)*devicePixelRatio,
    vy: -rand(0.5,1.8)*devicePixelRatio,
    life: 0, maxLife: rand(90,240),
    drift: rand(-0.012,0.012),
    wobble: rand(0,Math.PI*2),
    wobbleSpeed: rand(0.02,0.06),
    glowSize: size * rand(3,7)
  };
}

function init() {
  particles = [];
  for (let i = 0; i < 140; i++) {
    const p = spawnParticle();
    p.y = rand(0, H);
    p.life = rand(0, p.maxLife);
    particles.push(p);
  }
}

function parseRgba(str) {
  const m = str.match(/rgba?\((\d+),(\d+),(\d+),([\d.]+)\)/);
  return m ? {r:+m[1],g:+m[2],b:+m[3],a:+m[4]} : null;
}

function draw() {
  ctx.clearRect(0, 0, W, H);
  for (let i = particles.length - 1; i >= 0; i--) {
    const p = particles[i];
    p.life++; p.wobble += p.wobbleSpeed;
    p.vx += p.drift; p.vx *= 0.995;
    p.x += p.vx + Math.sin(p.wobble) * 0.35 * devicePixelRatio;
    p.y += p.vy; p.vy -= 0.003 * devicePixelRatio;
    const progress = p.life / p.maxLife;
    let alpha = progress < 0.15 ? progress/0.15 : progress < 0.7 ? 1 : 1-(progress-0.7)/0.3;
    alpha = Math.max(0, Math.min(1, alpha));
    const pSize = p.size * (1 - progress * 0.4) * devicePixelRatio;
    const c = parseRgba(p.color);
    if (!c) continue;
    ctx.save();
    ctx.globalCompositeOperation = 'screen';
    const glowGrad = ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,p.glowSize*devicePixelRatio);
    glowGrad.addColorStop(0, `rgba(${c.r},${c.g},${c.b},${alpha*c.a*0.55})`);
    glowGrad.addColorStop(0.4, `rgba(${c.r},${Math.round(c.g*0.6)},${Math.round(c.b*0.3)},${alpha*c.a*0.2})`);
    glowGrad.addColorStop(1, 'rgba(0,0,0,0)');
    ctx.fillStyle = glowGrad;
    ctx.beginPath(); ctx.arc(p.x,p.y,p.glowSize*devicePixelRatio,0,Math.PI*2); ctx.fill();
    const coreGrad = ctx.createRadialGradient(p.x,p.y,0,p.x,p.y,pSize*1.8);
    coreGrad.addColorStop(0, `rgba(255,240,200,${alpha*0.95})`);
    coreGrad.addColorStop(0.3, `rgba(${c.r},${c.g},${Math.round(c.b*0.7)},${alpha*c.a*0.9})`);
    coreGrad.addColorStop(1, `rgba(${c.r},${Math.round(c.g*0.4)},0,0)`);
    ctx.fillStyle = coreGrad;
    ctx.beginPath(); ctx.arc(p.x,p.y,pSize*1.8,0,Math.PI*2); ctx.fill();
    ctx.restore();
    if (p.life >= p.maxLife || p.y < -30) particles[i] = spawnParticle();
  }
  if (particles.length < 160 && Math.random() < 0.4) particles.push(spawnParticle());
  animId = requestAnimationFrame(draw);
}

resize(); init(); draw();
window.addEventListener('resize', () => { cancelAnimationFrame(animId); resize(); init(); draw(); });
</script>
</body>
</html>
