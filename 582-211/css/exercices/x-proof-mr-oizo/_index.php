<?php 
/**
 * @type     exercice
 * @title    Mr. Oizo - Démontre ton expertise en CSS
 * @icon     images/thumb.jpg
 * @abstract Démontre ton expertise en CSS.
 */
?>



<p>Aperçu du résultat 👇</p>
<clipasset src="./videos/proof-oeil-langue.mp4"></clipasset>
<dots></dots>


<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/XJJYaoG?">Pen de départ</doclink> <br>
<span class="red-label">IMPORTANT POUR LE PEN</span> : AVANT de commencer à coder, faites un <em>Fork</em> du Pen. Copiez ensuite le URL de votre CodePen (suite au fork) et me l'envoyer en message privé sur Teams AVANT de commencer à coder.


<dots></dots>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>


<grostitre>Requis de base</grostitre>
<checklist>
  La couleur de fond de la page doit être de couleur <em>grise</em> et en plus de contenir un dégradé vertical allant du <em>rouge</em> au <em>jaune</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">multiply</span> afin de donner au gradient un effet délavé et plus foncé.
  L'album doit avoir une dimension verticale et horizontale de <em>65%</em> du plus petit côté de la fenêtre.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre (donc pour cette consignes, ne pas utiliser flexbox).
</checklist>


<grostitre>Requis position des 2 yeux</grostitre>
<checklist>
  À l'aide de flexbox, positionnez les deux yeux de façon à ce qu'ils soient alignés horizontalement et placés comme dans l'aperçu.
</checklist>


<grostitre>Requis animation de la langue</grostitre>
<checklist>
  Créez une animation déplaçant la langue horizontalement de <em>0%</em> à <em>200%</em>. 
  L'animation doit commencer lentement et ralentir en fin de parcours. 
  La durée du mouvement de la gauche vers la groite est de 2 secondes.
  L'animation doit faire un aller-retour et boucler à l'infini.
</checklist>

<grostitre>Requis oeil droit</grostitre>
<warning>Petit conseil: Pour bien tester le survol sans tracas, survolez le haut l'oeil et non le bas.</warning>
<checklist>
  Au survol de l'oeil droit, celui-ci doit faire une transition. Sa hauteur doit diminuer à une valeur de <em>5%</em> de la hauteur du parent.
  La transition doit durer <em>0.5s</em> et être visible à l'entrée et à la sortie de l'élément.
</checklist>