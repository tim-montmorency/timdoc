<?php
/**
 * @type     article
 * @title    Box-shadow
 * @icon     images/icon.png
 * @abstract Ombrage d'un élément.
 */
?>

<p class="spacer">La propriété <incode>box-shadow</incode> permet d'ajouter une ombre à un élément. Par défaut, la couleur de l'ombre correspond à la couleur du texte de l'élément en question.</p>

<p>Afin d'être visible, une ombre nécessite d'être décalée de son parent. Pour ce faire, il faut lui attribuer une valeur de décalage sur les X, les Y ou les deux.</p>

<p>Par exemple:</p>

<codepen id="yLqqjrG" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Couleur</grostitre>

<p>Pour spécifier la couleur d'ombrage, il suffit d'ajouter une unité de couleur à la fin.</p>

<codepen id="mdjjLYm" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Flou</grostitre>

<p>Normalement, une ombre n'est pas nettement découpée. Heureusement, il est possible de la flouter grâce à une 3e valeur insérée avant la couleur. En anglais, cette valeur est nommée le <em>"blur"</em>.</p>

<codepen id="dyjjeBX" tab="result" height="340"></codepen>

<h3>Blur - Beetlebum</h3>

<clip src="videos/blur-beetlebum.mp4"></clip>

<dots></dots>


<grostitre>Étendu</grostitre>

<p>En ajoutant une 4e valeur, il est possible d'augmenter/diminuer la taille d'une ombre afin que sa dimension ne soit pas identique à celle de son élément référent. En anglais, cette valeur est nommée le <em>"spread"</em>.</p>

<codepen id="JjBBZjY" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Direction</grostitre>

<p>Par défaut, les ombres sont projetées vers l'extérieur de leurs éléments, donnant ainsi l'impression qu'ils sont surélevés. Cependant, il est possible de changer la direction des ombres afin qu'elles soient projetées vers l'intérieur de leurs éléments, créant ainsi une illusion de profondeur.</p>

<p>Pour ce faire, il faut ajouter le mot-clé <incode>inset</incode> comme premier argument au <incode>box-shadow</incode>.</p>

<p>Par exemple:</p>

<codepen id="qByyKEZ" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/box-shadow">box-shadow</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_box-shadow.asp">box-shadow</doclink>

<dots></dots>


<grostitre>Inspecteur</grostitre>

<p>L'inspecteur est d'une aide précieuse lorsque l'on manipule un élément avec une ombre. Lorsque l'on examine la propriété CSS <incode>box-shadow</incode> dans l'inspecteur, on remarque à sa droite un icône de carré sous un autre carré rappelant une ombre. Lorsque cliqué, cet icône affiche une interface visuelle permettant de modifier facilement les valeurs de cette propriété.</p>

<clipasset src="videos/inspector-box-shadow.mp4"></clipasset>

<dots></dots>

<tool href="tools/smooth-shadow/"></tool>
<tool href="tools/keyframes/"></tool>
<exercice href="exercices/reseaux-sociaux/"></exercice>

<dots></dots>

