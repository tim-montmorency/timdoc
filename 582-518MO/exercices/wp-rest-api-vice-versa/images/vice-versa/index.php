<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php the_post_thumbnail('large'); ?>

		<?php the_title(); ?>

		<?php the_content(); ?>
	</article>

<?php endwhile; wp_reset_postdata();

else : 
	get_template_part( 'partials/404' ); 
endif;

get_footer();
?>