# AI Development Rules for Landing Pages Plugin

This document outlines the technical stack and development rules for maintaining and extending the Landing Pages WordPress plugin. Adhering to these rules ensures consistency, simplicity, and maintainability.

## Tech Stack

The plugin is built with a focus on simplicity and minimal dependencies, leveraging the WordPress ecosystem.

*   **Backend**: Object-Oriented PHP using the WordPress Plugin API for hooks, settings, and core logic.
*   **Frontend Templates**: Self-contained PHP files located in the `/templates` directory.
*   **Styling**: Custom, handwritten CSS3 embedded directly within each template file. No CSS frameworks are used.
*   **Client-Side Scripting**: Vanilla JavaScript for interactions and animations, also embedded within templates.
*   **3D Graphics**: Three.js is used for advanced 3D templates, loaded via a CDN to keep the plugin lightweight.
*   **State Management**: WordPress Options API (`get_option`, `update_option`) is the sole method for storing all settings.
*   **Updates**: A custom GitHub Updater class handles automatic plugin updates by checking for new releases on GitHub.
*   **Dependencies**: There are no build steps or package managers like Vite, npm, or Composer involved in the final plugin build.

## Development Rules

### General

*   **Keep it Simple**: Prioritize simplicity and avoid over-engineering. The plugin's strength is its lightweight, dependency-free nature.
*   **WordPress First**: Always use WordPress core functions and APIs for tasks like database interaction, user management, and security.
*   **Security is Paramount**:
    *   Sanitize all inputs using functions like `sanitize_text_field()`, `sanitize_key()`, etc.
    *   Escape all outputs with `esc_html()`, `esc_attr()`, `esc_url()`, etc.
    *   Use nonces (`wp_create_nonce`, `wp_verify_nonce`) for all admin actions and form submissions.

### Templates (`/templates` directory)

*   **Self-Contained**: Each template file (e.g., `simple.php`) must be completely self-contained.
*   **CSS**: All CSS must be placed inside a `<style>` block within the template's PHP file. Do not create separate `.css` files for individual templates.
*   **JavaScript**: All JavaScript must be placed inside a `<script>` block within the template's PHP file.
*   **External Libraries**: For third-party JavaScript libraries (like Three.js), always use a reliable CDN link (e.g., from cdnjs.com). Do not add them as local assets.

### Admin Area (`/admin` directory)

*   **Use WordPress UI**: Leverage the standard WordPress admin styles and components as much as possible for a native feel.
*   **Admin CSS**: If custom styles are needed for the settings page, enqueue the dedicated stylesheet (`assets/css/admin.css`) only on that specific page hook.

### Prohibited Libraries & Frameworks

To maintain the plugin's lightweight nature, the following are not to be used:

*   **CSS Frameworks**: Do not use Tailwind CSS, Bootstrap, Foundation, etc.
*   **JS Frameworks**: Do not use React, Vue, Angular, or Svelte.
*   **JS Utility Libraries**: Do not add jQuery as a dependency. Use modern vanilla JavaScript instead.
*   **PHP Dependencies**: Do not introduce Composer for managing PHP dependencies.