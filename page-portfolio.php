<?php
/*
Template Name: Portfolio full width Template

*/

?>
<?php get_header(); ?>
</header>
      
      <div class="container">
      
        <div class="col-lg-12">
          <!-- Example row of columns -->
          <div class="row">

              <h2><?php the_title(); ?></h2>

              <?php if(have_posts()) : the_post() ?>

              <?php the_content(); ?>

              <?php endif ?>

              <hr>

          </div>

          <div class="row por">

            <?php 

              $args = array(
                'post_type' => 'portfolio'
              );

              $wp_query = new WP_Query($args);

            ?>    


            <?php if(have_posts()) : while($wp_query -> have_posts()) : $wp_query -> the_post(); ?>

              <div class="col-md-2 col-sm-4 col-xs-6 portfolio-item">

                <?php

                  $thumbnail_id  = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);

                ?>
                
                <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>-Graphic"></a></p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php

                  $portfolio_count = $wp_query->current_post + 1;

                  if ($portfolio_count % 6 == 0) {
                    echo"</div><div class='row por'>";
                  }

                ?>

              </div>

            <?php endwhile; endif;?>

          </div>

        </div>

      </div>
  
<?php get_footer(); ?>