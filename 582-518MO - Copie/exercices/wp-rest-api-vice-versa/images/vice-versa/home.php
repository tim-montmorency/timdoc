<?php

get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
?>

	<article class="emotions-preview">
		
	</article>

<?php endwhile; wp_reset_postdata();

else : 
	get_template_part( 'partials/404' ); 
endif;

get_footer();
?>