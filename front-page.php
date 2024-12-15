<?php get_header() ?>
				
                <!-- <section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; border: none; padding: 1.5rem; align-items: center; justify-content: center;">
					<p>I am a writer and a software developer with a special interest in building scalable backend systems. I have a strong foundation in JavaScript and experience in frameworks like Node.js and Express and sometimes, I write PHP. I enjoy developing impactful web applications that solve real-world problems.</p>		
				</section> -->
				<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
					<h2>WRITINGS</h2>
                    <?php
                    $homepagePosts = new WP_Query(array(
                        'posts_per_page' => 5
                    ));

                    while ($homepagePosts->have_posts()) {
                        $homepagePosts->the_post(); ?>
                                <article>
                                    <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <p style="margin: 0 0 .5rem 0;"><?php echo wp_trim_words(get_the_content(), 24);  ?></p>
                                    <p style="color: rgba(0, 0, 0, 0.75); font-style: italic;"><?php the_date(); ?></p>
                                </article>
                                <?php }
                    wp_reset_postdata();
                    ?>


					<div style="margin: 1.5rem 0;">
						<a href="<?php echo site_url('/writings'); ?>" style="font-weight: 500; text-decoration: none; ">READ ALL <?php 
            $published_posts = wp_count_posts()->publish; 
            echo $published_posts; 
?> WRITINGS &rarr;</a>
					</div>
				</section>
				<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
					<h2>PROJECTS</h2>
                    <?php
                    $homepagePosts = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'projects'
                    ));

                    while ($homepagePosts->have_posts()) {
                        $homepagePosts->the_post(); ?>

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
                    wp_reset_postdata();
                    ?>					
					<div style="margin: 1.5rem 0;">
						<a href="#" style="font-weight: 500; text-decoration: none; ">SEE ALL 3 PROJECTS &rarr;</a>
					</div>
				</section>
				<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
					<h2>BOOK</h2>
					<article>
						<a href="#" style="text-decoration: none;">
							<h3>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</h3>
						</a>
						<p style="margin: 0 0 .5rem 0;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque minima totam architecto eligendi odio inventore reprehenderit, enim commodi, magnam explicabo autem rem nulla consequatur.</p>
						<p style="color: rgba(0, 0, 0, 0.75); font-style: italic;">December 20, 2023</p>
					</article>
				</section>
<?php get_footer() ?>