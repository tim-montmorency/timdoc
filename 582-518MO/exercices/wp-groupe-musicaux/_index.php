<?php
/**
 * @type     exercice
 * @title    Wordpress - Groupes musicaux
 * @icon     images/
 * @abstract Vous evez créer un microsite permettant de présenter les informations de quelques groupes de musique.
 */
?>

<p>Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les groupes de musiques suivant: </p>
<ul>
     <li style="margin: 0">Muse</li>
     <li style="margin: 0">Röksopp</li>
     <li style="margin: 0">Billy Talent</li>
     <li style="margin: 0">Metric</li>
     <li style="margin: 0">Twenty øne piløts</li>
</ul>


<grostitre>Partie 1 de l'exercice</grostitre>
<p><a href="https://app.wooclap.com/LBOOEE" target="_blank" rel="noopener noreferrer">Questionnaire analyse - groupe vendredi</a> code Wooclap: LBOOEE <br>
<a href="https://app.wooclap.com/NIXSJS" target="_blank" rel="noopener noreferrer">Questionnaire analyse - groupe lundi</a> code Wooclap: NIXSJS</p>

<h3>Matériel</h3>
<doclink href='https://marie-test.tim-momo.com/wordpress/'>Site Web sur lequel vous fier</doclink>

<dots></dots>
<grostitre>Partie 2 de l'exercice</grostitre>

<p>Votre coéquipier a conçu un mockup HTML, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans&nbsp;WordPress.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src='medias/demo-groupe-musique.mp4'></clipasset>

<h3>Matériel</h3>
<doclink href='https://marie-test.tim-momo.com/wordpress/'>Site Web sur lequel vous fier</doclink><br>
<doclink href='https://codepen.io/tim-momo/pen/poGbPmV'>Code Pen de l'accueil</doclink><br>
<doclink href='https://codepen.io/tim-momo/pen/VwgKZmg'>Code Pen de la page d'un groupe (Muse)</doclink>
<br>
<mediafile src="medias/acf_custom_fields_post_types.json">Structure des types de contenu personnalisés et champs personnalisés</mediafile>
<mediafile src="medias/contenu_wordpress.xml">Contenu WordPress</mediafile>
<mediafile src="medias/theme-groupes-musique.zip">Thème pour démarrer</mediafile>

<br>
<grostitre>Requis</grostitre>
<checklist>Installez en local une copie en <a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/" onclick="event.stopPropagation()">Français du Canada de WordPress</a> pour votre client.
Installez le <a target="_blank" href="medias/theme-groupes-musique.zip" onclick="event.stopPropagation()">thème réalisé par votre collègue</a> et activez-le.
Installez l'extension <a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/plugins/advanced-custom-fields/" onclick="event.stopPropagation()">Advanced Custom Fields</a>.
Importez les types de contenus et les champs personnalisés avec le json fourni ci-haut.
Importez les contenus déjà préparés avec le fichier .xml fourni ci-haut.
Créez une page qui fera office d'accueil et configurez la via le tableau de bord de WordPress.
Dans le modèle de l'accueil, faites afficher tous les groupes de musiques avec <em>WP-Query</em> ou <em>REST API</em>, à votre choix. Assurez-vous de vous fier à la stucture HTML du site Web fourni.
Construisez ensuite le modèle de la page du groupe de musique. Assurez-vous de vous fier à la stucture HTML du site Web fourni. Notez que vous devez créer le fichier du modèle (template).
</checklist>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<?php intlink("../../wordpress/migration-de-donnees/") ?>
<?php intlink("../../wordpress/modeles/") ?>
<?php intlink("../../wordpress/wp-query/") ?>
<?php intlink("../../wordpress/rest-api/") ?>
<?php intlink("../../wordpress/advanced-custom-fields/") ?>
<?php intlink("../../wordpress/images-dans-modeles/") ?>
