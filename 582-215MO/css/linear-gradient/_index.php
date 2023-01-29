<?php
/**
 * @type     article
 * @title    Linear-gradient
 * @icon     images/icon.png
 * @abstract Générer un dégradé.
 */
?>
<p>La propriété <incode>background-image</incode> accepte la fonction <incode>linear-gradient()</incode>. Comme son nom l'indique, celle-ci permet de définir un dégradé. Pour générer un dégradé, il faut minimalement attribuer deux couleurs en paramètre à la fonction.</p>

<p>Par exemple, pour définir un dégradé de vert à bleu:</p>

<highlight lang="css">background-image: linear-gradient(#00c774, #3c38ba);</highlight>

<codepen id="gOjjpdQ" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Orientation</grostitre>

<p>Par défaut, les dégradés sont verticaux. Cependant, il est possible de spécifier une direction particulière en le spécifiant dans le premier paramètre de la fonction <incode>linear-gradient()</incode>.</p>

<p>Le plus simple est d'utiliser en début de fonction des mots-clés indiquant la direction.</p>

<p>Par exemple:</p>

<ul>
    <li><incode>to top</incode></li>
    <li><incode>to right</incode></li>
    <li><incode>to bottom</incode> <em>(par défaut)</em></li>
    <li><incode>to left</incode></li>
</ul>

<codepen id="rNrrxGP" tab="result" height="340"></codepen>

<p>Pour créer des dégradés diagonaux, il est possible de spécifier une deuxième direction dans le mot-clé.</p>

<p>Par exemple:</p>

<ul>
    <li><incode>to top left</incode></li>
    <li><incode>to top right</incode></li>
    <li><incode>to bottom left</incode></li>
    <li><incode>to bottom right</incode></li>
</ul>

<codepen id="NWBBxwX" tab="result" height="340"></codepen>

<dots></dots>

<grostitre>Degrés</grostitre>

<p>Il est aussi possible de spécifier une rotation en termes de degrés pour plus de précision.</p>

<p>Par exemple:</p>

<highlight lang="css">background-image: linear-gradient(90deg, #00c774, #3c38ba);</highlight>

<p>Serait l'équivalent de <incode>to right</incode>. Donc il serait possible de spécifier au degré prêt l'axe du dégradé souhaité.</p>

<dots></dots>


<grostitre>Points d'arrêt</grostitre>

<p>Par défaut, lorsqu'aucun point d'arrêt n'est spécifié, les couleurs sont distribuées de façon égale.</p>

<p>Par exemple un dégradé à trois couleurs, sans point d'arrêt, donc égales, génère de 0 à 50% une fusion du vert vers le bleu et de 50% à 100% une fusion de bleu vert le rouge.</p>

<highlight lang="css">background: linear-gradient(to right, #00c774, #3c38ba, #ff8487);</highlight>

<codepen id="ExppPoB" tab="result" height="340"></codepen>

<p>Il est cependant possible de définir un point d'arrêt après une couleur afin de spécifier à partir de quel point cette couleur doit commencer à fusionner avec la suivante.</p>

<p>Par exemple, pour contrôler la distribution du vert:</p>

<codepen id="rNrrxJR" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/orphaned/Web/CSS/linear-gradient()">linear-gradient()</doclink>
<doclink href="https://www.w3schools.com/cssref/func_linear-gradient.asp">linear-gradient()</doclink>

<dots></dots>


<tool href="tools/ui-gradients/"></tool>
<tool href="tools/css-gradient/"></tool>
<exercice href="exercices/igloofest/"></exercice>





