<?php 
/**
 * @type     exercice
 * @title    Harmonium - L'Heptade
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "L'Heptade" du mythique groupe québécois Harmonium.
 */
?>

<p class="spacer">our cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/5d9pJ6C7Ri0PUsXvAT8ghk">"L'Heptade"</a> du mythique groupe québécois <a target="_blank" href="https://fr.wikipedia.org/wiki/Harmonium_(groupe)">Harmonium</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./harmonium-l-heptade.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="./Revival565Italic.zip">Revival 565 Italic</doclink>

<h3>Couleurs 🎨</h3>

<color>#333333</color>
<color>#0a0e11</color>
<color>#a53324</color>
<color>#d1b997</color>

<h3>Médias 📷</h3>

<mediafile src="./images/cloud-top.webp">Nuage haut</mediafile>
<mediafile src="./images/cloud-middle.webp">Nuage centre</mediafile>
<mediafile src="./images/cloud-bottom.webp">Nuage bas</mediafile>

<br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le fichier HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
    Téléchargez les images et placez-les dans un dossier <span class="inline-code">images</span>.
    Téléchargez police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
    Créez une variable pour chacune des couleurs pour utilisation ultérieure.
    Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>charcoal</em> au <em>rouge</em> partant du coin haut gauche pour aller au coin bas droit.
    Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
    L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>charcoal</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
    Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
    À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">Revival565Italic.otf</span>, nommez-la <em>Revival</em> et appliquez-la aux textes. N'oubliez pas de spécifier le format.
    Les textes doivent être positionnés de manière absolue, prendre tout l'espace disponible en largeur, avoir un alignement de texte centré, une grosseur de police d'écriture de <em>3.5vmin</em> et être de couleur <em>beige</em>.
    Le nom du groupe (<span class="inline-code">h1</span>) doit être positionné à <em>15%</em> du haut et le titre de l'album (<span class="inline-code">h2</span>) à <em>91%</em> du haut.
</checklist>

<grostitre>Requis nuages</grostitre>

<checklist>
    La toile (<span class="inline-code">.canva</span>) doit être positionnée de manière absolue à <em>33.5%</em> du haut, être centré horizontalement grâce aux marges extérieur, avoir une largeur de <em>75%</em> et une hauteur de <em>54%</em> et avoir une <u>bordure intérieur</u> de <em>1.5vmin</em> solide de couleur <em>beige</em>.
    Le conteneur de nuages (<span class="inline-code">.cloud-wrapper</span>) doit être positionné de manière absolue au centre de son parent, avoir une largeur de <em>70vmin</em>, une hauteur de <em>60vmin</em> et avoir une rotation de <em>25deg</em>. Utilisez le <span class="inline-code">background-color</span> pour bien visualiser cette étape.
    Les nuages (<span class="inline-code">.cloud</span>) doivent être positionnés de manière absolue et prendre tout l'espace disponible en largeur.
    Placez verticalement le nuage du haut à <em>-10%</em>, celui du milieu à <em>25%</em> et celui du bas à <em>60%</em>.
    Afin de donner une teinte rouge aux nuages, vous devrez utiliser une série de filtres qui va comme suit: <span class="inline-code">invert(48%) sepia(13%) saturate(3207%) hue-rotate(320deg) brightness(80%) contrast(120%) blur(0.2vmin)</span>.
    Assurez-vous que rien ne dépasse de la toile (<span class="inline-code">.canva</span>).
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
    Créez une animation nommée <span class="inline-code">cloud</span> appliquant une translation horizontale partant de <em>-100%</em> à <em>70vmin</em> et appliquez la aux nuages de façon linéaire et infinie.
    La durée de l'animation du nuage du haut doit être de <em>24 secondes</em>, celui du milieu de <em>16 secondes</em> et celui du bas de <em>10 secondes</em>.
</checklist>

<grostitre>Ambiance</grostitre>

<!-- <youtube src="./videos/harmonium-comme-un-fou.json"></youtube> -->
<youtube src="8lT14QPL8Bw"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../position/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../background/"); ?>
<?php intlink("../../overflow/"); ?>
<?php intlink("../../opacite/"); ?>
<?php intlink("../../font-face/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../animation/"); ?>
<?php intlink("../../transformation/"); ?>

<dots></dots>










