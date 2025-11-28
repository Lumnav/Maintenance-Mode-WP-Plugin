<?php
/**
 * Hightech Template
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
        <title><?php echo esc_html($domain); ?> - System Initializing</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> system initializing. Establishing secure connection...">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                background: #0a0a0a;
                color: #00ff00;
                font-family: 'Share Tech Mono', monospace;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                overflow: hidden;
                text-align: center;
                text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00;
                position: relative
            }

            .scanline {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.2) 50%, rgba(0, 0, 0, 0.2));
                background-size: 100% 4px;
                animation: scan 10s linear infinite;
                pointer-events: none;
                z-index: 10;
                opacity: 0.3;
            }

            @keyframes scan {
                0% {
                    background-position: 0 0;
                }

                100% {
                    background-position: 0 100%;
                }
            }

            .container {
                position: relative;
                z-index: 2;
                padding: 40px;
                max-width: 95%;
                border: 2px solid #00ff00;
                box-shadow: 0 0 20px rgba(0, 255, 0, 0.2), inset 0 0 40px rgba(0, 255, 0, 0.1);
                background: rgba(0, 10, 0, 0.8);
                backdrop-filter: blur(5px);
                animation: flicker 4s infinite alternate
            }

            .border-art {
                position: absolute;
                top: -12px;
                left: 30px;
                background: #0a0a0a;
                padding: 0 10px;
                font-size: 14px;
                color: #00ff00;
                letter-spacing: 2px
            }

            @keyframes flicker {

                0%,
                100% {
                    opacity: 1;
                    box-shadow: 0 0 20px rgba(0, 255, 0, 0.2), inset 0 0 40px rgba(0, 255, 0, 0.1)
                }

                50% {
                    opacity: .95;
                    box-shadow: 0 0 15px rgba(0, 255, 0, 0.1), inset 0 0 20px rgba(0, 255, 0, 0.05)
                }
            }

            .domain {
                font-size: clamp(2rem, 10vw, 6rem);
                font-weight: 700;
                margin-bottom: 20px;
                text-transform: uppercase;
                letter-spacing: 4px;
                animation: glitch 6s linear infinite, textGlow 2s ease-in-out infinite;
                line-height: 1.1;
                word-break: break-all
            }

            @keyframes glitch {

                2%,
                64% {
                    transform: translate(3px, 0) skew(0)
                }

                4%,
                60% {
                    transform: translate(-3px, 0) skew(0)
                }

                62% {
                    transform: translate(0, 0) skew(5deg)
                }

                65% {
                    transform: translate(0, 0) skew(0)
                }
            }

            @keyframes textGlow {

                0%,
                100% {
                    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00
                }

                50% {
                    text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00
                }
            }

            .status {
                font-size: clamp(1rem, 3vw, 1.5rem);
                margin-top: 25px;
                letter-spacing: 4px;
                text-transform: uppercase;
                animation: blink 2s step-end infinite;
                text-shadow: 0 0 8px rgba(0, 255, 0, 0.5);
            }

            .prompt {
                display: inline-block;
                margin-right: 8px
            }

            @keyframes blink {

                0%,
                50% {
                    opacity: 1
                }

                51%,
                100% {
                    opacity: .3
                }
            }

            .footer {
                font-size: clamp(0.85rem, 2vw, 1.1rem);
                margin-top: 20px;
                opacity: .7;
                letter-spacing: 2px;
                border-top: 1px solid rgba(0, 255, 0, 0.3);
                padding-top: 15px;
                display: inline-block;
            }

            .typing-effect {
                overflow: hidden;
                border-right: 2px solid #00ff00;
                white-space: nowrap;
                margin: 0 auto;
                animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
            }

            @keyframes typing {
                from {
                    width: 0
                }

                to {
                    width: 100%
                }
            }

            @keyframes blink-caret {

                from,
                to {
                    border-color: transparent
                }

                50% {
                    border-color: #00ff00;
                }
            }

            @media(max-width:768px) {
                .domain {
                    letter-spacing: 2px
                }

                .status {
                    letter-spacing: 2px
                }
            }
        </style>
    </head>

    <body>
        <div class="scanline"></div>
        <div class="container">
            <div class="border-art">[ SYSTEM ]</div>
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="status"><span class="prompt">&gt;</span>SYSTEM INITIALIZING</div>
            <div class="footer">
                <div class="typing-effect">Establishing secure connection...</div>
            </div>
        </div>
    </body>

    </html>
    <?php
