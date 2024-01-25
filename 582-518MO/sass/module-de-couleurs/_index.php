<?php 
/**
 * @type     article
 * @title    Module de couleurs
 * @icon     ../images/icon.webp
 * @abstract Sass offre des modules built-in dont le module de couleurs
 * @index    20
 * @ref      web/sass
 */
?>
<grostitre>Les modules Sass</grostitre>
<p>Sass offre différents modules maison <em>(built-in)</em> permettant de simplifier l'écriture de code CSS.</p>

<p>Sass fournit les modules intégrés suivants :</p>

<ul>
    <li>Le module <em>sass:math</em> fournit des fonctions qui opèrent sur les nombres.</li>
    <li>Le module <em>sass:string</em> facilite la concaténation, la recherche ou le découpage de chaînes de caractères (string).</li>
    <li>Le module <em>sass:color</em> génère de nouvelles couleurs basées sur des couleurs existantes, ce qui facilite la création de thèmes de couleurs.</li>
    <li>Le module <em>sass:list</em> vous permet d'accéder à des valeurs dans des listes et de les modifier.</li>
    <li>Le module <em>sass:selector</em> permet d'accéder au puissant moteur Sass qui permet de sélectionner des éléments HTML.</li>
    <li>Le module <em>sass:meta</em> expose les détails du fonctionnement interne de Sass.</li>
</ul>

<p>Parmi ceux-ci, le plus populaire est le module de couleurs que nous examinerons aujourd'hui.</p>

<doclink href='https://sass-lang.com/documentation/modules'>built-in modules</doclink>
      

<dots></dots>

<grostitre>Importation</grostitre>
<p>Afin d'éviter d'affecter négativement la performance du code CSS, les modules ne sont pas importés par défaut. Il faut donc penser à les importer si l'on souhaite les utiliser.</p><p>Par exemple, afin d'importer le module de couleurs, il faut écrire:</p><pre><code class="hljs css"><span class="hljs-keyword">@use</span> <span class="hljs-string">"sass:color"</span>;</code></pre><p>Suite à cet import, plusieurs fonctionnalités de traitement de couleurs s'ajouteront à Sass.</p>
          

<dots></dots>
<grostitre>Whiteness & Blackness</grostitre>
<p>Les fonctionnalités <incode>whiteness</incode> et <incode>blackness</incode> permettent d'altérer une couleur en lui ajoutant du blanc ⚪️ ou du noir ⚫️. Le résultat correspond au résultat obtenu si un galon de peinture verte était mélangé à moitié <em>(50%) </em>avec un galon de peinture blanche ou à moitié <em>(50%)</em> avec un galon de peinture noire.</p>
<p>Les unités doivent être exprimées en pourcentage<em> (%)</em> pouvant-être positif ou négatif.</p>

<p class="codepen" data-height="380" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="OJrjNJe" data-user="tim-momo" style="height: 380px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrjNJe">
  Sass - Color whiteness &amp; blackness</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>









<dots></dots>
<grostitre>Hue</grostitre>
<p>La fonctionnalité <incode>hue</incode> permet de changer la teinte d'une couleur toute en gardant exactement la même saturation et la même luminosité.</p><p>Les unités données doivent-être des nombres positifs ou négatifs déplaçant la position de la teinte actuelle sur l'échelle de teintes de 0 à  360 degrés (roue chromatique). </p>
<img src="images/HueScale.png" alt="Échelle de teintes de couleurs de 0 à 360 degrés (roue chromatique)">



<p class="codepen" data-height="370" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="oNJexYa" data-user="tim-momo" style="height: 370px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/oNJexYa">
  Sass - Color whiteness &amp; blackness</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<p>La teinte actuelle à une valeur de 155.<br>
En haut ⬆️, elle est incrémentée de 100, donc atteint à 255.<br>
En bas ⬇️, elle est diminuée de 100, donc atteint 55.</p>






<dots></dots>
<grostitre>Saturation &amp; Grayscale</grostitre>
<p>La fonctionnalité <incode>saturation</incode> permet d'altérer l'intensité d'une couleur. Par exemple, en donnant une saturation de -50%, une couleur devient automatiquement 50% moins vibrante. La fonctionnalité <incode>color.grayscale</incode> quant à elle est l'équivalent d'une couleur ayant perdu toute son intensité, pour ainsi dire l'équivalent de lorsque cette couleur est imprimée en noir et blanc 🖨. </p><p>Les unités doivent être exprimées en pourcentage<em> (%)</em> pouvant-être positif ou négatif.</p>


<p class="codepen" data-height="370" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="rNozemY" data-user="tim-momo" style="height: 370px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/rNozemY">
  Sass - Color whiteness &amp; blackness</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


    <p><incode>color.adjust($color, $saturation: -100%)</incode> = <incode>color.grayscale($color)</incode>,<br>
soit une couleur complètement désaturée.</p>






<dots></dots>
<grostitre>Lightness</grostitre>
<p>La fonctionnalité <incode>lightness</incode> permet d'altérer la luminosité d'une couleur. Il est donc possible de la rendre plus lumineuse ou plus sombre via celle-ci.</p><p>Les unités doivent être exprimées en pourcentage<em> (%)</em> pouvant-être positif ou négatif.</p>

<p class="codepen" data-height="370" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="oNJexwQ" data-user="tim-momo" style="height: 370px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/oNJexwQ">
  Sass - Color lightness</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>








<dots></dots>
<grostitre>Complement &amp; Invert</grostitre>
<p>La fonctionnalité <incode>color.complement</incode> permet d'obtenir la couleur complémentaire sur le cercle chromatique à la couleur passée en argument. Tandis que la fonctionnalité <incode>color.invert</incode> soustrait les valeurs de rouge, vert et bleu à 255 afin d'obtenir la couleur opposée exacte.</p>

<p>Certes, ces deux fonctionnalités se ressemblent beaucoup, mais il est parfois pratique d'avoir la flexibilité de choisir entre les deux.</p>

<p class="codepen" data-height="370" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="ExGvKwL" data-user="tim-momo" style="height: 370px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExGvKwL">
  Sass - Color lightness</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>







<dots></dots>
<grostitre>Red, Green &amp; Blue</grostitre>
<p>Les fonctionnalités <incode>red</incode>, <incode>green</incode> et <incode>blue</incode> permettent d'augmenter ou de réduire le taux de rouge 🔴, vert 🟢 ou bleu 🔵 dans une couleur donnée. </p>

<p>Les unités données doivent-être des nombres positifs ou négatifs faisant varier le taux de rouge, vert ou bleu. Ces taux ont un minimum de 0 et un maximum de 255 qu'ils ne peuvent jamais dépasser.</p>



<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="wvRqGPM" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/wvRqGPM">
  Sass - Color.adjust $red, $green, $blue</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>






<dots></dots>
<grostitre>Alpha</grostitre>
<p>La fonctionnalité <incode>alpha</incode> permet de faire fluctuer le taux de transparence d'une couleur. Pour ce faire, il faut passer un nombre entre -1 et 1 s'ajoutant à la valeur courante d'alpha. </p><p>Par exemple, si une couleur est actuellement opaque <em>(alpha de 1)</em>, il faudra lui donner la valeur <incode>-0.5</incode> pour diminuer son opacité de 50%.</p>
<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="abPyNEK" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/abPyNEK">
  Sass - Color.adjust $red, $green, $blue</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<doclink href='https://sass-lang.com/documentation/modules/color'>module color</doclink>






<dots></dots>
<grostitre>Cheatsheet</grostitre>
<p>Voici coup sur coup la même couleur verte 🟢 <em>(</em><incode>$color: #00c774;</incode><em>)</em> altérée via des fonctionnalités du module de couleurs Sass:</p>

<p class="codepen" data-height="700" data-theme-id="44431" data-default-tab="result" data-slug-hash="wvRqGyM" data-user="tim-momo" style="height: 700px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/wvRqGyM">
  Sass - Color.adjust $alpha</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

