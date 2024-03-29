<?php 
get_header(); 
pageBanner();
while(have_posts()) {
    the_post(  );
?>



  <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event') ?>"><i class="fa fa-home" aria-hidden="true"></i> Our Campses</a> 
                <span class="metabox__main"><?php the_title() ?></span>
            </p>
        </div>

      <div class="generic-content">
          <?php the_content() ?>
      </div>
        <?php 
        $realtedPrograms = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'program',
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_query' => array(
            array(
                'key' => 'related_campus',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
            )
            ),
        ));
        if($realtedPrograms->have_posts()) {
        echo '<hr class="section-break">';
        echo '<h2 class="headline headline--medium"> Program available at this campus</h2>';
        echo '<ul class="min-list link-list">';
        while($realtedPrograms->have_posts(  )){
            $realtedPrograms->the_post(  );
            ?>
        <li >
        <a  href="<?php the_permalink() ?>">
            <?php the_title() ?> 
        </a>
        </li>
        <?php
        } 
        echo '</ul>';
        wp_reset_postdata();
        };
        ?>
  </div>


<?php 
    }
get_footer(); ?>