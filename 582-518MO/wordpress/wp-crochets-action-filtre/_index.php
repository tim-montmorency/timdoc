<?php 
/**
 * @type     article
 * @title    Crochets WP: action et filtre
 * @icon     ../medias/icon.webp
 * @abstract Hooks Wordpress : action and filter
 * @index    90
 * @ref      web/wordpress
 */
?>

<p>Les crochets (<em>hooks</em>) vous permettent d’interagir et de modifier le code à des endroits spécifiques sans modifier le cœur du CMS WordPress.</p>

<p>Ils vous permettent d'ajouter des fonctions personnalisées à des endroits spécifiques ou pendant des événements opportuns dans le chargement du site ou dans le processus de navigation d'un utilisateur du site.</p>

<dots></dots>
<grostitre>Catégories de hooks</grostitre>

<p>Les crochets (<em>hooks</em>) sont divisés en deux catégories :</p>
<ul>
    <li><strong>Action</strong> – permet aux utilisateurs d’ajouter des données ou de modifier le fonctionnement de leur site web. Un hook d’action s’exécutera à un moment précis lorsque le noyau de WordPress, les extensions (<em>plugins</em>) et les thèmes sont en cours d’exécution.</li>
    <li><strong>Filtre</strong> – peut modifier des données pendant l’exécution du noyau, des extensions (<em>plugins</em>) et des thèmes de WordPress.</li>
</ul>


<dots></dots>
<grostitre>Utilisation</grostitre>
<p>Pour utiliser l’un de ces cochets (<em>hooks</em>), l’utilisateur doit écrire une fonction personnalisée appelée <em>Callback</em> et l’enregistrer avec un crochet (<em>hook</em>) WordPress pour une action ou un filtre spécifique. Exemple:</p>


<highlight lang='php'>function lancerAlerte() {

  echo "&lt;script type=&#39;text/javascript&#39;&gt;
  alert(&#39;Wow! Voici une alerte JS lancée à l initialisation de WordPress via un crochet de type action!&#39;);&lt;/script&gt;";

}

add_action('init', 'lancerAlerte');</highlight>



<dots></dots>
<grostitre>En savoir plus</grostitre>
<p>Veuillez lire <!--<a href="https://www.hostinger.fr/tutoriels/hooks-wordpress" target="_blank">cet article</a> et--> <a href="https://kinsta.com/fr/blog/hooks-wordpress/" target="_blank">cet article</a> pour mieux comprendre les crochets WordPress.</p>
