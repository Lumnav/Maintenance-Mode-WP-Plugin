<?php
/**
 * Brutalist Template
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
        <meta name="description" content="<?php echo esc_attr($domain); ?> is loading. Services temporarily unavailable.">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
                background: #fff;
                color: #000;
                padding: 40px;
                min-height: 100vh;
                display: flex;
                align-items: center
            }

            .container {
                max-width: 100%
            }

            .domain {
                font-size: clamp(4rem, 12vw, 10rem);
                font-weight: 900;
                line-height: 0.85;
                letter-spacing: -0.05em;
                text-transform: uppercase;
                margin-bottom: 40px;
                text-shadow: 8px 8px 0 #000;
                word-break: break-word
            }

            .status-block {
                background: #000;
                color: #fff;
                padding: 30px;
                max-width: 600px;
                margin-bottom: 30px
            }

            .status {
                font-size: clamp(1.5rem, 4vw, 2.5rem);
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: 2px
            }

            .detail {
                font-size: clamp(1rem, 2.5vw, 1.3rem);
                margin-top: 15px;
                line-height: 1.4;
                font-weight: 400
            }

            .timestamp {
                font-size: clamp(2rem, 5vw, 4rem);
                font-weight: 900;
                margin-top: 40px
            }

            @media(max-width:768px) {
                body {
                    padding: 20px
                }

                .domain {
                    margin-bottom: 30px
                }
            }
        </style>
    </head>

    <body>
        <div class="content">
            <div class="domain"><?php echo esc_html($domain); ?></div>
            <div class="status">LOADING</div>
            <div class="message">SYSTEM UPGRADE IN PROGRESS</div>
        </div>
    </body>

    </html>
    <?php
