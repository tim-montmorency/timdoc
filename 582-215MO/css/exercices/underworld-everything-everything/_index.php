<?php 
/**
 * @type     exercice
 * @title    Underworld - Everything Everything
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l’album "Everything Everything" du groupe de musique électronique Underworld.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/2Un5MRMFYfZF7UuDOfTaxi">"Everything Everything"</a> du groupe de musique électronique <a target="_blank" href="https://en.wikipedia.org/wiki/Underworld_(band)">Underworld</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./underworld-everything-everything.zip">Dossier de départ</doclink>

<h3>Fonts</h3>

<doclink href="./Univers93ExtraBlackExtendedOblique.zip">Univers 93 Extra Black Extended Oblique</doclink>
<br>
<doclink href="./ZurichBlackExtendedRegular.zip">Zurich Black Extended Regular</doclink>

<h3>Couleurs 🎨</h3>

<color>#bfe6e3</color>
<color>#6aa815</color>
<color>#5f380d</color>
<br>
<color>#777777</color>
<color>#000000</color>
<color>#ffffff</color>

<thumbsup>Prenez le temps d'analyser le fichier HTML, vous y trouverez des variables CSS.</thumbsup>

<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez la police d'écriture et placez la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>vert</em> au <em>bleu</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être de couleur <em>bleue</em> ainsi qu'avoir un ombrage de <em>100px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre.
</checklist>

<grostitre>Requis carrés</grostitre>

<checklist>
  Les carrés doivent se comporter comme des images, avoir une hauteur de <em>25%</em> ainsi l'album et une largeur d'aussi <em>25%</em> de l'album et être de couleur <em>verte</em>.
  À ce stade-ci, il devrait y avoir un espace entre les carrés, faites-en sorte de le faire disparaître.
  Créez une animation nommée <em>everything</em> en <em>10 étapes</em> (0%-100%, 10%, 20%, 30%, ...) modifiant l'opacité de l'élément avec les valeures suivantes: <em>[60%, 10%, 30%, 100%, 20%, 90%, 50%, 80%, 40%, 70%]</em>.
  Appliquez cette animations aux carrés (<span class="inline-code">.square</span>) de façon linéaire, à l'infini et d'une durée de <em>4 secondes</em>.
  À cette étape-ci, tous les carrés devraient se comporter de façon uniforme. Pour créer un effet aléatoire, appliquez à l'animation un délai correspondant à la variable <span class="inline-code">--nb</span> multiplié par <em>-4 secondes</em>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  Importez la police d'écriture <span class="inline-code">Univers93ExtraBlackExtendedOblique.otf</span> et nommez la <em>Univers93</em>.
  Importez la police d'écriture <span class="inline-code">ZurichBlackExtendedRegular.otf</span> et nommez la <em>Zurich</em>.
  Les textes doivent être en position <em>absolue</em>, avoir une grosseur de police d'écriture correspondant à <em>3%</em> du plus petit côté de la fenêtre et une rotation de <em>90deg</em>.
  Le nom du groupe doit être positionné à <em>28%</em> du haut, <em>3%</em> de la gauche, avoir la police d'écriture <em>Zurich</em>, avoir un style <em>italic</em> et être de couleur <em>brune</em>.
  Le nom de l'album doit être positionné à <em>64%</em> du haut, <em>4%</em> de la gauche, avoir la police d'écriture <em>Univers93</em>, avoir une hauteur de ligne de <em>2.8%</em> du plus petit côté de la fenêtre et être de couleur <em>blanche</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="z_j3fTedFA0"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../background/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../modes-de-fusion/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../unites-de-mesure-avancees/"); ?>
<?php intlink("../../transformation/"); ?>
<?php intlink("../../animation/"); ?>
<?php intlink("../../font-face/"); ?>
<?php intlink("../../opacite/"); ?>
<?php intlink("../../variables/"); ?>

<dots></dots>
