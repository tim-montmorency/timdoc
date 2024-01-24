<?php 
/**
 * @type     article
 * @title    Modèles d'un thème WP
 * @icon     images/icon-wp.png
 * @abstract Contrôler la structure des pages Wordpress
 * @index 97
 */
?>
<p>Les modèles, ou en anglais&nbsp;<em>templates</em>, sont certains des fichiers&nbsp;<incode>.php</incode>&nbsp;se trouvant à la racine d'un thème.</p>

<p>Ces fichiers permettent de contrôler la structure d'une ou plusieurs pages sur un site. </p>

<p>Par exemple, Amazon a un modèle pour <a target="_blank" rel="noopener noreferrer" href="https://www.amazon.ca/-/fr/">sa page d'accueil</a>, mais aussi un modèle de page de produit. Celui de la page d'accueil n'est utilisé que pour une seule page <em>(la page d'accueil)</em>, mais celui de la page de produit est utilisé pour afficher tous les produits du site. Un seul modèle est nécessaire, donc un seul fichier php et le contenu des produits est soutiré d'une base de données pour générer des milliers de pages différentes.</p>


<dots></dots>

<grostitre>Création</grostitre>
<h3 class="heading heading--h3" id="Nom">Nom</h3>
<p>Pour créer un modèle, il suffit de créer un fichier&nbsp;<incode>.php</incode>&nbsp;à la racine du thème. Dans ce fichier, immédiatement après la déclaration&nbsp;<incode>&lt;?php</incode>, le commentaire <incode>Template Name</incode> permet d'indiquer à WordPress le nom du&nbsp;modèle en question.</p><p>Par exemple, il est possible de spécifier que le modèle <em>product.php</em> devrait être disponible dans le tableau de bord sous le nom <em>Produit</em>:</p>


<highlight lang='php'>/**
 * 	Template Name: Produit
 */</highlight>

 
 
 <p>WordPress est ainsi en mesure de détecter ce fichier comme étant un modèle. </p><p>Par la suite, lors de la création ou de l'édition d'une page, un menu déroulant dans la barre latérale de droite permet de choisir le modèle à attribuer à cette page.</p>
 
 <p>Onglet <em>Page</em>&nbsp;➡️&nbsp;<em>Résumé</em>&nbsp;➡️&nbsp;<em>Modèle</em></p><p>Le nom donné au modèle dans le commentaire apparaîtra comme option dans ce menu&nbsp;déroulant.</p>

 <img src="images/wp-attribut-de-page.png" alt="Menu déroulant de l'interface de WP pour choisir un modèle.">
<p>Il est donc possible de choisir quel modèle devrait utiliser cette page.</p>


<info>Un nom similaire entre le modèle et le fichier <incode>.php</incode> permet de mieux vous structurer et simplifier le&nbsp;débogage. Dans l'exemple ci-dessus, le nom du fichier est en anglais (comme vous codez en anglais) : <em>product.php</em> et le nom du modèle (inscrit en commentaire au début du fichier) est l'équivalent en français, soit <em>Produit</em>.</info>





<dots></dots>

<h3 id="type-posts-supportes">Type de posts supportés</h3>
<p>Les modèles ne sont disponibles que pour les posts par défaut <em>(pages et articles)</em>. Pour qu'un modèle puisse supporter un autre type de post, il faut lui indiquer à l'aide du commentaire <incode>Template Post Type</incode>.</p>


<p>Par exemple, après avoir créé le type de post <em>product</em> dans le tableau de bord, le menu&nbsp;déroulant de choix de modèle sera absent de tous les posts de ce type, puisque par défaut aucun modèle ne supporte ce type de post. </p><p>Afin d'indiquer que le modèle <em>Produit</em> doit pouvoir être utilisé par les posts de type <em>product</em>, il faut le spécifier à l'intérieur du modèle ainsi:</p>


<highlight lang='php'>/**
 *  Template Name: Produit
 *  Template Post Type: post, page, product
 */</highlight>


<p>Ce modèle est donc disponible dans les articles <em>(posts)</em>, les pages et les post dont le slug est <em>product</em>.</p>



<dots></dots>
<grostitre>Hiérarchie</grostitre>

<p>WordPress tente de déterminer quel modèle afficher lors de l'appel d'une page en suivant une hiérarchie particulière&nbsp;👑.</p>


<h3  id="pages 📄">Pages 📄</h3>
<p>Par exemple, avec l'url&nbsp;<incode>exemple.com/portfolio</incode></p>

<p>WordPress tentera de valider en ordre si:</p>

<ol start="1">
    <li>Un modèle a été attribué via le&nbsp;tableau de&nbsp;bord.</li>
    <li><incode>page-portfolio.php</incode>&nbsp;existe à la racine du&nbsp;thème.</li>
    <li><incode>page-7.php</incode>&nbsp;existe.&nbsp;<em>(Si l'id de la page est&nbsp;</em><incode>7</incode>).</li>
    <li>Le fichier générique&nbsp;<incode>page.php</incode>&nbsp;est&nbsp;présent.</li>
    <li><incode>singular.php</incode>&nbsp;existe.</li>
    <li><incode>index.php</incode>&nbsp;existe.</li>
</ol>



<dots></dots>

<h3 class="heading heading--h3" id="Accueil">Accueil</h3>
 <p>La page d'accueil est particulière. Par défaut, WordPress lui attribue son propre modèle affichant normalement les plus récents articles (posts). Le modèle qui sera pris en compte en premier sera home.php et s'il est inexistant, ce sera index.php.</p>
 <ul>
    <li><incode>home.php</incode></li>
    <li><incode>index.php</incode></li>
</ul>
 <p>Il est néanmoins possible de changer cette configuration et choisir une page spécifique en tant que page d'accueil. Pour ce faire, vous devez d'abord créer la page et, dans le tableau de bord, spécifier quelle sera la page qui fera office d'accueil via:</p>
 
<p><em>Réglage</em>&nbsp;➡️&nbsp;<em>Lecture</em></p>
<img src="images/page-accueil-reglages-wp.jpg" alt="Réglage pour page accueil dans le tableau de bord de Wordpress">
<p>Dans le contexte où votre page d'accueil est une page statique, le modèle qui sera pris en compte en premier sera font-page.php.</p>
<ul>
    <li><incode>font-page.php</incode></li>
    <li><incode>page-7.php</incode>&nbsp;existe.&nbsp;<em>(Si l'id de la page est&nbsp;</em><incode>7</incode>).</li>
    <li>Le fichier générique&nbsp;<incode>page.php</incode>&nbsp;est&nbsp;présent.</li>
    <li><incode>singular.php</incode>&nbsp;existe.</li>
    <li><incode>index.php</incode>&nbsp;existe.</li>
</ul>



 <dots></dots>
<h3 id="404">404</h3>
<ol start="1">
    <li><incode>404.php</incode></li>
    <li><incode>index.php</incode></li>
</ol>





<dots></dots>
<h3 id="Articles-Posts">Articles (Posts)</h3>
<p>Les articles suivent une hiérarchie légèrement différente.</p>
<br>


<p>Par exemple, avec l'url&nbsp;<incode>exemple.com/bonjour-tout-le-monde</incode>, WordPress tente de valider en ordre&nbsp;si:</p>
<ol start="1">
    <li><incode>single-post-bonjour-tout-le-monde.php</incode>&nbsp;existe.<br><br>Ce nom de fichier&nbsp;provient:
    <ul>
        <li>du préfixe&nbsp;<incode>single</incode>.</li>
        <li>du&nbsp;<strong>type de post</strong>, dans cet exemple celui par défaut&nbsp;<incode>post</incode>.</li>
        <li>et du slug de l'article&nbsp;<incode>bonjour-tout-le-monde</incode></li>
    </ul>
    </li>
    <li><incode>single-post.php</incode>&nbsp;existe. Ce nom, comme le précédent, provient du préfix&nbsp;<incode>single</incode>&nbsp;et du type de post. Par exemple: si ce type avait été&nbsp;<incode>product</incode>, le fichier appelé aurait été&nbsp;<incode>single-product.php</incode>.</li>
    <li><incode>single.php</incode>&nbsp;si aucun modèle spécifique n'est&nbsp;trouvé.</li>
    <li>ensuite&nbsp;<incode>singular.php</incode></li>
    <li>et finalement&nbsp;<incode>index.php</incode></li>
</ol>

<warning>Le fichier <incode>index.php</incode> est en quelque sorte le fichier de la dernière&nbsp;chance.</warning>


<dots></dots>
<h3>Voici un graphique qui présente cette hiérarchie</h3>
<figure><a href="images/wordpress-hierarchie-des-fichiers-modeles.png" target="_blank" rel="noopener noreferrer">
<img src="images/wordpress-hierarchie-des-fichiers-modeles.png" alt="Graphique présentant la hiérarchie des modèles" style="border: 1px solid #18053e;"></a>
<figcaption>Source de l'image: https://fr.wordpress.org</figcaption></figure>


<br>
<doclink href='https://developer.wordpress.org/themes/basics/template-hierarchy/'>Template hierarchy</doclink>
<doclink href='https://fr.wordpress.org/support/article/hierarchie-des-fichiers-modeles/'>Hiérarchie des fichiers modèles</doclink>

