<?php 
/**
 * @type     exercice
 * @title    Mr. Oizo - All Wet
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "All Wet" de l'artiste multidisplinaire français Quentin Dupieux mieux connu sous le nom de Mr. Oizo.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/0cMDed0F21kkWrrnM3eDU7?autoplay=true">"All Wet"</a> de l'artiste multidisplinaire français <a target="_blank" href="https://fr.wikipedia.org/wiki/Quentin_Dupieux">Quentin Dupieux</a> mieux connu sous le nom de <em>Mr. Oizo</em>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./mr-oizo-all-wet.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#d20002</color>
<color>#ffd539</color>
<color>#fdf2d8</color>
<br>
<color>#555555</color>
<color>#000000</color>

<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  Ajoutez deux autre variables, une pour la durée de la transition du sourire <em>(0.2s)</em> et une autre pour la durée de l'animation de langue <em>(2s)</em>.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>rouge</em> au <em>jaune</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être de couleur <em>jaune</em> ainsi qu'avoir un ombrage de <em>100px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre.
</checklist>

<grostitre>Requis visage</grostitre>

<checklist>
  Considérant qu'il s'agit d'une matrice de <em>8x8</em>, chaque carré correspond à 1/8 <em>(12.5%)</em> de la largeur. Avec cette information vous devriez être en mesure de disposer facilement des éléments constituants. Commencez par les yeux.
  Utilisez les pseudo-classes afin de placer par étage les éléments <em>beige</em> du museau.
  Vous pouvez maintenant disponser du nez et de la bouche.
  Pour la langue, utilisez l'élément <span class="inline-code">.tongue-wrapper</span> afin de positionner la langue et lui donner sa dimension. L'élément <span class="inline-code">.tongue</span> doit prendre toute l'espace disponible et être de couleur <em>rouge</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  Créez une animation déplaçant la langue horizontalement de <em>0%</em> à <em>200%</em>. L'animation doit commencer lentement et ralentis en fin de parcours. Utilisez la variable que vous avez définie plus tôt pour en déterminer la durée.
  À l'aide de la pseudo-classe <span class="inline-code">:has()</span>, faites en sorte l'animation de l'élément <span class="inline-code">.tongue-wrapper</span> s'arrête lorsque vous survolez la langue.
</checklist>

<grostitre>Requis transition</grostitre>

<checklist>
  Lors du sorvol de la langue, les différents éléments du visages doivent transitionner d'un état à un autre d'une durée équivalente à la variable de la transition du sourir définie plus haut.
  Les yeux doivent s'allonger à <em>150%</em> en largeur et rapetisser à <em>50%</em> en hauteur. De plus, ils doivent tourner de + ou - <em>45deg</em> selon s'il est à gauche ou à droite.
  Le nez doit rapetisser à <em>75%</em> en hauteur et se déplacer de <em>-50%</em> verticalement.
  La bouche doit se déplacer de <em>-100%</em> verticalement.
  La langue doit se déplacer de <em>-50%</em> verticalement et grossir à <em>200%</em> en hauteur.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/mr-oizo-all-wet.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../modes-de-fusion/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../position/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../transition/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../pseudo-classes-avancees/#has"></intlink>

<dots></dots>