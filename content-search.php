



<?php  if (have_posts() ) : ?>

	<h3 class="show-result">نتایج جستجو:</h3>
	<hr>


	<?php while (have_posts()) : the_post() ?>



		<div class="search-content">
			<a href="<?php the_permalink(); ?>">

				<h3><?php the_title(); ?></h3>

				<?php 
					the_excerpt();
				?>

			</a>
		</div>

		<hr>



	<?php endwhile; ?> 

<?php else: ?>

	<h3 class="show-result">متاسفم !!!</h3>
	<hr>

	<h3>موردی پیدا نشد.</h3>

<?php endif; ?>