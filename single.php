<?php get_header(); ?>


    </header>

    <div class="page-content">
      
      <div class="container">
      
        <div class="col-lg-12">

          
          <div class="row">

            <?php if(have_posts()) : the_post()  ?>
            


            <div class="a-post col-lg-8 co-md-8 col-sm-8 ">
              
              <div class="row header-single text-right">

                  <?php

          

                    $thumbnail_id  = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);

                  ?>
              
                  <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php wp_title(); ?>-images">

                  <section class="col-md-12 post-header">
                    <div class="row">
                      <div class="col-sm-3 date">
                        <div class="in">
                          <p class="day"><?php echo get_the_date('l'); ?></p>
                          <p><?php echo get_the_date(); ?></p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12 title">
                        <h3><?php the_title(); ?></h3>
                      </div>
                    </div>
                  </section>
               

              </div>

              <div class="row spec">
                <div class="col-md-12">

                  <ul>
                    <li><span class="fa fa-comment"></span><a href="<?php comments_link(); ?>"> <?php comments_number(); ?></a> |</li>
                    <li><span class="fa fa-tags"></span></li>
                    <li><?php

                     the_category(); 
                     $count = 0;
                     $cat;
                     foreach (get_the_category() as $value) {
                       $cat[] = $value;
                       $count++;

                     }

                     ?></li>
                  </ul> 

                </div>
              </div>

              <div class="content-single text-justify">
  

                  <?php the_content(); ?>
              </div>

              <?php endif; ?>

            <div class="row footer-single">
                  
                  <h3>درباره نویسنده :</h3>

                  <hr>    

                  <div class="col-sm-3 col-mxs-3 author-image">
                    
                    <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/me.jpg" alt="">

                  </div>

                  <div class="col-sm-9 col-mxs-9 author-about">
                    <p>
                      <!-- در گذار از یک کار به کار دیگر، مغز آن عملی انتخاب می‌کند که از اولویت بالاتری در ذهن ما برخوردار باشد. وقتی پس از یک روز پر مشغله وارد منزل می‌شوید، رویدادی که بالاترین اولویت را در ذهن شما دارد، رها شدن بر روی مبل است. در اینجا برای فعال کردن رویداد جدید نیاز به نوعی تغییر داریم. -->
                      <?php the_author_meta('description'); ?>
                    </p>
                  </div>

            </div>

            <div class="row write-comment">
              
              <div class="col-md-12">

                <?php 


                  comments_template();



                ?>

              </div>

            </div>
            
            

            <!-- <div class="row related-posts">
              <?php
echo do_shortcode( '[related_post themes="flat" id="'.get_the_ID().'"]' ); 
?>


              <div class="col-md-3 col-mxs-6">
                
                  <div class="in">
                    <img class="img-responsive" src="./images/08.jpg" alt="">
                    <h4>چگونه کتاب بخوانیم.چگونه کتاب بخوانیم.</h4>
                  </div>
              </div>
              
              <div class="col-md-3 col-mxs-6">
        
                <div class="in">
                    <img class="img-responsive" src="./images/08.jpg" alt="">
                    <h4>چگونه کتاب بخوانیم.چگونه کتاب بخوانیم.</h4>
                  </div>
              </div>

              <div class="col-md-3 col-mxs-6">

                <div class="in">
                    <img class="img-responsive" src="./images/08.jpg" alt="">
                    <h4>چگونه کتاب بخوانیم.چگونه کتاب بخوانیم.</h4>
                  </div>
              </div>

              <div class="col-md-3 col-mxs-6">

                <div class="in">
                    <img class="img-responsive" src="./images/08.jpg" alt="">
                    <h4>چگونه کتاب بخوانیم.چگونه کتاب بخوانیم.</h4>
                  </div>
              </div>

            </div> -->


          </div>

          <div class="col-lg-1 visible-lg text-center">
            

          </div>

          <div class="widget col-lg-3 col-md-4 col-sm-4 hidden-xs text-center no-gutter">

            <div class="col-md-12">

              <?php get_sidebar('blog'); ?>
              
            </div>

          </div>


  
          </div><!--end row -->

          
          


        </div>

      </div>


    </div>




    <?php get_footer(); ?>