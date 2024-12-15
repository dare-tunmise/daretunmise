<?php
get_header(); ?>


<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
    <div>
        <?php
        while (have_posts()) {
            the_post();  ?>

                    <article>
						<h3><?php echo get_field('title'); ?></h3>
						<p style="margin: 0 0 .5rem 0;"><?php echo get_field('info'); ?></p>
						<div style="margin: 1rem 0;">
                                <?php if(!empty(get_field('demo_url'))) { ?>
                                <code><a href="<?php echo get_field('demo_url'); ?>" style="text-decoration: none;">LIVE DEMO &rarr;</a></code> 
                                <?php } ?> 
                                
                                <?php if(!empty(get_field('github_url'))) { ?>
                                <code><a href="<?php echo get_field('github_url'); ?>" style="text-decoration: none;">GITHUB <i class="icon brands style1 fa-github"></i></a></code>
                                <?php } ?> 
                            </div>
					</article>
        <?php }

        echo paginate_links();

        ?>

    </div>
</section>


<?php 
get_footer(); ?>