<?php
/**
 * Geometric Template
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
        <title><?php echo esc_html($domain); ?> - Constructing</title>
        <meta name="description" content="<?php echo esc_attr($domain); ?> constructing architecture...">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: #f5f5f5;
                min-height: 100vh;
                overflow: hidden;
                position: relative
            }

            .pattern {
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .pattern svg {
                width: 100%;
                height: 100%;
                opacity: 0.1
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
                font-weight: 800;
                color: #2d2d2d;
                margin-bottom: 25px;
                text-transform: lowercase;
                letter-spacing: -1px;
                position: relative
            }

            .domain::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 4px;
                background: linear-gradient(90deg, #667eea, #764ba2)
            }

            .message {
                font-size: clamp(1rem, 2.5vw, 1.3rem);
                color: #666;
                max-width: 500px;
                margin-top: 30px
            }

            .shapes {
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 0;
                pointer-events: none;
            }

            .shape {
                position: absolute;
                border: 3px solid rgba(102, 126, 234, 0.3);
                animation: rotate 20s linear infinite
            }

            .shape:nth-child(1) {
                width: 200px;
                height: 200px;
                top: 10%;
                left: 10%;
                border-radius: 50%
            }

            .shape:nth-child(2) {
                width: 150px;
                height: 150px;
                bottom: 20%;
                right: 15%;
                transform: rotate(45deg)
            }

            .shape:nth-child(3) {
                width: 100px;
                height: 100px;
                top: 60%;
                left: 70%;
                border-radius: 50%;
                animation-delay: 5s
            }

            @keyframes rotate {
                0% {
                    transform: rotate(0deg)
                }

                100% {
                    transform: rotate(360deg)
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
        <div class="shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="pattern"><svg>
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#667eea" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg></div>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="message">Constructing architecture...</div>
        </div>
    </body>

    </html>
    <?php
