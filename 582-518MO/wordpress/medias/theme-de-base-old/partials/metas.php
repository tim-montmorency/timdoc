<aside class="meta">
  <?php 
    the_author(); // Affiche l'auteur du post
    the_time('d.m.Y'); // Affiche la date à laquelle ce post a été publié
    echo get_the_category_list(); // Affiche sous forme de liens les catégories auquel ce post appartient
    echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Affiche les tags associés à ce post séparé par des espaces (&nbsp;) et un pipe (|)
  ?>
</aside>