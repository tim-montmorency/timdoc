<?php
/**
 * @type     article
 * @title    Padding
 * @icon     images/icon.webp
 * @abstract marge intérieur
 */
?>

<p class="spacer">La propriété <incode>padding</incode> définit l'espace entre le contenu et ses  extrémités. Par défaut, cette propriété à une valeur de 0 permettant au contenu de s'afficher a même les extrémités de l'élément, mais elle accepte l'ensemble des unités de mesure CSS.</p>

<p>Lorsqu'une seule valeur est fournie, celle-ci est appliquée aux 4 côtés de l'élément.</p>

<p>Par exemple:</p>

<codepen id="rNrKjeY" tab="result" height="280"></codepen>

<warning>La propriété <incode>padding</incode> n’accepte pas les valeurs négatives.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/padding">padding</doclink>
<doclink href="https://www.w3schools.com/css/css_padding.asp">padding</doclink>

<dots></dots>


<grostitre>Sous-propriétés</grostitre>

<p>Pour plus de contrôle, il est possible d'attribuer une valeur différente à chaque côté en utilisant les sous-propriétés suivantes:</p>

<ul>
  <li><incode>padding-top</incode></li>
  <li><incode>padding-right</incode></li>
  <li><incode>padding-bottom</incode></li>
  <li><incode>padding-left</incode></li>
</ul>

<p>Par exemple:</p>

<codepen id="OJwEWbV" tab="result" height="280"></codepen>

<dots></dots>


<grostitre>Syntaxe courte</grostitre>

<p>Il est aussi possible d'attribuer les 4 côtés avec la syntaxe courte en les spécifiant un après l'autre en commençant par le haut et en tournant dans le sens des aiguilles d'une montre ⌚️ <em>(top, right, bottom et left)</em>.</p>

<p>Par exemple:</p>

<codepen id="BaPVpRj" tab="result" height="280"></codepen>

<dots></dots>


<grostitre>Ratio à partir de %</grostitre>

<p>Lorsqu'une valeur de <incode>padding</incode> est définie en pourcentage <em>(%)</em>, que ce soit à l'horizontale <em>(left/right)</em> ↔️ ou vertical <em>(top/bottom)</em> ↕️, celle-ci <strong>se base toujours sur la largeur</strong> de l'élément.</p>

<p>Autrement dit, si un élément mesure 100x20px et que <incode>padding-bottom: 100%</incode> lui est ajouté, sa hauteur finale sera de 120px <em>(20x de haut + 100px de padding-bottom)</em>.</p>

<p>Cette particularité est souvent exploitée afin de créer des éléments ayant un ratio spécifique. Par exemple, afin d'obtenir un format 16/9 il suffit de ramener la valeur de hauteur de cette fraction en pourcentage, soit <incode>9 ÷ 16 x 100% = 56.25%</incode>.</p>

<highlight lang="css">.element {
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; // 16/9
}</highlight>

<p>Cet élément serait donc toujours dans un format 16/9, peu importe la largeur de son parent.</p>

<dots></dots>





