<?php
/**
 * Torus Template
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
        <title><?php echo esc_html($domain); ?> - Maintenance in Progress</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> infrastructure is being enhanced. Please stand by.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Space Grotesk', sans-serif;
                background: #000;
                color: #fff;
                overflow: hidden
            }

            #canvas-3d {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .overlay {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
                pointer-events: none;
                padding: 20px
            }

            h1 {
                font-size: clamp(2.5rem, 6vw, 4rem);
                font-weight: 700;
                margin-bottom: 15px;
                letter-spacing: 2px;
                text-transform: uppercase;
                background: linear-gradient(90deg, #a8edea, #fed6e3);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: glow 3s ease-in-out infinite
            }

            @keyframes glow {

                0%,
                100% {
                    opacity: 1
                }

                50% {
                    opacity: .7
                }
            }

            p {
                font-size: clamp(1rem, 2vw, 1.2rem);
                color: rgba(255, 255, 255, .6);
                max-width: 500px;
                font-weight: 300
            }
        </style>
    </head>

    <body><canvas id="canvas-3d"></canvas>
        <div class="overlay">
            <div
                style="font-size:clamp(1rem, 3vw, 1.4rem);font-weight:500;margin-bottom:8px;color:rgba(168,237,234,0.9);text-transform:lowercase;letter-spacing:3px;">
                <?php echo esc_html($domain); ?>
            </div>
            <h1>Optimizing Systems</h1>
            <p>Our infrastructure is being enhanced. Please stand by.</p>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script>let scene, camera, renderer, torus, mouseX = 0, mouseY = 0; function init() { scene = new THREE.Scene(); camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, .1, 1000); camera.position.z = 5; renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('canvas-3d'), alpha: true, antialias: true }); renderer.setSize(window.innerWidth, window.innerHeight); renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2)); const geometry = new THREE.TorusGeometry(1.5, .6, 32, 100); const material = new THREE.MeshPhongMaterial({ color: 0x667eea, emissive: 0x442288, shininess: 100, wireframe: false }); torus = new THREE.Mesh(geometry, material); scene.add(torus); const wireGeometry = new THREE.TorusGeometry(1.52, .62, 32, 100); const wireMaterial = new THREE.MeshBasicMaterial({ color: 0xa8edea, wireframe: true, transparent: true, opacity: .3 }); const wireframe = new THREE.Mesh(wireGeometry, wireMaterial); scene.add(wireframe); const light1 = new THREE.PointLight(0x667eea, 2, 100); light1.position.set(5, 5, 5); scene.add(light1); const light2 = new THREE.PointLight(0xf093fb, 2, 100); light2.position.set(-5, -5, 5); scene.add(light2); const ambientLight = new THREE.AmbientLight(0x404040, 1); scene.add(ambientLight); const starGeo = new THREE.BufferGeometry(); const starVerts = []; for (let i = 0; i < 200; i++) { const x = (Math.random() - .5) * 100; const y = (Math.random() - .5) * 100; const z = (Math.random() - .5) * 100; starVerts.push(x, y, z) } starGeo.setAttribute('position', new THREE.Float32BufferAttribute(starVerts, 3)); const starMat = new THREE.PointsMaterial({ color: 0xffffff, size: .1 }); const stars = new THREE.Points(starGeo, starMat); scene.add(stars); window.addEventListener('resize', onResize); document.addEventListener('mousemove', onMouseMove); animate() } function onResize() { camera.aspect = window.innerWidth / window.innerHeight; camera.updateProjectionMatrix(); renderer.setSize(window.innerWidth, window.innerHeight) } function onMouseMove(e) { mouseX = (e.clientX / window.innerWidth) * 2 - 1; mouseY = -(e.clientY / window.innerHeight) * 2 + 1 } function animate() { requestAnimationFrame(animate); torus.rotation.x += .005; torus.rotation.y += .005; camera.position.x += (mouseX * .5 - camera.position.x) * .05; camera.position.y += (mouseY * .5 - camera.position.y) * .05; camera.lookAt(scene.position); renderer.render(scene, camera) } init();</script>
    </body>

    </html>
    <?php
