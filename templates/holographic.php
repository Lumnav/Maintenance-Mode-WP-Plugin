<?php
/**
 * Holographic Template
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
        <title><?php echo esc_html($domain); ?> - System Update</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> holographic interface recalibration in progress.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Orbitron', sans-serif;
                background: #000;
                color: #0ff;
                overflow: hidden;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative
            }

            .hex-grid {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(0, 255, 255, .03) 40px, rgba(0, 255, 255, .03) 41px), repeating-linear-gradient(90deg, transparent, transparent 40px, rgba(0, 255, 255, .03) 40px, rgba(0, 255, 255, .03) 41px);
                z-index: 1;
                pointer-events: none;
            }

            .scanline {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #0ff, transparent);
                box-shadow: 0 0 10px #0ff;
                animation: scan 4s linear infinite;
                z-index: 3;
                pointer-events: none;
            }

            @keyframes scan {
                0% {
                    transform: translateY(0)
                }

                100% {
                    transform: translateY(100vh)
                }
            }

            .content {
                position: relative;
                z-index: 2;
                text-align: center;
                padding: 20px
            }

            h1 {
                font-size: clamp(2rem, 6vw, 4.5rem);
                font-weight: 900;
                margin-bottom: 30px;
                text-transform: uppercase;
                letter-spacing: 8px;
                background: linear-gradient(90deg, #0ff, #f0f, #0ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                background-size: 200% 100%;
                animation: shimmer 3s linear infinite, glitch 5s steps(2) infinite;
                position: relative
            }

            @keyframes shimmer {
                0% {
                    background-position: 0% 50%
                }

                100% {
                    background-position: 200% 50%
                }
            }

            @keyframes glitch {

                0%,
                90%,
                100% {
                    text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff
                }

                92% {
                    text-shadow: 2px 0 10px #f0f, -2px 0 10px #0ff, 0 0 30px #0ff
                }

                94% {
                    text-shadow: -2px 0 10px #0ff, 2px 0 10px #f0f, 0 0 30px #0ff
                }

                96% {
                    text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff
                }
            }

            p {
                font-size: clamp(1rem, 2vw, 1.2rem);
                color: #0ff;
                font-weight: 400;
                letter-spacing: 3px;
                text-shadow: 0 0 5px #0ff;
                opacity: .8;
                animation: pulse 2s ease-in-out infinite
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: .8
                }

                50% {
                    opacity: .4
                }
            }

            .status {
                display: inline-block;
                margin-top: 40px;
                padding: 15px 30px;
                border: 2px solid #0ff;
                box-shadow: 0 0 10px #0ff, inset 0 0 10px rgba(0, 255, 255, .1);
                font-size: 14px;
                letter-spacing: 3px;
                text-transform: uppercase;
                animation: borderPulse 2s ease-in-out infinite
            }

            @keyframes borderPulse {

                0%,
                100% {
                    border-color: #0ff;
                    box-shadow: 0 0 10px #0ff, inset 0 0 10px rgba(0, 255, 255, .1)
                }

                50% {
                    border-color: #f0f;
                    box-shadow: 0 0 10px #f0f, inset 0 0 10px rgba(255, 0, 255, .1)
                }
            }
        </style>
    </head>

    <body>
        <div class="hex-grid"></div>
        <div class="scanline"></div>
        <div class="content">
            <div
                style="font-size:clamp(1rem, 3vw, 1.4rem);font-weight:700;margin-bottom:20px;color:#0ff;text-shadow:0 0 5px #0ff;letter-spacing:5px;text-transform:uppercase;">
                <?php echo esc_html($domain); ?>
            </div>
            <h1>MAINTENANCE</h1>
            <p>HOLOGRAPHIC INTERFACE RECALIBRATION IN PROGRESS</p>
            <div class="status">SYSTEM UPDATE</div>
        </div>
    </body>

    </html>
    <?php
