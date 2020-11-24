<div class='content-width'>
  <div class='slideshow'>
    <!-- Slideshow Items -->
    <div class='slideshow-items'>
      <?php $args = array( 'post_type' => 'Banner', 'posts_per_page' => 3);?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class='item'>
          <div class='item-image-container'>
            <img class='item-image' src='<?php echo get_the_post_thumbnail_url(); ?>'>
          </div>
          <!-- Staggered Header Elements -->
          <div class='item-header'>
            <span class='vertical-part'>
                <b><?php the_title();?></b>
              </span>
          </div>
          <!-- Staggered Description Elements -->
          <div class='item-description'>
            <span class='vertical-part'>
                <b>
                <?php the_content();?>
                </b>
              </span>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- <div class='controls'>
      <ul>
        <li class='control-doct1 control' data-index='0'>
        </li>
        <li class='control-doct2 control' data-index='1'>
        </li>
        <li class='control-doct3 control' data-index='2'>
        </li>
      </ul>
    </div> -->
  </div>
</div>
</section>