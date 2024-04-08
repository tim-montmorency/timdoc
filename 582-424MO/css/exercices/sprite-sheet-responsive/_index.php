<?php

/**
 * @type     exercice
 * @title    Monstre qui marche - Spritesheet responsive
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez faire ajuster la taille de l'animation de la spritesheet pour qu'elle s'ajuste à 50% de la largeur de la fenêtre.
 */
?>



<p>Pour cet exercice, vous devez faire ajuster la taille de l'animation de la <em>spritesheet</em> pour qu'elle s'ajuste à 50% de la largeur de la fenêtre.</p>


<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src="images/demo_responsive_spritesheet.mp4"></clipasset>

<dots></dots>
   

<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/gOBaxNr">Pen de départ</doclink>

<p>Faites un <incode>fork</incode> du Pen de départ.</p>

<checklist>
  Ajoutez du CSS afin que l'animation s'affiche toujours complètement et que sa taille soit responsive par rapport à la dimension de la fenêtre.
  Je vous conseille d'abord de faire pause sur la première image via la propriété css <span class='inline-code'>animation-play-state</span>
  Ajustez le <span class='inline-code'>background-size</span> avec 2 valeurs en pourcentage (%) pour n'afficher que la première image de la série.
  Ensuite, dans la définition de l'animation elle même (<span class='inline-code'>@keyframes</span>), ajustez le <span class='inline-code'>background-position</span> final afin qu'il soit aussi défini en pourcentage (%). Notez qu'il y a 19 images dans la <em>spritesheet</em> et que chaque image a une dimension originale de 700px par 700px;
</checklist>