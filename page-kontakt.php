<?php get_header(); ?>

<div style="text-align:center">
    <?php
        
        if ( have_posts()) : 
            while ( have_posts() ) : the_post();
                
                the_title( '<h3 style=text-align:center;margin-top:20px;>', '</h3>' );
                echo("<hr/>");

    ?>
                
                    <?php the_content(); ?>
                
                
    <?php endwhile; 
        endif;   
    ?>
    
</div>
<?php get_footer();?>