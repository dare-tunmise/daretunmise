<?php

get_header();



while (have_posts()) {
  the_post() ?>

<section class="inner" style="width: 100%; max-width: 900px; margin: 0 auto; padding: 1.5rem; align-items: center; justify-content: center;">
        <p style="color: rgba(0, 0, 0, 0.75); font-style: italic;"><?php the_date(); ?></p>
        <div style="margin: 0 0 .5rem 0;"><?php the_content(); ?></div> 
</section>


<?php }




get_footer();

?>