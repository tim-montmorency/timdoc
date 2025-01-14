<?php
/**
 * @type     article
 * @title    Width & Height
 * @icon     images/icon.webp
 * @abstract min-width/height, max-width/height
 * @ref      web/css
 */
?>

<grostitre>width & height</grostitre>

<p>Les propriétés <span class="inline-code">width</span> et <span class="inline-code">height</span> permettent de définir respectivement la largeur et la hauteur d'un élément. Par défaut leur valeur est à <span class="inline-code">auto</span>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/width">width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_width.asp">width</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/height">height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_height.asp">height</doclink>

<dots></dots>


<grostitre>min-width & min-height</grostitre>

<p>Les propriétés <span class="inline-code">min-width</span> et <span class="inline-code">min-height</span> permettent de définir une <strong>largeur et une hauteur minimum</strong> à un élément.</p>

<p>Par exemple, pour s'assurer qu'un élément ne soit jamais plus petit que 400px, il est possible d'utiliser:</p>

<highlight lang="css">.element {
  width: 50%;
  min-width: 400px;
}</highlight>

<p>Puisque <incode>min-width</incode> a préséance sur <incode>width</incode>, l'élément adoptera alors sa largeur.</p>

<p>Si l'élément est dans un parent ayant un <incode>width</incode> de:</p>

<ul>
    <li><incode>1000px</incode>: 400px < 500px <em>(50%)</em> ➡️ 500px</li>
    <li><incode>500px</incode>: 400px > 250px <em>(50%)</em> ➡️ 400px</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/min-width">min-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_min-width.asp">min-width</doclink>
<doclink href="https://developer.mozilla.org/en-US/docs/Web/CSS/min-height">min-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_min-height.asp">min-height</doclink>

<dots></dots>


<grostitre>max-width & max-height</grostitre>

<p>Les propriétés <incode>max-width</incode> et <incode>max-height</incode> permettent de définir une <strong>largeur et une hauteur maximale</strong> à un élément.</p>

<p>Par exemple, pour s'assurer qu'un élément ne soit jamais plus grand que 400px, il est possible d'utiliser:</p>

<highlight lang="css">.element {
  width: 50%;
  max-width: 400px;
}</highlight>

<p>Puisque <incode>max-width</incode> a préséance sur <incode>width</incode>, l'élément adoptera alors sa largeur.</p>

<p>Si l'élément est dans un parent ayant un <incode>width</incode> de:</p>

<ul>
    <li><incode>1000px</incode>: 400px < 500px <em>(50%)</em> ➡️ 400px</li>
    <li><incode>500px</incode>: 400px > 250px <em>(50%)</em> ➡️ 250px</li>
</ul>

<info><incode>max-width: 100%</incode> est régulièrement appliqué aux images. Ainsi, les images prennent leur largeur normale, mais ne dépassent jamais de l’écran.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/max-width">max-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_max-width.asp">max-width</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/max-height">max-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_max-height.asp">max-height</doclink>

<dots></dots>

<exercice href="exercices/system32"></exercice>
<exercice href="exercices/prevert"></exercice>

<dots></dots>