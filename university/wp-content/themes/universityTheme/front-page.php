<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php 
          $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
              'posts_per_page' => 2,
              'post_type' => 'event',
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                ),
              ),
            ));

            while($homepageEvents->have_posts(  )){
              $homepageEvents->the_post(  );
              
              get_template_part('template-parts/content', get_post_type());
            } 
            wp_reset_postdata();
          ?>

          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link( 'event' ) ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
            <?php 
                $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 2,
                    
                ));

                while($homepagePosts->have_posts()){
                    $homepagePosts->the_post(); 
                ?>
              <div class="event-summary">
                  <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink() ?>">
                  <span class="event-summary__month"><?php the_time('M') ?></span>
                  <span class="event-summary__day"><?php the_time('d') ?></span>
                  </a>
                  <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                  <p><?php if(has_excerpt()){
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words( get_the_content(),10);
                  } ?> <a href="<?php the_permalink() ?>" class="nu gray">Read more</a></p>
                  </div>
              </div>

              
              <?php

              } 
              wp_reset_postdata();
            ?>
          

          <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
    <?php
      $slideshows = new WP_Query(array(
      'posts_per_page' => 1,
      'post_type' => 'slideshow'
      )
    );
      while ($slideshows->have_posts()) {
            $slideshows->the_post(); 
      if (has_post_thumbnail()) {
         $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        } 
        $link_text = get_field('slide_link_text');
        $link_value = get_field('slide_link_value');
        ?>
      <div class="hero-slider__slide" style="background-image: url(<?php if (has_post_thumbnail()) {echo $featured_image; } else {echo get_theme_file_uri('/images/bus.jpg');} ?>)">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
            <p class="t-center"><?php if (has_excerpt()) {echo get_the_excerpt();} ?></p>
            <p class="t-center no-margin"><a href="<?php echo site_url($link_value); ?>" class="btn btn--blue"><?php echo $link_text; ?></a></p>
          </div>
        </div>
      </div>
      <?php } wp_reset_postdata();?> 
  </div>


<?php get_footer(); ?>