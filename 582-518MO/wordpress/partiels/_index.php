<?php 
/**
 * @type     article
 * @title    Partiels d'un thème WP
 * @icon     ../medias/icon.webp
 * @abstract Extrait de code à importer dans plus d'un modèle
 * @index    95
 * @ref      web/wordpress
 */
?>
<p>Le nom vous dit quelque chose n'est-ce pas? En effet, les <em>partials</em> existent aussi en langage <em>SASS</em>&nbsp!</p>

<p>Les partiels dans Wordpress, ou&nbsp;<em>partials</em>&nbsp;en anglais, sont utiles pour gérer la situation où un extrait de code est répété dans plus d'un modèle. Ainsi, plutôt que de copier/coller le code dans chaque modèle, le même fichier partiel est importé dans plusieurs&nbsp;modèles.</p>

<p>Par exemple, sur la page d'un produit d'Amazon une composante permet d'afficher des suggestions de produits en lien avec le produit affiché. Cette même composante est aussi utilisée sur la page d'accueil pour afficher des suggestions de produit. Ainsi dès que le code de cette composante est mis à jour, le changement s'effectue autant sur les deux pages simultanément.</p>



<dots></dots>
<grostitre>Emplacement</grostitre>
<p>Il faut déterminer les endroits dans les différents modèles où l'on désire que le partiel soit affiché et ajouter un script permettant de&nbsp;l'inclure.</p>


<p>Par exemple, pour inclure le partiel&nbsp;<incode>metas.php</incode>&nbsp;sur une page, il faut y ajouter ce code: </p>

<highlight lang='php'>&lt;?php get_template_part(&#39;metas&#39;); ?&gt;</highlight>



<p>Afin d'éviter toute confusion avec les modèles de base, il est encouragé de garder ses partiels dans un dossier distinct. Cependant, pour inclure ces partiels il faudra par la suite préfixer le nom du fichier par celui de son dossier. </p>

<p>Par exemple:</p>
<highlight lang='php'>&lt;?php get_template_part(&#39;partials/metas&#39;); ?&gt;</highlight>
<br>



<doclink href='https://developer.wordpress.org/reference/functions/get_template_part/'>get_template_part</doclink>


  