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

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./birds-of-prey.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#33c1a7</color>
<color>#6ffeac</color>
<br>
<color>#f7e700</color>
<color>#333333</color>

<br>

<info>Pour une meilleure exécution de l'examen, la plupart des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'examen.</info>
<thumbsup>Prenez le temps de bien analyser le fichier HTML.</thumbsup>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  L'arrière-plan de la page doit être de couleur grise.
  Ajoutez-lui un gradient de <em>bleu</em> à <em>jaune</em> partant du coin supérieur gauche pour aller au coin inférieur droit.
  Fusionnez les fonds en mode <span class="inline-code">screen</span> afin de donner un effet délavé.
</checklist>

<grostitre>Requis affiche</grostitre>

<checklist>
  L'affiche (<span class="inline-code">.poster</span>) doit avoir une largeur équivalente à <em>80%</em> du plus petit côté de la fenêtre, avoir une hauteur de <em>3/4</em> de sa largeur et être centré dans la page tant horizontalement que verticalement.
  Elle doit avoir un dégradé allant du <em>vert</em> au <em>bleu</em> en partant du coin supérieur gauche pour aller au coin inférieur droit.
  Ajoutez-lui un ombrage de <em>100px</em> égal de tout les côtés de couleur <em>noire</em> semi-transparente.
  Lorsque hauteur de la fenêtre devient plus grande ou égale à la largeur, l'affiche doit devenir carré.
</checklist>

<grostitre>Requis arrière-plan</grostitre>

<checklist>
  Placez l'arrière-plan de l'affiche (<span class="inline-code">.bg</span>) en position absolue prenant tout l'espace disponible tant en largeur qu'en hauteur.
  À l'aide de la propriété <span class="inline-code">object-fit</span> faites-en sorte que l'exédentaire soit rogné et que le focus soit mit sur le coin inférieur gauche de sorte que cette portion de l'image ne soit jamais rognée.
  Fusionnez l'arrière-plan de sorte qu'il agisse comme filtre de luminosité avec l'affiche.
  Faites-en sorte que l'élément <span class="inline-code">.bg</span> soit complètement transparent par défaut et que lorsque l'on survole l'affiche, il devienne complètement opaque en l'espace de <em>0.5 seconde</em>.
</checklist>

<grostitre>Requis logo</grostitre>

<checklist>
  Le logo (<span class="inline-code">.logo</span>) doit être positionné de manière absolue et prendre un maximum de <em>100%</em> de la largeur de l'affiche.
  Appliquez-lui un filtre <span class="inline-code">drop-shadow()</span> de <em>20px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Modifiez la balise <span class="inline-code">picture</span> du fichier HTML de sorte que la source de l'image change pour le logo vertical lorsque la hauteur de la fenêtre devient égale ou plus grande à sa largeur.
  Toujours dans la balise <span class="inline-code">picture</span>, faites-en sorte que la source de l'image change pour le petit logo lorsque la largeur devient plus petite ou égale à <em>600px</em>.
</checklist>

<grostitre>Requis Harley Quinn</grostitre>

<checklist>
  Harley Quinn (<span class="inline-code">.harley</span>) doit être positionnée de manière absolue dans le bas de l'affiche à <em>-10%</em> de la droite et mesurer <em>110%</em> en hauteur de sorte qu'elle dépasse en haut et à droite.
  Lorsque la hauteur de la fenêtre devient plus grande ou égale à la largeur, faites-en sorte que Harley passe par dessus le logo.
</checklist>

<grostitre>Requis crédits</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">DcFandom-orr4.ttf</span> et nommez la <em>DcFandom</em>. N'oubliez pas le format.
  L'élément <span class="inline-code">.credits</span> doit être positionné de manière absolue à <em>10px</em> du bas, <em>150px</em> de la gauche et avoir une largeur de <em>50px</em>.
  À l'aide du pseudo-élément <span class="inline-code">::before</span>, ajoutez le texte "Presented by" à <em>-140px</em> de la gauche et centrez le verticalement.
  Il doit avoir une grosseur de police d'écriture de <em>16px</em>, avoir la police d'écriture <em>DcFandom</em> et être de couleur <em>jaune</em>.
  L'élément SVG <span class="inline-code">.dc</span> doit être aussi de couleur <em>jaune</em>.
</checklist>

<grostitre>Requis plume</grostitre>

<checklist>
  La plume (<span class="inline-code">.feather</span>) doit être positionnée de manière absolue à <em>25%</em> de la largeur de la fenêtre à gauche et avoir une hauteur correspondant à <em>10%</em> de la hauteur de la fenêtre.
  Créez une animation nommée <em>feather</em> faisant descendre la plume de <em>-100%</em> à <em>100vh</em> en <em>5 secondes</em> de manière linéaire et infinie.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"birds_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"birds_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"EX02: Birds of Prey"</em>.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<doclink href="../../../../582-215MO/">Timdoc / 582-215MO</doclink>







<dots></dots>