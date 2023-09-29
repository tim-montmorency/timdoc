<?php
  /* comments_open() valide si nous authorisons les commentaires 
		 '0' != get_comments_number() valide si il y a au moins un commentaire à afficher
		 Si l'une de ces conditions est vraie, le template de commentaires par défaut de WordPress est affiché.
	*/ 
	if ( comments_open() || '0' != get_comments_number() ) {
		comments_template( '', true );
	}
?>