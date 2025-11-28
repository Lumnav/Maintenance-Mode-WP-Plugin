<?php
/**
 * Glassmorphic Template
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
        <meta name="description" content="Future home of <?php echo esc_attr($domain); ?>. We're building something great.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Inter', sans-serif;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                background: #0f0f23;
                position: relative
            }

            .gradient-bg {
                position: fixed;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: linear-gradient(45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
                background-size: 400% 400%;
                animation: gradientShift 15s ease infinite;
                filter: blur(80px);
                opacity: .6;
                z-index: 1
            }

            @keyframes gradientShift {
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

            .particles {
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 2;
                pointer-events: none
            }

            .particle {
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(255, 255, 255, .6);
                border-radius: 50%;
                animation: float 20s infinite ease-in-out
            }

            .particle:nth-child(1) {
                left: 10%;
                top: 20%;
                animation-delay: 0s;
                animation-duration: 18s
            }

            .particle:nth-child(2) {
                left: 80%;
                top: 40%;
                animation-delay: 2s;
                animation-duration: 22s
            }

            .particle:nth-child(3) {
                left: 30%;
                top: 60%;
                animation-delay: 4s;
                animation-duration: 20s
            }

            .particle:nth-child(4) {
                left: 70%;
                top: 80%;
                animation-delay: 1s;
                animation-duration: 19s
            }

            .particle:nth-child(5) {
                left: 50%;
                top: 30%;
                animation-delay: 3s;
                animation-duration: 21s
            }

            .particle:nth-child(6) {
                left: 20%;
                top: 70%;
                animation-delay: 5s;
                animation-duration: 17s
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0) translateX(0)
                }

                25% {
                    transform: translateY(-30px) translateX(20px)
                }

                50% {
                    transform: translateY(-60px) translateX(-20px)
                }

                75% {
                    transform: translateY(-30px) translateX(10px)
                }
            }

            .card {
                position: relative;
                z-index: 3;
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(25px);
                -webkit-backdrop-filter: blur(25px);
                border: 1px solid rgba(255, 255, 255, 0.15);
                border-radius: 30px;
                padding: 60px 80px;
                max-width: 600px;
                width: 90%;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.1);
                animation: cardEntrance 1s ease-out
            }

            @keyframes cardEntrance {
                0% {
                    opacity: 0;
                    transform: translateY(30px) scale(.95)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1)
                }
            }

            .domain {
                font-size: clamp(1rem, 2vw, 1.2rem);
                font-weight: 600;
                color: rgba(255, 255, 255, .9);
                margin-bottom: 15px;
                text-transform: lowercase;
                letter-spacing: 1px;
                background: linear-gradient(90deg, #a8edea, #fed6e3);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: fadeInUp .8s ease-out .1s both
            }

            h1 {
                font-size: clamp(2rem, 5vw, 3.5rem);
                font-weight: 700;
                color: #fff;
                margin-bottom: 20px;
                text-shadow: 0 2px 20px rgba(0, 0, 0, .3);
                line-height: 1.2;
                animation: fadeInUp .8s ease-out .2s both
            }

            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            p {
                font-size: 1.1rem;
                color: rgba(255, 255, 255, .85);
                line-height: 1.6;
                font-weight: 300;
                animation: fadeInUp .8s ease-out .4s both
            }

            .maintenance-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 20px;
                animation: pulse 2s ease-in-out infinite
            }

            .maintenance-icon svg {
                width: 100%;
                height: 100%;
                filter: drop-shadow(0 4px 8px rgba(0, 0, 0, .2))
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1)
                }

                50% {
                    transform: scale(1.05)
                }
            }

            @media(max-width:768px) {
                .card {
                    padding: 40px 30px
                }

                h1 {
                    font-size: 2rem
                }

                p {
                    font-size: 1rem
                }
            }
        </style>
    </head>

    <body>
        <div class="gradient-bg"></div>
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="card">
            <div class="maintenance-icon"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" opacity="0.9" />
                    <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" opacity="0.7" />
                    <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" opacity="0.8" />
                </svg></div>
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <h1>Future Home</h1>
            <p>We're working hard to build something amazing. Check back soon!</p>
        </div>
    </body>

    </html>
    <?php
