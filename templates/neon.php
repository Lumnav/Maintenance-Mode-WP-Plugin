<?php
/**
 * Neon Template
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
        <title><?php echo esc_html($domain); ?> - Coming Soon</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> is coming soon. We'll be back shortly.">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Teko', sans-serif;
                background: #0a0a0f;
                color: #fff;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                position: relative
            }

            .cityscape {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 200px;
                background: linear-gradient(to bottom, transparent, #0a0a0f 80%), repeating-linear-gradient(90deg, #1a1a2e 0px, #1a1a2e 50px, #16162a 50px, #16162a 100px);
                z-index: 1;
                pointer-events: none;
            }

            .neon-container {
                position: relative;
                z-index: 2;
                text-align: center;
                padding: 20px
            }

            .domain {
                font-size: clamp(3rem, 12vw, 8rem);
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 8px;
                line-height: 1;
                margin-bottom: 30px;
                color: #fff;
                text-shadow: 0 0 10px #ff006e, 0 0 20px #ff006e, 0 0 40px #ff006e, 0 0 80px #ff006e, 0 0 120px #ff006e;
                animation: flicker 3s infinite, neonPulse 2s ease-in-out infinite
            }

            @keyframes flicker {

                0%,
                18%,
                22%,
                25%,
                53%,
                57%,
                100% {
                    text-shadow: 0 0 10px #ff006e, 0 0 20px #ff006e, 0 0 40px #ff006e, 0 0 80px #ff006e, 0 0 120px #ff006e
                }

                20%,
                24%,
                55% {
                    text-shadow: none
                }
            }

            @keyframes neonPulse {

                0%,
                100% {
                    text-shadow: 0 0 10px #ff006e, 0 0 20px #ff006e, 0 0 40px #ff006e, 0 0 80px #ff006e, 0 0 120px #ff006e
                }

                50% {
                    text-shadow: 0 0 5px #ff006e, 0 0 10px #ff006e, 0 0 20px #ff006e, 0 0 40px #ff006e, 0 0 60px #ff006e
                }
            }

            .subtitle {
                font-size: clamp(1.2rem, 4vw, 2rem);
                color: #00f5ff;
                text-shadow: 0 0 10px #00f5ff, 0 0 20px #00f5ff;
                letter-spacing: 4px;
                margin-bottom: 15px;
                animation: flicker 4s infinite
            }

            .message {
                font-size: clamp(0.9rem, 2.5vw, 1.2rem);
                color: rgba(255, 255, 255, 0.8);
                max-width: 600px;
                margin: 0 auto;
                letter-spacing: 2px
            }

            .neon-border {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 90%;
                height: 80%;
                border: 3px solid #ff006e;
                box-shadow: 0 0 20px #ff006e, inset 0 0 20px #ff006e;
                animation: borderPulse 3s ease-in-out infinite;
                pointer-events: none
            }

            @keyframes borderPulse {

                0%,
                100% {
                    opacity: .3
                }

                50% {
                    opacity: .7
                }
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 4px
                }

                .subtitle,
                .message {
                    letter-spacing: 2px
                }
            }
        </style>
    </head>

    <body>
        <div class="cityscape"></div>
        <div class="content">
            <div class="domain" data-text="<?php echo esc_attr($domain); ?>"><?php echo esc_html($domain); ?></div>
            <div class="status">COMING SOON</div>
            <div class="message">WE ARE CURRENTLY BUILDING SOMETHING AMAZING</div>
        </div>
    </body>

    </html>
    <?php
