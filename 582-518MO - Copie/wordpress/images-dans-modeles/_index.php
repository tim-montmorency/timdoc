<?php 
/**
 * @type     article
 * @title    Modèle: Les images
 * @icon     ../medias/icon.webp
 * @abstract Contrôler l'affichage des images dans les modèles (template) du thème
 * @index    90
 * @ref      web/wordpress
 */
?>


<p>Pour afficher les <em>images mise en avant</em> (image principale du post) dans un modèle (template), il vous suffit d'appeler la fonction suivante:</p>

<highlight lang="php">&lt;?php the_post_thumbnail(); ?&gt;</highlight>

<p>Cette fontion génèrera la balise <em>&lt;img&gt;</em> entière.</p>

<info>Notez que pour cela, il faudra que le fichier <em>function.php</em> de votre thème contienne la ligne suivante: <br> <incode>add_theme_support( 'post-thumbnails' );</incode></info>
<br>

<p>Si vous souhaitez ne pas générer la balise image complète mais seulement afficher l'URL de l'image (dans le cas d'un <span class='inline-code'>background-image</span> par exemple), vous pouvez utiliser:</p>
<highlight lang='php'>&lt;?php the_post_thumbnail_url(); ?&gt;</highlight>



<doclink href="https://developer.wordpress.org/reference/functions/the_post_thumbnail/">post thumbnail</doclink>

<dots></dots>
<grostitre>Configurer différentes tailles d'images</grostitre>
<p>Dans WordPress, lorsque vous importez une image dans la bibliothèque de médias, elles sont automatiquement créées en trois tailles que vous pourrez utiliser pour les images mises en avant, mais aussi dans vos articles ou vos modèles (templates).</p>
<p>Vous pouvez changer les valeurs par défaut de ces trois tailles sous <em>Réglages > Médias</em>.</p>
<img src="images/trois-tailles-images.jpg" alt="Réglages > Médias">

<dots></dots>
<grostitre>Affichage selon la taille désirée</grostitre>
<p>Le premier paramètre de <incode>&lt;?php the_post_thumbnail(); ?&gt;</incode> est le libellé de la taille désirée, soit:</p>
<highlight lang="php">
// Vignette (en anglais thumbnail) (150 x 150 rogné)
the_post_thumbnail( 'thumbnail' ); 

// Résolution moyenne (300 x 300 hauteur maxium de 300px)
the_post_thumbnail( 'medium' ); 

// Résolution moyenne-large (768 x 0 hauteur infinie)
the_post_thumbnail( 'medium_large' ); 

// Résolution large (1024 x 1024 hauteur maxium de 1024px)
the_post_thumbnail( 'large' ); 

// Résolution complète (dimension originale de l'image)
the_post_thumbnail( 'full' ); 
</highlight>

<dots></dots>
<grostitre>Paramètres supplémentaires</grostitre>
<p>Il est possible d'ajouter des paramètres supprémentaires à la fonction via un tableau (array) PHP. Par exemple, si vous souhaitez ajouter une ou des classe(s) CSS à la balise <em>&lt;img&gt;</em>. </p>

<p>Pour ajouter la classe <incode>.image-responsive</incode> à la balise image générée, voici ce qu'on devrait ajouter: <incode>array(&#39;class&#39; =&gt; &#39;image-responsive&#39;)</incode>, comme dans l'exemple ci-dessous</p>

<highlight lang="php">&lt;?php the_post_thumbnail(&#39;medium&#39;, array(&#39;class&#39; =&gt; &#39;image-responsive&#39;)) ?&gt;</highlight>

<p>Vous pouriez aussi ajouter d'autres paramètres tel que l'activation du chargement différé (lazy loading), en ajoutant un autre élément à votre tableau (array) nommé <incode>'loading' => 'lazy'</incode>. N'oubliez pas de séparer chaque élément du taleau (array) par une virgule!</p>
<doclink href="https://developer.wordpress.org/reference/functions/the_post_thumbnail/">post thumbnail</doclink>

<dots></dots>
<grostitre>Images non reliées à un post</grostitre>
<p>Il est possible que vous ayez besoin de différentes images non reliées à un post spécifique pour contruire votre thème. Pour ce faire, vous pouvez les déposer dans un dossiers <em>images</em> dans votre thème.</p>
<p>Pour générer la balise image du fichier <em>fichier-image.svg</em>, il vous suffira d'inscrire: </p>
<highlight lang="html">&lt;img src=&quot;&lt;?php bloginfo(&#39;template_url&#39;); ?&gt;/images/fichier-image.svg&quot;&gt;</highlight>

<!--
Petite parenthèse à propos des images. Il faut faire la distinction entre les <em>images comprises dans le dossier d'un thème WP</em> et <em>les images de contenu</em>. 
<ul>
    <li>Les images que vous ajoutez dans le dossier de thème doivent être limitées au design général du thème: le logo du site peut être dans le thème et possiblement des icônes qui font partie de l'imagerie de votre thème.</li>

    <li>Toutes les autres images ne devraient pas être dans le dossier de votre thème. Elles devraient être chargées dans la bibliothèque média de l'interface d'administration de WordPress. On parle ici des images de contenu, les images de la section héro (et ce, même si ce sont des images d'arrière plan), les logos des partenaires etc.</li>
</ul>
-->
