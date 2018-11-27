<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->

      <div class="page-header">
        
        <div class="row">
          
          <div class="col-xs-9">
            <h1>نمونه کارها</h1>
          </div>

          <div class="col-xs-3 prev-next">

            <?php next_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
            <a href="<?php bloginfo('url'); ?>/?p=24"><span class="glyphicon glyphicon-th"></span></a>
            <?php previous_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
            
          </div>

        </div>

      </div>
      <div class="row">

        <div class="col-md-12">

          <?php if(have_posts()) : the_post() ?>

            <div class="col-md-8 portfolio-image">
              
              <?php

                $thumbnail_id  = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);

              ?>
              
              <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>-Graphic"></a></p>
              
            </div>

            <div class="col-md-4 portfolio-content">
              
              <h2><?php the_title(); ?></h2>

              <?php the_content(); ?>

              <p><a class="btn btn-primary" href="<?php the_field('link'); ?>" role="button">مشاهده کنید</a></p>

            </div>
            

          <?php endif ?>
          
        </div>
       
      </div>
    </div>

<?php get_footer(); ?>