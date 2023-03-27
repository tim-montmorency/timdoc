<?php 
/**
 * @type     exercice
 * @title    <span style="font-size: 0.8em;">Godspeed You! Black Emperor - Lift Yr. Skinny Fists Like Antennas to Heaven!</span>
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l’album "Lift Yr. Skinny Fists Like Antennas to Heaven!" du groupe rock progressif montréalais Godspeed You! Black Emperor.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/2rT82YYlV9UoxBYLIezkRq">"Lift Yr. Skinny Fists Like Antennas to Heaven!"</a> du groupe rock progressif montréalais <a target="_blank" href="https://fr.wikipedia.org/wiki/Godspeed_You!_Black_Emperor">Godspeed You! Black Emperor</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./godspeed-you-black-emperor.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#111111</color>
<color>#666666</color>
<color>#cc9672</color>

<h3>Médias</h3>

<mediafile src="./images/noise.svg">Bruit</mediafile>
<mediafile src="./images/slice.webp">Tranche de 15deg</mediafile>
<mediafile src="./images/hand-left.webp">Main gauche</mediafile>
<mediafile src="./images/hand-right.webp">Main droite</mediafile>

<warning>Analysez bien le HTML, vous-y verrez que des variables sont associées à chacunes des slides <em>(tartes du cercle)</em>.</warning>

<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez-les dans un dossier nommé <span class="inline-code">images</span>.
  Le fond doit être un dégradé allant de <em>gris foncé</em> à <em>gris pâle</em>.
  L'album doit avoir une dimension verticale et honrizontale de <em>80%</em> du plus petit côté de la fenêtre, être de couleur <em>brune</em> ainsi qu'avoir un ombrage égal de tous les côtés de couleur noire semi-transparente.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre.
  À l'aide du pseudo-élément <span class="inline-code">::before</span>, ajoutez un layer couvrant la totalité de l'album et utilisant l'image <span class="inline-code">noise.svg</span> comme arrière-plan afin de créer un effet de carton. Appliquez-lui aussi un flou de <em>0.5px</em>.
</checklist>

<grostitre>Requis cercle</grostitre>

<checklist>
  Chaques slides <em>(tartes du cercle)</em> doivent avoir une dimension correspondant à <em>50%</em> de la hauteur et <em>13%</em> de la largeur de l'album ainsi qu'avoir le coin supérieur droit placé au centre. Appliquez leurs une couleur de fond afin de bien visualiser.
  Les slides doivent utiliser l'image <span class="inline-code">slide.webp</span> comme arrière-plan. Faites-en sorte qu'il prenne tout l'espace disponible sans être rogné.
  Utilisez la propriété <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/clip-path">clip-path</a> afin de transformer chaque slide en triangle rectangle ayant comme angle droit le coin inférieur droit.
  Changez leur point d'origine de transformation pour qu'il corresponde au coin supérieur droit de chaque slide.
  Appliquez-leurs une rotation de <em>15deg</em> multiplié par la variable <span class="inline-code">--nb</span>. À ce stade-ci, chaque slide devraient se positionner uniformément afin de créer un cercle.
  Vous devriez constater que certaines slides dépassent de l'album. Faites-en sorte de faire disparaître l'exédentaire.
  Faites-en sorte que lorsque l'on survole chaque slide, sa saturation change afin d'atteindre <em>500%</em> de façon <em>linéaire</em> en <em>0.2 secondes</em>.
  Lorsque le survol est terminé, chaque slide doit retrouver une saturation normale <em>(100%)</em> de façon <em>linéaire</em> en <em>1 secondes</em> afin de créer un effet de trace.
</checklist>

<grostitre>Requis mains</grostitre>

<checklist>
  La main gauche doit utiliser <span class="inline-code">hand-left.webp</span> comme arrière-plan et prendre tout l'espace disponible sans être rognée.
  Elle doit avoir une dimension correspondant à <em>20%</em> de la largeur et <em>32%</em> de la hauteur de l'album ainsi qu'être située à <em>40%</em> du haut et <em>16%</em> de la gauche.
  La main droite doit utiliser <span class="inline-code">hand-right.webp</span> comme arrière-plan et prendre tout l'espace disponible sans être rognée.
  Elle doit avoir une dimension correspondant à <em>27%</em> de la largeur et <em>45%</em> de la hauteur de l'album ainsi qu'être située à <em>40%</em> du haut et <em>16%</em> de la droite.
  Lorsque l'on survole une des mains, sa dimension doit augmenter afin d'atteindre <em>120%</em> de sa grosseur initiale.
  Afin de lisser le mouvement, créez une transition de <em>0.5 seconde</em> utilisant la formule <span class="inline-code">cubic-bezier(0.14, 1.41, 0.78, 1.17)</span>.
  Lorsque le survol est terminé, la main doit reprendre son état initial en <em>0.2 seconde</em> de façon <em>linéaire</em>.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"godspeed_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"godspeed_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"TP08: Godspeed You! Black Emperor"</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<audioplayer src="./audios/godspeed-you-black-emperor-storm.mp3"></audioplayer>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../position/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../background/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../transformation/"); ?>
<?php intlink("../../transition/"); ?>
<?php intlink("../../pseudo-classes/"); ?>
<?php intlink("../../pseudo-elements/"); ?>
<?php intlink("../../overflow/"); ?>

<h3>Documentation externe</h3>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/clip-path">clip-path</doclink>

<dots></dots>





