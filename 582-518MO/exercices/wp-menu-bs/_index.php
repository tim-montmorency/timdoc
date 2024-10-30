<?php
/**
 * @type     exercice
 * @title    Jellycat - Menu WP+Bootstrap
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice vous générer un menu modifiable à partir de WordPress en intégrant la structure de la nav de Bootstrap.
 */
?>

<p>Pour cet exercice vous générer un menu modifiable à partir de WordPress en intégrant la structure de la nav de Bootstrap.</p>


<dots></dots>
<grostitre>Matériel</grostitre>
<mediafile src="images/jellycat-logo.png">Logo Jellycat</mediafile>
<mediafile src="https://tim-montmorency.com/timdoc/582-518MO/wordpress/medias/theme-de-base.zip">Thème de base</mediafile>


<dots></dots>
<grostitre>Requis</grostitre>

<checklist>
    Créez une nouvelle installation de WordPress.
    Installez et activez le <a href="https://tim-montmorency.com/timdoc/582-518MO/wordpress/medias/theme-de-base.zip" target="_blank" rel="noopener noreferrer">thème de base</a>.
    Dans VS Code, intégrez Bootstrap à votre thème via la méthode CDN (Content Delivery Network). Assurez-vous de toujours installer la dernière version de Bootstrap en passant pas le site officiel directement: <em>getbootstrap.com</em>.
    Dans VS Code, dans votre thème, ajouter un dossier <em>assets</em> et ajoutez-y l'image du logo Jellycat.
    Dans le tableau de bord de WP, créez les pages suivantes (simplement leur donner un titre, nul besoin de contenu): <br>- Accueil<br>- Nos collections<br>- Peluches en vedette <br>- À propos<br>- Où trouver près de chez vous?
    Configurez votre site afin que votre page d’accueil affiche la page statique nommée "Accueil" que vous venez de créer. Voir les notes de cours sur les modèles d'un thème WordPress, section accueil, pour vous rappeler comment faire ceci.
    Créez un menu de navigation principal contenant un lien vers chaque page. Conservez le même ordre que la liste des pages que vous venez juste de créer.
    Dans VS Code, dupliquez <em>about.php</em> et renommez votre nouveau fichier <em>front-page.php</em>. Ce modèle sera automatiquement appliqué sur votre nouvelle page d'accueil statique.
    Assurez vous que votre menu de navigation s'affiche à partir de <em>header.php</em> via la fonction <span class='inline-code'>wp_nav_menu()</span>.
    Dans <em>header.php</em>, ajoutez maintenant la structure HTML de la <a href="https://getbootstrap.com/docs/5.3/components/navbar/" target="_blank" rel="noopener noreferrer">composante de navbar de Bootstrap</a> autour du menu de navigation généré.
    Sur l'ancre <span class='inline-code'>.navbar-brand</span>, ajoutez un lien vers votre page d'accueil avec <a href="https://developer.wordpress.org/reference/functions/home_url/" target="_blank" rel="noopener noreferrer">home_url</a>.
    À l'intérieur de l'ancre <span class='inline-code'>.navbar-brand</span>, affichez l'image du logo de Jellycat. Référez-vous au note de cours sur les images au besoin.
    Stylisez en css l'image du logo afin de le redimensionner à votre guise.
    En lisant la documentation de la fonction <a href="https://developer.wordpress.org/reference/functions/wp_nav_menu/" target="_blank" rel="noopener noreferrer">wp_nav_menu()</a>, trouvez comment ajouter la classe <span class='inline-code'>.navbar-nav</span> au à la balise <span class='inline-code'>ul</span> du menu généré.
    Allez voir de résultat de la page et de sa navigation et via l'inspecteur vérifiez le résultat du HTML généré pour la navbar. Que manque-t-il? 
    Si tout a bien été, vous devriez constater qu'il ne manque plus que l'ajout de la classe <span class='inline-code'>.nav-item</span> sur les <span class='inline-code'>li</span> de la nav. Il faudra aussi ajouter la classe <span class='inline-code'>.nav-list</span> sur les <span class='inline-code'>a</span> de la nav. Comment? En utilisant les crochets (hook) de type filtre.
    Dans <em>function.php</em> de votre thème, ajoutez le code ci-bas (voir après le #18).
    Finalement, revenez dans <em>header.php</em> et à votre fonction d'affichage de menu <span class='inline-code'>wp_nav_menu</span>, ajoutez les 2 filtres que vous avez déclarés soient <br> <span class='inline-code'>'list_item_class' => 'nav-item'</span> et <br> <span class='inline-code'>'link_item_class' => 'nav-link'</span>.
</checklist>

<p>Code à ajouter dans function.php</p>
<highlight lang='php'>
/* --- Pour ajouter classe sur les <li> --- */
function add_menu_list_item_class($classes, $item, $args) {
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
  }
 add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


/* --- Pour ajouter classe sur les <a> --- */
function add_additional_class_on_a($classes, $item, $args){
    if (isset($args->link_item_class)) {
        $classes['class'] = $args->link_item_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
</highlight>



<dots></dots>

<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../wordpress/installation-en-local/"></intlink>
<intlink href="../../wordpress/menus/"></intlink>
<intlink href="../../wordpress/wp-crochets-action-filtre/"></intlink>

Configurer une page d'accueil statique
<intlink href="../../wordpress/modeles/#hierarchie"></intlink>

