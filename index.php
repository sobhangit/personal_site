<?php get_header( ); ?>
    
      

    

    <div class="jumbotron text-center">

      
      
      <div class="page-header">
        
        <div class="container">
          <h1><?php echo get_bloginfo('name'); ?></h1>
          <hr>
          <p><?php echo get_bloginfo('description'); ?></p>
          <a href="#blog-view" class="page-scroll arrow active">
            <i class="fa fa-angle-down"></i>
          </a>
        </div>

      </div>


    </div>

    

    </header>




    
    <div class="content">



      <a name="blog-view"></a>
      <h2 class="section-header">بلاگ</h2>
      <a name="blog-view"></a>

      <div class="container-fluid">
        
        <div class="row ">
        
        
          <div class="col-lg-12">

            <?php

              $args = array(
                'posts_per_page' => '4'
              );

              $wp_query = new WP_Query( $args );

            ?>

            <?php  if ( $wp_query->have_posts() ) : while ($wp_query->have_posts()) : the_post() ?>

            

              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 post-thumbnail text-center">

                <?php

                  $thumbnail_id  = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);

                ?>


                
                <div class="inside">
                    <a href="<?php the_permalink(); ?>">
                      <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>-Graphic">
                      <h3><?php the_title(); ?></h3>
                    </a>
                    <?php 
                      the_excerpt();
                    ?>
                  </div>
              

              </div>


            <?php endwhile; endif; ?>

          </div>

        </div>

      </div>
        
      <div class="container">
        
        <div class="row view-all">
          <div class="col-md-12">

              <a href="<?php bloginfo('url'); ?>/?p=6">مشاهده  همه  پست ها</a>

          </div>
        </div>

      </div><!-- End View All -->

      <?php wp_reset_postdata(); ?>

      <a name="portfolio-view"></a>

      <h2 class="section-header">نمونه کارها</h2>
  
      <div class="container-fluid">

        <?php

          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => '6'
          );

          $wp_query = new WP_Query($args);

          $counter = 0;

        ?>

        <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : the_post() ?>

        <?php

          

          $thumbnail_id  = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);

        ?>

          <?php if ($counter%3 == 0) { 
            echo "<div class='row no-gutter portfolio-view'><div class='col-lg-12 no-gutter text-center'>"; 
          } ?>
            
          <?php $counter++; ?>
        
              
                
                <div class="box col-lg-4 col-sm-4">
                  <a href="<?php the_permalink(); ?>" class="portfolio-box">
                    <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="">
                    <div class="portfolio-box-caption">
                        <?php the_title(); ?>
                    </div>
                  </a>
                </div>

              

          <?php if ($counter%3 == 0 ) { echo "</div></div><!--end chechpoint-->"; } ?>
          
          


        <?php endwhile; endif; ?>
        

        <?php echo "</div></div><!--end chechpoint-->"; ?>
       

      </div>

      <div class="container">
        
        <div class="row view-all po">
          <div class="col-md-12">

              <a href="<?php echo bloginfo('url'); ?>/?p=24">مشاهده  همه  نمونه کارها</a>

          </div>
        </div>

      </div><!-- End View All -->


      
      <a name="contact-view"></a>

      <h2 class="section-header">ارتباط با من</h2>

      <div class="container-fluid">
        
        <div class="row contact-view">

          <div class="col-md-8">
            
            <?php if(! dynamic_sidebar( 'contact-us-widgets' )) ?>

          </div>
          
          <div class="col-md-4 no-gutter">

            <div class="alert alert-info" role="alert">
          
              <p>هرمزگانی های عزیز می توانید جهت <bold>سفارش وب سایت</bold> به شماره 090000000000 در پیام رسان واتس آپ پیام دهید . با آرزوی موفقیت برای شما.</p>

            </div>

            <div class="col-md-12">

              <div class="alert alert-danger" role="alert">
                <p>جهت مطلع شدن از جدیدترین مطالب وب سایت می توانید مشترک شوید</p>
              </div>

        
                <!-- <input type="text" class="form-control" placeholder="ایمیل خود را اینجا وارد کنید..">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">مشترک شوید</button>
                </span> -->

          

                <?php /*if(! dynamic_sidebar( 'subscribers-widgets' ))*/ ?>

                <form class="">
                  <div class="form-group">

                    <div class="es_msg alert alert-danger"><span id="es_msg_pg"></span></div>

                    <input class="es_textbox_class form-control" placeholder="ایمیل خود را اینجا وارد کنید.." name="es_txt_email_pg" id="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages('http://localhost/wp.orgin')" value="" maxlength="225" type="text">

                    <span class="input-group-btn subscribe">

                      <input class="btn btn-default es_textbox_button" name="es_txt_button_pg" id="es_txt_button_pg" onclick="return es_submit_pages('http://localhost/wp.orgin')" value="دنبال کنید" type="button">

                    </span>
                    
                    <input name="es_txt_name_pg" id="es_txt_name_pg" value="" type="hidden">
                    <input name="es_txt_group_pg" id="es_txt_group_pg" value="" type="hidden">

                  </div>  
                </form>
                
    

            </div>


            <div class="col-md-12 social text-center">

              <h3>شبکه های اجتماعی</h3>
              <hr>
              <?php

                $googlePlusID = esc_attr(get_option('googlePlus_id'));
                $twitterID = esc_attr(get_option('twitter_id'));
                $linkedinID = esc_attr(get_option('linkedin_id'));
                $telegramID = esc_attr(get_option('telegram_id'));


              ?>

              <ul class="list-unstyled">
                

                <li><a id="linkedin" href="http://www.linkedin.com/<?php echo $linkedinID; ?>" target="_blank"><img class="img-rounded" data-toggle="tooltip" data-placement="bottom" title="لینکداین" src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" alt=""></a></li>

                <li><a id="twitter" href="http://www.twitter.com/@<?php echo $twitterID; ?>" target="_blank"><img class="img-rounded" data-toggle="tooltip" data-placement="bottom" title="توئیتر" src="<?php bloginfo('template_directory'); ?>/images/twitter.svg" alt=""></a></li>

                <li><a id="telegram" href="http://www.telegram.me/<?php echo $telegramID; ?>" target="_blank"><img class="img-rounded" data-toggle="tooltip" data-placement="bottom" title="تلگرام" src="<?php bloginfo('template_directory'); ?>/images/telegram.svg" alt=""></a></li>

                <li><a id="google-plus" href="http://www.google-plus.com/<?php echo $googlePlusID; ?>" target="_blank"><img class="img-rounded" data-toggle="tooltip" data-placement="bottom" title="گوگل پلاس" src="<?php bloginfo('template_directory'); ?>/images/google-plus.svg" alt=""></a></li>

                
              </ul>
              
            </div>
            
          </div>

        </div>

      </div>
        



    </div><!-- End Content -->


   <?php get_footer(); ?>