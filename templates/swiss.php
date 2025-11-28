<?php
/**
 * Swiss Template
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
        <title><?php echo esc_html($domain); ?> - In Development</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> is in development. Our service will resume shortly.">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                background: #fff;
                color: #000;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                padding: 40px
            }

            .container {
                max-width: 1000px;
                width: 100%;
                position: relative
            }

            .red-line {
                position: absolute;
                top: 0;
                left: 0;
                width: 100px;
                height: 3px;
                background: #ff0000
            }

            .domain {
                font-size: clamp(3.5rem, 10vw, 9rem);
                font-weight: 700;
                line-height: 0.9;
                letter-spacing: -0.04em;
                margin: 60px 0 40px 0;
                text-transform: lowercase;
                word-break: break-word;
                animation: slideInLeft 1s ease-out;
            }

            @keyframes slideInLeft {
                from {
                    transform: translateX(-50px);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            .grid-numbers {
                position: absolute;
                right: 0;
                top: 60px;
                font-size: 14px;
                color: #888;
                letter-spacing: 2px;
                font-weight: 300
            }

            .message-block {
                max-width: 400px;
                margin-top: 60px;
                border-left: 2px solid #000;
                padding-left: 20px
            }

            .status {
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 3px;
                font-weight: 300;
                margin-bottom: 15px;
                color: #666
            }

            .detail {
                font-size: 16px;
                line-height: 1.6;
                font-weight: 300
            }

            .footer {
                position: absolute;
                bottom: 0;
                right: 0;
                font-size: 11px;
                color: #ccc;
                letter-spacing: 1px
            }

            @media(max-width:768px) {
                .domain {
                    margin: 40px 0 30px 0
                }

                .grid-numbers {
                    display: none
                }

                .message-block {
                    margin-top: 40px
                }
            }
        </style>
    </head>

    <body>
        <div class="grid-bg"></div>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="status">Status / In Development</div>
            <div class="message">We are currently updating our platform. Please check back later.</div>
        </div>
    </body>

    </html>
    <?php
