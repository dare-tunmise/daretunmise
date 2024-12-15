<!DOCTYPE HTML>
<html translate="no">
	<head>
        <?php wp_head(); ?>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<nav style="margin: 0 auto 1rem auto; width: 100%; max-width: 900px; padding: 1.5rem; align-items: center; justify-content: center;">
					<h1><?php
                            if (is_front_page()) {
                                $title = "dare tunmise";
                            } else {
                                $title = wp_title('');
                            }
                            ?>
                   <?= $title ?>
                   </h1>
                    <div>
                        <a href="#" style="text-decoration: none;">WRITINGS</a>
                        <a href="#" style="text-decoration: none; margin-left: 1.5rem;">PROJECTS</a>
                        <a href="#" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
                    </div>

				</nav>



                <?php
// Add this to your header.php or where your navigation is rendered

// Function to display custom menu items based on page
function display_custom_menu() {
    if (is_front_page()) {
        // Display "Writings" and "Projects" on homepage
        ?>
        <nav>
            <ul>
                <li><a href="<?php echo site_url('/blog'); ?>">Writings</a></li>
                <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
            </ul>
        </nav>
        <?php
    } elseif (is_home() || is_singular('post')) {
        // Display "Home" and "Projects" on blog page and single blog posts
        ?>
        <nav>
            <ul>
                <li><a href="<?php echo site_url(); ?>">&#8592 Home</a></li>
                <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
            </ul>
        </nav>
        <?php
    } elseif (is_page('projects')) {
        // Display "Home" and "Writings" on custom projects page
        ?>
        <nav>
            <ul>
                <li><a href="<?php echo site_url(); ?>">&#8592 Home</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Writings</a></li>
            </ul>
        </nav>
        <?php
    } else {
        // Default menu (optional)
        ?>
        <nav>
            <ul>
                <li><a href="<?php echo site_url(); ?>">&#8592 Home</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Writings</a></li>
            </ul>
        </nav>
        <?php
    }
}

// Call the function to display the menu
display_custom_menu();
?>