<?php 
/**
 * @type     exercice
 * @title    <span style="font-size: 0.9em;">Pink Floyd - The Dark Side of the Moon</span>
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette du mytique album "The Dark Side of the Moon" du groupe Pink Floyd.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette du mytique album <a target="_blank" href="https://open.spotify.com/album/4LH4d3cOWNNsVw41Gqt2kv">"The Dark Side of the Moon"</a> du groupe <a target="_blank" href="https://fr.wikipedia.org/wiki/Pink_Floyd">Pink Floyd</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./pink-floyd-the-dark-side-of-the-moon.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="https://fonts.google.com/specimen/Cormorant+Garamond">Cormorant Garamond 300</doclink>

<h3>Couleurs 🎨</h3>

<color>#111015</color>
<color>#7b7b7b</color>
<color>#dcdcdc</color>
<br>
<color>#bc142d</color>
<color>#df7a0e</color>
<color>#fafc01</color>
<br>
<color>#68b602</color>
<color>#54b3df</color>
<color>#564080</color>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier la portion <span class="inline-code">&lt;body&gt;</span> du fichier HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>mauve</em> au <em>rouge</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>charcoal</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis prisme</grostitre>

<checklist>
  Le prisme (<span class="inline-code">.prism</span>) doit être positionné de manière absolue à <em>25%</em> du haut, être centré horizontalement avoir une largeur de <em>32%</em>, une hauteur de <em>28%</em> et être de couleur <em>blanc gris</em>.
  À l'aide de <span class="inline-code">clip-path</span>, donnez-lui une forme triangulaire équilatérale et appliquez-lui un <span class="inline-code">z-index</span> de <em>1</em>.
  Utilisez <span class="inline-code">::before</span> afin de créer un deuxième layer positionné de manière absolue à <em>3%</em> du haut et <em>2.5%</em> de la gauche, avoir une largeur et une hauteur de <em>95%</em> être de couleur <em>grise</em> et avoir <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/inherit">le même masquage que son parent</a>.
  Utilisez <span class="inline-code">::after</span> afin de créer un troisième layer positionné de manière absolue à <em>7%</em> du haut et <em>5.5%</em> de la gauche, avoir une largeur et une hauteur de <em>89%</em> être de couleur <em>charcoal</em> et avoir <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/inherit">le même masquage que son parent</a>.
</checklist>

<grostitre>Requis rayon</grostitre>

<checklist>
  Le rayon (<span class="inline-code">.ray</span>) doit être positionné de manière absolue à <em>50%</em> du haut et collé sur la gauche, avoir une longueur de <em>44%</em>, une largeur de <em>0.5%</em> et être de couleur <em>blanc gris</em>.
  Changez son origine de transformation de sorte qu'il soit positionné verticalement au centre du rayon et complètement à gauche.
  Appliquez-lui une rotation de <em>-15deg</em>.
  Le conteneur du gradient (<span class="inline-code">.gradient-wrapper</span>) doit être positionné de manière absolue à <em>34.8%</em> du haut et <em>42.8%</em> de la gauche ainsi qu'avoir une largeur de <em>11%</em> et une hauteur de <em>6%</em>.
  Appliquez-lui une rotation de <em>15deg</em> et un <span class="inline-code">z-index</span> de <em>2</em> tout en vous assurant que rien ne puisse en dépasser.
  Le gradient (<span class="inline-code">.gradient</span>) doit être positionné de manière absolue à <em>50%</em> du haut et prendre tout l'espace disponible en hauteur et en largeur.
  Il doit avoir avoir un gradient allant vers la droite partant du <em>blanc gris</em> à <em>6%</em> pour aller au <em>transparent</em> à <em>60%</em>.
  Appliquez-lui une rotation de <em>-26deg</em>.
</checklist>

<grostitre>Requis arc-en-ciel</grostitre>

<checklist>
  Le conteneur d'arc-en-ciel (<span class="inline-code">.rainbow-wrapper</span>) doit être positionné de manière absolue à <em>38%</em> du haut et <em>20%</em> de la gauche, prendre tout l'espace disponible en largeur et en hauteur et avoir une <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/perspective">perspective</a> de <em>70vmin</em>.
  L'arc-en-ciel (<span class="inline-code">.rainbow</span>) doit avoir une argeur de <em>10%</em> de son parent et prendre tout l'espace disponible en hauteur.
  Pour de créer un gradient arc-en-ciel solide, vous devez dupliquer les couleurs afin d'éliminer la transition. <em>(rouge 16.6%, orange 16.6%, orange 33.2%, jaune 33.2%, jaune 49.8%, vert 49.8%, vert 66.4%, bleu 66.4%, bleu 83%, mauve 83%)</em>
  Donnez lui une <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-function/rotate3d">rotation3d</a> de <em>68deg</em> ayant <em>100</em> sur l'axe des X, <em>-150</em> sur l'axe des Y et <em>176</em> sur l'axe des Z.
</checklist>

<grostitre>Requis auto-collant</grostitre>

<checklist>
  L'auto-collant (<span class="inline-code">.sticker</span>) doit être positionné de manière absolue à <em>5%</em> du bas et <em>5%</em> de la gauche, avoir une largeur de <em>23%</em>, avoir des proportions carrées, avoir une <u>bordure intérieur</u> de <em>0.1vmin</em> solide <em>blanc gris</em>, être de forme ronde et avoir une rotation de <em>10deg</em>.
  Utilisez le pseudo-élément <span class="inline-code">::before</span> afin de créer un deuxième layer circulaire positionné au centre de son parent ayant une largeur et une hauteur de <em>95%</em> et une bordure de <em>0.1vmin</em> solide de couleur <em>blanc gris</em>.
  Importez la Google font <span class="inline-code">Cormorant Garamond 300</span> en l'insérant dans le <span class="inline-code">head</span> du fichier HTML.
  Le libellé (<span class="inline-code">h1</span>) doit être positionné au centre de son parent, avoir une marge extérieure haute de <em>-0.5vmin</em>, avoir un alignement de texte centré, avoir la police d'écriture <em>Cormorant Garamond</em> d'un poid de <em>100</em> et d'une grosseur de <em>3.2vmin</em>, avoir une hauteur de ligne de <em>2.8vmin</em> et être de couleur <em>blanc gris</em>.
  Lors du sorvol de l'auto-collant, sa bordure doit changer pour <em>0.4vmin</em> et être de couleur <em>blanc gris</em> solide.
</checklist>

<grostitre>Requis brillance</grostitre>

<checklist>
  L'élément de brillance (<span class="inline-code">.shine</span>) doit être positionné de manière absolue au centre de son parent, avoir une largeur de <em>30%</em>, avoir des proportions carrées, être de forme ronde, avoir un <span class="inline-code">z-index</span> de <em>2</em> et un ombrage intérieur de <em>2vmin</em> égal de tous les côtés et de couleur <em>blanc gris</em>.
  Créez une animation changeant la largeur de l'élément de <em>0%</em> à <em>200%</em> et appellez-la <span class="inline-code">shine</span>.
  Appliquez cette animation à l'élément <span class="inline-code">.shine</span> lorsque l'auto-ollant est survolé. <em>(Utilisez :has() pour y parvenir)</em>.
  L'animation doit avoir une durée de <em>1 seconde</em> et garder sa position finale lorsque celle-ci est terminée.
  Changez la largeur de 'élément <span class="inline-code">.shine</span> pour que sa valeur par défaut soit de <em>0%</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="GG2tZNOQWAA"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../google-fonts/"></intlink>
<intlink href="../../masquage/"></intlink>
<intlink href="../../pseudo-classes-avancees/#has"></intlink>

<dots></dots>