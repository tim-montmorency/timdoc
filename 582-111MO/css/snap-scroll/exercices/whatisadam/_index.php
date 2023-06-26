<?php 
/**
 * @type     exercice
 * @title    Scroll-snap - WhatIsAdam
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devrez réaliser un carrousel CSS mettant en valeur 12 œuvres de l’artiste québécois WhatIsAdam.
 */
?>

<p class="spacer">Pour cet exercice, vous devrez réaliser un carrousel CSS mettant en valeur 12 œuvres de l’artiste québécois <a target="_blank" href="http://www.whatisadam.com/">WhatIsAdam</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/scroll-snap-whatisadam.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<h3>Médias</h3>

<mediafile src="images/1.webp">Oeuvre #1</mediafile>
<mediafile src="images/2.webp">Oeuvre #2</mediafile>
<mediafile src="images/3.webp">Oeuvre #3</mediafile>
<mediafile src="images/4.webp">Oeuvre #4</mediafile>
<mediafile src="images/5.webp">Oeuvre #5</mediafile>
<mediafile src="images/6.webp">Oeuvre #6</mediafile>
<mediafile src="images/7.webp">Oeuvre #7</mediafile>
<mediafile src="images/8.webp">Oeuvre #8</mediafile>
<mediafile src="images/9.webp">Oeuvre #9</mediafile>
<mediafile src="images/10.webp">Oeuvre #10</mediafile>
<mediafile src="images/11.webp">Oeuvre #11</mediafile>
<mediafile src="images/12.webp">Oeuvre #12</mediafile>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
  Créez-vous un Pen avec fond blanc ⚪️ sur <a onclick="event.stopPropagation();" target="_blank" href="https://codepen.io/">CodePen</a> afin de réaliser cet exercice.
  Créez ensuite l'élément correspondant à votre carrousel. Celui-ci doit prendre toute la largeur, ainsi que la moitié de la hauteur de la page et être centré verticalement ↕️ dans celle-ci.
  Insérez-les 12 images listées ci-dessus ☝️dans votre carrousel. Faites en sorte que chacune d'entre elles prenne toute la hauteur de votre carrousel.<br><br>Par défaut, vos images n'auront pas l'espace nécessaire afin de s'afficher une à côté de l'autre, il faudra donc les forcer en appliquant la propriété <span class="inline-code">white-space: nowrap;</span> au carrousel. Cette propriété permet de spécifier que des éléments <span class="inline-code">inline</span> contenus dans l'élément en question n'ont pas le droit de faire de retour à la ligne, même si l'espace vient à manquer.
  Assurez-vous que seule la barre de défilement horizontale est visible ↔️. Celle verticale ne doit en aucun cas être visible 🚫.
  Faites en sorte que toutes les oeuvres <em>"snap"</em> au centre de votre carrousel lorsque l'utilisateur cesse de faire défiler le carrousel.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../snap-scroll/"); ?>

<dots></dots>