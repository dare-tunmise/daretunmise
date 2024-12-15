<?php 
    get_header(); ?>
    <section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
    <div>
        <?php 
        $current_year = '';
        
        while (have_posts()) {
            the_post();
            $post_year = get_the_date('Y');
            
            if ($post_year !== $current_year) {
                if ($current_year !== '') {
                    echo '</div>'; // Close the previous year div
                }
                $current_year = $post_year;
                echo '<h2>' . $current_year . '</h2>';
                echo '<div class="year-group">';
            }
        ?>
            <article>
                <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                <h3><?php the_title(); ?></h3>
                </a>
                <p style="margin: 0 0 .5rem 0;"><?php echo wp_trim_words(get_the_content(), 24);  ?></p>
                <p style="color: rgba(0, 0, 0, 0.75); font-style: italic;"><?php the_date(); ?></p>
            </article>
        <?php 
        } 
        
        if ($current_year !== '') {
            echo '</div>'; // Close the last year div
        }
        
        echo paginate_links();
        ?>
    </div>
</section>

<?php get_footer(); ?>