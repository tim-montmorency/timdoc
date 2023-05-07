<?php 
/**
 * @type     exercice
 * @title    <span style="font-size: 0.9em;">Robert Charlebois - La maudite tournée</span>
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album live "La maudite tournée" du célèbre chanteur québécois Robert Charlebois.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album live <a target="_blank" href="https://open.spotify.com/album/54Eo0BU9H12llo3YtMcuTn">"La maudite tournée"</a> du célèbre chanteur québécois <a target="_blank" href="https://fr.wikipedia.org/wiki/Robert_Charlebois">Robert Charlebois</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./robert-charlebois-la-maudite-tournee.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="./GillSansMTPro-BoldExtCond.zip">Gill Sans MT Pro Bold ExtCond</doclink>

<h3>Couleurs 🎨</h3>

<color>#0a0e11</color>
<color>#333333</color>
<color>#ffffff</color>
<br>
<color>#fce339</color>
<color>#ae3c30</color>

<h3>Médias 📷</h3>

<mediafile src="./images/wing.webp">Aile</mediafile>
<mediafile src="./images/robert.webp">Robert</mediafile>

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
    Créez une variable nommée <span class="inline-code">--speed</span> et attribuez-lui la valeur de <em>1.5 seconde</em>. Celle-ci servira à déterminer le temps de l'animation.
    Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>jaune</em> au <em>bleu</em>.
    Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
    L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>charcoal</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
    Assurez-vous que rien ne dépasse de l'album.
    Utilisez le pseudo-élément <span class="inline-code">::before</span> en position absolue et couvrant tout l'espace disponible afin de créer un effet de grain. Appliquez lui le filtre <span class="inline-code">url(#grain)</span> ainsi qu'un <em>grayscale</em> à <em>100%</em> et fusionnez-le en mode <span class="inline-code">soft-light</span>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
    À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">GillSansMTPro-BoldExtCond.otf</span>, nommez-la <em>Gill</em> et appliquez-la aux textes. Assurez-vous de mentionner le format.
    Les textes doivent être positionnés de manière absolue, être centré horizontalement, avoir une grosseur de police d'écriture de <em>7vmin</em>, une hauteur de ligne de <em>6vmin</em> être de couleur <em>blanche</em> et avoir une déformation verticale d'un facteur de <em>1.5</em>.
    Le nom de l'artiste doit être positionné à <em>7vmin</em> du haut et le nom de l'album à <em>6vmin</em> du bas.
</checklist>

<grostitre>Requis diable</grostitre>

<checklist>
    Le conteneur du diable (<span class="inline-code">.devil</span>) doit avoir une hauteur de <em>37%</em>, prendre tout l'espace disponible en largeur et être placé au centre de l'album grâce aux marges.
    Robert (<span class="inline-code">.robert</span>) doit avoir une hauteur de <em>95%</em>, une largeur de <em>35%</em> et être positionné de manière absolue au centre bas de son parent grâce aux marges. Il doit avoir l'image <span class="inline-code">robert.webp</span> comme arrière-plan contenu et aligné au centre bas.
    Les ailes (<span class="inline-code">.wing</span>) doivent avoir une hauteur de <em>69%</em>, prendre tout l'espace disponible en largeur et avoir l'image <span class="inline-code">wing.webp</span> comme arrière-plan contenu sans répétition.
    Changez le point d'origine de transformation des ailes pour qu'il soit situé au centre bas de l'élément.
    L'aile de gauche doit être positionné à <em>5%</em> de la gauche et l'aile de droite à <em>5%</em> de la droite.
    Pour inverser l'aile de droite, appliquez lui une déformation horizontale d'un facteur de <em>-1</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
    Créez deux animations nommées <span class="inline-code">wing-left</span> et <span class="inline-code">wing-right</span> effectuant une rotation allant de <em>-7deg</em> à <em>5deg</em>. En plus de la rotation, l'animation de l'aile de droite doit aussi comporter la déformation horizontale appliquée plus haut.
    Appliquez ces animations à leur aile respective avec une durée correspondant à la variable <span class="inline-code">--speed</span> de façon infinie et alternante.
    Afin d'avoir un effet de floatement, créez une dernière animation nommée <span class="inline-code">devil</span> appliquant une translation verticale allant de <em>-2%</em> à <em>2%</em>.
    Appliquez cette animation au conteneur du diable (<span class="inline-code">.devil</span>) avec une durée correspondant à la variable <span class="inline-code">--speed</span> de façon infinie et alternante et commençant lentement pour ralentissant en fin de parcours.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/robert-charlebois-fu-man-chuu.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../background/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../unites-de-mesure-avancees/"); ?>
<?php intlink("../../transformation/"); ?>
<?php intlink("../../animation/"); ?>

<dots></dots>


