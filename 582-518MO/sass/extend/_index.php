<?php 
/**
 * @type     article
 * @title    Extend
 * @icon     images/icon.png
 * @abstract une classe ayant les mêmes règles qu'une autre classe
 * @index 35
 */
?>

<p>La règle <code>@extend</code> permet de définir une classe ayant les mêmes règles de style qu'une autre classe spécifiquement.</p>

<p>Par exemple, une classe de message pourrait ressembler à ceci:</p>




<highlight lang='css'>.msg {
  border-radius: 10px;
  padding: 10px;
  background-color: blue;
}</highlight>


<p>Si d'autres types de messages doivent ensuite être créés et qu'ils doivent partager les mêmes styles de bases que <code>.msg</code>, il serait possible d'étendre cette classe plutôt que de réécrire à chaque fois le même code.</p>

<p>Par exemple:</p>
<highlight lang='css'>.msg-error {
  @extend .msg;
  background-color: red;
}

.msg-success {
  @extend .msg;
  background-color: green;
}</highlight>
<p>Ce qui générerait le code suivant:</p>
<highlight lang='css'>.msg, .msg-success, .msg-error {
  border-radius: 10px;
  padding: 10px;
  background-color: blue;
}

.msg-error {
  background-color: red;
}

.msg-success {
  background-color: green;
}</highlight>



<p>Les trois messages partageraient donc le même<code> border-radius</code> et le même <code>padding</code> tandis que la couleur de fond serait écrasée pour chaque variation.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/extend'>@extend</doclink>



<dots></dots>
<grostitre>Placeholder</grostitre>
<p>Parfois il est pratique de définir des règles qui peuvent être étendues sans pour autant que ces règles existent en soi, d'où l'utilité des <code>%placeholder</code>. Ces règles commencent avec un <code>%</code> et ne génèrent aucun code à moins d'être étendues.</p>

<p>Par exemple, l'exemple précédent pourrait être réécrit avec un placeholder afin d'éviter que la couleur de fond bleue soit écrasée par les variantes de messages:</p>

<highlight lang='css'>%msg {
  border-radius: 10px;
  padding: 10px;
}

.msg {
  @extend %msg;
  background-color: blue;
}

.msg-error {
  @extend %msg;
  background-color: red;
}

.msg-success {
  @extend %msg;
  background-color: green;
}</highlight>

<p>Ce qui générerait le code suivant:</p>

<highlight lang='css'>.msg-success, .msg-error, .msg {
  border-radius: 10px;
  padding: 10px;
}

.msg { background-color: blue; }
.msg-error { background-color: red; }
.msg-success { background-color: green; }</highlight>



<p>Les placeholders sont particulièrement utile en ce qui à trait aux règles de styles que nous utilisons régulièrement.</p><p>Par exemple, je sais que je centre régulièrement des éléments via <code>transform</code>. Plutôt que de tapper à chaque fois:</p>

<highlight lang='css'>.element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}</highlight>




<p>Je me créé donc régulièrement un placeholder similaire à ceci:</p>

<highlight lang='css'>%centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}</highlight>


<p>Et je l'utilise sur mes éléments que je désire centrer ainsi:</p>
<highlight lang='css'>.element {
  @extend %centered;
}</highlight>


<doclink href='https://sass-lang.com/documentation/style-rules/placeholder-selectors'>Placeholder</doclink>





<dots></dots>
<grostitre>Limitations</grostitre>
<p>Une règle de style ne peut être étendue que si elle se trouve dans le même contexte que sa définition. Autrement dit, une règle de style définie à la base d'un fichier ne peut pas être étendue à l'intérieur d'une media query à moins d'être défini à nouveau dans ce contexte.</p>
