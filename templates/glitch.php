<?php
/**
 * Glitch Template
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
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Rubik Glitch', cursive;
                background: #000;
                color: #fff;
                min-height: 100vh;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative
            }

            .noise {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAG0lEQVQYV2NkYGD4z8DAwMgABXAGNgGwSgwVAFbmAgXQdISfAAAAAElFTkSuQmCC');
                opacity: 0.03;
                animation: noise 0.2s infinite;
                z-index: 1;
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
                z-index: 2;
                text-align: center;
                padding: 20px
            }

            .domain {
                font-size: clamp(2.5rem, 8vw, 6rem);
                font-weight: 700;
                margin-bottom: 30px;
                text-transform: uppercase;
                letter-spacing: 5px;
                position: relative;
                animation: glitchAnim 5s infinite
            }

            @keyframes glitchAnim {

                0%,
                90%,
                100% {
                    transform: translate(0);
                    color: #fff
                }

                91% {
                    transform: translate(-5px, 2px);
                    color: #f0f
                }

                92% {
                    transform: translate(5px, -2px);
                    color: #0ff
                }

                93% {
                    transform: translate(-2px, -5px);
                    color: #f0f
                }

                94% {
                    transform: translate(2px, 5px);
                    color: #0ff
                }

                95% {
                    transform: translate(0);
                    color: #fff
                }
            }

            .domain::before,
            .domain::after {
                content: attr(data-text);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%
            }

            .domain::before {
                left: 2px;
                text-shadow: -2px 0 #f0f;
                clip: rect(24px, 550px, 90px, 0);
                animation: glitchBefore 3s infinite linear alternate-reverse
            }

            @keyframes glitchBefore {
                0% {
                    clip: rect(65px, 9999px, 120px, 0)
                }

                5% {
                    clip: rect(30px, 9999px, 90px, 0)
                }

                10% {
                    clip: rect(85px, 9999px, 140px, 0)
                }

                15% {
                    clip: rect(20px, 9999px, 60px, 0)
                }

                20% {
                    clip: rect(95px, 9999px, 150px, 0)
                }

                25% {
                    clip: rect(10px, 9999px, 50px, 0)
                }

                30% {
                    clip: rect(75px, 9999px, 130px, 0)
                }

                100% {
                    clip: rect(45px, 9999px, 100px, 0)
                }
            }

            .domain::after {
                left: -2px;
                text-shadow: 2px 0 #0ff;
                clip: rect(85px, 550px, 140px, 0);
                animation: glitchAfter 2.5s infinite linear alternate-reverse
            }

            @keyframes glitchAfter {
                0% {
                    clip: rect(40px, 9999px, 95px, 0)
                }

                5% {
                    clip: rect(70px, 9999px, 125px, 0)
                }

                10% {
                    clip: rect(25px, 9999px, 75px, 0)
                }

                15% {
                    clip: rect(90px, 9999px, 145px, 0)
                }

                20% {
                    clip: rect(15px, 9999px, 55px, 0)
                }

                100% {
                    clip: rect(55px, 9999px, 110px, 0)
                }
            }

            .status {
                font-size: clamp(1rem, 2.5vw, 1.3rem);
                color: #f0f;
                letter-spacing: 3px;
                margin-bottom: 10px;
                font-family: monospace
            }

            .message {
                font-size: clamp(0.9rem, 2vw, 1.1rem);
                color: rgba(255, 255, 255, 0.6);
                letter-spacing: 1px;
                font-family: monospace
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 3px
                }
            }
        </style>
    </head>

    <body>
        <div class="noise"></div>
        <div class="content">
            <div class="domain" data-text="<?php echo esc_attr($domain); ?>"><?php echo esc_html($domain); ?></div>
            <div class="status">COMING SOON</div>
            <div class="message">DATA INCOMING...</div>
        </div>
    </body>

    </html>
    <?php
