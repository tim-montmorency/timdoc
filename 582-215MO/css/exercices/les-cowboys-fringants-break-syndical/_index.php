<?php 
/**
 * @type     exercice
 * @title    Les Cowboys Fringants - Break Syndical
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "Break Syndical" du groupe Les Cowboys Fringants.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/6oVJRrtYkII6GsP9xzAMcP">"Break Syndical"</a> du groupe <a target="_blank" href="https://fr.wikipedia.org/wiki/Les_Cowboys_fringants">Les Cowboys Fringants</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./les-cowboys-fringuants-break-syndical.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="./alternate-gothic-atf-demi.zip">Alternate Gothic ATF Demi</doclink>

<h3>Couleurs 🎨</h3>

<color>#f9f83c</color>
<color>#019e49</color>
<color>#666666</color>

<br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le fichier HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
    Téléchargez police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
    Créez une variable pour chacune des couleurs pour utilisation ultérieure.
    Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>jaune</em> au <em>vert</em>.
    Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
    L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>verte</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
    Le conteneur central (<span class="inline-code">.content-wrapper</span>) doit avoir une hauteur de <em>24vmin</em>, prendre tout l'espace disponible en largeur et être positionné au centre de l'album grâce aux marges.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
    À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">alternate-gothic-atf-demi.otf</span>, nommez la <em>AlternateGothic</em> et appliquez-la aux textes qui doivent aussi être de couleur <em>jaune</em>.
    Le nom du groupe (<span class="inline-code">h1</span>) doit avoir une grosseur de police d'écriture de <em>10.5vmin</em> et avoir un alignement de texte vertical.
    Le titre de l'album (<span class="inline-code">h2</span>) doit avoir une grosseur de police d'écriture de <em>4vmin</em>, avoir une marge extérieur gauche de <em>3vmin</em> et une marge exterieur haute de <em>3.5vmin</em>.
</checklist>

<grostitre>Requis voitures</grostitre>

<checklist>
    Le conteneur de voitures (<span class="inline-code">.car-wrapper</span>) doit être positionné de manière absolue à <em>1vmin</em> du bas et <em>3vmin</em> de la droite. Il doit aussi avoir un espacement de lettres de <em>2vmin</em>.
    Les voitures (<span class="inline-code">.car</span>) doivent avoir une hauteur de <em>7.5vmin</em> et être de couleur <em>jaune</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
    Créez une animation nommée <span class="inline-code">car</span> appliquant une translation horizontale en 4 étapes <em>(0%,100% - 25% - 50% - 75%)</em> allant d'un facteur de <em>13%</em> à <em>-13%</em> à <em>-13%</em> à <em>13%</em>.
    Appliquez cette animation à la 2ième voiture avec une durée de <em>2 secondes</em> et de manière infinie.
    Afin de créer un effet de <em>"bump"</em>, utilisez l'outil <a onclick="event.stopPropagation();" target="_blank" href="https://cubic-bezier.com/">Cubic-Bezier.com</a> pour créer une courbe qui dépasse vers le haut et utilisez-la pour déterminer la fonction de temps de l'animation. Pour les paresseux, voici la courbe utilisée dans la vidéo de référence: <span class="inline-code">cubic-bezier(.91, .46, 1, 1.63)</span>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/les-cowboys-fringants-en-berne.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../background/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../unites-de-mesure-avancees/"); ?>
<?php intlink("../../transformation/"); ?>
<?php intlink("../../animation/"); ?>
<?php intlink("../../font-face/"); ?>

<dots></dots>