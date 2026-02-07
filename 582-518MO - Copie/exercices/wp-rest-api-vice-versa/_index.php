<?php
/**
 * @type     exercice
 * @title    WP Rest API - Vice Versa
 * @icon     images/thumb.webp
 * @abstract Créer un microsite permettant de présenter les protagonistes du film Vice Versa
 */
?>

<p>Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film <a target="_blank" href="https://www.pixar.com/feature-films/inside-out">Vice Versa</a> de&nbsp;Pixar.</p>

<p>Votre coéquipier a conçu un mockup HTML sur CodePen, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans WordPress via son Rest&nbsp;API.</p>



<p>Aperçu du résultat 👇</p>

<img src="images/vice-versa-resultat.png" alt="VIce Versa" style="box-shadow: 5px 5px 20px rgba(0,0,0,0.3)">

<dots></dots>
<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/bGXOmeP">Pen de départ</doclink>


<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
<!--<mediafile src="https://ex.smnarnold.com/wordpress/vice-versa/data-vice-versa.xml">data-vice-versa.xml</mediafile>-->
<mediafile src="images/data-vice-versa-mm.xml.zip">data-vice-versa-mm.xml.zip</mediafile>
<mediafile src="images/scf-structure-emotions-post-type.json.zip">scf-structure-emotions-post-type.json.zip</mediafile>



<dots></dots>
<grostitre>Installation & migration</grostitre>
<checklist>Installez en local une copie en&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/">Français du Canada de WordPress</a>&nbsp;pour votre client.
Ajoutez l'extension <em>Secure Custom Fields (SCF)</em>.
Installez le&nbsp;<a target="_blank" rel="noopener noreferrer" href="images/theme-vice-versa.zip">thème réalisé par votre collègue</a>.
Importez la <em>STRUCTURE</em> du <strong>Type de publication</strong> (post type) intitulé&nbsp;<em>"Émotions"</em>&nbsp;à l'aide du fichier JSON partagé ci-haut que vous aurez préalablement téléchargé et désarchivé (unzip). 
Vous devriez maintenant voir la section <em>Émotions</em> de la barre de gauche du tableau de bord WordPress. Vous devriez aussi voir ce type de publication apparraitre dans SCF / Post Types.
Importez maintenant les <em>DONNÉES</em> des pages à l'aide du fichier XML partagé ci-haut que vous aurez préalablement téléchargé et désarchivé (unzip).
Dans le tableau de bord de WordPress, vous devriez maintenant voir les 5 émotions apparaitre dans la section <em>Émotions</em> de la barre de gauche.
</checklist>

<!--
{
    "emotions": {
        "name": "emotions",
        "label": "\u00c9motions",
        "singular_label": "\u00c9motion",
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
        "menu_icon": "dashicons-admin-users",
        "supports": [
            "title",
            "editor",
            "thumbnail"
        ],
        "taxonomies": [],
        "labels": {
            "menu_name": "\u00c9motions",
            "all_items": "Toutes les \u00e9motions",
            "add_new": "Ajouter une nouvelle",
            "add_new_item": "Ajouter une \u00e9motion",
            "edit_item": "Modifier une \u00e9motion",
            "new_item": "Nouvelle \u00e9motion",
            "view_item": "Voir l'\u00e9motion",
            "view_items": "Voir les \u00e9motions",
            "search_items": "Rechercher dans les \u00e9motions",
            "not_found": "Aucune \u00e9motion trouv\u00e9e",
            "not_found_in_trash": "Aucune \u00e9motion dans la corbeille",
            "parent": "Parent de \u00e9motion:",
            "featured_image": "Image de pr\u00e9sentation de \u00e9motion",
            "set_featured_image": "Configurer image de pr\u00e9sentation de l'\u00e9motion",
            "remove_featured_image": "Enlever l'image de pr\u00e9sentation de \u00e9motion",
            "use_featured_image": "Utiliser comme image de pr\u00e9sentation pour cette \u00e9motion",
            "archives": "Archive d'\u00e9motions",
            "insert_into_item": "Ins\u00e9rer dans les \u00e9motions",
            "uploaded_to_this_item": "T\u00e9l\u00e9verser vers cette \u00e9motion",
            "filter_items_list": "Filtrer la liste des \u00e9motions",
            "items_list_navigation": "\u00c9motions list navigation",
            "items_list": "\u00c9motions list",
            "attributes": "\u00c9motions attributes",
            "name_admin_bar": "\u00c9motion",
            "item_published": "\u00c9motion publi\u00e9e",
            "item_published_privately": "\u00c9motion published privately.",
            "item_reverted_to_draft": "\u00c9motion reverted to draft.",
            "item_scheduled": "\u00c9motion scheduled",
            "item_updated": "\u00c9motion updated.",
            "parent_item_colon": "Parent de \u00e9motion:"
        },
        "custom_supports": ""
    }
}
-->


<dots></dots>
<grostitre>Affichage</grostitre>
<checklist>Dans la page d'accueil de votre site, via le modèle <em>home.php</em> du thème, utilisez le Rest API de WordPress afin de récupérer tous les posts de type&nbsp;<em>"émotions"</em>.
Pour chacun de ces posts, recréez une carte en vous basant sur le Pen en pièce jointe.
Assurez-vous d'afficher les émotions dans le même ordre que le Pen, c'est-à-dire en ordre alphabétique.</checklist>

   
<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../wordpress/posts-personnalises/"></intlink>
<intlink href="../../wordpress/advanced-custom-fields/#export"></intlink>
<intlink href="../../wordpress/migration-de-donnees/"></intlink>
<intlink href="../../wordpress/rest-api/"></intlink>
<intlink href='../../../582-424MO/javascript/fetch-api/'></intlink> <br>
<doclink href='https://smnarnold.com/cours/javascript/manipulation-des-contenus'>Manipulation des contenus du DOM en JavaScript</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/json'>JSON</doclink> <br>
<doclink href='https://smnarnold.com/cours/javascript/litteraux-de-gabarits'>Littéraux de gabarit</doclink>



