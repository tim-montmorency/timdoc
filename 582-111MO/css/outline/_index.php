<?php
/**
 * @type     article
 * @title    Outline
 * @icon     images/icon.png
 * @abstract border, width, style, color
 * @ref      web/css
 */
?>

<p class="spacer">La propriété <incode>outline</incode> est surtout connue comme étant la propriété utilisée par les navigateurs afin de faire ressortir l'élément ayant le focus dans une page. Cette utilisation permet de naviguer via son clavier ⌨️ plutôt que la souris 🖱️.</p>

<p>Par exemple, appuyez sur la touche tab de votre clavier et remarquerez le cadre s'affichant autour de l'élément recevant le focus.</p>

<warning>Si vous enlever le outline par défaut des navigateurs, par exemple: <incode>* { outline: 0; }</incode> pensez à le remplacer par un autre style permettant d’identifier quel élément dans la page à le focus.</warning>

<p><incode>outline</incode> partage les mêmes sous-propriétés que <a href="../border/">border</a>, soit:</p>

<ul>
    <li><incode>outline-width</incode></li>
    <li><incode>outline-style</incode></li>
    <li><incode>outline-color</incode></li>
</ul>

<p>Et la même syntaxe courte. Par exemple:</p>

<highlight lang="css">outline: 2px solid green;</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/outline">outline</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_outline.asp">outline</doclink>

<dots></dots>


<grostitre>Outline-offset</grostitre>

<p>Il est aussi possible de créer un espace entre le cadrage et son élément en utilisant la propriété <incode>outline-offset</incode>.</p>

<p>Par exemple:</p>

<codepen id="MWqgJBe" tab="css,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/outline-offset">outline-offset</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_outline-offset.asp">outline-offset</doclink>

<dots></dots>


<grostitre>Différences avec border</grostitre>

<h3>Impact sur la dimension des éléments</h3>

<p>La propriété <incode>border</incode> fait partie de l'élément. Elle génère donc un cadre à l'intérieur de celui-ci, affectant sa dimension et donc potentiellement son positionnement. Contrairement à <incode>outline</incode>, qui ne fait pas partie de l'élément et donc vit à l'extérieur de celui-ci.</p>

<p>Par exemple, les deux carrés verts 🟩 si dessous ont la même dimension et un cadre d'une même taille. Le premier utilise <incode>border</incode> et le deuxième <incode>outline</incode>. On remarque que le premier réduit la dimension à l'intérieur du carré, tandis que le deuxième la laisse indemne.</p>

<codepen id="abaopaL" tab="css,result" height="340"></codepen>

<span class="remark">À gauche, border.<br>À droite, outline.</span>

<p>Le fait qu'<incode>outline</incode> n'affecte pas la dimension et le positionnement des éléments rend cette propriété particulièrement utile pour déboguer ou comprendre une mise en page.</p>

<p>Par exemple, dans l'inspecteur, dans le panneau des styles, cliquez sur le bouton ➕ afin de définir une nouvelle règle de styles et inscrivez <incode>* { outline: 2px solid red; }</incode> pour afficher un cadre rouge autour de tous les éléments de la page.</p>

<dots></dots>

<exercice href="exercices/skittles/"></exercice>

<dots></dots>