<?php
/**
 * Galaxy Template
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
        <title><?php echo esc_html($domain); ?> - A New Universe</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> is exploring new frontiers. Launching soon.">
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Space Grotesk', sans-serif;
                background: #000;
                overflow: hidden;
                position: relative;
                min-height: 100vh
            }

            .stars {
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .star {
                position: absolute;
                width: 2px;
                height: 2px;
                background: #fff;
                border-radius: 50%;
                animation: twinkle 4s infinite
            }

            .star:nth-child(1) {
                top: 20%;
                left: 10%;
                animation-delay: 0s
            }

            .star:nth-child(2) {
                top: 40%;
                left: 80%;
                animation-delay: 1s
            }

            .star:nth-child(3) {
                top: 70%;
                left: 30%;
                animation-delay: 2s
            }

            .star:nth-child(4) {
                top: 15%;
                left: 60%;
                animation-delay: 0.5s
            }

            .star:nth-child(5) {
                top: 85%;
                left: 70%;
                animation-delay: 1.5s
            }

            .star:nth-child(6) {
                top: 50%;
                left: 20%;
                animation-delay: 2.5s
            }

            @keyframes twinkle {

                0%,
                100% {
                    opacity: 1
                }

                50% {
                    opacity: 0.3
                }
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
                background: linear-gradient(135deg, #667eea, #764ba2, #f093fb, #4facfe);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                background-size: 300% 300%;
                animation: galaxyShift 8s ease infinite;
                margin-bottom: 30px;
                text-transform: lowercase;
                letter-spacing: -1px
            }

            @keyframes galaxyShift {
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

            .message {
                font-size: clamp(1.1rem, 2.5vw, 1.4rem);
                color: rgba(255, 255, 255, 0.8);
                max-width: 600px;
                letter-spacing: 1px
            }

            .nebula {
                position: fixed;
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(102, 126, 234, 0.3), transparent);
                border-radius: 50%;
                filter: blur(60px);
                animation: float 20s infinite ease-in-out
            }

            .nebula:nth-child(1) {
                top: 10%;
                left: 20%
            }

            .nebula:nth-child(2) {
                bottom: 20%;
                right: 10%;
                animation-delay: 5s
            }

            @keyframes float {

                0%,
                100% {
                    transform: translate(0, 0)
                }

                50% {
                    transform: translate(50px, 50px)
                }
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 0
                }
            }
        </style>
    </head>

    <body>
        <div class="nebula"></div>
        <div class="nebula"></div>
        <div class="stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="message">Exploring new frontiers. Back in a moment.</div>
        </div>
    </body>

    </html>
    <?php
