<?php get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div style="display:flex;flex-wrap: wrap;align-items:center;justify-content:center;margin-left:auto;margin-right:auto;margin-top:20px;margin-bottom:40px;border: 2px solid black;border-radius: 20px;padding: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <?php
            if ( have_posts()) : 
                    while ( have_posts() ) : the_post(); ?>
                            <div style="margin:20px;text-align:center;border:1px solid black;padding:10px;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <a href="<?php the_permalink(); ?>">
                                <?php
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail("thumbnail");
                                        }
                                        the_title( '<div>', '</div>' );
                                ?>
                                </a>
                            </div>
            <?php endwhile; 
                endif; 
                
            ?>
        </div>
    </div>
</div>
<?php get_footer();?>		