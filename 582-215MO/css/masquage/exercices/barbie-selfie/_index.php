<?php 
/**
 * @type     exercice
 * @title    Masquage - Barbie Selfie
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l'effet généré par le site web promotionel Barbie Selfie Generator.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer l'effet généré par le site web promotionel <a target="_blank" href="https://www.barbieselfie.ai/intl/">Barbie Selfie Generator</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./barbie-selfie.zip">Dossier de départ</doclink>

<h3>Font</h3>

<doclink href="./barbie-font.zip">Barbie</doclink>

<h3>Couleurs 🎨</h3>

<color>#42c5fd</color>
<color>#b9eefe</color>
<br>
<color>#e240a3</color>
<color>#ffffff</color>

<h3>Médias</h3>

<mediafile src="./images/barbie.webp">Barbie</mediafile>
<mediafile src="./images/patch.svg">Patch</mediafile>

<br>

<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez-les dans un dossier <span class="inline-code">images</span>.
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  Le fond de la page doit être un dégradé allant du <em>bleu ciel</em> au <em>bleu clair</em>.
</checklist>

<grostitre>Requis selfie</grostitre>

<checklist>
  Le <em>selfie</em> doit être un carré d'une dimension de <em>80%</em> du plus petit côté de la fenêtre, être centré tant horizontalement que verticalement et être de couleur <em>rose</em>.
  Afin de lui donner une texture de fond, utilisez le pseudo-élément <span class="inline-code">::before</span> en position absolue couvrant l'entièreté du selfie.
  Ajoutez au pseudo-élément le filtre <em>SVG</em> <span class="inline-code">url(#grain)</span>, un grayscale de <em>100%</em>, une luminosité de <em>50%</em>, un contraste de <em>200%</em> et un flou de <em>2px</em>.
  Fusionnez le pseudo-élément en mode <span class="inline-code">color-dodge</span>.
  L'élément <span class="inline-code">.photo</span> doit être positionné de manière absolue et prendre tout l'espace disponible à l'intérieur du selfie.
  La photo doit avoir comme arrière-plan l'image <span class="inline-code">barbie.webp</span> ayant une largeur automatique, une hauteur de <em>90%</em> et être placé en bas au centre.
  Appliquez le masque <span class="inline-code">patch.svg</span> à l'élément <span class="inline-code">.selfie</span>.
</checklist>

<grostitre>Requis texte</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">barbie.ttf</span> et appliquez la au <span class="inline-code">h1</span>. N'oubliez pas le format.
  Le nom <em>Barbie</em> doit avoir une grosseur de police d'écriture de <em>14%</em> du plus petit côté de la fenêtre, être centré horizontalement, être positionné verticalement à <em>70%</em> de son parent et être de couleur <em>blanche</em>.
  Appliquez-lui une rotation négative de <em>12deg</em>.
  Afin de créer un effet de contour intérieur, utilisons le pseudo-élément <span class="inline-code">::before</span> en position absolue. Attribuez lui le contenu <span class="inline-code">content: attr(data-text);</span>.
  Le pseudo-élément doit être de couleur <em>rose</em> et avoir le filtre <em>SVG</em> <span class="inline-code">url(#dilate)</span>.
  Faites-en sorte qu'il soit affiché derrière son élément parent.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  Créez une animation nommée <span class="inline-code">shine</span> appliquant un filtre <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/filter-function/drop-shadow">drop-shadow</a> <em>blanc</em> égal de tous les côtés et d'une grosseur allant de <em>1vmin</em> à <em>6vmin</em>.
  Appliquez cette animation d'une durée de <em>1 seconde</em> à l'élément <span class="inline-code">.photo</span>, de manière alternée, infinie et commençant lentement.
</checklist>

<dots></dots>


<grostitre>Bande-annonce</grostitre>

<youtube src="GRyt3Ov4zz0"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../../background/"></intlink>
<intlink href="../../../linear-gradient/"></intlink>
<intlink href="../../../modes-de-fusion/"></intlink>
<intlink href="../../../position/"></intlink>
<intlink href="../../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../../pseudo-classes-avancees/"></intlink>
<intlink href="../../../pseudo-elements/"></intlink>
<intlink href="../../../transformation/"></intlink>
<intlink href="../../../animation/"></intlink>
<intlink href="../../../font-face/"></intlink>
<intlink href="../../../filtres/"></intlink>

<dots></dots>