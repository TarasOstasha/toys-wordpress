<?php get_header()?>

<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <?php 
            if( have_rows('our_history') ) :
                 // Loop through rows.
                $i = 1;
                while( have_rows('our_history') ) : the_row();
                    $our_history_foto = get_sub_field('picture');
                    $our_history_description = get_sub_field('description');
                    $our_history_title = get_sub_field('title');
        ?>
                    <div class="row">
                        <div class="col-lg-6 <?php if( $i%2 == 0 ) echo ' order-2' ?> ">
                            <div class="subtitle">
                                <?php echo $our_history_title; ?>
                            </div>
                            <div class="aboutus__text">
                                <?php echo $our_history_description; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 <?php if( $i%2 == 1 ) echo ' order-1' ?> ">
                            <img class="aboutus__img" src="<?php echo $our_history_foto['url']; ?>" alt="<?php echo $our_history_foto['alt'] ?>">
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            <?php endif; ?>
        
    </div>
</div>

<?php get_footer()?>