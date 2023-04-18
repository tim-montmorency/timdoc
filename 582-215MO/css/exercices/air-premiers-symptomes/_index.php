<?php 
/**
 * @type     exercice
 * @title    Air - Premiers Symptômes
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "Premiers Symptômes" du groupe de musique électronique français Air.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/3g9O7pvuaaFRvdzsoSJXVc">"Premiers Symptômes"</a> du groupe de musique électronique français <a target="_blank" href="https://fr.wikipedia.org/wiki/Air_(groupe)">Air</a>.</p>

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
  La couleur de fond de la page doit être de couleur <em>gris</em> et avoir un dégradé vertical allant du <em>orange</em> au <em>beige</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et honrizontale de <em>80%</em> du plus petit côté de la fenêtre, être centré tant verticalement qu'horizontalement, être de couleur <em>brun</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Afin de donner de la texture, utilisez le pseudo-élément <span class="inline-code">::before</span> en position absolue couvrant tout l'espace de l'album avec le filtre SVG <span class="inline-code">url(#grain)</span> et un grayscale <em>100%</em>.
  Fusionnez le pseudo-élément avec le reste de l'album en mode <span class="inline-code">color-dodge</span> et donnez lui un <span class="inline-code">z-index</span> négatif.
</checklist>

<grostitre>Requis lumières</grostitre>

<checklist>
  Chaque ligne (<span class="inline-code">.line</span>) doit avoir une hauteur de <em>5.5%</em>, une marge exétieur de <em>1.2vmin</em>, une grosseur de police d'écriture de <em>0px</em> et avoir un alignement de texte centré.
  Chaque lumière (<span class="inline-code">.point</span>) doit avoir un affichage <span class="inline-code">inline-block</span>, avoir une largeur de <em>5.5%</em>, prendre tout l'espace disponible en hauteur, une marge extérieur de <em>0.63vmin</em> et être de forme ronde.
  Pour mieux comprendre ce que vous faites, donnez temporairement aux lumière la couleur <em>orange</em>.
</checklist>



