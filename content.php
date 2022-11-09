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
          <a href="http://projektydlaszkol.pl/kontakt/">
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
                          REJESTRACJA
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
                'category_name' => "projekty",
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
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/client-img.png" alt="Projekty dla Szkół">
              </div>
              <div class="detail-box">
                <h5>
                  Jone Mark
                </h5>
                <p>
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/left-quote.png" alt="Projekty dla Szkół">
                  <span>
                    Lorem ipsum dolor sit amet,
                  </span>
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/right-quote.png" alt="Projekty dla Szkół"><br>
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/client-img.png" alt="Projekty dla Szkół">
              </div>
              <div class="detail-box">
                <h5>
                  Jone Mark
                </h5>
                <p>
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/left-quote.png" alt="Projekty dla Szkół">
                  <span>
                    Lorem ipsum dolor sit amet,
                  </span>
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/right-quote.png" alt="Projekty dla Szkół"><br>
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/client-img.png" alt="Projekty dla Szkół">
              </div>
              <div class="detail-box">
                <h5>
                  Jone Mark
                </h5>
                <p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/left-quote.png" alt="Projekty dla Szkół">
                  <span>
                    Lorem ipsum dolor sit amet,
                  </span>
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/right-quote.png" alt="Projekty dla Szkół"><br>
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
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


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Skontaktuj się z nami
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Message" />
                  </div>
                  <div>
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end contact section -->