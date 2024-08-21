<?php 
/**
 * @type     article
 * @title    Extend
 * @icon     ../images/icon.webp
 * @abstract une classe ayant les mêmes règles qu'une autre classe
 * @index    35
 * @ref      web/sass
 */
?>

<p>La règle <incode>@extend</incode> permet de définir une classe ayant les mêmes règles de style qu'une autre classe spécifiquement.</p>

<p>Par exemple, une classe de message pourrait ressembler à ceci:</p>




<highlight lang="css">.msg {
  border-left: 4px solid blue;
  padding: 20px;
  background-color: lightBlue;
}</highlight>

<info>Ça donnerait un peu comme l'exemple ci-compte pour un bloc avec la classe .msg</info>
<br>
<p>Si d'autres types de messages doivent ensuite être créés et qu'ils doivent partager les mêmes styles de bases que <incode>.msg</incode>, il serait possible d'étendre (extend) cette classe plutôt que de réécrire à chaque fois le même code.</p>

<p>Par exemple:</p>
<highlight lang="scss">.msg-alert {
  @extend .msg;
  border-color: red;
  background-color: lightPink;
}

.msg-warning {
  @extend .msg;
  border-color: yellow;
  background-color: lightYellow;
}</highlight>

<alert>.msg-alert</alert>
<warning>.msg-warning</warning>








<p>Ce qui , une fois compilé en css, générerait le code suivant:</p>
<highlight lang="css">.msg, .msg-alert, .msg-warning {
  border-left: 4px solid blue;
  padding: 20px;
  background-color: lightBlue;
}

.msg-alert {
  border-color: red;
  background-color: lightPink;
}

.msg-warning {
  border-color: yellow;
  background-color: lightYellow;
}</highlight>



<p>Les trois messages partageraient donc le même <incode>border-width</incode>, le même <incode>border-style</incode> et le même <incode>padding</incode> tandis que la couleur de fond et la couleur de bordure serait écrasées pour chaque variation.</p>

<doclink href="https://sass-lang.com/documentation/at-rules/extend">@extend</doclink>





<dots></dots>

<grostitre>Placeholder</grostitre>
<p>Parfois il est pratique de définir des règles qui peuvent être étendues sans pour autant que ces règles existent en soi, d'où l'utilité des <incode>%placeholder</incode>. Ces règles commencent avec un <incode>%</incode> et ne génèrent aucun code à moins d'être étendues.</p>

<p>Par exemple, l'exemple précédent pourrait être réécrit avec un placeholder afin d'éviter que la couleur de fond bleue soit écrasée par les variantes de messages:</p>

<highlight lang="scss">%msg {
  border-left-width: 4px;
  border-left-style: solid;
  padding: 20px;
}

.msg {
  @extend %msg;
  border-left-color: blue;
  background-color: lightBlue;
}

.msg-alert {
  @extend %msg;
  border-left-color: red;
  background-color: lightPink;
 
}

.msg-warning {
  @extend %msg;
  border-left-color: yellow;
  background-color: lightYellow;
}</highlight>

<p>Ce qui générerait le code suivant:</p>

<highlight lang="css">.msg, .msg-alert, .msg-warning {
  border-left-width: 4px;
  border-left-style: solid;
  padding: 20px;
}

.msg { 
  border-left-color: blue;
  background-color: lightBlue;
}

.msg-alert { 
  border-left-color: red;
  background-color: lightPink;
}

.msg-warning { 
  border-left-color: yellow;
  background-color: lightYellow;
}</highlight>

<dots></dots>

<p>Les placeholders sont particulièrement utiles en ce qui à trait aux règles de styles que nous utilisons régulièrement.</p>

<p>Par exemple, je sais que je centre régulièrement des éléments via <incode>transform</incode>. Plutôt que de tapper à chaque fois:</p>

<highlight lang="css">.element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}</highlight>




<p>Je me créé donc régulièrement un placeholder similaire à ceci:</p>

<highlight lang="scss">%centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}</highlight>


<p>Et je l'utilise sur mes éléments que je désire centrer ainsi:</p>
<highlight lang="scss">.element {
  @extend %centered;
}</highlight>


<doclink href="https://sass-lang.com/documentation/style-rules/placeholder-selectors">Placeholder</doclink>





<dots></dots>
<grostitre>Limitations</grostitre>
<p>Une règle de style ne peut être étendue (extend) QUE si elle se trouve dans le même contexte que sa définition. </p>

<p>Autrement dit, une règle de style définie à la base d'un fichier ne peut pas être étendue à l'intérieur d'une media query à moins d'être définie à nouveau dans ce contexte (à l'intérieur de accolade de la media query).</p>
