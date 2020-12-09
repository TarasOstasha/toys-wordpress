<?php
/*
Template Name: Наша команда
Template Post Type: page
 */
?>
<?php get_header()?>
<?php the_post() ?>
<div class="specialists" id="specialists">
            <div class="container">
                <div class="title"><?php the_title() ?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php the_post_thumbnail( 'large', array( 'class' => "specialists__img") ); ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer()?>