<?php
/**
 * @type     exercice
 * @title    WP Query - Les Bagnoles
 * @icon     assets/thumb.webp
 * @abstract Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du film les Bagnoles.
 */
?>

<p>Pour cet exercice vous et votre coéquipier devez créer un microsite permettant de présenter les protagonistes du <a href="https://fr.wikipedia.org/wiki/Cars_(film)" target="_blank">film les&nbsp;Bagnoles</a>.</p>


<p>Votre coéquipier a conçu un mockup HTML sur CodePen, ainsi que le thème WordPress du site. Il compte maintenant sur vous pour le rendre dynamique dans&nbsp;WordPress.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/wp-query-les-bagnoles-apercu.png" alt="">

<dots></dots>
<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/ExrYmam">Pen de départ</doclink>


<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>
<p>Pour télécharger chaque fichier, aller à l'URL du fichier dans votre navigateur, ensuite faites clic-droit dans la page et "enregistrer sous"</p> 
<mediafile src="asssets/acf-export-cars-structure.json.zip">acf-export-cars-structure.json.zip</mediafile>
<mediafile src="asssets/data-cars.xml.zip">data-cars.xml.zip</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/sally-carrera.png">image sally carrera</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/chick-hicks.jpg">image chick hicks</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/strip-weathers.png">image strip wathers</mediafile>
<mediafile src="https://ex.smnarnold.com/wordpress/cars/flash-mcqueen.png">image flash mcqueena</mediafile>


<dots></dots>
<grostitre>Installation</grostitre>
        
<checklist>
Installez en local une copie en&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://fr-ca.wordpress.org/download/#download-install" onclick="event.stopPropagation()">"Français du Canada de WordPress"</a>&nbsp;pour votre client.
Ajoutez les extensions WP Multilang et Secure Custom Fields.
Installez le&nbsp;<a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://ex.smnarnold.com/wordpress/cars/cars-theme.zip">thème réalisé par votre collègue</a>.
Importez la structure du Post Personnalisé intitulé <em>"Voiture"</em> ainsi que la structure ACF du groupe de champs Voiture à l'aide du JSON en pièce jointe.
Importez les données des pages à l'aide du fichier XML en pièce jointe.
</checklist>
 


<dots></dots>
<grostitre>Affichage</grostitre>
<checklist>Ajustez le menu afin qu'il affiche une option de changement de langue sous forme d'un drapeau.
Utilisez la fonctionnalité WP Query afin de récupérer tous les posts de type <em>"voitures"</em>.
Pour chacun de ces posts, recréez une carte en vous basant sur le Pen en pièce jointe dans le fichier <em>home.php</em>.
</checklist>


   
<dots></dots>
<grostitre>Notes de cours 📚</grostitre>


<intlink href="../../wordpress/advanced-custom-fields/"></intlink>
<intlink href="../../wordpress/posts-personnalises/"></intlink>
<intlink href="../../wordpress/migration-de-donnees/"></intlink>
<intlink href="../../wordpress/wp-query/"></intlink>


