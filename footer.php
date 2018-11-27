 <footer>
      
      <div class="container top">
        
        <div class="row">
          
          <div class="col-md-4 col-sm-4">
            
            <!-- <h3>محبوب ترین پست ها</h3>
            <hr>
            <ul class="list-unstyled text-center">
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
            </ul> -->

            <?php if(! dynamic_sidebar( 'right-footer-widgets' )) ?>

          </div>

          <div class="col-md-4 col-sm-4">
            
            <!-- <h3>آرشیو</h3>
            <hr>
            <ul class="list-unstyled text-center">
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
            </ul> -->

            <?php if(! dynamic_sidebar( 'center-footer-widgets' )) ?>

          </div>

          <div class="col-md-4 col-sm-4">

            <!-- <h3>پیشنهاد ما برای شما</h3>
            <hr>
            <ul class="list-unstyled text-center">
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
              <li><a href="#">چگونه می توانیم یک وب سایت داشته بشیم.</a></li>
            </ul> -->

            <a name="about-me"></a>

            <?php 
              if(! dynamic_sidebar( 'left-footer-widgets' ));
            ?>

            <!-- <div class="textwidget">
              <div class="row">
                <div class="col-sm-3">
                <img class="img-responsive" src="<?php echo esc_attr(get_option('profile_picture')); ?>">
                </div>
                <div class="col-sm-9">
                <p>سلام سبحان کناری هستم ، برنامه نویس و طراح وب سایت ، از این که به این وب سایت مراجعه کردید بسیار خوشحالم ، امیدوارم مطالب این وب سایت برای شما مفید باشه</p>
                </div>
              </div>
            </div> -->
            
          </div>

        </div>

      </div>

      <div class="container-fluid bottom">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="col-md-2">
              
            </div>

            <div class="col-md-8">
              <p>طراحی شده توسط سبحان کناری</p>
              <span>تمام حقوق برای این وب سایت محفوظ می باشد . &copy; 2016</span>
            </div>

            <div class="col-md-2">
              
            </div>
          </div>
        </div>
      </div>

    </footer>
  

  </div><!-- End Primary Container Fluid-->


  <script>

    $(document).ready(function(){

      $('.loader').css('display','none');

      window.sr = ScrollReveal({ duration: 2000 });
      sr.reveal('.box', 50);

    });


  </script>

<?php wp_footer(); ?>
</body></html>