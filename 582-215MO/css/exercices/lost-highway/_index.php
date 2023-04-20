<?php 
/**
 * @type     exercice
 * @title    Lost Highway
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de la bande sonore du film Lost Highway de David Lynch.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de la <a target="_blank" href="https://open.spotify.com/album/1opngamrDdjhpIv7FqiH6r">bande sonore</a> du film <a target="_blank" href="https://www.imdb.com/title/tt0116922/">Lost Highway</a> de <a target="_blank" href="https://fr.wikipedia.org/wiki/David_Lynch">David Lynch</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./lost-highway.zip">Dossier de départ</doclink>

<h3>Fonts</h3>

<doclink href="./LostHighway-font.zip">Lost Highway</doclink>

<h3>Couleurs 🎨</h3>

<color>#fbcf0e</color>
<color>#fba80e</color>
<color>#fda892</color>
<br>
<color>#050808</color>
<color>#333333</color>

<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  Créez une variable nommée <span class="inline-code">--speed</span> et attribuez-lui la valeur de <em>2s</em>. Cette variable sera utiliser pour déterminer la vitesse à laquel les bandes de la route vont défiler.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>gris noir</em> au <em>jaune</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et honrizontale de <em>80%</em> du plus petit côté de la fenêtre, être de couleur <em>gris noir</em> et avoir un ombrage de <em>100px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre.
  Ajoutez à l'album une <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/perspective">perspective</a> équivalente à 10% du plus petit côté de la fenêtre.
  Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis autoroute</grostitre>

<checklist>
  L'autoroute (<span class="inline-code">.highway</span>) doit prendre tout l'espace disponible, être en position <em>absolue</em> et rien ne doit en dépasser.
  Les lignes (<span class="inline-code">.stripe</span>) doivent mesurer <em>5%</em> de la largeur, <em>10%</em> de la hauteur, avoir un gradient vertical allant du <em>orange</em> au <em>jaune</em> et avoir un flou de <em>0.25%</em> du plus petit côté de la fenêtre.
  À l'aide de la propriété <span class="inline-code">transform</span>, placez les lignes de sorte qu'elles soient positionnées horizontalement au centre à <em>100%</em> verticalement.
  Afin de créer un effet de vitesse, utilisez le pseudo-élément <span class="inline-code">::after</span>. Il doit utiliser tout l'espace disponible, être positionné à <em>-100%</em> du haut et avoir un gradient vertical allant de <em>transparent</em> à <em>orange</em>.
  Créez une animation nommée <em>stripe</em> permettant de déplacer verticalement les lignes de <em>-100%</em> à <em>100vmin</em> et appliquez la à la classe <span class="inline-code">.stripe</span>.
  L'animation doit s'éxécuter de façon linéaire, infinie et avoir une durée correspondant à la variable <span class="inline-code">--speed</span>.
  Afin de séparer les lignes, utilisez un délai négatif utilisant la variable inline <span class="inline-code">--nb</span>. Pour vous simplifier la vie, utilisez la formule suivante: <span class="inline-code">calc(0s - (var(--speed) / 4 * var(--nb)))</span>.
  Les lumières (<span class="inline-code">.light</span>) doivent mesurer <em>35%</em> de la largeur, <em>25%</em> de la hauteur, être positionnées à <em>50%</em> de la hauteur et <em>10%</em> de leur côté respectif et avoir un dégradé horizontal allant de <em>transparent</em> à <em>pêche</em> à <em>transparent</em>.
  Elle doivent avoir un <span class="inline-code">border-radius</span> de <em>50%</em>, un flou de <em>4vmin</em> et une opacité de <em>70%</em>.
  Pour créer un effet d'éloignement, utilisez le pseudo-élément <span class="inline-code">::after</span> sur l'élément <span class="inline-code">.highway</span>. Il doit prendre toute l'espace disponible en largeur, <em>30vmin</em> en hauteur, être situé en haut de l'autoroute et avoir un dégradé allant de <em>gris noir</em> à <em>transparent</em>.
  Afin de donner une texture d'asphalt à l'autoroute, l'élément <span class="inline-code">.grain</span> doit couvrir tout l'album, utiliser le filtre SVG <span class="inline-code">url(#grain)</span>, avoir une luminosité de <em>50%</em>, un contrast de <em>200%</em> et être fusionné en mode <span class="inline-code">multiply</span>.
  Finalement, pour créer la perspective, donnez à l'élément <span class="inline-code">.highway</span> une rotation sur l'axe des X de <em>45deg</em>, une déformation horizontale de <em>60%</em> et une déformation verticale de <em>50%</em>.
</checklist>

<grostitre>Requis texte</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">LostHighway.ttf</span> et appliquez la au texte. N'oubliez pas le format.
  Le titre doit être placé horizontalement au centre de l'album, à <em>20%</em> du haut, avoir une taille de police d'écriture de <em>4vmin</em>, un espacement de lettres de <em>1.2vmin</em> et être de couleur <em>jaune</em>.
  Appliquez au titre une déformation verticale de 200% et un skew vertical de <em>-8deg</em>.
  Lors du survol, le texte doit avoir un ombrage de <em>1vmin</em> égale de tous les côtés de couleur <em>orange</em>.
  Afin de lisser l'effet de survol, faites-en sorte que la transition dure <em>0.1 seconde</em> sur le <span class="inline-code">hover</span> et <em>1 seconde</em> sur le retour à son état normal.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/angelo-badalamenti-red-bats-with-teeth.json"></youtube>

<grostitre>Bande-annonce</grostitre>

<youtube src="./videos/lost-highway-trailer.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../background/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../modes-de-fusion/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../unites-de-mesure-avancees/"); ?>
<?php intlink("../../transformation/"); ?>
<?php intlink("../../transition/"); ?>
<?php intlink("../../animation/"); ?>
<?php intlink("../../font-face/"); ?>
<?php intlink("../../opacite/"); ?>
<?php intlink("../../filtres/"); ?>
<?php intlink("../../text/"); ?>
<?php intlink("../../pseudo-elements/"); ?>
<?php intlink("../../pseudo-classes-avancees/#has"); ?>

<dots></dots>