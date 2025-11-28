<?php
/**
 * Liquid Template
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
        <title><?php echo esc_html($domain); ?> - Be Right Back</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> is transforming. Experience something extraordinary when we return.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;600;800&display=swap"
            rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: #0f0817;
                color: #fff;
                overflow: hidden;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .blob-container {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1
            }

            .blob {
                position: absolute;
                filter: blur(60px);
                opacity: .5;
                animation: morph 20s ease-in-out infinite
            }

            .blob1 {
                top: 10%;
                left: 10%;
                width: 400px;
                height: 400px;
                background: linear-gradient(45deg, #667eea, #764ba2);
                animation-delay: 0s
            }

            .blob2 {
                top: 50%;
                right: 10%;
                width: 500px;
                height: 500px;
                background: linear-gradient(135deg, #f093fb, #f5576c);
                animation-delay: 5s
            }

            .blob3 {
                bottom: 10%;
                left: 40%;
                width: 450px;
                height: 450px;
                background: linear-gradient(90deg, #4facfe, #00f2fe);
                animation-delay: 10s
            }

            @keyframes morph {

                0%,
                100% {
                    border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
                    transform: translate(0, 0) scale(1)
                }

                25% {
                    border-radius: 30% 60% 70% 40%/50% 60% 30% 60%;
                    transform: translate(50px, -50px) scale(1.1)
                }

                50% {
                    border-radius: 40% 60% 60% 40%/70% 30% 70% 30%;
                    transform: translate(-50px, 50px) scale(.9)
                }

                75% {
                    border-radius: 70% 30% 40% 60%/40% 70% 30% 60%;
                    transform: translate(30px, 30px) scale(1.05)
                }
            }

            .content {
                position: relative;
                z-index: 2;
                text-align: center;
                padding: 40px;
                max-width: 700px;
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius: 30px;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            h1 {
                font-size: clamp(2.5rem, 7vw, 5rem);
                font-weight: 800;
                margin-bottom: 20px;
                background: linear-gradient(135deg, #fff, #e0e0ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: slideUp 1s ease-out
            }

            p {
                font-size: clamp(1.1rem, 2.5vw, 1.5rem);
                color: rgba(255, 255, 255, .8);
                font-weight: 300;
                line-height: 1.6;
                animation: slideUp 1s ease-out .2s both
            }

            @keyframes slideUp {
                0% {
                    opacity: 0;
                    transform: translateY(30px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .dots {
                display: inline-flex;
                gap: 8px;
                margin-top: 30px
            }

            .dot {
                width: 12px;
                height: 12px;
                background: #667eea;
                border-radius: 50%;
                animation: bounce 1.4s ease-in-out infinite
            }

            .dot:nth-child(2) {
                animation-delay: .2s
            }

            .dot:nth-child(3) {
                animation-delay: .4s
            }

            @keyframes bounce {

                0%,
                80%,
                100% {
                    transform: scale(0)
                }

                40% {
                    transform: scale(1)
                }
            }
        </style>
    </head>

    <body>
        <div class="blob-container">
            <div class="blob blob1"></div>
            <div class="blob blob2"></div>
            <div class="blob blob3"></div>
        </div>
        <div class="content">
            <div
                style="font-size:clamp(1rem, 3vw, 1.5rem);font-weight:700;margin-bottom:12px;background:linear-gradient(135deg,#667eea,#f093fb);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;text-transform:lowercase;letter-spacing:1.5px;">
                <?php echo esc_html($domain); ?>
            </div>
            <h1>Transforming</h1>
            <p>We're reshaping our digital presence. Experience something extraordinary when we return.</p>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </body>

    </html>
    <?php
