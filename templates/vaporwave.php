<?php
/**
 * Vaporwave Template
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
        <meta name="description" content="<?php echo esc_attr($domain); ?> is coming soon.">
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Rajdhani', sans-serif;
                background: linear-gradient(180deg, #ff6ec7 0%, #7873f5 50%, #4facfe 100%);
                min-height: 100vh;
                overflow: hidden;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .grid {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50%;
                background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.3) 100%), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0px, rgba(255, 255, 255, 0.1) 2px, transparent 2px, transparent 50px), repeating-linear-gradient(0deg, rgba(255, 255, 255, 0.1) 0px, rgba(255, 255, 255, 0.1) 2px, transparent 2px, transparent 50px);
                transform: perspective(500px) rotateX(60deg);
                transform-origin: bottom;
                z-index: 1;
                pointer-events: none;
            }

            .content {
                position: relative;
                z-index: 2;
                text-align: center;
                padding: 20px
            }

            .domain {
                font-size: clamp(2.5rem, 8vw, 6rem);
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 15px;
                background: linear-gradient(90deg, #ff6ec7, #7873f5, #4facfe, #00f5ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.3);
                margin-bottom: 20px;
                animation: vaporShift 6s ease infinite;
                background-size: 200% 200%
            }

            @keyframes vaporShift {
                0% {
                    background-position: 0% 50%
                }

                50% {
                    background-position: 100% 50%
                }

                100% {
                    background-position: 0% 50%
                }
            }

            .tagline {
                font-size: clamp(1.3rem, 3.5vw, 2rem);
                color: #fff;
                letter-spacing: 8px;
                text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.5);
                text-transform: uppercase
            }

            .sun {
                position: fixed;
                top: 30%;
                left: 50%;
                transform: translateX(-50%);
                width: 200px;
                height: 200px;
                background: linear-gradient(180deg, #ff6ec7, #ffd700);
                border-radius: 50%;
                box-shadow: 0 0 60px rgba(255, 110, 199, 0.6);
                z-index: 0;
                Animation: pulse 4s ease-in-out infinite;
                pointer-events: none;
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: translateX(-50%) scale(1)
                }

                50% {
                    transform: translateX(-50%) scale(1.1)
                }
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 8px
                }

                .tagline {
                    letter-spacing: 4px
                }
            }
        </style>
    </head>

    <body>
        <div class="sun"></div>
        <div class="grid"></div>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="tagline">Coming Soon</div>
        </div>
    </body>

    </html>
    <?php
