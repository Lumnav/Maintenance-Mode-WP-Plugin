<?php
/**
 * Vhs Template
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
        <title><?php echo esc_html($domain); ?> - Loading</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> initializing... please stand by.">
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'VT323', monospace;
                background: #000;
                color: #fff;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                position: relative
            }

            .static {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAG0lEQVQYV2NkYGD4z8DAwMgABXAGNgGwSgwVAFbmAgXQdISfAAAAAElFTkSuQmCC');
                opacity: .05;
                z-index: 1;
                pointer-events: none;
                animation: noise .1s infinite
            }

            .scanlines {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255, 255, 255, .03) 2px, rgba(255, 255, 255, .03) 4px);
                z-index: 2;
                pointer-events: none
            }

            @keyframes noise {
                0% {
                    transform: translate(0, 0)
                }

                10% {
                    transform: translate(-5%, -5%)
                }

                20% {
                    transform: translate(-10%, 5%)
                }

                30% {
                    transform: translate(5%, -10%)
                }

                40% {
                    transform: translate(-5%, 15%)
                }

                50% {
                    transform: translate(-10%, 5%)
                }

                60% {
                    transform: translate(15%, 0)
                }

                70% {
                    transform: translate(0, 10%)
                }

                80% {
                    transform: translate(-15%, 0)
                }

                90% {
                    transform: translate(10%, 5%)
                }

                100% {
                    transform: translate(5%, 0)
                }
            }

            .content {
                position: relative;
                z-index: 3;
                text-align: center;
                padding: 20px
            }

            .vhs-border {
                border: 4px solid #fff;
                padding: 40px 60px;
                box-shadow: inset 0 0 50px rgba(255, 255, 255, 0.1);
                background: rgba(0, 0, 0, 0.7)
            }

            .domain {
                font-size: clamp(2.5rem, 8vw, 6rem);
                letter-spacing: 8px;
                line-height: 1.2;
                margin-bottom: 25px;
                color: #ffd700;
                text-shadow: 2px 2px 0 #ff00ff, 4px 4px 0 #00ffff;
                animation: glitchText 5s infinite
            }

            @keyframes glitchText {

                0%,
                90%,
                100% {
                    text-shadow: 2px 2px 0 #ff00ff, 4px 4px 0 #00ffff
                }

                92% {
                    text-shadow: -2px 2px 0 #ff00ff, -4px 4px 0 #00ffff
                }

                94% {
                    text-shadow: 2px -2px 0 #ff00ff, 4px -4px 0 #00ffff
                }
            }

            .status-bar {
                font-size: clamp(1.5rem, 3vw, 2rem);
                margin-bottom: 15px;
                letter-spacing: 4px;
                color: #0f0
            }

            .indicator {
                display: inline-block;
                width: 15px;
                height: 15px;
                background: #f00;
                border-radius: 50%;
                margin-right: 10px;
                animation: blink 1s infinite
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

            .message {
                font-size: clamp(1.1rem, 2.5vw, 1.5rem);
                color: rgba(255, 255, 255, 0.8);
                letter-spacing: 2px
            }

            .timestamp {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 24px;
                color: rgba(255, 255, 255, 0.5)
            }

            @media(max-width:768px) {
                .vhs-border {
                    padding: 30px 20px
                }

                .domain {
                    letter-spacing: 4px
                }

                .status-bar,
                .message {
                    letter-spacing: 2px
                }
            }
        </style>
    </head>

    <body>
        <div class="static-noise"></div>
        <div class="scanlines"></div>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="status">LOADING</div>
            <div class="message">INITIALIZING...</div>
        </div>
    </body>

    </html>
    <?php
