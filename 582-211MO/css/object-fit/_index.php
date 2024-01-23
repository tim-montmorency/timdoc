<?php
/**
 * @type     article
 * @title    Object-fit
 * @icon     images/icon.png
 * @abstract contain, cover, fill
 * @ref      web/css
 */
?>

<p class="spacer">La propriété <incode>object-fit</incode> définit comment le contenu d'un média, par exemple une image ou une vidéo, réagit lorsqu’une largeur et une hauteur <em>(width/height)</em> lui sont attribuées. Ainsi, il est possible de contrôler s'il est préférable que son contenu soit étiré ou rogné.</p>

<p>Pour ce faire, il existe cinq valeurs possibles ✋</p>

<ul>
    <li><incode>none</incode></li>
    <li><incode>fill</incode> <em>(par défaut)</em></li>
    <li><incode>contain</incode></li>
    <li><incode>cover</incode></li>
    <li><incode>scale-down</incode></li>
</ul>

<p>Afin de démontrer le comportement associé à chacune de ces valeurs, la même image et les mêmes dimensions seront utilisées dans les exemples suivants.</p>

<img src="../../../shared/images/square.png">

<dots></dots>


<grostitre>fill vs none</grostitre>

<p>À gauche, l'élément avec <incode>object-fit: fill;</incode> étire le contenu de l'image, sans tenir compte de son ratio initial, afin de couvrir la dimension définie. Cette valeur déforme le contenu du média <em>(Comportement par défaut)</em>.</p>

<p>À l’opposé à droite, <incode>object-fit: none;</incode> ne redimensionne aucunement le contenu de l'image, peu importe la dimension définie. L'image est donc identique à notre image témoin.</p>

<codepen id="wvxOowV" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>contain vs cover</grostitre>

<p>À gauche, <incode>object-fit: contain;</incode> garde le ratio du contenu de l'image intact et le redimensionne de sorte qu'il soit entièrement visible. 🚫 rognage.</p>

<p>À droite, <incode>object-fit: cover;</incode> garde aussi le ratio du contenu de l'image intact, mais le redimensionne de sorte que la dimension définie soit entièrement recouverte par celui-ci. Quitte à rogner certaines parties du contenu du média.</p>

<codepen id="abjMBvV" tab="result" height="340"></codepen>

<p><incode>cover</incode> est utilisé régulièrement pour les héros de site <em>(Blocs en entête de page avec une image ou vidéo en arrière-plan)</em>.</p>

<dots></dots>


<grostitre>scale-down</grostitre>

<p>Redimensionne le contenu du média avec <incode>object-fit: none;</incode> et <incode>object-fit: contain;</incode> et retourne le plus petit résultat des deux.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/object-fit">object-fit</doclink>
<doclink href="https://www.w3schools.com/css/css3_object-fit.asp">object-fit</doclink>

<dots></dots>


<grostitre>Object-position</grostitre>

<p>Indique comment positionner sur les X et Y le contenu d'un media ayant la propriété <incode>object-fit</incode>.</p>

<p>Par défaut, le contenu du média est centré <incode>object-position: 50% 50%;</incode>, comme dans les exemples précédents.</p>

<h3>contain</h3>

<p>Lorsqu'un média à la propriété <incode>object-fit: contain;</incode>, l'ensemble du média est visible, il est donc probable qu'une zone vide soit visible si l'espace alloué ne correspond pas exactement à la dimension du média. Dès lors, il est possible via <incode>object-position</incode> de définir quelle partie de l'espace devrait être couverte par le média.</p>

<p>Par exemple, pour aligner le média à gauche il est possible d'utiliser <incode>object-position: 0% 50%;</incode> ou encore à droite avec <incode>object-position: 100% 50%;</incode>.</p>

<codepen id="jOpJVqW" tab="result" height="340"></codepen>

<h3>cover</h3>

<p>Dans le cadre d'un media ayant la propriété <incode>object-fit: cover;</incode>, l'espace allouée est entièrement recouverte par le média. Il est donc probable qu'une partie soit rognée si l'espace alloué ne correspond pas exactement à la dimension du média.</p>

<p>Heureusement, il est possible de sélectionner quelle partie du média doit rester visible. Par exemple, en haut avec <incode>object-position: 50% 0%;</incode> ou en bas avec <incode>object-position: 50% 100%;</incode>.</p>

<codepen id="GRBeNZL" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/object-position">object-position</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_object-position.asp">object-position</doclink>

<dots></dots>

<exercice href="exercices/mcdonalds/"></exercice>

<dots></dots>





