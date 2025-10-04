<!-- <?php require_once __DIR__ . "/partials/header.php"; ?>
<h1>All Users</h1>
<ul>
    <?php

    foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)</li>
    <?php endforeach; ?>
</ul>

<?php require_once __DIR__ . "/partials/footer.php"; ?> -->




<!-- ====================================
     PORTFOLIO GRID LAYOUT TEMPLATE
     Use this structure in your shortcode output
==================================== -->

<!-- Filter Buttons (Optional) -->
<div class="portfolio-filters">
    <button class="filter-button active" data-filter="all">All Projects</button>
    <button class="filter-button" data-filter="web-design">Web Design</button>
    <button class="filter-button" data-filter="web-development">Web Development</button>
    <button class="filter-button" data-filter="mobile-app">Mobile App</button>
</div>

<!-- Portfolio Grid Container -->
<div class="portfolio-container">
    <div class="portfolio-grid columns-3">

        <!-- Portfolio Item 1 -->
        <div class="portfolio-item" data-categories="web-design,web-development">
            <div class="portfolio-thumbnail">
                <img src="project-image.jpg" alt="Project Title">
                <a href="#" class="view-project">View Project</a>
            </div>
            <div class="portfolio-content">
                <h3 class="portfolio-title">
                    <a href="#">Amazing Portfolio Website</a>
                </h3>
                <p class="portfolio-excerpt">
                    A modern portfolio website built with React and Tailwind CSS for a creative agency.
                </p>

                <!-- Meta Information -->
                <div class="portfolio-meta">
                    <div class="portfolio-meta-item">
                        <span class="icon">👤</span>
                        <strong>Client:</strong> Acme Corp
                    </div>
                    <div class="portfolio-meta-item">
                        <span class="icon">📅</span>
                        <strong>Date:</strong> Jan 2025
                    </div>
                    <div class="portfolio-meta-item">
                        <span class="icon">🔗</span>
                        <a href="https://example.com" target="_blank">Visit Site</a>
                    </div>
                </div>

                <!-- Technologies -->
                <div class="portfolio-technologies">
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">Tailwind CSS</span>
                    <span class="tech-tag">Next.js</span>
                </div>
            </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="portfolio-item" data-categories="mobile-app">
            <div class="portfolio-thumbnail">
                <img src="project-image-2.jpg" alt="Project Title">
                <a href="#" class="view-project">View Project</a>
            </div>
            <div class="portfolio-content">
                <h3 class="portfolio-title">
                    <a href="#">E-Commerce Mobile App</a>
                </h3>
                <p class="portfolio-excerpt">
                    Full-featured shopping app with payment integration and real-time updates.
                </p>

                <div class="portfolio-meta">
                    <div class="portfolio-meta-item">
                        <span class="icon">👤</span>
                        <strong>Client:</strong> ShopMart
                    </div>
                    <div class="portfolio-meta-item">
                        <span class="icon">📅</span>
                        <strong>Date:</strong> Dec 2024
                    </div>
                </div>

                <div class="portfolio-technologies">
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MongoDB</span>
                </div>
            </div>
        </div>

        <!-- Add more portfolio items... -->

    </div>

    <!-- Load More Button -->
    <button class="load-more-button">Load More Projects</button>
</div>

<!-- ====================================
     PORTFOLIO LIST LAYOUT TEMPLATE
==================================== -->

<div class="portfolio-container">
    <div class="portfolio-list">

        <div class="portfolio-item" data-categories="web-development">
            <div class="portfolio-thumbnail">
                <img src="project-image.jpg" alt="Project Title">
            </div>
            <div class="portfolio-content">
                <h3 class="portfolio-title">
                    <a href="#">Corporate Website Redesign</a>
                </h3>
                <p class="portfolio-excerpt">
                    Complete redesign and development of a corporate website with modern UI/UX principles and enhanced
                    performance.
                </p>

                <div class="portfolio-meta">
                    <div class="portfolio-meta-item">
                        <span class="icon">👤</span>
                        <strong>Client:</strong> Tech Solutions Inc
                    </div>
                    <div class="portfolio-meta-item">
                        <span class="icon">📅</span>
                        <strong>Date:</strong> March 2025
                    </div>
                    <div class="portfolio-meta-item">
                        <span class="icon">🔗</span>
                        <a href="https://example.com" target="_blank">Visit Site</a>
                    </div>
                </div>

                <div class="portfolio-technologies">
                    <span class="tech-tag">WordPress</span>
                    <span class="tech-tag">PHP</span>
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">MySQL</span>
                </div>
            </div>
        </div>

        <!-- More list items... -->

    </div>
</div>

<!-- ====================================
     ADMIN META BOX HTML TEMPLATE
     Use in includes/class-meta-boxes.php
==================================== -->

<div class="portfolio-meta-box">

    <!-- Project URL -->
    <div class="form-field">
        <label for="portfolio_project_url">Project URL</label>
        <input type="url" id="portfolio_project_url" name="portfolio_project_url"
            value="<?php echo esc_url($project_url); ?>" placeholder="https://example.com">
        <p class="field-description">Enter the live project URL (optional)</p>
    </div>

    <!-- Client Name -->
    <div class="form-field">
        <label for="portfolio_client_name">Client Name</label>
        <input type="text" id="portfolio_client_name" name="portfolio_client_name"
            value="<?php echo esc_attr($client_name); ?>" placeholder="Acme Corporation">
        <p class="field-description">Enter the client or company name</p>
    </div>

    <!-- Completion Date -->
    <div class="form-field">
        <label for="portfolio_completion_date">Completion Date</label>
        <input type="date" id="portfolio_completion_date" name="portfolio_completion_date"
            value="<?php echo esc_attr($completion_date); ?>">
        <p class="field-description">When was this project completed?</p>
    </div>

    <!-- Project Type -->
    <div class="form-field">
        <label for="portfolio_project_type">Project Type</label>
        <select id="portfolio_project_type" name="portfolio_project_type">
            <option value="">Select Type</option>
            <option value="web-design" <?php selected($project_type, 'web-design'); ?>>Web Design</option>
            <option value="web-development" <?php selected($project_type, 'web-development'); ?>>Web Development
            </option>
            <option value="mobile-app" <?php selected($project_type, 'mobile-app'); ?>>Mobile App</option>
            <option value="ui-ux" <?php selected($project_type, 'ui-ux'); ?>>UI/UX Design</option>
            <option value="branding" <?php selected($project_type, 'branding'); ?>>Branding</option>
        </select>
        <p class="field-description">Select the project category</p>
    </div>

    <!-- Technologies Used -->
    <div class="form-field">
        <label for="portfolio_technologies">Technologies Used</label>
        <textarea id="portfolio_technologies" name="portfolio_technologies" rows="4"
            placeholder="React, Next.js, Tailwind CSS, Node.js, MongoDB"><?php echo esc_textarea($technologies); ?></textarea>
        <p class="field-description">Enter technologies separated by commas (max 500 characters)</p>
    </div>

    <!-- Nonce Field -->
    <?php wp_nonce_field('portfolio_meta_box_nonce', 'portfolio_meta_box_nonce_field'); ?>

</div>

<!-- ====================================
     ADMIN SETTINGS PAGE HTML TEMPLATE
     Use in includes/class-settings.php
==================================== -->

<div class="wrap portfolio-settings-wrap">

    <!-- Header -->
    <div class="portfolio-settings-header">
        <h1>Portfolio Manager Settings</h1>
        <p>Configure how your portfolio projects are displayed on your website</p>
    </div>

    <!-- Success/Error Messages -->
    <?php if (isset($_GET['settings-updated'])): ?>
        <div class="portfolio-notice success">
            Settings saved successfully!
        </div>
    <?php endif; ?>

    <!-- Settings Tabs -->
    <div class="portfolio-settings-tabs">
        <button class="tab-button active" data-tab="display-settings">Display Settings</button>
        <button class="tab-button" data-tab="style-settings">Style Settings</button>
        <button class="tab-button" data-tab="advanced-settings">Advanced</button>
    </div>

    <form method="post" action="options.php">
        <?php
        settings_fields('portfolio_settings_group');
        ?>

        <!-- Display Settings Tab -->
        <div id="display-settings" class="tab-content portfolio-settings-card active">
            <h2>Display Settings</h2>

            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="posts_per_page">Projects Per Page</label>
                    </th>
                    <td>
                        <input type="number" id="posts_per_page" name="portfolio_settings[posts_per_page]"
                            value="<?php echo esc_attr($settings['posts_per_page']); ?>" min="1" max="50">
                        <span class="description">Number of projects to display per page</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="default_layout">Default Layout</label>
                    </th>
                    <td>
                        <select id="default_layout" name="portfolio_settings[default_layout]">
                            <option value="grid" <?php selected($settings['default_layout'], 'grid'); ?>>Grid</option>
                            <option value="list" <?php selected($settings['default_layout'], 'list'); ?>>List</option>
                        </select>
                        <span class="description">Choose default portfolio layout</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="grid_columns">Grid Columns</label>
                    </th>
                    <td>
                        <select id="grid_columns" name="portfolio_settings[grid_columns]">
                            <option value="2" <?php selected($settings['grid_columns'], '2'); ?>>2 Columns</option>
                            <option value="3" <?php selected($settings['grid_columns'], '3'); ?>>3 Columns</option>
                            <option value="4" <?php selected($settings['grid_columns'], '4'); ?>>4 Columns</option>
                        </select>
                        <span class="description">Number of columns in grid layout</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Show Project URL</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[show_project_url]" value="1" <?php checked($settings['show_project_url'], '1'); ?>>
                            Display project URL link
                        </label>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Show Client Name</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[show_client_name]" value="1" <?php checked($settings['show_client_name'], '1'); ?>>
                            Display client name in projects
                        </label>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Show Completion Date</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[show_completion_date]" value="1" <?php checked($settings['show_completion_date'], '1'); ?>>
                            Display project completion date
                        </label>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Show Technologies</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[show_technologies]" value="1" <?php checked($settings['show_technologies'], '1'); ?>>
                            Display technology tags
                        </label>
                    </td>
                </tr>
            </table>

            <?php submit_button('Save Display Settings', 'submit-button'); ?>
        </div>

        <!-- Style Settings Tab -->
        <div id="style-settings" class="tab-content portfolio-settings-card">
            <h2>Style Settings</h2>

            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="primary_color">Primary Color</label>
                    </th>
                    <td>
                        <div class="color-picker-wrapper">
                            <span class="color-preview"></span>
                            <input type="color" id="primary_color" name="portfolio_settings[primary_color]"
                                value="<?php echo esc_attr($settings['primary_color']); ?>">
                        </div>
                        <span class="description">Choose your portfolio primary color</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="hover_effect">Hover Effect</label>
                    </th>
                    <td>
                        <select id="hover_effect" name="portfolio_settings[hover_effect]">
                            <option value="zoom" <?php selected($settings['hover_effect'], 'zoom'); ?>>Zoom</option>
                            <option value="fade" <?php selected($settings['hover_effect'], 'fade'); ?>>Fade</option>
                            <option value="slide" <?php selected($settings['hover_effect'], 'slide'); ?>>Slide</option>
                        </select>
                        <span class="description">Image hover animation effect</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="border_radius">Border Radius</label>
                    </th>
                    <td>
                        <input type="number" id="border_radius" name="portfolio_settings[border_radius]"
                            value="<?php echo esc_attr($settings['border_radius']); ?>" min="0" max="50"> px
                        <span class="description">Rounded corners for portfolio items</span>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Enable Animations</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[enable_animations]" value="1" <?php checked($settings['enable_animations'], '1'); ?>>
                            Enable scroll animations for portfolio items
                        </label>
                    </td>
                </tr>
            </table>

            <?php submit_button('Save Style Settings', 'submit-button'); ?>
        </div>

        <!-- Advanced Settings Tab -->
        <div id="advanced-settings" class="tab-content portfolio-settings-card">
            <h2>Advanced Settings</h2>

            <table class="form-table">
                <tr>
                    <th scope="row">Enable Lazy Loading</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[lazy_loading]" value="1" <?php checked($settings['lazy_loading'], '1'); ?>>
                            Enable lazy loading for images (improves performance)
                        </label>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Enable Infinite Scroll</th>
                    <td>
                        <label>
                            <input type="checkbox" name="portfolio_settings[infinite_scroll]" value="1" <?php checked($settings['infinite_scroll'], '1'); ?>>
                            Automatically load more projects on scroll
                        </label>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="custom_css">Custom CSS</label>
                    </th>
                    <td>
                        <textarea id="custom_css" name="portfolio_settings[custom_css]" rows="10"
                            style="width: 100%; font-family: monospace;"
                            placeholder="/* Add your custom CSS here */"><?php echo esc_textarea($settings['custom_css']); ?></textarea>
                        <span class="description">Add custom CSS to override default styles</span>
                    </td>
                </tr>
            </table>

            <?php submit_button('Save Advanced Settings', 'submit-button'); ?>
        </div>

    </form>

</div>

<!-- ====================================
     SINGLE PORTFOLIO PAGE TEMPLATE
     Use in single-portfolio.php theme file
==================================== -->

<article class="single-portfolio">

    <!-- Header Section -->
    <div class="single-portfolio-header">
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <span>👤 Client: Acme Corp</span>
            <span>📅 Completed: January 2025</span>
            <span>🏷️ Category: Web Development</span>
        </div>
    </div>

    <div class="portfolio-container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">

            <!-- Main Content -->
            <div class="single-portfolio-content">

                <!-- Featured Image -->
                <div class="portfolio-thumbnail" style="margin-bottom: 30px;">
                    <img src="featured-image.jpg" alt="Project Title">
                </div>

                <!-- Project Description -->
                <div class="project-description">
                    <h2>Project Overview</h2>
                    <p>
                        This is where the main project content goes. You can describe
                        the project details, challenges, solutions, and outcomes here.
                    </p>

                    <h3>Key Features</h3>
                    <ul>
                        <li>Responsive design across all devices</li>
                        <li>Custom WordPress theme development</li>
                        <li>E-commerce integration with WooCommerce</li>
                        <li>SEO optimization and performance tuning</li>
                    </ul>

                    <h3>Results</h3>
                    <p>
                        The project achieved a 50% increase in conversion rates and
                        significantly improved user engagement metrics.
                    </p>
                </div>

                <!-- Project Gallery (Optional) -->
                <div class="project-gallery" style="margin-top: 40px;">
                    <h3>Project Screenshots</h3>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                        <img src="screenshot-1.jpg" alt="Screenshot 1" style="border-radius: 8px;">
                        <img src="screenshot-2.jpg" alt="Screenshot 2" style="border-radius: 8px;">
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="single-portfolio-sidebar">

                <h3>Project Details</h3>

                <div class="info-item">
                    <span class="label">Client</span>
                    <div class="value">Acme Corporation</div>
                </div>

                <div class="info-item">
                    <span class="label">Project URL</span>
                    <div class="value">
                        <a href="https://example.com" target="_blank">Visit Website →</a>
                    </div>
                </div>

                <div class="info-item">
                    <span class="label">Completion Date</span>
                    <div class="value">January 15, 2025</div>
                </div>

                <div class="info-item">
                    <span class="label">Category</span>
                    <div class="value">Web Development</div>
                </div>

                <div class="info-item">
                    <span class="label">Technologies</span>
                    <div class="portfolio-technologies">
                        <span class="tech-tag">WordPress</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div style="margin-top: 30px;">
                    <h3>Share Project</h3>
                    <div style="display: flex; gap: 10px; margin-top: 15px;">
                        <button class="share-button" data-platform="facebook"
                            style="padding: 10px 20px; background: #3b5998; color: white; border: none; border-radius: 6px; cursor: pointer;">Facebook</button>
                        <button class="share-button" data-platform="twitter"
                            style="padding: 10px 20px; background: #1da1f2; color: white; border: none; border-radius: 6px; cursor: pointer;">Twitter</button>
                        <button class="share-button" data-platform="linkedin"
                            style="padding: 10px 20px; background: #0077b5; color: white; border: none; border-radius: 6px; cursor: pointer;">LinkedIn</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

</article>

<!-- ====================================
     EMPTY STATE TEMPLATE
     When no portfolio items found
==================================== -->

<div class="portfolio-empty">
    <div class="portfolio-empty-icon">📁</div>
    <h3>No Portfolio Projects Found</h3>
    <p>Start by creating your first portfolio project from the WordPress admin panel.</p>
</div>

<!-- ====================================
     LOADING STATE TEMPLATE
==================================== -->

<div class="portfolio-loading">
    <div class="portfolio-spinner"></div>
    <p style="margin-top: 20px; color: #64748b;">Loading portfolio projects...</p>
</div>