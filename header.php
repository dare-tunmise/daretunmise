<!DOCTYPE HTML>
<html translate="no">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
	<title>Dare Tunmise</title>
	<meta property="og:title" content="Dare Tunmise" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php if(is_page('home')) { echo "Dare Tunmise—Writer || Software Engineer"; } else { echo get_the_title();}; ?>" />
	<meta property="og:url" content="https://www.daretunmise.com/" />
	<meta property="og:image" content="<?php echo get_theme_file_uri('/android-chrome-512x512.png'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Dare Tunmise—Writer || Software Engineer">
    <meta name="keywords" content="Writer, Poet, Software Engineer">
    <meta name="author" content="Dare Tunmise">
    <meta name="twitter:site" content="@Dare_Tunmise">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@Dare_Tunmise">
	<meta name="twitter:image:src" content="<?php echo get_theme_file_uri('/android-chrome-512x512.png'); ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('/site.webmanifest'); ?>">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./styles.css">
    <title>Dare Tunmise</title>
</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<nav style="margin: 0 auto 0 auto; width: 100%; max-width: 900px; padding: 1.5rem; align-items: center; justify-content: center;">
					<h1 style="margin-bottom: 1.5rem;"><?php
                            if (is_front_page()) {
                                $title = "dare tunmise";
                            } else {
                                $title = wp_title('');
                            }
                            ?>
                   <?= $title ?>
                   </h1>
                    <!-- <div>
                        <a href="<?php echo site_url('/writings'); ?>" style="text-decoration: none;">WRITINGS</a>
                        <a href="<?php echo site_url('/projects'); ?>" style="text-decoration: none; margin-left: 1.5rem;">PROJECTS</a>
                        <a href="<?php echo site_url('/books'); ?>" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
                    </div> -->


                    <?php  
function display_custom_menu() {
    if (is_front_page()) {

        ?>
            <div>
                <a href="<?php echo site_url('/writings'); ?>" style="text-decoration: none;">WRITINGS</a>
                <a href="<?php echo site_url('/projects'); ?>" style="text-decoration: none; margin-left: 1.5rem;">PROJECTS</a>
                <a href="<?php echo site_url('/books'); ?>" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
            </div>
        <?php
    } elseif (is_home() || is_singular('post')) {
        ?>
        <div>
            <a href="<?php echo site_url(); ?>" style="text-decoration: none;">&#8592 HOME</a>
            <a href="<?php echo site_url('/projects'); ?>" style="text-decoration: none; margin-left: 1.5rem;">PROJECTS</a>
            <a href="<?php echo site_url('/books'); ?>" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
        </div>
        <?php
    } elseif (is_page('projects')) {
        ?>
        <div>
            <a href="<?php echo site_url(); ?>" style="text-decoration: none;">&#8592 HOME</a>
            <a href="<?php echo site_url('/writings'); ?>" style="text-decoration: none; margin-left: 1.5rem;">WRITINGS</a>
            <a href="<?php echo site_url('/books'); ?>" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
        </div>
        <?php
    } elseif (is_page('books')) {

        ?>
        <div>
            <a href="<?php echo site_url(); ?>" style="text-decoration: none;">&#8592 HOME</a>
            <a href="<?php echo site_url('/writings'); ?>" style="text-decoration: none; margin-left: 1.5rem;">WRITINGS</a>
            <a href="<?php echo site_url('/projects'); ?>" style="text-decoration: none; margin-left: 1.5rem;">PROJECTS</a>
        </div>
        <?php } else {
        ?>
        <div>
            <a href="<?php echo site_url(); ?>" style="text-decoration: none;">&#8592 HOME</a>
            <a href="<?php echo site_url('/writings'); ?>" style="text-decoration: none; margin-left: 1.5rem;">WRITINGS</a>
            <a href="<?php echo site_url('/books'); ?>" style="text-decoration: none; margin-left: 1.5rem;">BOOK</a>
        </div>
        <?php
    }
}

display_custom_menu();
?>                   
<?php if(is_front_page()) { ?>
    <p style="margin-top: 1.5rem;">I am a writer and software developer with a focus on building scalable backend systems. I have a strong foundation in JavaScript and experience with frameworks like Node.js and Express, along with occasional work in PHP. I love experimenting with code and exploring new technologies, often driven by the (sometimes deluded) hope of discovering an epiphany that could shift the equation forward. Outside of coding, I write prose and poetry that explore themes of memory and identity. My most recent project is a poetry chapbook published by the African Poetry Book Fund and Akashic Books in Brooklyn, New York.</p>
<?php } ?>             
				</nav>




