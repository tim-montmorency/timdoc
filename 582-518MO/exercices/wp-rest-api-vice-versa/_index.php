<?php
/**
 * @type     exercice
 * @title    WP Rest API - Vice Versa
 * @icon     images/thumb-mixin.jpg
 * @abstract Créer un microsite permettant de présenter les protagonistes du film Vice Versa
 */
?>

<p>Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film <a target="_blank" href="https://www.pixar.com/feature-films/inside-out">Vice Versa</a> de&nbsp;Pixar.</p>

<p>Votre coéquipier a conçu un mockup HTML sur CodePen, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans WordPress via son Rest&nbsp;API.</p>



<p>Aperçu du résultat 👇</p>

<img src="images/vice-versa-resultat.png" alt="VIce Versa" style="box-shadow: 5px 5px 20px rgba(0,0,0,0.3">

<dots></dots>
<grostitre>Matériel</grostitre>

<doclink href='https://codepen.io/smnarnold/pen/VwzzPON?editors=1100'>Pen de départ</doclink>


<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
<mediafile src="https://ex.smnarnold.com/wordpress/vice-versa/data-vice-versa.xml">data-vice-versa.xml</mediafile>


<dots></dots>
<grostitre>Installation & migration</grostitre>
<checklist>Installez en local une copie en&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/">Français du Canada de WordPress</a>&nbsp;pour votre client.
Ajoutez l'extension Custom Post Type UI.
Installez le&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://ex.smnarnold.com/wordpress/vice-versa/vice-versa-theme.zip">thème réalisé par votre collègue</a>.
Importez la structure du Post Personnalisé intitulé&nbsp;<em>"Émotions"</em>&nbsp;à l'aide de l'extrait de code se trouvant à la fin de ce bloc.
Importez les données des pages à l'aide du fichier XML en pièce jointe.<</checklist>



<pre><code class="hljs json">{<span class="hljs-attr">"emotions"</span>:{<span class="hljs-attr">"name"</span>:<span class="hljs-string">"emotions"</span>,<span class="hljs-attr">"label"</span>:<span class="hljs-string">"\u00c9motions"</span>,<span class="hljs-attr">"singular_label"</span>:<span class="hljs-string">"\u00c9motion"</span>,<span class="hljs-attr">"description"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"public"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"publicly_queryable"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_ui"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_in_nav_menus"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"delete_with_user"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"show_in_rest"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"rest_base"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"rest_controller_class"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"has_archive"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"has_archive_string"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"exclude_from_search"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"capability_type"</span>:<span class="hljs-string">"post"</span>,<span class="hljs-attr">"hierarchical"</span>:<span class="hljs-string">"false"</span>,<span class="hljs-attr">"rewrite"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"rewrite_slug"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"rewrite_withfront"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"query_var"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"query_var_slug"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"menu_position"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"show_in_menu"</span>:<span class="hljs-string">"true"</span>,<span class="hljs-attr">"show_in_menu_string"</span>:<span class="hljs-string">""</span>,<span class="hljs-attr">"menu_icon"</span>:<span class="hljs-string">"dashicons-admin-users"</span>,<span class="hljs-attr">"supports"</span>:[<span class="hljs-string">"title"</span>,<span class="hljs-string">"editor"</span>,<span class="hljs-string">"thumbnail"</span>],<span class="hljs-attr">"taxonomies"</span>:[],<span class="hljs-attr">"labels"</span>:{<span class="hljs-attr">"menu_name"</span>:<span class="hljs-string">"\u00c9motions"</span>,<span class="hljs-attr">"all_items"</span>:<span class="hljs-string">"Toutes les \u00e9motions"</span>,<span class="hljs-attr">"add_new"</span>:<span class="hljs-string">"Ajouter une nouvelle"</span>,<span class="hljs-attr">"add_new_item"</span>:<span class="hljs-string">"Ajouter une \u00e9motion"</span>,<span class="hljs-attr">"edit_item"</span>:<span class="hljs-string">"Modifier une \u00e9motion"</span>,<span class="hljs-attr">"new_item"</span>:<span class="hljs-string">"Nouvelle \u00e9motion"</span>,<span class="hljs-attr">"view_item"</span>:<span class="hljs-string">"Voir l'\u00e9motion"</span>,<span class="hljs-attr">"view_items"</span>:<span class="hljs-string">"Voir les \u00e9motions"</span>,<span class="hljs-attr">"search_items"</span>:<span class="hljs-string">"Rechercher dans les \u00e9motions"</span>,<span class="hljs-attr">"not_found"</span>:<span class="hljs-string">"Aucune \u00e9motion trouv\u00e9e"</span>,<span class="hljs-attr">"not_found_in_trash"</span>:<span class="hljs-string">"Aucune \u00e9motion dans la corbeille"</span>,<span class="hljs-attr">"parent"</span>:<span class="hljs-string">"Parent de \u00e9motion:"</span>,<span class="hljs-attr">"featured_image"</span>:<span class="hljs-string">"Image de pr\u00e9sentation de \u00e9motion"</span>,<span class="hljs-attr">"set_featured_image"</span>:<span class="hljs-string">"Configurer image de pr\u00e9sentation de l'\u00e9motion"</span>,<span class="hljs-attr">"remove_featured_image"</span>:<span class="hljs-string">"Enlever l'image de pr\u00e9sentation de \u00e9motion"</span>,<span class="hljs-attr">"use_featured_image"</span>:<span class="hljs-string">"Utiliser comme image de pr\u00e9sentation pour cette \u00e9motion"</span>,<span class="hljs-attr">"archives"</span>:<span class="hljs-string">"Archive d'\u00e9motions"</span>,<span class="hljs-attr">"insert_into_item"</span>:<span class="hljs-string">"Ins\u00e9rer dans les \u00e9motions"</span>,<span class="hljs-attr">"uploaded_to_this_item"</span>:<span class="hljs-string">"T\u00e9l\u00e9verser vers cette \u00e9motion"</span>,<span class="hljs-attr">"filter_items_list"</span>:<span class="hljs-string">"Filtrer la liste des \u00e9motions"</span>,<span class="hljs-attr">"items_list_navigation"</span>:<span class="hljs-string">"\u00c9motions list navigation"</span>,<span class="hljs-attr">"items_list"</span>:<span class="hljs-string">"\u00c9motions list"</span>,<span class="hljs-attr">"attributes"</span>:<span class="hljs-string">"\u00c9motions attributes"</span>,<span class="hljs-attr">"name_admin_bar"</span>:<span class="hljs-string">"\u00c9motion"</span>,<span class="hljs-attr">"item_published"</span>:<span class="hljs-string">"\u00c9motion publi\u00e9e"</span>,<span class="hljs-attr">"item_published_privately"</span>:<span class="hljs-string">"\u00c9motion published privately."</span>,<span class="hljs-attr">"item_reverted_to_draft"</span>:<span class="hljs-string">"\u00c9motion reverted to draft."</span>,<span class="hljs-attr">"item_scheduled"</span>:<span class="hljs-string">"\u00c9motion scheduled"</span>,<span class="hljs-attr">"item_updated"</span>:<span class="hljs-string">"\u00c9motion updated."</span>,<span class="hljs-attr">"parent_item_colon"</span>:<span class="hljs-string">"Parent de \u00e9motion:"</span>},<span class="hljs-attr">"custom_supports"</span>:<span class="hljs-string">""</span>}}</code></pre>


<dots></dots>
<grostitre>Affichage</grostitre>
<checklist>Utilisez le Rest API de WordPress afin de récupérer tous les posts de type&nbsp;<em>"émotions"</em> et ordonner les en ordre alphabétique.
Pour chacun de ces posts, recréez une carte en vous basant sur le Pen en pièce jointe dans le fichier&nbsp;<em>home.php</em>.</checklist>

   
<dots></dots>
<grostitre>Notes de cours 📚</grostitre>



<?php intlink("../../wordpress/posts-personnalises/") ?>
<?php intlink("../../wordpress/migration-de-donnees/") ?>
<?php intlink("../../wordpress/rest-api/") ?>


