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
    <p style="margin-top: 1.5rem;">I am a writer and a software developer with a special interest in building scalable backend systems. I have a strong foundation in JavaScript and experience in frameworks like Node.js and Express and sometimes, I write PHP. I enjoy developing impactful web applications that solve real-world problems.</p>
<?php } ?>             
				</nav>




