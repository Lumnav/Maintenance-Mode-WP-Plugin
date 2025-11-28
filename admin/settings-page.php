<?php
/**
 * Admin Settings Page
 * 
 * @package Landing_Pages
 */

if (!defined('ABSPATH')) {
    exit;
}

$current_style = get_option(LUMNAV_MM_STYLE_OPTION, 'simple');
?>
<div class="wrap">
    <h1>Landing Page Settings</h1>
    <p>Select the style for your landing page. Visitors will see this page when the landing page mode is ON.</p>
    <form method="post" action="options.php">
        <?php settings_fields('lumnav_mm_settings_group'); ?>
        <div class="lumnav-mm-style-grid">

            <!-- Simple -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="simple" <?php checked($current_style, 'simple'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=simple'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Simple</div>
                </div>
            </label>

            <!-- High-Tech -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="hightech" <?php checked($current_style, 'hightech'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=hightech'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">High-Tech</div>
                </div>
            </label>

            <!-- Artistic -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="artistic" <?php checked($current_style, 'artistic'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=artistic'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Artistic</div>
                </div>
            </label>

            <!-- Glassmorphic -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="glassmorphic" <?php checked($current_style, 'glassmorphic'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=glassmorphic'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Glassmorphic</div>
                </div>
            </label>

            <!-- Neural Network -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="neural" <?php checked($current_style, 'neural'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=neural'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Neural Network</div>
                </div>
            </label>

            <!-- Liquid Morphing -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="liquid" <?php checked($current_style, 'liquid'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=liquid'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Liquid Morphing</div>
                </div>
            </label>

            <!-- 3D Torus -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="torus" <?php checked($current_style, 'torus'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=torus'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">3D Torus</div>
                </div>
            </label>

            <!-- Kinetic Typography -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="kinetic" <?php checked($current_style, 'kinetic'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=kinetic'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Kinetic Type</div>
                </div>
            </label>

            <!-- Aurora Borealis -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="aurora" <?php checked($current_style, 'aurora'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=aurora'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Aurora Borealis</div>
                </div>
            </label>

            <!-- Holographic -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="holographic" <?php checked($current_style, 'holographic'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=holographic'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Holographic</div>
                </div>
            </label>

            <!-- Neon Cyberpunk -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="neon" <?php checked($current_style, 'neon'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=neon'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Neon Cyberpunk</div>
                </div>
            </label>

            <!-- Minimalist Swiss -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="swiss" <?php checked($current_style, 'swiss'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=swiss'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Minimalist Swiss</div>
                </div>
            </label>

            <!-- Retro VHS -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="vhs" <?php checked($current_style, 'vhs'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=vhs'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Retro VHS</div>
                </div>
            </label>

            <!-- Brutalist Design -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="brutalist" <?php checked($current_style, 'brutalist'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=brutalist'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Brutalist Design</div>
                </div>
            </label>

            <!-- Cosmic Galaxy -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="galaxy" <?php checked($current_style, 'galaxy'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=galaxy'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Cosmic Galaxy</div>
                </div>
            </label>

            <!-- Matrix Code Rain -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="matrix" <?php checked($current_style, 'matrix'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=matrix'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Matrix Code</div>
                </div>
            </label>

            <!-- Vaporwave -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="vaporwave" <?php checked($current_style, 'vaporwave'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=vaporwave'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Vaporwave</div>
                </div>
            </label>

            <!-- Particle Explosion -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="particles" <?php checked($current_style, 'particles'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=particles'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Particle Explosion</div>
                </div>
            </label>

            <!-- Geometric Patterns -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="geometric" <?php checked($current_style, 'geometric'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=geometric'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Geometric Patterns</div>
                </div>
            </label>

            <!-- Glitch Art -->
            <label>
                <input type="radio" name="<?php echo esc_attr(LUMNAV_MM_STYLE_OPTION); ?>" value="glitch" <?php checked($current_style, 'glitch'); ?>>
                <div class="preview-container">
                    <div class="preview-iframe-wrapper">
                        <iframe src="<?php echo home_url('?lumnav_mm_preview=true&style=glitch'); ?>"
                            scrolling="no"></iframe>
                    </div>
                    <div class="card-title">Glitch Art</div>
                </div>
            </label>

        </div>
        <?php submit_button(); ?>
    </form>
</div>