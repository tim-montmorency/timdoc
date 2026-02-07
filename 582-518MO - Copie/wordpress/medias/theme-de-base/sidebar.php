<?php 
/**
 * 	Modèle de la barre latérale (Sidebar).
 *  (N'affiche que si spécifié dans l'admin)
*/

if ( ! dynamic_sidebar( 'barre-laterale-principale' ) ) : 
	/* Si dans le tableau de bord rien n'a été mis dans la barre latérale, afficher ceci */ ?>
	<aside>
		<h3>
			<?php 
				_e( 'Archives', 'Archive dans la barre latérale' ); // Titre des archives  
			?>
		</h3>

		<ul>
			<?php 
				wp_get_archives( array( 'type' => 'monthly' ) ); 	// Affiche les archives par mois
			?>
		</ul>
	</aside>
<?php endif; 
 // Fermeture de la barre latérale (Sidebar) 
 ?>