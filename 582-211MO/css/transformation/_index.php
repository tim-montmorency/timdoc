<?php
/**
 * @type     article
 * @title    Transformation
 * @icon     images/icon.png
 * @abstract translate, rotate, scale, skew, origin
 * @ref      web/css
 */
?>

<p class="spacer">La propriété CSS <incode>transform</incode> permet d'effectuer des transformations géométriques sur un élément. Contrairement aux propriétés traditionnelles, elle accepte plusieurs valeurs. Il est même possible d'effectuer des combinaisons afin d'accomplir des transformations complexes.</p>

<p>Comparativement aux autres propriétés, par exemple: <incode>top</incode> ou <incode>left</incode>, la propriété <incode>transform</incode> n'a aucun impact sur le positionnement des éléments adjacents.</p>

<dots></dots>


<grostitre>translate ↔️</grostitre>

<p>Par défaut, cette valeur accepte un ou deux arguments entre parenthèses. Le 1er correspond à une translation sur les X ↔️ et le 2e, <em>(si présent)</em>, sur les Y ↕️. Les arguments peuvent-être n'importe quelle <a href="../unites-de-mesure/">unité de mesure CSS</a> <em>(px, em, %, etc.)</em></p>

<p>Un translate avec un seul argument déplace l'élément sur les X ↔️.</p>

<highlight lang="css">transform: translate(100%);</highlight>

<p>Tandis qu'avec deux arguments séparés par une virgule l'élément se déplace sur les X et Y ↘️.</p>

<highlight lang="css">transform: translate(100%, 100%);</highlight>

<p>Voir l'exemple ci-dessous:</p>

<codepen id="RwBdpLQ" tab="result" height="340"></codepen>

<span class="remark">À gauche, transform: translate(100%, 0);<br>À droite, transform: translate(100%, 100%);</span>

<p>Dans le cadre d'une translation, les % sont relatifs à la dimension de l'élément en question.</p>

<ul>
  <li>100% sur les X = Une largeur de l'élément.</li>
  <li>100% sur les Y = Une hauteur de l'élément.</li>
</ul>

<p>Il est possible d'effectuer une translation sur un seul axe en spécifiant cet axe dans la nom de la valeur. Par exemple:</p>

<ul>
  <li><incode>translateX(...)</incode> uniquement sur les X <em>(équivaut à <incode>translate(...)</incode> )</em></li>
  <li><incode>translateY(...)</incode> uniquement sur les Y</li>
  <li><incode>translateZ(...)</incode> uniquement sur les Z</li>
</ul>

<warning>Pour qu’une translation sur l’axe des Z soit perceptible, il est nécessaire qu’une perspective soit donnée à l’élément ou à l’un de ses parents.</warning>

<p>Il est également possible de combiner les 3 axes dans une valeur en utilisant <incode>translate3d(...)</incode>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-function/translate()">transform: translate()</doclink>

<dots></dots>


<grostitre>rotate</grostitre>

<p>Cette valeur accepte comme argument les unités de type:</p>

<ul>
  <li><incode>deg</incode> degrés | 360 degrés dans un cercle/li>
  <li><incode>turn</incode> turns | 1 turn/tour dans un cercle</li>
</ul>

<p>Qui plus est, cette valeur peut-être:</p>

<ul>
  <li>Positive pour aller dans le sens horaire des aiguilles d'une montre</li>
  <li>Négative pour aller dans le sens inverse</li>
</ul>

<p>Par exemple, une rotation de 45° dans le sens horaire:</p>

<codepen id="VwBRWqK" tab="css,result" height="340"></codepen>

<info>Remarquez dans l’exemple précédent comment il est possible de combiner deux valeurs de transformation en les séparant avec un espace.</info>

<p>Il est possible d'effectuer une rotation sur un seul axe en spécifiant cet axe dans la nom de la valeur. Par exemple:</p>

<ul>
  <li><incode>rotateZ(...)</incode> uniquement sur les Z <em>(équivaut à <incode>rotate(...)</incode> )</em></li>
  <li><incode>rotateX(...)</incode> uniquement sur les X</li>
  <li><incode>rotateY(...)</incode> uniquement sur les Y</li>
</ul>

<p>Par exemple: RotationX vs RotationY</p>

<codepen id="oNMVwVx" tab="result" height="340"></codepen>

<span class="remark">À gauche, transform: rotateX(60deg).<br>À droite, transform: rotateY(60deg).</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-function/rotate()">transform: rotate()</doclink>

<dots></dots>


<grostitre>scale</grostitre>

<p>Par défaut, cette valeur accepte un ou deux arguments entre parenthèses. Si un seul argument est passé, il correspond à un facteur d'agrandissement/réduction. Si un 2e argument est ajouté, le premier correspond à un facteur d'agrandissement/réduction sur les X et le deuxième sur les Y. Il est donc possible de déformer un élément.</p>

<p>Voir l'exemple ci-dessous. Le 1er est agrandi de façon proportionnel de 150% <em>(1.5)</em> et le 2e de 150% <em>(1.5)</em> sur les X et 300% <em>(3)</em> sur les Y.</p>

<codepen id="KKBEqjr" tab="result" height="340"></codepen>

<span class="remark">À gauche, transform: scale(1.5).<br>À droite, transform: scale(1.5, 3).</span>

<p>Il est possible d'effectuer un scale sur un seul axe en spécifiant cet axe dans la nom de la valeur. Par exemple:</p>

<ul>
  <li><incode>scaleX(...)</incode> uniquement sur les X</li>
  <li><incode>scaleY(...)</incode> uniquement sur les Y</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-function/scale()">transform: scale()</doclink>

<dots></dots>


<grostitre>skew</grostitre>

<p>Par défaut, cette valeur accepte un ou deux arguments entre parenthèses. Si un seul argument est passé, il correspond à une distorsion sur les X. Si un 2e argument est ajouté, le premier correspond à une distorsion sur les X et le deuxième sur les Y.</p>

<p>Cette valeur accepte comme comme argument les unités de type:</p>

<ul>
  <li><incode>deg</incode> degrés | 360 degrés dans un cercle</li>
  <li><incode>turn</incode> tour | 1 tour dans un cercle</li>
</ul>

<p>Par exemple, une distorsion de 45° sur les X:</p>

<codepen id="mdjoMyB" tab="css,result" height="340"></codepen>

<p>Il est possible d'effectuer un skew sur un seul axe en spécifiant cet axe dans la nom de la valeur. Par exemple:</p>

<ul>
  <li><incode>skewX(...)</incode> uniquement sur les X <em>(équivaut à <incode>skew(...)</incode> )</em></li>
  <li><incode>skewY(...)</incode> uniquement sur les Y</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-function/skew()">transform: skew()</doclink>

<dots></dots>


<grostitre>transform-origin</grostitre>

<p>Toutes les transformations des exemples précédents sont effectuées à partir d'un point d'origine se situant au centre de chaque élément. Soit l'équivalent de <incode>transform-origin: 50% 50%;</incode></p>

<p>Cependant, il est possible de modifier cette valeur avec n'importe quelle <a href="../unites-de-mesure/">unité CSS</a>.</p>

<p>Par exemple, voici la même rotation de 45°:</p>

<ul>
  <li>À gauche avec un point de rotation central <em>(50% 50%)</em></li>
  <li>À droite avec un point de rotation en haut à gauche <em>(0 0)</em>.</li>
</ul>

<codepen id="poZYrjY" tab="result" height="340"></codepen>

<span class="remark">À gauche, transform-origin: 50% 50%.<br>À droite, transform-origin: 0 0;</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/transform-origin">transform-origin</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_transform-origin.asp">transform-origin</doclink>

<dots></dots>

<exercice href="exercices/formes/"></exercice>

<dots></dots>