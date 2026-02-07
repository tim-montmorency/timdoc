<?php 
/**
 * @type     article
 * @title    Création d'un thème: Styles CSS
 * @icon     ../medias/icon.webp
 * @abstract Styles css dans WP
 * @index    98
 * @ref      web/wordpress
 */
?>
<p>Le fichier&nbsp;<incode>style.css</incode>est particulier. WordPress s'attend à trouver un fichier avec ce nom à la racine de chaque&nbsp;thème.</p>

<warning>Renommer, déplacer ou supprimer ce fichier rendra votre thème&nbsp;inutilisable.</warning>

<dots></dots>


<grostitre>Metas du thème</grostitre>
<p>La première partie de ce fichier contient&nbsp;<strong>en commentaire</strong>&nbsp;les informations de base du thème. Ces informations sont affichées dans le tableau de bord dans la section:</p>

<p><em>Apparence</em>&nbsp;➡️&nbsp;<em>Thèmes</em></p>

<p>Par exemple:</p>
<img src="images/theme-metas.png" alt="Informations meta du thème">

<small>L'image d'aperçu provient du fichier&nbsp;<incode>screenshot.png</incode>&nbsp;se trouvant à la racine du thème. Ce fichier doit obligatoirement s'appeler&nbsp;<incode>screenshot</incode>, être en format&nbsp;<incode>.png</incode>&nbsp;et idéalement avoir une résolution de&nbsp;1200&nbsp;x&nbsp;900px.</small>   
<br><br><br><br>
<p>Ces informations proviennent du commentaire suivant:</p>

<highlight lang="php">
/*
Theme Name: Montmorency
Author: Simon Arnold
Author URI: https://smnarnold.com
Description: Thème de base pour apprendre à faire un site WordPress.
Version: 1.0
*/
</highlight>
          

<br>
<doclink href="https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/#basic-structure">style.css dans un thème WP</doclink>
    
<dots></dots>



<grostitre>Injection par défaut</grostitre>
<p>WordPress charge cette feuille de style par défaut. Il est donc possible d'ajouter des règles de style à l'intérieur de celle-ci et elles seront appliquées dès le prochain rafraichissement de&nbsp;page.</p>

<p>Sans cette injection, il faudrait passer par le fichier&nbsp;<incode>functions.php</incode>&nbsp;et utiliser la fonction&nbsp;<incode>wpenqueuestyle</incode>&nbsp;pour que la feuille de style soit&nbsp;chargée.</p>
    
 