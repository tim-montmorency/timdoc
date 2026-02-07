<?php 
/**
 * @type     article
 * @title    Boucle SASS
 * @icon     ../images/icon.webp
 * @abstract Plusieurs classes CSS similaires avec une légère variation
 * @index    30
 * @ref      web/sass
 */
?>
<p>Plutôt que d'écrire à la main plusieurs classes CSS similaires avec une légère variation, SCSS permet de créer des boucles générant pour nous ces différentes classes.</p>

<grostitre>@for</grostitre>
<p>Les boucles <incode>@for</incode> fonctionnent de façon très similaire aux <a target="_blank" rel="noopener noreferrer" href="https://smnarnold.com/cours/javascript/boucle-for">boucles for en JavaScript</a>. Il faut premièrement définir une variable, lui donner une valeur de départ et une valeur à atteindre.</p>

<p>Par exemple, afin de configurer la taille de plusieurs titres <em>(headings)</em> à l'aide d'une boucle <incode>@for</incode>, il est possible de faire:</p>

<highlight lang="scss">@for $index from 1 to 5 {
  h#{$index} {
    font-size: 40px - ($index * 5);
  }
}</highlight>



<p>Ce qui produit le code suivant:</p>
<highlight lang="css">h1 { font-size: 35px; }
h2 { font-size: 30px; }
h3 { font-size: 25px; }
h4 { font-size: 20px; }</highlight>


<info>Remarquez comment, pour concaténer une variable SCSS avec du texte (c-à-d construire le nom du sélecteur css, de la classe ou de la pseudo-classe), on l’enveloppe avec <incode>#{}</incode>. <br><br> <small>Un peu comme les <incode>${}</incode> avec les <a href="https://smnarnold.com/cours/javascript/litteraux-de-gabarits" target="_blank" rel="noopener noreferrer">littéraux de&nbsp;gabarit</a>  en Javascript.</small></info>

<info>Remarquez que le dernier chiffre n’est jamais atteint. La boucle indique <incode>1 to 5</incode>. En conséquence, le dernier heading est <incode>h4</incode> et non&nbsp;<incode>h5</incode> puisqu'on n'atteind jamais le chiffre mentionné après le <incode>to</incode> dans la ligne <incode>@for $index from 1 to 5</incode>.</info>




<h3 class="heading heading--h3" id="through">through</h3>
<p>Lorsque <incode>through</incode> est utilisé à la place de <incode>to</incode>, le chiffre à atteindre dans la boucle est inclus.</p>
<p>Par exemple, le même code que précédemment, mais avec <incode>through</incode>:</p>

<highlight lang="scss">
@for $index from 1 through 5 {
  h#{$index} {
    font-size: 40px - ($index * 5);
  }
}
</highlight>



<p>Produit le code suivant:</p>

<highlight lang="css">
h1 { font-size: 35px; }
h2 { font-size: 30px; }
h3 { font-size: 25px; }
h4 { font-size: 20px; }
h5 { font-size: 15px; }
</highlight>






<p>Où le nombre 5 est inclus.</p>

<doclink href="https://sass-lang.com/documentation/at-rules/control/for">@for</doclink>


<dots></dots>
<exercice href="../../exercices/sass-for-1-a-6/"></exercice>

<exercice href="../../exercices/sass-for-palette-pink-paradise/"></exercice>


<dots></dots>
<grostitre>@each</grostitre>

<p>Les boucles <incode>@each</incode> ressemblent aux boucles <a rel="noopener noreferrer" href="#for">@for</a> à la différence qu'<strong>elles servent à itérer sur une liste d'items</strong>. À tour de rôle, une variable prend la valeur de chaque item dans la liste et devient accessible.</p>

<p>Par exemple, une de boucle configurant la couleur de plusieurs messages peut être écrite ainsi avec une boucle
<incode>@each</incode>:</p>

<highlight lang="scss">
$colorsArr: red, yellow, blue, gray;

@each $color in $colorsArr {
  .msg-#{$color} {
    background-color: $color;
  }
}
</highlight>

<p>Ce qui produit, une fois le code compilé en css, le code suivant:</p>

<highlight lang="css">
.msg-red { background-color: red; }
.msg-yellow { background-color: yellow; }
.msg-blue { background-color: blue; }
.msg-gray { background-color: gray; }
</highlight>




<h3 class="heading heading--h3" id="map">Map (utilisation de clé et valeur)</h3>

<p>Dans certains cas, identifier une valeur à l'aide d'une clé dans une boucle peut s'avérer très pratique. Heureusement, la boucle <incode>@each</incode> peut aussi itérer sur un tableau de clés et de valeurs.</p>

<p>Par exemple, pour créer une rapidement des classes ayant des noms textuels et des valeurs numériques il est possible de faire:</p>

<highlight lang="scss">
$sizesArr: (small: 12px, medium: 16px, big: 30px);

@each $key, $value in $sizesArr {
  .text-#{$key} {
    font-size: $value;
  }
}
</highlight>




<p>Ce qui produit, une fois le code compilé en css, le code suivant:</p>

<highlight lang="css">
.text-small { font-size: 12px; }
.text-medium { font-size: 16px; }
.text-big { font-size: 30px; }
</highlight>

<doclink href="https://sass-lang.com/documentation/at-rules/control/each">@each</doclink>

<dots></dots>
<exercice href="../../exercices/sass-each-menu-overwatch/"></exercice>
