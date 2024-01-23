<?php
/**
 * @type     article
 * @title    Border
 * @icon     images/icon.webp
 * @abstract border, border-radius
 */
?>

<p class="spacer">La propriété <incode>border</incode> a une vocation principalement esthétique, permettant d'ajouter une bordure à un élément.</p>

<grostitre>border-width</grostitre>

<p>La sous-propriété <incode>border-width</incode> permet de définir la taille de la bordure. Cette valeur peut-être n'importe quelle <a href="../unites-de-mesure/">unité de mesure CSS</a>.</p>

<p>Par exemple:</p>

<codepen id="rNrKMRN" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-width">border-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-width.asp">border-width</doclink>

<dots></dots>


<grostitre>border-style</grostitre>

<p>Comme son nom l'indique, cette propriété permet de définir le style de la bordure.</p>

<p>Styles disponibles:</p>

<ul>
    <li><incode>none</incode> <em>(par défaut)</em></li>
    <li><incode>solid</incode> ligne standard <em>(plus commun)</em></li>
    <li><incode>dotted</incode> pointillé</li>
    <li><incode>dashed</incode> hachuré</li>
    <li><incode>double</incode> double ligne</li>
    <li><incode>groove</incode> bordure 3D donnant l'impression que le bordure a été gravée</li>
    <li><incode>ridge</incode> bordure 3D donnant l'impression que la bordure ressort</li>
    <li><incode>inset</incode> bordure 3D donnant l'impression que l'élément est enfoncé</li>
    <li><incode>outset</incode> bordure 3D donnant l'impression que l'élément ressort</li>
</ul>

<codepen id="QWBxKXY" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-style">border-style</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-style.asp">border-style</doclink>

<dots></dots>


<grostitre>border-color</grostitre>

<p>Permets de définir la couleur de la bordure.</p>

<p>Par exemple:</p>

<codepen id="rNrKWNV" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-color">border-color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-color.asp">border-color</doclink>

<dots></dots>


<grostitre>Syntaxe courte</grostitre>

<p>Il est aussi possible de définir ces trois propriétés avec une syntaxe courte en utilisant simplement la propriété border et en lui passant les différentes valeurs mentionnées précédemment.</p>

<p>Par exemple:</p>

<codepen id="eYjKBNN" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border">border</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border.asp">border</doclink>

<dots></dots>


<grostitre>border-radius</grostitre>

<p>Permets de définir des coins arrondis sur un élément.</p>

<codepen id="QWBxGjP" tab="result" height="340"></codepen>

<p>Si chaque coin d'un élément est arrondi jusqu'à sa moitié, les coins arrondis se rejoignent et créer un ovale. Si l'élément est aussi haut que large, cet ovale devient alors un cercle comme dans l'exemple ci-dessus lorsque la dernière option est sélectionnée.</p>

<info>Cette propriété s’applique qu’une bordure soit visible ou non sur l’élément.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-radius">border-radius</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_border-radius.asp">border-radius</doclink>

<h3>Contrôle des coins individuellement</h3>

<p>Il est possible de contrôler individuellement chaque coin d'un élément afin de créer des formes particulières. Pour ce faire, il est possible d'utiliser les propriétés:</p>

<ul>
    <li><incode>border-top-left-radius</incode></li>
    <li><incode>border-top-right-radius</incode></li>
    <li><incode>border-bottom-right-radius</incode></li>
    <li><incode>border-bottom-left-radius</incode></li>
</ul>

<p>Ou encore de spécifier les multiples valeurs à même la propriété. Les coins sont spécifiés dans le sens des aiguilles d'une montre ⌚️ en commençant à partir du coin supérieur gauche.</p>

<p>Par exemple:</p>

<codepen id="KKBeNmK" tab="result" height="340"></codepen>

<dots></dots>

<tool href="tools/fancy-border-radius/"></tool>

<exercice href="exercices/q-bitz"></exercice>

<dots></dots>

