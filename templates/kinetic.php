<?php
/**
 * Kinetic Template
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
        <title><?php echo esc_html($domain); ?> - Coming Back Soon</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> is upgrading. Pushing boundaries, elevating experiences.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300&display=swap"
            rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Roboto', sans-serif;
                background: #1a1a1a;
                color: #fff;
                overflow: hidden;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative
            }

            .bg-texture {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255, 255, 255, .02) 2px, rgba(255, 255, 255, .02) 4px);
                z-index: 1;
                pointer-events: none
            }

            .content {
                position: relative;
                z-index: 2;
                text-align: center;
                padding: 20px
            }

            .title {
                font-family: 'Bebas Neue', cursive;
                font-size: clamp(4rem, 12vw, 10rem);
                line-height: .9;
                margin-bottom: 30px;
                overflow: hidden;
                word-break: break-word;
            }

            .title .word {
                display: inline-block;
                position: relative
            }

            .title .letter {
                display: inline-block;
                animation: revealLetter 1s cubic-bezier(.77, 0, .175, 1) both;
                position: relative
            }

            .title .letter:nth-child(1) {
                animation-delay: .1s
            }

            .title .letter:nth-child(2) {
                animation-delay: .2s
            }

            .title .letter:nth-child(3) {
                animation-delay: .3s
            }

            .title .letter:nth-child(4) {
                animation-delay: .4s
            }

            .title .letter:nth-child(5) {
                animation-delay: .5s
            }

            .title .letter:nth-child(6) {
                animation-delay: .6s
            }

            .title .letter:nth-child(7) {
                animation-delay: .7s
            }

            .title .letter:nth-child(8) {
                animation-delay: .8s
            }

            .title .letter:nth-child(9) {
                animation-delay: .9s
            }

            .title .letter:nth-child(10) {
                animation-delay: 1s
            }

            @keyframes revealLetter {
                0% {
                    transform: translateY(100%) rotateX(-90deg);
                    opacity: 0
                }

                100% {
                    transform: translateY(0) rotateX(0);
                    opacity: 1
                }
            }

            .subtitle {
                font-size: clamp(1rem, 2.5vw, 1.3rem);
                font-weight: 300;
                color: rgba(255, 255, 255, .7);
                max-width: 500px;
                margin: 0 auto;
                letter-spacing: 2px;
                animation: fadeIn 1.5s ease-out 1s both
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0
                }

                100% {
                    opacity: 1
                }
            }

            .line {
                width: 100px;
                height: 2px;
                background: linear-gradient(90deg, transparent, #fff, transparent);
                margin: 40px auto;
                animation: expandLine 1.5s ease-out .8s both
            }

            @keyframes expandLine {
                0% {
                    width: 0
                }

                100% {
                    width: 100px
                }
            }
        </style>
    </head>

    <body>
        <div class="bg-texture"></div>
        <div class="content">
            <div
                style="font-size:clamp(1.2rem, 4vw, 2rem);font-weight:700;margin-bottom:20px;color:rgba(255,255,255,0.7);letter-spacing:5px;text-transform:uppercase;">
                <?php echo esc_html($domain); ?>
            </div>
            <div class="title">
                <div class="word"><span class="letter">U</span><span class="letter">P</span><span
                        class="letter">G</span><span class="letter">R</span><span class="letter">A</span><span
                        class="letter">D</span><span class="letter">I</span><span class="letter">N</span><span
                        class="letter">G</span></div>
            </div>
            <div class="line"></div>
            <p class="subtitle">Pushing boundaries, elevating experiences</p>
        </div>
    </body>

    </html>
    <?php
