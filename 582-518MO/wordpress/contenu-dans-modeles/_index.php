<?php 
/**
 * @type     article
 * @title    Modèle: Champs de base
 * @icon     ../medias/icon.webp
 * @abstract Contrôler l'affichage du champs de base dans les modèles (template) d'un thème
 * @index    91
 * @ref      web/wordpress
 */
?>


<p>Vous vous rappelez des <a href="../types-contenu-de-base-wp/#champs-de-base-dans-article-ou-page" target="_blank" rel="noopener noreferrer">champs de base accessibles dans un post ou une page</a> WordPress ? Mais comment y accède-t-on pour les afficher dans le modèle (template) d'un thème ? Via des fonctions prédéfinies de WordPress que vous pouvez appeler dans le fichier du modèle, là où il vous convient d'afficher le contenu.</p>

<warning>Les fonctions ci-dessous sont des fonctions d'affichage en PHP, donc il ne faut pas oublier de les inclure entre l'ouverture et la fermeture des balises de code PHP. Par exemple : <span class='inline-code'>&lt;?php the_content(); ?&gt; </span> </warning>



<ol>
    <li><incode>the_title()</incode> inscrit le titre post.</li>
    <li><incode>the_permalink()</incode> inscrit l'URL du post.</li>
    <li><incode>the_content()</incode> inscrit le contenu complet provenant de l'éditeur de la page (le contenu principal, sans le titre)</li>
    <li><incode>the_excerpt()</incode> inscrit l'extrait (résumé) du post. Si le champ de l'extrait est vide, les 55 premiers mots du contenu de l'article ainsi que "..." seront affichés.</li>
    <li><incode>the_ID()</incode> inscrit le ID du post.</li>
    <li><incode>the_category()</incode> inscrit toutes les catégories associées au post.</li>
    <li><incode>the_tags()</incode> inscrit toutes les équiquettes associées au post.</li>
    <li><incode>the_date()</incode> inscrit la date de publication du post.</li>
    <li><incode>the_time()</incode> inscrit le temps de publication du post.</li>
    <li><incode>the_author()</incode> inscrit le nom de l'auteur du post.</li>
    <li><incode>the_post_thumbnail()</incode> inscrit l'<em>image mise en avant</em>.</li>
</ol>

<br>
<img src="images/contenu-base-editeur-page.jpg" alt="Éditeur de page de WP et quelques zones nommées ci-dessus qui y sont identifiées." style="box-shadow: 0 0 10px rgba(30,30,0,0.2);">

