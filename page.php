<?php get_header(); ?>
<div class="content-area" id="primary">
    <div id="primary" class="content-area">
           <main class="site-main" id="main">
            <div class="container">

            <?php 
            while(have_posts()): the_post();
            get_template_part("parts/content", "page");

            if(comments_open() || get_comments_number()) {
                comments_template();
            }

        endwhile;
            
            
            ?>
            </div>
           </main> 
         </div>
</div>     




<?php get_footer(); ?>