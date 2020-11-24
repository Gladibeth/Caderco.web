<section class='service' id='services'>
    <div class='container'>
      <div class='content-service-title'>
        <h1>SERVICIOS</h1>
      </div>
      <div class='row'>
        <div class='main'>
          <div class='services-carousel'>
            <?php $args = array( 'post_type' => 'Servicio', 'posts_per_page' => 3);?>   
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class='col-lg-3 col-md-6 col-sm-6 mb-4' style='display: flex; justify-content: flex-start;'>
                <a class='link-service' data-target='#single-services' data-toggle='' data-wow-delay='.5s' data-wow-duration='1500ms' href='services.html'>
                  <div class='card-service'>
                    <div class='card-service-img'>
                      <div class='card-content-img' style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    </div>
                    <div class='card-service-content'>
                      <h4 class='title-service'><?php the_title();?></h4>
                      <p class='description-service'><?php echo excerpt(20);?></p>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    
    </div>
  </section>