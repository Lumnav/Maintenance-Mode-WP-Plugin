<?php
/**
 * Neural Template
 * 
 * @package Landing_Pages
 */

if (!defined('ABSPATH')) {
    exit;
}

$domain = Lumnav_LP_Templates::get_domain();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo esc_html($domain); ?> - System Initializing</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> initializing neural network.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;500;700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Rajdhani', sans-serif;
                background: #0a0e27;
                color: #fff;
                overflow: hidden;
                height: 100vh
            }

            #canvas {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1
            }

            .content {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
                padding: 20px
            }

            h1 {
                font-size: clamp(2.5rem, 6vw, 4rem);
                font-weight: 700;
                margin-bottom: 20px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: fadeIn 1s ease-out
            }

            p {
                font-size: clamp(1rem, 2vw, 1.3rem);
                color: rgba(255, 255, 255, .7);
                max-width: 600px;
                font-weight: 300;
                letter-spacing: 1px;
                animation: fadeIn 1s ease-out .3s both
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(20px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .status-indicator {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                margin-top: 30px;
                padding: 12px 24px;
                background: rgba(102, 126, 234, .1);
                border: 1px solid rgba(102, 126, 234, .3);
                border-radius: 50px;
                font-size: 14px;
                font-weight: 500;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                animation: fadeIn 1s ease-out .6s both
            }

            .status-dot {
                width: 8px;
                height: 8px;
                background: #667eea;
                border-radius: 50%;
                animation: pulse 2s ease-in-out infinite
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                    transform: scale(1)
                }

                50% {
                    opacity: .5;
                    transform: scale(1.2)
                }
            }
        </style>
    </head>

    <body><canvas id="canvas"></canvas>
        <div class="content">
            <div
                style="font-size:clamp(1rem, 3vw, 1.4rem);font-weight:600;margin-bottom:10px;color:rgba(102,126,234,0.8);text-transform:lowercase;letter-spacing:2px;">
                <?php echo esc_html($domain); ?>
            </div>
            <h1>Initializing Neural Network</h1>
            <p>Our systems are currently establishing neural pathways. Launch imminent.</p>
            <div class="status-indicator"><span class="status-dot"></span>Initializing</div>
        </div>
        <script>const canvas = document.getElementById('canvas'); const ctx = canvas.getContext('2d'); let w, h, particles = [], mouse = { x: null, y: null, radius: 150 }; function resize() { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; init() } function init() { particles = []; const count = Math.min(100, Math.floor((w * h) / 15000)); for (let i = 0; i < count; i++) { particles.push({ x: Math.random() * w, y: Math.random() * h, vx: (Math.random() - .5) * .5, vy: (Math.random() - .5) * .5, radius: Math.random() * 2 + 1 }) } } class Particle { constructor(obj) { this.x = obj.x; this.y = obj.y; this.vx = obj.vx; this.vy = obj.vy; this.radius = obj.radius } update() { this.x += this.vx; this.y += this.vy; if (this.x < 0 || this.x > w) this.vx *= -1; if (this.y < 0 || this.y > h) this.vy *= -1; if (mouse.x !== null) { const dx = this.x - mouse.x; const dy = this.y - mouse.y; const dist = Math.sqrt(dx * dx + dy * dy); if (dist < mouse.radius) { const angle = Math.atan2(dy, dx); const force = ((mouse.radius - dist) / mouse.radius) * 2; this.vx += Math.cos(angle) * force * .1; this.vy += Math.sin(angle) * force * .1 } } this.vx *= .99; this.vy *= .99 } draw() { ctx.beginPath(); ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2); ctx.fillStyle = 'rgba(102,126,234,.8)'; ctx.fill() } } function connect() { for (let i = 0; i < particles.length; i++) { for (let j = i + 1; j < particles.length; j++) { const dx = particles[i].x - particles[j].x; const dy = particles[i].y - particles[j].y; const dist = Math.sqrt(dx * dx + dy * dy); if (dist < 120) { ctx.beginPath(); ctx.moveTo(particles[i].x, particles[i].y); ctx.lineTo(particles[j].x, particles[j].y); ctx.strokeStyle = `rgba(118,75,162,${1 - dist / 120})`; ctx.lineWidth = .5; ctx.stroke() } } } } function animate() { ctx.clearRect(0, 0, w, h); particles.forEach((p, i) => { const particle = new Particle(p); particle.update(); particle.draw(); particles[i] = particle }); connect(); requestAnimationFrame(animate) } window.addEventListener('resize', resize); canvas.addEventListener('mousemove', e => { mouse.x = e.clientX; mouse.y = e.clientY }); canvas.addEventListener('mouseleave', () => { mouse.x = null; mouse.y = null }); resize(); animate();</script>
    </body>

    </html>
    <?php
