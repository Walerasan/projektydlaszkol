<?php get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <?php
        
        if ( have_posts()) : 
            while ( have_posts() ) : the_post();
                
                the_title( '<h3 style=text-align:center;margin-top:20px;>', '</h3>' );
                echo("<hr/>");

    ?>          
                <div class="SinglePage">
                    <?php the_content(); ?>
                </div>
                
    <?php endwhile; 
        endif;   
    ?>
    </div>
</div>
<?php get_footer();?>