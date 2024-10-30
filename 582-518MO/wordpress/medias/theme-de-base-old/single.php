<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

get_header(); // Affiche header.php

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<h2>
			<?php the_title(); // Titre de l'article ?>
		</h2>
		
		<?php the_content(); // Contenu principal de l'article ?>

		<?php get_template_part( 'partials/metas' ); // Affiche partials/metas.php ?>
	</article>
<?php endwhile; // Fermeture de la boucle
		
	get_template_part( 'partials/comments' ); // Affiche partials/comments.php

	else : // Si aucun article n'a été trouvée
		get_template_part( 'partials/404' ); // Affiche partials/404.php
	endif;

	get_footer(); // Affiche footer.php 
?>
