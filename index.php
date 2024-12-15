<?php 
    get_header(); ?>
<section class="contents">
    <div class="thoughts">
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
                <div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
                <span class="date"><?php the_date(); ?></span>
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