<?php
/**
 * @type     exercice
 * @title    WP Query - Les Bagnoles
 * @icon     images/wp-query-les-bagnoles-apercu.png
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
<p>Pour télécharger chaque fichier, aller à l'URL du fichier dans votre navigateur, ensuite faites clic-droit dans la page et "enregistrer sous"</p> 
<mediafile src="https://ex.smnarnold.com/wordpress/cars/acf-cars.json">acf-cars.json</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/data-cars.xml">data-cars.xml</mediafile>


<dots></dots>
<grostitre>Installation</grostitre>
        
<checklist>
Installez en local une copie en&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/download/#download-install" onclick="event.stopPropagation()">"Français du Canada de WordPress"</a>&nbsp;pour votre client.
Ajoutez les extensions Custom Post Type UI, WP Multilang et Advanced Custom Fields.
Installez le&nbsp;<a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://ex.smnarnold.com/wordpress/cars/cars-theme.zip">thème réalisé par votre collègue</a>.
Importez la structure du Post Personnalisé intitulé <em>"Voiture"</em> à l'aide de l'extrait de code se trouvant à la fin de ce bloc.
Importez la structure ACF du groupe de champs Voiture à l'aide du JSON en pièce jointe.
Importez les données des pages à l'aide du fichier XML en pièce jointe.
</checklist>
 


<highlight lang="json">
{
    "voitures": {
        "name": "voitures",
        "label": "Voitures",
        "singular_label": "voiture",
        "description": "",
        "public": "true",
        "publicly_queryable": "true",
        "show_ui": "true",
        "show_in_nav_menus": "true",
        "delete_with_user": "false",
        "show_in_rest": "true",
        "rest_base": "",
        "rest_controller_class": "",
        "has_archive": "false",
        "has_archive_string": "",
        "exclude_from_search": "false",
        "capability_type": "post",
        "hierarchical": "false",
        "rewrite": "true",
        "rewrite_slug": "",
        "rewrite_withfront": "true",
        "query_var": "true",
        "query_var_slug": "",
        "menu_position": "",
        "show_in_menu": "true",
        "show_in_menu_string": "",
        "menu_icon": "dashicons-car",
        "supports": [
            "title",
            "editor",
            "thumbnail"
        ],
        "taxonomies": [],
        "labels": {
            "menu_name": "Voitures",
            "all_items": "Toutes les Voitures",
            "add_new": "Ajouter",
            "add_new_item": "Ajouter une voiture",
            "edit_item": "Modifier une voiture",
            "new_item": "Nouvelle voiture",
            "view_item": "Voir la voiture",
            "view_items": "Voir les voitures",
            "search_items": "Chercher les voitures",
            "not_found": "Aucune voiture trouv\u00e9e",
            "not_found_in_trash": "Aucune voiture trouv\u00e9e dans la corbeille",
            "parent": "Parent voiture:",
            "featured_image": "Featured image for this voiture",
            "set_featured_image": "Set featured image for this voiture",
            "remove_featured_image": "Remove featured image for this voiture",
            "use_featured_image": "Use as featured image for this voiture",
            "archives": "voiture archives",
            "insert_into_item": "Insert into voiture",
            "uploaded_to_this_item": "Upload to this voiture",
            "filter_items_list": "Filter Voitures list",
            "items_list_navigation": "Voitures list navigation",
            "items_list": "Voitures list",
            "attributes": "Voitures attributes",
            "name_admin_bar": "voiture",
            "item_published": "voiture published",
            "item_published_privately": "voiture published privately.",
            "item_reverted_to_draft": "voiture reverted to draft.",
            "item_scheduled": "voiture scheduled",
            "item_updated": "voiture updated.",
            "parent_item_colon": "Parent voiture:"
        },
        "custom_supports": ""
    }
}
</highlight>




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


