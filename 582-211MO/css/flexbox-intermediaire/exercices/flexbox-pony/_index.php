<?php

/**
 * @type     exercice
 * @title    Flexbox Pony
 * @icon     images/thumb.webp
 * @abstract Pour cet exercice vous devrez recréer une navigation responsive pour la marque de vêtements montréalaise Pony. Afin de réussir, vous aurez...
 * */
?>

<p>Pour cet exercice vous devrez recréer une navigation responsive pour la<a href="https://www.ponymtl.com/"> marque de vêtements montréalaise Pony</a>. Afin de réussir, vous aurez besoin de créer une mise en page flexbox.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/flexbox-pony-resultat.mp4"></clipasset>

<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/RwOrQXr">Pen de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#b894d2</color>
<color>#757575</color>
<color> #fff</color>
<color> #000</color>

<h3>Médias 🖼️</h3>

<mediafile src="./images/pony.jpeg">Pony</mediafile>

<dots></dots>

<grostitre>Requis de base</grostitre>

<timg src="./images/pony-mobile.png"></timg>

<checklist>
    La navigation <em>(.nav)</em> doit avoir un fond blanc, une largeur de 200px et prendre toute la hauteur de la page. Afin de laisser le contenu à l'intérieur respirer, une marge intérieure de 20px doit être présente de tous les côtés.
    Le logo <em>PONY</em> doit avoir une hauteur de 50px et ne doit pas être déformé.
    Les liens doivent s'afficher un en dessous de l'autre avec un espace de 20px entre eux. Ils doivent en avoir une taille de 13px, être en majuscules, ne pas avoir de ligne de soulignement et la puce ne doit pas être visible. Ils doivent être gris par défaut et devenir noirs lorsque survolés.
    Le visage de Pony doit être affiché en arrière-plan de l'élément avec la classe <incode>.face</incode>. Avoir une dimension de 50px par 50px, être parfaitement rond et être positionné en bas et au centre de la navigation à l'aide de flexbox.
</checklist>

<dots></dots>

<grostitre>Requis tablette et plus</grostitre>

<p>À partir de 650px et plus, l'affichage de la navigation doit changer afin de tirer profit de l'espace horizontal disponible ↔️.</p>

<timg src="./images/pony-desktop.png"></timg>

<checklist>
    La navigation doit prendre toute la largeur de la page et sa hauteur doit s'ajuster en fonction de son contenu.
    Les éléments de la navigation <em>(logo, liste de liens et visage)</em> doivent s'afficher le plus loin possible les uns des autres et être centrés verticalement les uns par rapport aux autres.
    La liste de lien doit prendre tout l'espace disponible entre le logo et le visage et les liens doivent se répartir également dans l'espace restant.
</checklist>