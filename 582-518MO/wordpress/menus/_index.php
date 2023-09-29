<?php 
/**
 * @type     article
 * @title    Menus
 * @icon     images/icon-wp.png
 * @abstract Menus de navigation
 * @index 90
 */
?>
<p>Le tableau de bord de WordPress permet de créer et gérer des menus de navigation sans aucune connaissance technique. Ainsi, si un client vous engage afin de concevoir un site, vous pouvez lui livrer et quelques années plus tard, ce dernier peut choisir de créer une nouvelle page et l'ajouter dans sa navigation par lui-même sans même avoir recours à vous ou un autre développeur.</p><p>Pour ce faire, WordPress n'a besoin que trois éléments: la déclaration du menu, où ce menu doit être affiché dans le code et que contient ce menu. Regardons de plus près ces éléments.</p>

<grostitre>Déclaration</grostitre>
<p>Pour déclarer un menu, il faut ouvrir le fichier&nbsp;<code>function.php</code>&nbsp;et repérer la fonction&nbsp;<code>registernavmenus( ... )</code>.</p>


<pre><code class="hljs php">register_nav_menus( 
  <span class="hljs-keyword">array</span>(
    <span class="hljs-string">'main-menu'</span> =&gt; __(<span class="hljs-string">'Menu principal'</span>, <span class="hljs-string">'Menu principal du site'</span>), 
  )
);</code></pre>


<p>Dans cet exemple, il n'y a qu'un menu de déclaré.</p><ul><li><p><code>main-menu</code>&nbsp;nom de référence dans le&nbsp;code.</p></li><li><p><code>Menu principal</code>&nbsp;nom affiché dans le tableau de&nbsp;bord.</p></li><li><p><code>Menu principal du site</code>&nbsp;description affichée dans le tableau de&nbsp;bord.</p></li></ul>


<p>Pour en déclarer un deuxième, il suffit d'ajouter une ligne à la suite de la première. Par exemple, si nous désirions créer un menu de commanditaires, il serait possible de faire:</p><pre><code class="hljs php">register_nav_menus( 
  <span class="hljs-keyword">array</span>(
    <span class="hljs-string">'main-menu'</span> =&gt; __(<span class="hljs-string">'Menu principal'</span>, <span class="hljs-string">'Menu de base'</span>), 
    <span class="hljs-string">'sponsors-menu'</span> =&gt; __(<span class="hljs-string">'Menu commanditaires'</span>, <span class="hljs-string">'Menu des commanditaires du site'</span>), 
  )
);</code></pre>






<dots></dots>
<grostitre>Emplacement</grostitre>
<p>Il faut ensuite indiquer l'endroit où ce menu peut être affiché. Pour ce faire, il faut aller dans un&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/modeles">modèle</a>&nbsp;ou&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/wordpress/partiels">partiel</a>&nbsp;et ajouter un script permettant de&nbsp;l'inclure.</p><p>Par exemple, pour inclure le menu des commanditaires, il faudra&nbsp;faire:</p><pre><code class="hljs php"><span class="hljs-meta">&lt;?php</span> 
  wp_nav_menu(<span class="hljs-keyword">array</span>(<span class="hljs-string">'theme_location'</span> =&gt; <span class="hljs-string">'sponsors-menu'</span>));
<span class="hljs-meta">?&gt;</span></code></pre>

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
