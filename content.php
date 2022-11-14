<!-- shop section -->

<?php
		$tablica_start = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => "start",
      "paged" => 1,
      'posts_per_page' => 1,
		);
		$arr_posts_start = new WP_Query( $tablica_start );
?>
<section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <?php if ( $arr_posts_start->have_posts() ): ?>
          <?php while ( $arr_posts_start->have_posts()): $arr_posts_start->the_post(); ?>


            <div class="detail-box">
              <h2>
                  <?php the_title(); ?>
              </h2>
              <p>
                
              </p>
            </div>
            <div class="img-box">
              <?php the_content(); ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>


        <div class="btn-box">
          <a href="http://projektydlaszkol.pl/index.php/kontakt/">
            KONTAKT
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">

      <?php
            $tablica_bilety = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => "bilety",
              "paged" => 1,
              'posts_per_page' => 1,
            );
            $arr_posts_bilety = new WP_Query( $tablica_bilety );
      ?>
          <?php if ( $arr_posts_bilety->have_posts() ): ?>
              <?php while ( $arr_posts_bilety->have_posts()): $arr_posts_bilety->the_post(); ?>

                    <div class="col-md-6 px-0">
                      <div class="img-box">
                          <?php $link = get_post_meta($post->ID,'zdjecie',true) ?>
                          <img src="<?php echo $link ?>" />
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="detail-box">

                        <div class="heading_container">
                          <hr>
                          <h2>
                              <?php the_title(); ?>
                          </h2>
                        </div>
                        <p>
                          <?php the_content(); ?>
                        </p>
                        <a href="">
                          WYŚLIJ ZAPYTANIE
                        </a>

                      </div>
                    </div>
              <?php endwhile; ?>
          <?php endif; ?>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Realizacjie projektów
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
          
          <?php
              $tablica_realizacje_projekty = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => "galeria",
              );
              $arr_posts_projekty = new WP_Query( $tablica_realizacje_projekty );
          ?>
          <?php if ( $arr_posts_projekty->have_posts() ): ?>
            <?php while ( $arr_posts_projekty->have_posts()): $arr_posts_projekty->the_post(); ?>

                  <div class="box">
                      <?php $link = get_post_meta($post->ID,'zdjecie',true) ?>
                        <img src="<?php echo $link ?>" />
                        <div class="link_box">
                          <h5>
                            <?php the_title(); ?>
                          </h5>
                          <a href="<?php the_permalink(); ?>">
                            WIĘCEJ
                          </a>
                        </div>
                  </div>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- end fruit section -->


  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Projekty
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo1.jpg" alt="Projekty dla Szkół">
              </div>
              <div class="detail-box">
                <p>
                  Unia Europejska
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              
            <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo2.jpg" alt="Projekty dla Szkół">
              </div>
              
              <div class="detail-box">
                <p>
                  Fundusze Europejskie
                </p>
              </div>

            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->