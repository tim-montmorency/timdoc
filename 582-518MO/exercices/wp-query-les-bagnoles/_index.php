<?php
/**
 * @type     exercice
 * @title    WP Query - Les Bagnoles
 * @icon     images/thumb-mixin.jpg
 * @abstract Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film les Bagnoles.
 */
?>

<p>Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du <a href="https://fr.wikipedia.org/wiki/Cars_(film)" target="_blank">film les&nbsp;Bagnoles</a>.</p>


<p>Votre coéquipier a conçu un mockup HTML sur CodePen, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans&nbsp;WordPress.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/wp-query-les-bagnoles-apercu.png" alt="">

<dots></dots>
<grostitre>Matériel</grostitre>

<doclink href='https://codepen.io/tim-momo/pen/ExrYmam'>Pen de départ</doclink>


<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/acf-cars.json">acf-cars.json</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/data-cars.xml">data-cars.xml</mediafile>


<dots></dots>
<grostitre>Installation</grostitre>
        
<checklist>Installez en local une copie en&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/" onclick="event.stopPropagation()">"Français du Canada de WordPress</a>&nbsp;pour votre client.
Ajoutez les extensions Custom Post Type UI, WP Multilang et Advanced Custom Fields.
Installez le&nbsp;<a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://ex.smnarnold.com/wordpress/cars/cars-theme.zip">thème réalisé par votre collègue</a>.
Importez la structure du Post Personnalisé intitulé <em>"Voiture"</em> à l'aide de l'extrait de code se trouvant à la fin de ce bloc.
Importez la structure ACF du groupe de champs Voiture à l'aide du JSON en pièce jointe.
Importez les données des pages à l'aide du fichier XML en pièce jointe.
</checklist>
 


<pre><code class="hljs json">{<span class="hljs-attr">"voitures"</span>:{<span class="hljs-attr">"name"</span>:<span class="hljs-string">"voitures"</span>,<span class="hljs-attr">"label"</span>:<span class="hljs-string">"Voitures"</span>,<span class="hljs-attr">"singular_label"</span>:<span class="hljs-string">"voiture"</span>,<span class="hljs-attr">"description"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"public"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"publicly_queryable"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_ui"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_in_nav_menus"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"delete_with_user"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"show_in_rest"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"rest_base"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"rest_controller_class"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"has_archive"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"has_archive_string"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"exclude_from_search"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"capability_type"</span>:<span class="hljs-string">"post"</span>,<span class="hljs-attr">"hierarchical"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"rewrite"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"rewrite_slug"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"rewrite_withfront"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"query_var"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"query_var_slug"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"menu_position"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"show_in_menu"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_in_menu_string"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"menu_icon"</span>:<span class="hljs-string">"dashicons-car"</span>,<span class="hljs-attr">"supports"</span>:[<span class="hljs-string">"title"</span>,<span class="hljs-string">"editor"</span>,<span class="hljs-string">"thumbnail"</span>],<span class="hljs-attr">"taxonomies"</span>:[],<span class="hljs-attr">"labels"</span>:{<span class="hljs-attr">"menu_name"</span>:<span class="hljs-string">"Voitures"</span>,<span class="hljs-attr">"all_items"</span>:<span class="hljs-string">"Toutes les Voitures"</span>,<span class="hljs-attr">"add_new"</span>:<span class="hljs-string">"Ajouter"</span>,<span class="hljs-attr">"add_new_item"</span>:<span class="hljs-string">"Ajouter une voiture"</span>,<span class="hljs-attr">"edit_item"</span>:<span class="hljs-string">"Modifier une voiture"</span>,<span class="hljs-attr">"new_item"</span>:<span class="hljs-string">"Nouvelle voiture"</span>,<span class="hljs-attr">"view_item"</span>:<span class="hljs-string">"Voir la voiture"</span>,<span class="hljs-attr">"view_items"</span>:<span class="hljs-string">"Voir les voitures"</span>,<span class="hljs-attr">"search_items"</span>:<span class="hljs-string">"Chercher les voitures"</span>,<span class="hljs-attr">"not_found"</span>:<span class="hljs-string">"Aucune voiture trouv\u00e9e"</span>,<span class="hljs-attr">"not_found_in_trash"</span>:<span class="hljs-string">"Aucune voiture trouv\u00e9e dans la corbeille"</span>,<span class="hljs-attr">"parent"</span>:<span class="hljs-string">"Parent voiture:"</span>,<span class="hljs-attr">"featured_image"</span>:<span class="hljs-string">"Featured image for this voiture"</span>,<span class="hljs-attr">"set_featured_image"</span>:<span class="hljs-string">"Set featured image for this voiture"</span>,<span class="hljs-attr">"remove_featured_image"</span>:<span class="hljs-string">"Remove featured image for this voiture"</span>,<span class="hljs-attr">"use_featured_image"</span>:<span class="hljs-string">"Use as featured image for this voiture"</span>,<span class="hljs-attr">"archives"</span>:<span class="hljs-string">"voiture archives"</span>,<span class="hljs-attr">"insert_into_item"</span>:<span class="hljs-string">"Insert into voiture"</span>,<span class="hljs-attr">"uploaded_to_this_item"</span>:<span class="hljs-string">"Upload to this voiture"</span>,<span class="hljs-attr">"filter_items_list"</span>:<span class="hljs-string">"Filter Voitures list"</span>,<span class="hljs-attr">"items_list_navigation"</span>:<span class="hljs-string">"Voitures list navigation"</span>,<span class="hljs-attr">"items_list"</span>:<span class="hljs-string">"Voitures list"</span>,<span class="hljs-attr">"attributes"</span>:<span class="hljs-string">"Voitures attributes"</span>,<span class="hljs-attr">"name_admin_bar"</span>:<span class="hljs-string">"voiture"</span>,<span class="hljs-attr">"item_published"</span>:<span class="hljs-string">"voiture published"</span>,<span class="hljs-attr">"item_published_privately"</span>:<span class="hljs-string">"voiture published privately."</span>,<span class="hljs-attr">"item_reverted_to_draft"</span>:<span class="hljs-string">"voiture reverted to draft."</span>,<span class="hljs-attr">"item_scheduled"</span>:<span class="hljs-string">"voiture scheduled"</span>,<span class="hljs-attr">"item_updated"</span>:<span class="hljs-string">"voiture updated."</span>,<span class="hljs-attr">"parent_item_colon"</span>:<span class="hljs-string">"Parent voiture:"</span>},<span class="hljs-attr">"custom_supports"</span>:<span class="hljs-string">""</span>}}</code></pre>




<dots></dots>
<grostitre>Affichage</grostitre>
<checklist>Ajustez le menu afin qu'il affiche une option de changement de langue sous forme d'un drapeau.
Utilisez la fonctionnalité WP Query afin de récupérer tous les posts de type <em>"voitures"</em>.
Pour chacun de ces posts, recréez une carte en vous basant sur le Pen en pièce jointe dans le fichier <em>home.php</em>.
</checklist>


   
<dots></dots>
<grostitre>Notes de cours 📚</grostitre>


<?php intlink("../../wordpress/advanced-custom-fields/") ?>
<?php intlink("../../wordpress/posts-personnalises/") ?>
<?php intlink("../../wordpress/migration-de-donnees/") ?>
<?php intlink("../../wordpress/wp-query/") ?>


