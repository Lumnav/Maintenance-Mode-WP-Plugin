# Landing Pages Plugin

A beautiful WordPress plugin for creating stunning "Coming Soon" and landing pages with 20 premium templates.

## Features

- **20 Premium Templates**: Choose from minimalist to futuristic designs
- **One-Click Toggle**: Enable/disable from WordPress admin bar
- **Dynamic Domain Display**: Automatically shows your domain name
- **Mobile Responsive**: Perfect on all devices
- **SEO Optimized**: Proper meta tags and descriptions
- **Auto-Updates**: Receives updates directly from GitHub

## Installation

1. Upload the plugin folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click the "Landing Page: OFF" toggle in the admin bar to enable
4. Go to Settings → Landing Page to choose your template

## GitHub Auto-Updates Setup

To enable automatic updates from GitHub, edit `index.php` and update these constants:

```php
define('LUMNAV_GITHUB_USERNAME', 'your-github-username'); // Your GitHub username or org
define('LUMNAV_GITHUB_REPO', 'landing-pages'); // Your repository name
```

### Creating Releases

1. Tag your code with a version number: `git tag v1.0.1`
2. Push the tag: `git push origin v1.0.1`
3. Create a release on GitHub with the same tag
4. WordPress will automatically detect and offer the update

## Template Gallery

The plugin includes 20 stunning templates:
- Simple
- High-Tech
- Artistic
- Glassmorphic
- Neural Network
- Blob Gradient
- 3D Torus
- Kinetic Typography
- Aurora
- Holographic
- Neon Cityscape
- Swiss Design
- VHS Glitch
- Minimalist
- Galaxy
- Matrix Code
- Vaporwave
- Particle Explosion
- Geometric Patterns
- Glitch Art

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher

## License

GPL-2.0+

## Author

Lumnav - https://lumnav.com
