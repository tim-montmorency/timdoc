<?php 
/**
 * @type     exercice
 * @title    The Black Keys - Turn Blue
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "Turn Blue" du groupe rock The Black Keys.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/6TvxpBzf9c8H1fsrAaQ8t3">"Turn Blue"</a> du groupe blues rock <a target="_blank" href="https://fr.wikipedia.org/wiki/The_Black_Keys">The Black Keys</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./the-black-keys-turn-blue.zip">Dossier de départ</doclink>

<h3>Police d'écriture 🚓</h3>

<doclink href="./ITCFranklinGothicStd-Hvy.zip">ITC Franklin Gothic Std Heavy</doclink>

<h3>Couleurs 🎨</h3>

<color>#0175b0</color>
<color>#007dbd</color>
<br>
<color>#cc0f71</color>
<color>#e10b7a</color>
<br>
<color>#616161</color>
<color>#747474</color>

<br><br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>
<info>Un triangle rectangle dont les deux côtés de l'angle droit sont égaux aura toujours une hypoténuse équivalente à <em>1.414</em> fois la longueur des côtés.</info>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La couleur de fond de la page doit être de couleur <em>gris pâle</em> et avoir un dégradé vertical allant du <em>rose pâle</em> au <em>bleu pâle</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être centré tant verticalement qu'horizontalement, être de couleur <em>bleu pâle</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
</checklist>

<grostitre>Requis spirale</grostitre>

<checklist>
  La spirale (<span class="inline-code">.spiral</span>) doit être positionnée de manière absolue, prendre tout l'espace disponible en hauteur et en largeur, être centrée tant horizontalement que verticalement et être de couleur <em>rose pâle</em>.
  Appliquez-lui une rotation de <em>45deg</em>. Vous constaterez alors que la spirale ne couvre pas tout l'espace de l'album.
  Pour corriger la dimension de la spirale, multipliez sa largeur et sa hauteur par le <em>facteur d'hypoténuse</em> mentionné plus haut.
  Assurez-vous que rien ne dépasse de l'album en rognant l'exédentaire.
</checklist>

<grostitre>Requis contour</grostitre>

<checklist>
  Le contour (<span class="inline-code">.contour</span>) doit être positionné de manière absolue et prendre tout l'espace disponible en largeur et en hauteur.
  Il doit avoir une <em>bordure intérieur</em> solide de <em>3.5vmin</em> et de couleur <em>bleu foncé</em>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  Le bouton de crédits (<em>.credits</em>) doit être positionné de manière absolue, avoir une longeur et une hauteur de <em>20%</em>, être centré tant horizontalement que verticalement, avoir une bordure de <em>0px</em>, être de forme ronde et être de couleur <em>gris pâle</em>.
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">ITCFranklinGothicStd-Hvy.woff2</span>, nommez la <em>Franklin</em> et appliquez-la aux textes qui doivent aussi avoir une grosseur de police d'écriture de <em>2.2vmin</em>. N'oubliez pas de spécifier le format.
  Le nom du groupe (<span class="inline-code">h1</span>) doit être positionné de manière absolue à <em>3.5vmin</em> du haut, être centré horizontalement, avoir une hauteur de ligne de <em>2vmin</em> et être de couleur <em>gris foncé</em>.
  Appliquez-lui une déformation verticale d'un facteur de <em>1.2</em>.
  Le titre de l'album (<span class="inline-code">h2</span>), doit être positionné de manière absolue à <em>8.5vmin</em> du haut, être centré horizontalement et être de couleur <em>gris foncé</em>.
  Appliquez-lui une déformation verticale d'un facteur de <em>2</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  Créez une animation nommée <em>swirl</em> qui exécute une rotation allant de <em>0deg</em> à <em>-360deg</em> et appliquez la à l'élément <span class="inline-code">.spiral</span>.
  L'animation doit durer <em>10 secondes</em> et s'exécuter de manière linéaire et infinie.
</checklist>

<grostitre>Requis inversion</grostitre>

<checklist>
  Changez le <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/cursor">curseur</a> de l'élément <span class="inline-code">.credits</span> pour <span class="inline-code">pointer</span>.
  Lors du focus de l'élément <span class="inline-code">.credits</span>, changez la couleur d'arrière-plan pour <em>gris foncé</em> et la couleur des textes pour <em>gris pâle</em>.
  Toujours lors du focus de l'élément <span class="inline-code">.credits</span>, à l'aide de la pseudo-classe <span class="inline-code">:has()</span> changez la couleur du contour pour <em>rose foncé</em> et inversez l'animation <em>swirl</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/the-black-keys-fever.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../modes-de-fusion/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../box-sizing/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../font-face/"></intlink>
<intlink href="../../pseudo-classes/"></intlink>
<intlink href="../../pseudo-classes-avancees/#has"></intlink>

<dots></dots>