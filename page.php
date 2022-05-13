<?php
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
	
			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			
					<?php the_content(); ?>

				</article>

			<?php endwhile;  ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>