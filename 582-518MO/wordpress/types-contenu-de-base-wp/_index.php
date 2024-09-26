<?php 
/**
 * @type     article
 * @title    Types de contenu dans WordPress
 * @icon     ../medias/icon.webp
 * @abstract Quels sont les types de contenu "built-in" dans WP
 * @index    99
 * @ref      web/wordpress
 */
?>

<p>À la base, sans extensions ajouté, Wordpress un struture définie. Cette base vous permet de manipuler différents contenus et les enregistrer dans la base de données. Voici donc cette base de types de contenu:</p>


<grostitre>Types de contenu</grostitre>
<ul>
    <li>Utilisateurs (Users)</li>
    <li>Commentaires (Comments)</li>
    <li>Type ce contenu (Post Type)</li>
</ul>

<grostitre>Types de post (post type)</grostitre>
<ul>
    <li>Article (Post)</li>
    <li>Page</li>
    <li>Images ou fichier ajouté dans une page (Attachment)</li>
    <li>Révision (Revision)</li>
    <li>Menu de navigation</li>
    <li>CSS ajouté (Custom CSS)</li>
    <li>Révision de l'auto-sauvegarde (Changeset)</li>
</ul>
<p>Vous pouvez consulter <a href="https://neliosoftware.com/blog/understanding-wordpress-content-types/" target="_blank" rel="noopener noreferrer">cet article</a> pour les définitions.</p>

<grostitre>Champs de base (article ou page)</grostitre>
<p>Voici une liste des champs standards dans les sarticle ou les pages de WordPress. Ces champs permettent d'y entrer du contenu relatif à l'article ou la page. Ceux qui vous sont importants à connaitre sont en rouge:</p>
<ul>
    <li><span class="inline-code">ID</span></li>
    <li><span class="inline-code">post_title</span></li>
    <li><span class="inline-code">post_content</li></span>
    <li><span class="inline-code">post_content_filtered</li></span>
    <li><span class="inline-code">post_excerpt</span></li>
    <li><span class="inline-code">post_author</span> </li>
    <li><span class="inline-code">post_date</li></span>
    <li><span class="inline-code">post_date_gmt</li></span>
    <li><span class="inline-code">comment_status</li></span>
    <li><span class="inline-code">ping_status</li></span>
    <li><span class="inline-code">post_password</li></span>
    <li><span class="inline-code">post_name</li></span>
    <li><span class="inline-code">to_ping</li></span>
    <li><span class="inline-code">pinged</li></span>
    <li><span class="inline-code">post_modified</li></span>
    <li><span class="inline-code">post_modified_gmt</li></span>
    <li><span class="inline-code">post_parent</span></li>
    <li><span class="inline-code">guid</li></span>
    <li><span class="inline-code">menu_order</li></span>
    <li><span class="inline-code">post_type</li></span>
    <li><span class="inline-code">post_mime_type</li></span>
    <li><span class="inline-code">comment_count</li></span>
</ul>
<p>Vous pouvez consulter <a href="https://docs.pods.io/displaying-pods/post-standard-fields-reference/" target="_blank" rel="noopener noreferrer">cet article</a> pour plus d'informations.</p>