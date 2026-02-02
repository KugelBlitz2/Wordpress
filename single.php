<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="contanier">
            <?php 
            while(have_posts()): the_post();
            get_template_part("parts/content", "page");

            ?>

<div class="wpdevs-pagination">
            <div class="pages next">
            <?php next_post_links("&laouq; %link") ?>
            </div>


            <div class="pages previous">
            <?php next_post_links("%link &raouq;") ?>
            </div>
</div>

<?php  
if(comments_open() || get_comments_number()) {
                comments_template();
            }

        endwhile;
?>
        </div>
    </div>
</div>

<?php get_footer(); ?>