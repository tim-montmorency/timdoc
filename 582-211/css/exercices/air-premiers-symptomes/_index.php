<?php 
/**
 * @type     exercice
 * @title    AIR - Premiers Symptômes
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "Premiers Symptômes" du groupe de musique électronique français Air.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/3g9O7pvuaaFRvdzsoSJXVc">"Premiers Symptômes"</a> du groupe de musique électronique français <a target="_blank" href="https://fr.wikipedia.org/wiki/Air_(groupe)">AIR</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./air-premiers-symptomes.zip">Dossier de départ</doclink>

<h3>Police d'écriture 🚓</h3>

<doclink href="./DisplayDots-4nB4.zip">Display Dots</doclink>

<h3>Couleurs 🎨</h3>

<color>#666666</color>
<color>#0a0402</color>
<br>
<color>#d43408</color>
<color>#c5c2a1</color>

<br><br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  Créez une variable nommée <span class="inline-code">--light-speed</span> et donnez-lui la valeur de <em>2 secondes</em>. Cette variable servira à déterminer la vitesse de clignotements des lumières.
  La couleur de fond de la page doit être de couleur <em>gris</em> et avoir un dégradé vertical allant du <em>orange</em> au <em>beige</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être centré tant verticalement qu'horizontalement, être de couleur <em>brun</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Afin de donner de la texture, utilisez le pseudo-élément <span class="inline-code">::before</span> en position absolue couvrant tout l'espace de l'album avec le filtre SVG <span class="inline-code">url(#grain)</span> et un grayscale <em>100%</em>.
  Fusionnez le pseudo-élément avec le reste de l'album en mode <span class="inline-code">color-dodge</span> et donnez lui un <span class="inline-code">z-index</span> négatif.
</checklist>

<grostitre>Requis lumières</grostitre>

<checklist>
  Chaque ligne (<span class="inline-code">.line</span>) doit avoir une hauteur de <em>5.5%</em>, une marge exétieur de <em>1.2vmin</em>, une grosseur de police d'écriture de <em>0px</em> et avoir un alignement de texte centré.
  Chaque lumière (<span class="inline-code">.point</span>) doit avoir un affichage <span class="inline-code">inline-block</span>, avoir une largeur de <em>5.5%</em>, prendre tout l'espace disponible en hauteur, une marge extérieur de <em>0.63vmin</em> et être de forme ronde.
  Pour mieux comprendre ce que vous faites, donnez temporairement aux lumière la couleur <em>orange</em>.
  À l'aide des sélecteurs, sélectionné <strong>TOUS</strong> les points correspondant au nom du groupe "AIR" comme dans l'image de référence et donnez-leurs temporairement la couleur <em>beige</em>.
  Retirez la couleur <em>orange</em> temporaire aux éléments <span class="inline-code">.points</span>.
  Créez une animation nommée <em>points</em> changeant la couleur d'arrière-plan de <em>beige</em> à <em>orange</em> et appliquez la aux aux points précédement sélectionnés tout en leur retirant la couleur temporaire d'arrière-plan <em>beige</em>.
  L'animation doit s'éxécuter de manière infinie et avoir une durée correspondant à la variable <span class="inline-code">--light-speed</span>.
  À ce stade-ci toutes les lumières devraient clignoter en même temps. Ain de leur donner un effet aléatoire, attribuez à l'animation un délai négatif correspondant à la variable <span class="inline-code">--light-speed</span> multiplié par la variable <span class="inline-code">--nb</span>.
</checklist>

<grostitre>Requis texte</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">DisplayDots-4nB4.woff</span> et nommez-la <em>DisplayDots</em>. N'oubliez pas de spécifier le format.
  Le titre de l'album (<span class="inline-code">h1</span>) doit être positionné de manière absolue, avoir la police d'écriture <em>DisplayDots</em> d'une grosseur de <em>4.5vmin</em>, être situé à <em>2vmin</em> de la gauche et <em>2vmin</em> de la droite, avoir un espacement de lettres de <em>0.2vmin</em> et être de couleur <em>beige</em>.
  Afin de respecter le lettage original, appliquez-lui une déformation verticale d'un facteur de <em>1.2</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="wouKI_myXxk"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../modes-de-fusion/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../font-face/"></intlink>
<intlink href="../../pseudo-classes-intermediaires/"></intlink>
<intlink href="../../pseudo-classes-avancees/"></intlink>

<dots></dots>