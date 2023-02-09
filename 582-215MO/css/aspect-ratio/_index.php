<?php
/**
 * @type     article
 * @title    Aspect-ratio
 * @icon     images/icon.png
 * @abstract Créer un élément dont la dimension reste proportionnelle.
 */
?>

<p>La propriété <incode>aspect-ratio</incode> permet de créer un élément dont la dimension reste proportionnelle, peu importe son contexte. Ainsi, la hauteur ou la largeur d’un élément est calculée à partir d’un ratio fourni. </p>

<p>Par exemple, pour obtenir un élément parfaitement carré, il est possible de spécifier:</p>

<highlight lang="css">aspect-ratio: 1 / 1;</highlight>

<p>La première valeur du ratio correspond à la largeur tandis que la deuxième correspond à la hauteur <incode>width / height</incode>.</p>

<dots></dots>


<grostitre>Valeurs</grostitre>

<ul>
  <li><incode>auto</incode> <em>(par défaut)</em> l'élément s'affiche selon son contenu, sans se soucier d'un ratio en particulier.</li>
  <li><incode>16 / 9</incode> <em>(ou n'importe quelle fraction)</em></li>
</ul>

<codepen id="poZYRxx" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Width & Height</grostitre>

<p>Lorsque <incode>aspect-ratio</incode> et une seule des propriétés <incode>width</incode> ou <incode>height</incode> sont définis, la deuxième s'ajuste automatiquement en fonction du ratio spécifié.</p>

<info>Comme le ferait une balise <incode>&lt;img&gt;</incode>.</info>

<p>Cependant, si les propriétés <incode>width</incode> et <incode>height</incode> sont définies, la propriété <incode>aspect-ratio</incode> et sa valeur seront ignorées.</p>

<dots></dots>


<grostitre>Contenu</grostitre>

<p>Si le contenu d'un élément nécessite un espace plus grand que celui défini par <incode>aspect-ratio</incode>, l'élément s'étirera, brisant ainsi le ratio spécifié.</p>

<p>Pour contourner ce problème, il est possible de spécifier <incode>min-height: 0;</incode> à l'élément afin de donner priorité à au ratio plutôt qu'au contenu.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/aspect-ratio">aspect-ratio</doclink>

<dots></dots>

<exercice href="exercices/the-boys/"></exercice>

<dots></dots>







