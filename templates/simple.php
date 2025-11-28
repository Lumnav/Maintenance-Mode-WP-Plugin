<?php
/**
 * Simple Template
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
    <title><?php echo esc_html($domain); ?> - Under Maintenance</title>
    <meta name="description"
        content="<?php echo esc_attr($domain); ?> is currently undergoing scheduled maintenance. We will be back shortly.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px
        }

        .container {
            text-align: center;
            max-width: 900px;
            width: 100%;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 60px 40px;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.8);
            animation: fadeIn 1s ease-out
        }

        .domain {
            font-size: clamp(2.5rem, 8vw, 5.5rem);
            font-weight: 800;
            color: #111;
            margin-bottom: 30px;
            letter-spacing: -0.03em;
            line-height: 1.1;
            animation: fadeIn 0.8s ease-out
        }

        .tagline {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            color: #555;
            font-weight: 500;
            margin-bottom: 15px;
            letter-spacing: -0.01em;
            animation: fadeIn 1s ease-out 0.2s both
        }

        .message {
            font-size: clamp(0.95rem, 2vw, 1.1rem);
            color: #777;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.7;
            animation: fadeIn 1s ease-out 0.4s both
        }

        .divider {
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, #222, transparent);
            margin: 30px auto;
            opacity: 0.2;
            animation: expandWidth 1.2s ease-out 0.3s both
        }

        @keyframes expandWidth {
            0% {
                width: 0;
            }

            100% {
                width: 100px;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @media (max-width:600px) {
            .container {
                padding: 40px 20px;
            }

            .domain {
                margin-bottom: 20px
            }

            .tagline {
                margin-bottom: 12px
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="domain"><?php echo esc_html($domain); ?></div>
        <div class="divider"></div>
        <div class="tagline">Coming Soon</div>
        <div class="message">This domain is currently under construction. Check back soon!</div>
    </div>
</body>

</html>