<?php 
/**
 * @type     exercice
 * @title    Trainspotting
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de la bande sonore du film Trainspotting de Danny Boyle.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de la <a target="_blank" href="https://open.spotify.com/album/5xFdHuEPVgv0XU8rvkTuO4">bande sonore</a> du film <a target="_blank" href="https://www.imdb.com/title/tt0117951/">Trainspotting</a> de <a target="_blank" href="https://fr.wikipedia.org/wiki/Danny_Boyle">Danny Boyle</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./trainspotting.zip">Dossier de départ</doclink>

<h3>Police d'écriture 🚓</h3>

<doclink href="./trainspotting-font.zip">Trainspotting</doclink>

<h3>Couleurs 🎨</h3>

<color>#011e30</color>
<color>#fe4f00</color>
<br>
<color>#888888</color>
<color>#ffffff</color>

<h3>Médias 📷</h3>

<mediafile src="./images/renton.webp">Renton</mediafile>
<mediafile src="./images/begbie.webp">Begbie</mediafile>
<mediafile src="./images/diane.webp">Diane</mediafile>
<mediafile src="./images/sick-boy.webp">Sick Boy</mediafile>
<mediafile src="./images/spud.webp">Spud</mediafile>

<br>

<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez-les dans un dossier <span class="inline-code">images</span>.
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  Créez une variable nommée <span class="inline-code">--carousel-duration</span> et attribuez-lui la valeur de <em>6s</em>. Cette variable sera utiliser pour déterminer la vitesse de défilement du carousel.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>orange</em> au <em>bleu</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être centré tant verticalement qu'horizontalement, être de couleur <em>bleu</em> et avoir un ombrage de <em>100px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis arrière-plan</grostitre>

<checklist>
  L'album doit avoir l'image <span class="inline-code">renton.webp</span> comme arrière-plan et prendre tout l'espace disponible en rognant l'excédentaire.
  Fusionnez les deux arrière-plans en mode <span class="inline-code">luminosity</span>.
  Le contour (<span class="inline-code">.contour</span>) doit être positionné de manière absolue, avoir une hauteur et une largeur de <em>95%</em>, une bordure solide de <em>0.2vmin</em> de couleur <em>orange</em> et être centré tant horizontalement que verticalement.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">trainspotting.otf</span>, nommez-la <em>Trainspotting</em> et appliquez la à tous les éléments de la page. N'oubliez pas de spécifier le format.
  Le titre du film (<span class="inline-code">h1</span>) doit être positionné de la manière absolue à <em>61%</em> du haut, avoir une hauteur de <em>15.5%</em> et prendre tout l'espace disponible en largeur.
  Il doit aussi avoir l'arrière-plan de couleur <em>orange</em>, le texte de couleur <em>blanc</em>, une grosseur de police d'écriture de <em>11vmin</em>, une hauteur de ligne de <em>100%</em> et être centré horizontalement.
  Le sous-titre (<span class="inline-code">h2</span>) doit être positionné de manière absolue à <em>4.5%</em> de la gauche et <em>4.5%</em> du haut, avoir une grosseur de police d'écriture de <em>1.7vmin</em> et être de couleur <em>orange</em>.
  La liste des groupes (<span class="inline-code">.lineup</span>) doit être positionné de manière absolue à <em>4.5%</em> de la gauche et <em>8%</em> du haut, avoir une marge intérieur de <em>0</em>, une grosseur de police d'écriture de <em>2.2vmin</em> et une hauteur de ligne de <em>3.2vmin</em>.
  Assurez-vous de retirer les <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/list-style-type">puces de liste</a>.
</checklist>

<grostitre>Requis carousel</grostitre>

<checklist>
  Les conteneurs de personnage (<span class="inline-code">.cast-wrapper</span>) doivent être positionnés de manière absolue au bas de l'album, avoir une largeur de <em>16%</em> et une hauteur de <em>23.5%</em>.
  Pour mieux comprendre ce que vous faites, placez temporairement les conteneurs à gauche à <em>25%</em> multiplié par la variable <span class="inline-code">--nb</span> plus <em>4.5%</em>. Pour vous faciliter la vie, voici la formule: <span class="inline-code">calc(25% * var(--nb) + 4.5%)</span>.
  Les personnages (<span class="inline-code">.cast</span>) doivent être positionnés de façon absolue couvrant tout l'espace horizontal et vertical, avoir un arrière-plan <em>bleu</em> et une bordure gauche et droite de <em>0.2vmin</em> solide de couleur <em>orange</em>.
  Placez les arrière-plans correspondants personnages sur les éléments <span class="inline-code">.cast</span> de manière à ce qu'ils couvrent tout l'espace disponible et que l'excédentaire soit rogné.
  Fusionnez les arrière-plans des éléments casts en mode <span class="inline-code">luminosity</span>.
  Le nom des personnages doit être positionné de manière absolue à <em>0.5vmin</em> du bas et de la droite, avoir une grosseur de police d'écriture de <em>2vmin</em>, être de couleur <em>blanc</em> et avoir un ombrage de <em>0.5vmin</em> égal de tous les côtés de couleur <em>orange</em>.
</checklist>

<grostitre>Requis transition</grostitre>

<checklist>
  Changez le point d'origine de transformation des personnes (<span class="inline-code">.cast</span>) afin qu'il soit situé dans le bas au centre.
  Lors du survol des personnages (<span class="inline-code">.cast</span>), ils doivent grossir d'un facteur de <em>1.65</em> et l'arrière-plan doit devenir <em>orange</em> en <em>0.2 seconde</em>.
  Toujours lors du survol des personnages, l'opacité du nom des personnages doit atteindre <em>100%</em> en <em>0.2 seconde</em> et revenir à <em>0%</em> après le survol aussi en <em>0.2 secondes</em>. Ce qui implique que son opacité doit initialement être à <em>0%</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  Afin de pouvoir créer l'animation du carousel, vous devez mettre en commentaire la propriété temporaire <span class="inline-code">left</span> des conteneurs de personnages (<span class="inline-code">.cast-wrapper</span>).
  Créez une animation nommée <em>carousel</em> créant une translation horizontale partant de <em>80vmin</em> pour aller à <em>-100%</em> et appliquez la aux conteurs de personnage (<span class="inline-code">.cast-wrapper</span>).
  L'animation doit s'exécuter de façon linéaire et infinie et avoir une durée correspondant à la variable <span class="inline-code">--carousel-duration</span>.
  Pour décaler les personnages dans le carousel, appliquez leurs un délai négatif correspondant à la variable <span class="inline-code">--carousel-duration</span> divisé par <em>4</em> multip... Ha pis voilà la formule: <span class="inline-code">calc(0s - (var(--carousel-duration) / 4 * (3 - var(--nb))))</span>.
  À l'aide de la pseudo-classe <span class="inline-code">:has()</span>, lors du survol des éléments <span class="inline-code">.cast-wrapper</span>, faites en sorte que l'animation se mette sur <em>pause</em>.
</checklist>

<dots></dots>


<grostitre>Ambiances</grostitre>

<youtube src="./videos/iggy-pop-lust-for-life.json"></youtube>

<grostitre>Bande-annonce</grostitre>

<youtube src="./videos/trainspotting-trailer.json"></youtube>

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
<?php intlink("../../pseudo-classes-avancees/#has"); ?>

<dots></dots>