<?php
/**
 * Particles Template
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
        <title><?php echo esc_html($domain); ?> - Initializing</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> initializing systems...">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Montserrat', sans-serif;
                background: #1a1a2e;
                overflow: hidden;
                min-height: 100vh
            }

            #particles {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .content {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                text-align: center;
                padding: 20px
            }

            .domain {
                font-size: clamp(2.5rem, 8vw, 6rem);
                font-weight: 900;
                background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                margin-bottom: 25px;
                text-transform: uppercase;
                letter-spacing: 3px;
                animation: fadeIn 2s ease-out
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: scale(0.8)
                }

                100% {
                    opacity: 1;
                    transform: scale(1)
                }
            }

            .message {
                font-size: clamp(1.1rem, 2.5vw, 1.4rem);
                color: rgba(255, 255, 255, 0.7);
                max-width: 600px;
                margin-bottom: 30px
            }

            .loader {
                display: flex;
                gap: 10px
            }

            .dot {
                width: 15px;
                height: 15px;
                background: linear-gradient(135deg, #667eea, #764ba2);
                border-radius: 50%;
                animation: bounce 1.4s infinite ease-in-out
            }

            .dot:nth-child(1) {
                animation-delay: -0.32s
            }

            .dot:nth-child(2) {
                animation-delay: -0.16s
            }

            @keyframes bounce {

                0%,
                80%,
                100% {
                    transform: scale(0)
                }

                40% {
                    transform: scale(1)
                }
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 2px
                }
            }
        </style>
    </head>

    <body><canvas id="particles"></canvas>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="message">Initializing systems...</div>
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <script>const canvas = document.getElementById('particles'); const ctx = canvas.getContext('2d'); canvas.width = window.innerWidth; canvas.height = window.innerHeight; const particles = []; class Particle { constructor() { this.x = canvas.width / 2; this.y = canvas.height / 2; this.vx = (Math.random() - 0.5) * 5; this.vy = (Math.random() - 0.5) * 5; this.size = Math.random() * 3 + 1; this.color = `hsl(${Math.random() * 60 + 240},70%,60%)` } update() { this.x += this.vx; this.y += this.vy; this.vy += 0.1 } draw() { ctx.fillStyle = this.color; ctx.beginPath(); ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx.fill() } } function animate() { ctx.fillStyle = 'rgba(26,26,46,0.1)'; ctx.fillRect(0, 0, canvas.width, canvas.height); if (Math.random() < 0.3) { particles.push(new Particle()) } particles.forEach((p, i) => { p.update(); p.draw(); if (p.y > canvas.height) { particles.splice(i, 1) } }); requestAnimationFrame(animate) } animate();</script>
    </body>

    </html>
    <?php
