<?php
get_header(); ?>


<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
    <div>
        <?php
        while (have_posts()) {
            the_post();  ?>

                        <article>
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                <h3><?php echo get_field('book_title'); ?></h3>
                            </a>
                            <img src="<?php echo get_field('book_image') ?>" alt=" book cover of <?php echo get_field('book_title'); ?>" width="100%"; max-width="300px">
                            <p style="margin: 0 0 .5rem 0;">Editors: Kwame Dawes & Chris Abani</p>
                            <p style="margin: 0 0 .5rem 0;">Cover Art: Kokeb Zeleke</p>
                            <p style="margin: 0 0 .5rem 0;">Publisher: African Poetry Book Fund X Akashic Books, Brooklyn, New York</p>
                            <p style="margin: 0 0 .5rem 0;"><?php the_content()  ?></p>
                        </article>
        <?php }

        echo paginate_links();

        ?>

    </div>
</section>


<?php 
get_footer(); ?>