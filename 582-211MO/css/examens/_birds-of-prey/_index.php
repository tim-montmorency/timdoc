<?php 
/**
 * @type     exercice
 * @title    Examen - Birds of Prey
 * @icon     images/thumb.jpg
 * @abstract Pour cet examen, nous allons recréer une affiche animée du film Birds of Prey.
 */
?>

<p class="spacer">Pour cet examen, nous allons recréer une affiche animée du film <a target="_blank" href="https://www.imdb.com/title/tt7713068/">Birds of Prey</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/birds-of-prey-resultat.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./birds-of-prey.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#6ffeac</color>
<color>#33c1a7</color>
<color>#f7e700</color>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Le fond de la page doit-être noir ⚫️.
  L'affiche <em>(.poster)</em>, doit avoir une largeur équivalente à 80% du côté le plus petit de la fenêtre, mais ne jamais être inférieure à 350px.
  La hauteur de l'affiche doit correspondre au trois quarts de sa largeur.<br><br>Cependant, lorsque la hauteur de fenêtre est plus grande que sa largeur, la hauteur de l'affiche doit devenir équivalente à sa largeur, produisant ainsi une affiche parfaitement carrée.
  Positionnez l'affiche en plein centre de l'écran autant horizontalement ↔️ que verticalement ↕️.
  L'image d'Harley Quinn doit être 10% plus grande que l'affiche afin de dépasser vers le haut de celle-ci ⬆️ et être positionnée afin de dépasser de 10% à sa droite ➡️.
</checklist>

<dots></dots>


<grostitre>Arrière-plan</grostitre>

<checklist>
  Attribuez à l'affiche un dégradé en diagonal partant du coin supérieur gauche vers le coin inférieur droit ↘️ de vert lime à vert régulier 🟢.
  Faites en sorte que l'image d'arrière-plan <em>(.bg)</em> prenne toute la dimension de l'affiche, sans être déformée, et que le focus soit mis sur la partie de gauche ⬅️. Autrement dit, que cette partie ne soit jamais rognée.
  Faites ensuite fusionner cette image avec le dégradé de l'affiche de sorte que l'image se teinte en fonction du dégradé.
  Lorsque l'étape précédente est réalisée, faites en sorte que le l'image d'arrière-plan soit invisible par défaut, mais qu'elle se révèle progressivement en une demi-seconde lorsque l'affiche est survolée ⏱.
</checklist>

<clipasset src="videos/birds-of-prey-bg.mp4"></clipasset>

<dots></dots>


<grostitre>Birds of Prey</grostitre>

<checklist>
  Insérez dans le code HTML le code nécessaire afin d'afficher le logo horizontal ↔️ de <em>Birds of Prey</em> par défaut.<br><br><em>(Les images des logos se trouvent dans le dossier img du dossier de départ 📁)</em>
  À l'aide d'une balise <span class="inline-code">picture</span>, faites en sorte d'afficher le petit logo lorsque la page à une largeur égale ou inférieure à 600px et le logo vertical ↕️ lorsque la hauteur de fenêtre est plus grande que sa largeur.
  Faites en sorte que le logo affiche par-dessus Harley Quinn par défaut, mais en dessous de celle-ci lorsque la hauteur de fenêtre est plus grande que sa largeur.
</checklist>

<dots></dots>


<grostitre>Présenté par DC</grostitre>

<checklist>
  Ajoutez aux crédits la mention <em>"Présenté par"</em> sans modifier le code HTML de cet élément. Attribuez ensuite la couleur jaune 🟡 à ce texte et positionnez-le à 10px du bas et de la gauche de l'affiche ↙️.
  Faites en sorte que le logo DC soit aussi jaune 🟡, est une largeur de 50px et s'affiche correctement à côté du <em>"Présenté par"</em>.
</checklist>

<dots></dots>


<grostitre>Plume</grostitre>

<checklist>
La plume doit avoir une hauteur équivalente à 10% de celle de la fenêtre et être positionnée au quart de celle-ci à partir de la gauche.
La plume doit commencer sa course à l'extérieur de la page et la descendre en entier à une vitesse constante en l'espace de 5 secondes ⏱ avant de recommencer à l'infini 🔁.<br><br>Attention, l'animation doit recommencer immédiatement lorsque la plume sort. Il ne faut donc pas la faire continuer à descendre inutilement à l'extérieur de la fenêtre.

</checklist>

<dots></dots>