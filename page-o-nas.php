<?php get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <?php
        
        if ( have_posts()) : 
            while ( have_posts() ) : the_post();
                
                the_title( '<h3 style=text-align:center;margin-top:20px;>', '</h3>' );
                echo("<hr/>");

    ?>
                <div style="width:50%;margin-left:auto;margin-right:auto;margin-top:20px;margin-bottom:40px;border: 2px solid black;border-radius: 20px;padding: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <?php the_content(); ?>
                </div>
                
    <?php endwhile; 
        endif;   
    ?>
    </div>
</div>
<?php get_footer();?>