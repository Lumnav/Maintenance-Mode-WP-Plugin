<?php
/**
 * Aurora Template
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
        <title><?php echo esc_html($domain); ?> - Maintenance Mode</title>
        <meta name="description"
            content="<?php echo esc_attr($domain); ?> is crafting something beautiful. Returning soon.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: #000a1f;
                color: #fff;
                overflow: hidden;
                min-height: 100vh
            }

            #canvas-aurora {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
            }

            .content {
                position: relative;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
                padding: 20px
            }

            h1 {
                font-size: clamp(2.5rem, 6vw, 4rem);
                font-weight: 600;
                margin-bottom: 20px;
                text-shadow: 0 0 20px rgba(100, 255, 200, .5);
                animation: fadeIn 2s ease-out
            }

            p {
                font-size: clamp(1rem, 2vw, 1.2rem);
                color: rgba(255, 255, 255, .8);
                max-width: 600px;
                font-weight: 300;
                line-height: 1.8;
                animation: fadeIn 2s ease-out .5s both
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
        </style>
    </head>

    <body><canvas id="canvas-aurora"></canvas>
        <div class="content">
            <div
                style="font-size:clamp(1rem, 3vw, 1.4rem);font-weight:500;margin-bottom:15px;color:rgba(100,255,200,0.8);text-shadow:0 0 10px rgba(100,255,200,0.3);text-transform:lowercase;letter-spacing:2px;">
                <?php echo esc_html($domain); ?>
            </div>
            <h1>Serene Maintenance</h1>
            <p>Like the aurora borealis dancing across the sky, we're crafting something beautiful. Returning soon.</p>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script>let scene, camera, renderer, aurora; fun                               cti                        on init() {
                scene = new THREE.Scene(); camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, .1, 1000); camera.position.z = 2; renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('canvas-aurora'), alpha: true }); renderer.setSize(window.innerWidth, window.innerHeight); const starGeo = new THREE.BufferGeometry(); const starVerts = []; for (let i = 0; i < 1000; i++) { const x = (Math.random() - .5) * 100; const y = (Math.random() - .5) * 100; const z = (Math.random() - .5) * 100; starVerts.push(x, y, z) } starGeo.setAttribute('position', new THREE.Float32BufferAttribute(starVerts, 3)); const starMat = new THREE.PointsMaterial({ color: 0xffffff, size: .05, transparent: true, opacity: .8 }); const stars = new THREE.Points(starGeo, starMat); scene.add(stars); const shaderMaterial = new THREE.ShaderMaterial({
                    uniforms: { time: { value: 0 }, color1: { value: new THREE.Color(0x00ff88) }, color2: { value: new THREE.Color(0x0088ff) }, color3: { value: new THREE.Color(0xff00ff) } }, vertexShader: `
            varying vec2 vUv;
            void main() {
              vUv = uv;
              gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
            }
          `, fragmentShader: `
            uniform float time;
            uniform vec3 color1;
            uniform vec3 color2;
            uniform vec3 color3;
            varying vec2 vUv;
            void main() {
              vec2 uv = vUv;
              float wave1 = sin(uv.x * 3.0 + time * 0.5) * 0.5 + 0.5;
              float wave2 = sin(uv.x * 5.0 - time * 0.3 + uv.y * 2.0) * 0.5 + 0.5;
              float wave3 = sin(uv.x * 2.0 + time * 0.7 - uv.y * 3.0) * 0.5 + 0.5;
              vec3 color = mix(color1, color2, wave1);
              color = mix(color, color3, wave2);
              float alpha = wave1 * wave2 * wave3 * (1.0 - uv.y * 0.5);
              gl_FragColor = vec4(color, alpha * 0.6);
            }
          `, transparent: true, side: THREE.DoubleSide
                }); const geometry = new THREE.PlaneGeometry(10, 5, 32, 32); aurora = new THREE.Mesh(geometry, shaderMaterial); aurora.position.y = 1; scene.add(aurora); window.addEventListener('resize', onResize); animate()
            } function onResize() { camera.aspect = window.innerWidth / window.innerHeight; camera.updateProjectionMatrix(); renderer.setSize(window.innerWidth, window.innerHeight) } function animate() { requestAnimationFrame(animate); aurora.material.uniforms.time.value += .01; renderer.render(scene, camera) } init();</script>
    </body>

    </html>
    <?php
