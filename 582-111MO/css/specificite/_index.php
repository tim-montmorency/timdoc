<?php
/**
 * @type     article
 * @title    Spécificité
 * @icon     images/icon.png
 * @abstract Chaque sélecteur en CSS se voit attribuer un pointage.
 * @ref      web/css
 */
?>

<p class="spacer">Chaque sélecteur en CSS se voit attribuer un pointage. Lorsque deux sélecteurs ciblent les mêmes propriétés d’un même élément, le sélecteur avec le plus haut pointage l’emporte. Le style de sa propriété est donc attribué à l’élément ciblé au détriment de celui du sélecteur plus faible.</p>

<p>En règle générale, il est conseillé de garder le pointage de ses sélecteurs le plus faible possible. Ainsi, si l’apparence d’un élément doit changer dans un contexte spécifique, il sera facilement possible d’écraser ses styles de bases avec un sélecteur doté d’un plus grand pointage.</p>

<dots></dots>


<grostitre>Pointage par sélecteurs</grostitre>

<h3>Universel *</h3>

<p>Le sélecteur universel <incode>*</incode> est le plus faible des sélecteurs avec une valeur de <strong><em>0 point</em></strong>. Il peut donc être écrasé par tout autre sélecteur.</p>

<highlight lang="css">* { ... }</highlight>

<h3>Balise</h3>

<p>Un sélecteur avec une balise à une valeur de <strong><em>1 point</em></strong>.</p>

<highlight lang="css">div { ... }</highlight>

<h3>Classe, pseudo-classe et attribut</h3>

<p>Ont tous une valeur de <strong><em>10 points de spécificité</em></strong>.</p>

<highlight lang="css">.element { ... }
.element:hover { ... }
.element[title="demo"] { ... }</highlight>

<info>Normalement, une pseudo-classe est combinée à un autre sélecteur et n’est pas utilisé seul.</info>

<h3>ID</h3>

<p>Un sélecteur avec un ID à une valeur de <strong><em>100 points</em></strong>.</p>

<highlight lang="css">#no1 { ... }</highlight>

<h3>Style en ligne</h3>

<p>Les styles en ligne ont une valeur de <strong><em>1 000 points</em></strong>, ils sont donc extrêmement difficiles à écraser en cas de besoin, d’où pourquoi leur usage est à éviter autant que possible.</p>

<highlight lang="html">&lt;div style="color: blue;"&gt;...&lt;/div&gt;</highlight>

<h3>!important</h3>

<p>En dernier recours, il est possible d’ajouter la mention <incode>!important</incode> à la fin d’une déclaration CSS afin de lui attribuer <strong><em>10 000 points</em></strong> de spécificité et ainsi s’assurer d’écraser tout autre style. </p>

<highlight lang="css">.element {
  color: blue !important; /* 10 000 points */
  background: red; /* 10 points */
}</highlight>

<p>Puisque <incode>!important</incode> est ajouté à une propriété directement, sa présence n’impacte que la valeur de cette propriété et non celle de l'ensemble de la règle CSS.</p>

<warning>La présence d’un <incode>!important</incode> dans un code est généralement mal perçu et synonyme de problème de structure de code.</warning>

<dots></dots>


<grostitre>Combinaison de sélecteurs</grostitre>

<p>La valeur de chaque sélecteur s'additionne dans un groupe de sélecteurs.</p>

<p>Par exemple l’élément HTML suivant:</p>

<highlight lang="html">&lt;div class=”element no1”&gt;</highlight>

<h3>Balise seule</h3>

<p>Ciblé avec uniquement sa balise</p>

<highlight lang="css">div { … }</highlight>

<p>La balise ne vaut que <strong><em>1 point</em></strong>.</p>

<highlight lang="css">.item { … }</highlight>

<p>La classe seule ne vaut que <strong><em>10 points</em></strong>.</p>

<h3>Balise & Classe</h3>

<p>Combiné la balise et une classe</p>

<highlight lang="css">div.item { … }</highlight>

<p>donne au groupe de sélecteur une valeur de <strong><em>11 points</em></strong>.</p>

<h3>Classe & Classe</h3>

<p>Combiner les 2 classes</p>

<highlight lang="css">.item.no1 { … }</highlight>

<p>donne une valeur de <strong><em>20 points</em></strong>.</p>

<h3>Balise & Classe & Classe</h3>

<p>Et finalement combiner la balise aux deux classes</p>

<highlight lang="css">div.item.no1 { … }</highlight>

<p>donne <strong><em>21 points</em></strong>.</p>

<dots></dots>


<grostitre>Égalité de pointage</grostitre>

<p>Lorsque deux sélecteurs ont un pointage identique.</p>

<p>Par exemple pour l’élément HTML suivant:</p>

<highlight lang="html">&lt;div class=”element no1”&gt;</highlight>

<p>Les sélecteurs ci-dessous auront tous deux une valeur de spécificité équivalente à <strong><em>10 points</em></strong>.</p>

<highlight lang="css">.element { … }
.no1 { … }</highlight>

<p>Cependant, les styles du sélecteur <incode>.no1</incode> auront priorité sur ceux de <incode>.element</incode> puisque <incode>.no1</incode> est écrit en dernier et est donc considéré comme étant la définition la plus récente, donc celle prioritaire en cas d’égalité.</p>

<p>Le simple fait d’inverser ces sélecteurs dans le code CSS donnerait priorité aux styles de <incode>.element</incode> au détriment de ceux de <incode>.no1</incode>.</p>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity">Spécificité</doclink>
<doclink href="https://www.w3schools.com/css/css_specificity.asp">Spécificité</doclink>

<dots></dots>

<exercice href="exercices/specificite-css/"></exercice>

<dots></dots>