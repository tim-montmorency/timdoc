<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php the_post_thumbnail('large'); // Vignette large du post ?>

		<h2>
			<a href="<?php the_permalink(); // Lien du post ?>">
				<?php the_title(); // Titre du post ?>
			</a>
		</h2>

		<?php 
			the_content(); // Contenu principal de la page

			get_template_part( 'partials/metas' );   // Affiche partials/metas.pgp (nom d'auteur, date de publication, etc.)
		?>
	</article>

<?php endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>