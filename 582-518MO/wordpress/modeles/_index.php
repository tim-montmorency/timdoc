<?php 
/**
 * @type     article
 * @title    Modèles
 * @icon     images/icon-wp.png
 * @abstract Contrôler la structure des pages Wordpress
 * @index 97
 */
?>
<p>Les modèles, ou en anglais&nbsp;<em>templates</em>, sont certains des fichiers&nbsp;<code>.php</code>&nbsp;se trouvant à la racine d'un thème.</p>

<p>Ces fichiers permettent de contrôler la structure d'une ou plusieurs pages sur un site. </p>

<p>Par exemple, Amazon à un modèle pour <a target="_blank" rel="noopener noreferrer" href="https://www.amazon.ca/-/fr/">sa page d'accueil</a>, mais aussi un modèle de page de produit. Celui de la page d'accueil n'est utilisé que pour une seule page <em>(la page d'accueil)</em>, mais celui de la page de produit est utilisé pour afficher tous les produits du site. Un seul modèle est nécessaire, donc un seul fichier php et le contenu des produits est soutiré d'une base de données pour générer des milliers de pages différentes.</p>


<dots></dots>

<grostitre>Création</grostitre>
<h3 class="heading heading--h3" id="Nom">Nom</h3>
<p>Pour créer un modèle, il suffit de créer un fichier&nbsp;<code>.php</code>&nbsp;à la racine du thème. Dans ce fichier, immédiatement après la déclaration&nbsp;<code>&lt;?php</code>, le commentaire <code>Template Name</code> permet d'indiquer à WordPress le nom du&nbsp;modèle en question.</p><p>Par exemple, il est possible de spécifier que le modèle <em>product.php</em> devrait être disponible dans le tableau de bord sous le nom <em>Produit</em>:</p>


<highlight lang='php'>/**
 * 	Template Name: Produit
 */</highlight>

 
 
 <p>WordPress est ainsi en mesure de détecter ce fichier comme étant un modèle. </p><p>Par la suite, lors de la création ou de l'édition d'une page, un menu déroulant dans la barre latérale de droite permet de choisir le modèle à attribuer à cette page.</p>
 
 <p>Onglet <em>Page</em>&nbsp;➡️&nbsp;<em>Résumé</em>&nbsp;➡️&nbsp;<em>Modèle</em></p><p>Le nom donné au modèle dans le commentaire apparaîtra comme option dans ce menu&nbsp;déroulant.</p>

 <img src="images/wp-attribut-de-page.png" alt="Menu déroulant de l'interface de WP pour choisir un modèle.">
<p>Il est donc possible de choisir quel modèle devrait utiliser cette page.</p>


<info>Un nom similaire entre le modèle et le fichier <code>.php</code> permet de mieux vous structurer et simplifier le&nbsp;débogage. Dans l'exemple ci-dessus, le nom du fichier est en anglais (comme vous codez en anglais) : <em>product.php</em> et le nom du modèle (inscrit en commentaire au début du fichier) est l'équivalent en français, soit <em>Produit</em>.</info>





<dots></dots>

<h3 id="type-posts-supportes">Type de posts supportés</h3>
<p>Les modèles ne sont disponibles que pour les posts par défaut <em>(pages et articles)</em>. Pour qu'un modèle puisse supporter un autre type de post, il faut lui indiquer à l'aide du commentaire <code>Template Post Type</code>.</p>


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
<p>Par exemple, avec l'url&nbsp;<code>exemple.com/portfolio</code></p>

<p>WordPress tentera de valider en ordre si:</p>

<ol start="1">
    <li>Un modèle a été attribué via le&nbsp;tableau de&nbsp;bord.</li>
    <li><code>page-portfolio.php</code>&nbsp;existe à la racine du&nbsp;thème.</li>
    <li><code>page-7.php</code>&nbsp;existe.&nbsp;<em>(Si l'id de la page est&nbsp;</em><code>7</code>).</li>
    <li>Le fichier générique&nbsp;<code>page.php</code>&nbsp;est&nbsp;présent.</li>
    <li><code>singular.php</code>&nbsp;existe.</li>
    <li><code>index.php</code>&nbsp;existe.</li>
</ol>



<dots></dots>

<h3 class="heading heading--h3" id="Accueil">Accueil</h3>
 <p>La page d'accueil est particulière. Par défaut, WordPress lui attribue son propre modèle affichant normalement les plus récents articles. Il est néanmoins possible de changer cette configuration dans le tableau de bord via:</p>
 
 <p><em>Réglage</em>&nbsp;➡️&nbsp;<em>Lecture</em></p><ul><li><p>home.php</p></li><li><p>index.php</p></li></ul>



 <dots></dots>
<h3 id="404">404</h3>
<ol start="1"><li><p>404.php</p></li><li><p>index.php</p></li></ol>





<dots></dots>
<h3 id="Articles-Posts">Articles (Posts)</h3>
<p>Les articles suivent une hiérarchie légèrement différente.</p>
<br>


<p>Par exemple, avec l'url&nbsp;<code>exemple.com/bonjour-tout-le-monde</code>, WordPress tente de valider en ordre&nbsp;si:</p>
<ol start="1">
    <li><code>single-post-bonjour-tout-le-monde.php</code>&nbsp;existe.<br><br>Ce nom de fichier&nbsp;provient:
    <ul>
        <li>du préfixe&nbsp;<code>single</code>.</li>
        <li>du&nbsp;<strong>type de post</strong>, dans cet exemple celui par défaut&nbsp;<code>post</code>.</li>
        <li>et du slug de l'article&nbsp;<code>bonjour-tout-le-monde</code></li>
    </ul>
    </li>
    <li><code>single-post.php</code>&nbsp;existe. Ce nom, comme le précédent, provient du préfix&nbsp;<code>single</code>&nbsp;et du type de post. Par exemple: si ce type avait été&nbsp;<code>product</code>, le fichier appelé aurait été&nbsp;<code>single-product.php</code>.</li>
    <li><code>single.php</code>&nbsp;si aucun modèle spécifique n'est&nbsp;trouvé.</li>
    <li>ensuite&nbsp;<code>singular.php</code></li>
    <li>et finalement&nbsp;<code>index.php</code></li>
</ol>

<warning>Le fichier <code>index.php</code> est en quelque sorte le fichier de la dernière&nbsp;chance.</warning>


<br>
<doclink href='https://developer.wordpress.org/themes/basics/template-hierarchy/'>Template hierarchy</doclink>
<doclink href='https://fr.wordpress.org/support/article/hierarchie-des-fichiers-modeles/'>Hiérarchie des fichiers modèles</doclink>

