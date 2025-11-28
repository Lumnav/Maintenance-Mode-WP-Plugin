<?php
/**
 * Artistic Template
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
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> is coming soon. Something beautiful is on the horizon.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                background: #000;
                color: #fff;
                font-family: 'Poppins', sans-serif;
                margin: 0;
                overflow: hidden;
                text-align: center
            }

            #bg-canvas {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1
            }

            .content-wrapper {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 20px
            }

            .grain {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 3;
                opacity: 0.05;
                background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            }

            .container {
                perspective: 1200px
            }

            .domain-text {
                font-size: clamp(3rem, 10vw, 8rem);
                font-weight: 900;
                text-transform: lowercase;
                letter-spacing: -2px;
                background: linear-gradient(135deg, #ff8a00, #e52e71, #9d4edd, #4cc9f0);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                background-size: 300% 300%;
                animation: gradientShift 8s ease infinite, breathe 4s ease-in-out infinite, rotate3d 20s linear infinite;
                line-height: 1;
                margin-bottom: 30px;
                filter: drop-shadow(0 0 20px rgba(255, 138, 0, 0.6)) drop-shadow(0 0 40px rgba(157, 78, 221, 0.4));
                transform-style: preserve-3d
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

            @keyframes breathe {

                0%,
                100% {
                    transform: scale(1) rotateY(0deg)
                }

                50% {
                    transform: scale(1.05) rotateY(5deg)
                }
            }

            @keyframes rotate3d {
                0% {
                    transform: rotateY(-2deg) rotateX(2deg)
                }

                50% {
                    transform: rotateY(2deg) rotateX(-2deg)
                }

                100% {
                    transform: rotateY(-2deg) rotateX(2deg)
                }
            }

            p {
                font-size: clamp(1rem, 2.5vw, 1.3rem);
                color: rgba(255, 255, 255, 0.8);
                font-family: sans-serif;
                font-weight: 300;
                max-width: 600px;
                animation: fadeIn 1.5s ease-out 0.5s both;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(20px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .glow-ring {
                position: absolute;
                width: 120%;
                height: 120%;
                border-radius: 50%;
                background: radial-gradient(circle, transparent 30%, rgba(157, 78, 221, 0.1) 50%, transparent 70%);
                animation: pulse 3s ease-in-out infinite;
                pointer-events: none
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(0.95);
                    opacity: 0.4
                }

                50% {
                    transform: scale(1.05);
                    opacity: 0.8
                }
            }
        </style>
    </head>

    <body><canvas id="bg-canvas"></canvas>
        <div class="grain"></div>
        <div class="content-wrapper">
            <div class="glow-ring"></div>
            <div class="container">
                <div class="domain-text"><?php echo esc_html($domain); ?></div>
            </div>
            <p>Something beautiful is on the horizon.</p>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script>let scene, camera, renderer, stars, starGeo; let mouseX = 0, mouseY = 0; function init() { scene = new THREE.Scene(); camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 1000); camera.position.z = 1; camera.rotation.x = Math.PI / 2; renderer = new THREE.WebGLRenderer({ canvas: document.getElementById("bg-canvas"), alpha: true }); renderer.setSize(window.innerWidth, window.innerHeight); starGeo = new THREE.BufferGeometry(); const starVertices = []; for (let i = 0; i < 8000; i++) { const x = (Math.random() - .5) * 2000; const y = (Math.random() - .5) * 2000; const z = Math.random() * 2000 - 1000; starVertices.push(x, y, z) } starGeo.setAttribute('position', new THREE.Float32BufferAttribute(starVertices, 3)); let sprite = new THREE.TextureLoader().load('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6gAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAB9SURBVDjLY/j//z8DJRgxQAFjRgwYgKWBAQsgKWMlBwYGAwY2MMZkYGBgYGBgYGBgYGBgYGBg/P//PwYGBgY2ENAwbGDgAIIxQzQyMDAwMNz//x9KjPz//z8DGNQvA0M9+P//P5zj//9/GM4wYgACDAAfoQ/x/5k/XwAAAABJRU5ErkJggg=='); let starMaterial = new THREE.PointsMaterial({ color: 16777215, size: 1, map: sprite, transparent: true }); stars = new THREE.Points(starGeo, starMaterial); scene.add(stars); window.addEventListener("resize", onWindowResize, !1); document.addEventListener('mousemove', onMouseMove, !1); animate() } function onWindowResize() { camera.aspect = window.innerWidth / window.innerHeight; camera.updateProjectionMatrix(); renderer.setSize(window.innerWidth, window.innerHeight) } function onMouseMove(event) { mouseX = event.clientX - window.innerWidth / 2; mouseY = event.clientY - window.innerHeight / 2 } function animate() { starGeo.attributes.position.needsUpdate = !0; stars.rotation.y += 8e-5; stars.rotation.x += 3e-5; if (mouseX !== 0 || mouseY !== 0) { camera.position.x += (-mouseX - camera.position.x) * .00008; camera.position.y += (mouseY - camera.position.y) * .00008; camera.lookAt(scene.position) } renderer.render(scene, camera); requestAnimationFrame(animate) } init();</script>
    </body>

    </html>
    <?php
