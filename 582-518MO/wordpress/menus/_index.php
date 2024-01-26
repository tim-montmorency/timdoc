<?php 
/**
 * @type     article
 * @title    Menus
 * @icon     ../medias/icon.webp
 * @abstract Menus de navigation
 * @index    90
 * @ref      web/wordpress
 */
?>
<p>Le tableau de bord de WordPress permet de créer et gérer des menus de navigation sans aucune connaissance technique. Ainsi, si un client vous engage afin de concevoir un site, vous pouvez lui livrer et quelques années plus tard, ce dernier peut choisir de créer une nouvelle page et l'ajouter dans sa navigation par lui-même sans même avoir recours à vous ou un autre développeur.</p><p>Pour ce faire, WordPress n'a besoin que trois éléments: </p>
<ul>
  <li>la déclaration du menu,</li>
  <li>où ce menu doit être affiché dans le code (donc dans la page),</li>
  <li>et que contient ce menu</li>
</ul>

<dots></dots>

<grostitre>Déclaration</grostitre>
<p>Pour déclarer un menu, il faut ouvrir le fichier&nbsp;<incode>function.php</incode>&nbsp;et repérer la fonction&nbsp;<incode>register_nav_menus( ... )</incode>.</p>

<highlight lang="php">
register_nav_menus( 
  array(
    'main-menu' => __('Menu principal', 'Menu principal du site'), 
  )
);
</highlight>


<p>Dans cet exemple, il n'y a qu'un menu de déclaré.</p><ul><li><p><incode>main-menu</incode>&nbsp;nom de référence dans le&nbsp;code.</p></li><li><p><incode>Menu principal</incode>&nbsp;nom affiché dans le tableau de&nbsp;bord.</p></li><li><p><incode>Menu principal du site</incode>&nbsp;description affichée dans le tableau de&nbsp;bord.</p></li></ul>


<p>Pour en déclarer un deuxième, il suffit d'ajouter une ligne à la suite de la première. Par exemple, si nous désirions créer un menu de commanditaires, il serait possible de faire:</p>

<highlight lang="php">
register_nav_menus( 
  array(
    'main-menu' => __('Menu principal', 'Menu de base'), 
    'sponsors-menu' => __('Menu commanditaires', 'Menu des commanditaires du site'), 
  )
);
</highlight>





<dots></dots>
<grostitre>Emplacement</grostitre>
<p>Il faut ensuite indiquer l'endroit où ce menu peut être affiché. Pour ce faire, il faut aller dans un&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/modeles">modèle</a>&nbsp;ou&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/partiels">partiel</a>&nbsp;et ajouter un script permettant de&nbsp;l'inclure.</p><p>Par exemple, pour inclure le menu des commanditaires, il faudra&nbsp;faire:</p>

<highlight lang="php">
&lt;?php 
  wp_nav_menu(array(&#39;theme_location&#39; =&gt; &#39;sponsors-menu&#39;));
?&gt;
</highlight>

<br>
<doclink href='https://developer.wordpress.org/reference/functions/wp_nav_menu/'>wp_nav_menu</doclink>




<dots></dots>
<grostitre>Contenu</grostitre>
<p>Il faut maintenant créer un menu dans le tableau de bord. Pour ce faire, il faut aller&nbsp;dans:</p>

<p><em>Apparence</em>&nbsp;➡️&nbsp;<em>Menus</em></p><p>Et commencer par lui donner un&nbsp;nom</p>

<p>Ensuite, à partir du menu de gauche, il est possible de sélectionner les éléments qui devraient constituer le&nbsp;menu.</p>

<img src="images/wp-menu-ajouter-contenu.png" alt="">


<p>Dans la section de droite, il est possible de contrôler l'ordre des éléments, ainsi que d'ajuster certains réglages, mais surtout de sélectionner l'emplacement où affichera le&nbsp;menu.</p>

<img src="images/wp-emplacement-menu.png" alt="">






<dots></dots>
<grostitre>Posts personnalisés</grostitre>
<p>Par défaut, les posts personnalisés ne sont pas disponibles dans les options de sélection de menus. Pour y avoir accès, il faut les activer via l'onglet <em>"Option de l'écran"</em> se trouvant en haut à droite de la page de Menus.</p><p>Par exemple, si un post personnalisé intitulé <em>"produits"</em> fut créé et que ses posts doivent-être disponibles dans les options de sélection de menus, il faut les activer ainsi:</p>

<clipasset src='images/wp-menu-custom-post.mp4'></clipasset>
