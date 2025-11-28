<?php
/**
 * Matrix Template
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
        <title><?php echo esc_html($domain); ?> - System Boot</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> system boot sequence initiated.">
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Courier Prime', monospace;
                background: #000;
                color: #0f0;
                overflow: hidden;
                position: relative;
                min-height: 100vh
            }

            #matrix {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                opacity: 0.3;
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
                font-weight: 700;
                color: #0f0;
                text-shadow: 0 0 10px #0f0, 0 0 20px #0f0;
                margin-bottom: 30px;
                letter-spacing: 4px;
                animation: glitchMatrix 3s infinite;
                text-transform: uppercase
            }

            @keyframes glitchMatrix {

                0%,
                90%,
                100% {
                    transform: translate(0)
                }

                92% {
                    transform: translate(-2px, 2px)
                }

                94% {
                    transform: translate(2px, -2px)
                }

                96% {
                    transform: translate(-2px, -2px)
                }
            }

            .status {
                font-size: clamp(1.2rem, 3vw, 1.8rem);
                letter-spacing: 3px;
                color: #0f0;
                margin-bottom: 15px
            }

            .message {
                font-size: clamp(0.9rem, 2vw, 1.1rem);
                color: rgba(0, 255, 0, 0.7);
                letter-spacing: 2px;
                max-width: 500px
            }

            .cursor {
                display: inline-block;
                width: 10px;
                height: 20px;
                background: #0f0;
                animation: blink 1s step-end infinite;
                margin-left: 5px
            }

            @keyframes blink {

                0%,
                50% {
                    opacity: 1
                }

                51%,
                100% {
                    opacity: 0
                }
            }
        </style>
    </head>

    <body><canvas id="matrix"></canvas>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="status">SYSTEM BOOT<span class="cursor"></span></div>
            <div class="message">Initializing matrix parameters...</div>
        </div>
        <script>const canvas = document.getElementById('matrix'); const ctx = canvas.getContext('2d'); canvas.width = window.innerWidth; canvas.height = window.innerHeight; const chars = '01'; const fontSize = 14; const columns = canvas.width / fontSize; const drops = []; for (let i = 0; i < columns; i++) { drops[i] = 1 } function draw() { ctx.fillStyle = 'rgba(0,0,0,0.05)'; ctx.fillRect(0, 0, canvas.width, canvas.height); ctx.fillStyle = '#0F0'; ctx.font = fontSize + 'px monospace'; for (let i = 0; i < drops.length; i++) { const text = chars[Math.floor(Math.random() * chars.length)]; ctx.fillText(text, i * fontSize, drops[i] * fontSize); if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) { drops[i] = 0 } drops[i]++ } } setInterval(draw, 33);</script>
    </body>

    </html>
    <?php
