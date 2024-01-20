<?php
/**
 * @type     article
 * @title    Float
 * @icon     images/icon.png
 * @abstract Permet à un élément de flotter à gauche ou à droite
 */
?>

<p class="spacer">La propriété float permet à un élément de flotter à gauche ⬅️ ou à droite ➡️ à l'intérieur de son conteneur. Elle permet aussi au texte et aux autres éléments en ligne <em>(inline)</em> le suivant de s'enrouler autour de lui.</p>

<p><strong>Valeurs disponibles:</strong></p>

<ul>
    <li><incode>none</incode> <em>(par défaut)</em> l'élément ne flotte pas</li>
    <li><incode>left</incode> l'élément flotte à gauche ⬅️</li>
    <li><incode>right</incode> l'élément flotte à droite ➡️</li>
</ul>

<p>Par exemple:</p>

<codepen id="XWBYPjO" tab="result" height="360"></codepen>

<dots></dots>


<grostitre>Impact sur le display</grostitre>

<p>Pour que le contenu en ligne soit en mesure de s'enrouler autour de l'élément en float, il est nécessaire de pouvoir calculer sa dimension. Puisqu'il est impossible par défaut de calculer la dimension <em>(width & height)</em> des éléments en ligne <em>(inline)</em>, ceux-ci sont automatiquement convertis en <incode>display: block;</incode> dès que la propriété float leur est attribuée.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/float">float</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_class_float.asp">float</doclink>

<dots></dots>

<exercice href="exercices/rupi-kaur/"></exercice>

<dots></dots>