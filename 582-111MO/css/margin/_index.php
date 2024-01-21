<?php
/**
 * @type     article
 * @title    Margin
 * @icon     images/icon.png
 * @abstract marge extérieur
 * @ref      web/css
 */
?>

<p>La propriété <incode>margin</incode> définit un espace vide devant être respecté autour d'un élément, bref une marge. Par défaut, cette propriété à une valeur de 0 permettant aux éléments de s'afficher un à la suite de l'autre sans espace vide <em>(collés un à l'autre)</em>, mais elle accepte l'ensemble des <a href="../unites-de-mesure/">unités de mesure CSS</a>.</p>

<info>Contrairement à padding, margin accepte les valeurs négatives.</info>

<p>Lorsqu'une seule valeur est fournie, celle-ci est appliquée aux 4 côtés de l'élément.</p>

<p>Dans l'exemple suivant, remarquez comment le changement de margin affecte l'espace autour du carré 2.</p>

<codepen id="WNKyjGW" tab="result" height="340"></codepen>

<warning>Les éléments aillant un <incode>display: inline</incode> <em>(span, a, etc.)</em> ne sont pas affectés par les marges verticales ↕️ par défaut.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/margin">margin</doclink>
<doclink href="https://www.w3schools.com/css/css_margin.asp">margin</doclink>

<dots></dots>


<grostitre>Sous-propriétés</grostitre>

<p>Pour plus de contrôle, il est possible d'attribuer une valeur différente à chaque côté en utilisant les sous-propriétés suivantes:</p>

<ul>
  <li><incode>margin-top</incode></li>
  <li><incode>margin-right</incode></li>
  <li><incode>margin-bottom</incode></li>
  <li><incode>margin-left</incode></li>
</ul>

<p>Par exemple:</p>

<codepen id="xxJzddd" tab="result" height="340">L’option margin-right de l’exemple ci-dessus peut donner l’impression de ne pas fonctionner, mais la marge est bel et bien ajouté, elle est simplement combinée avec celle de son parent. Plus sur les combinaisons de marges plus bas 👇</codepen>

<dots></dots>


<grostitre>Syntaxe courte</grostitre>

<p>Il est aussi possible d'attribuer les 4 côtés avec la syntaxe courte en les spécifiant un après l'autre en commençant par le haut et en tourant dans le sens des aiguilles d'une montre ⌚️ <em>(top, right, bottom et left)</em>.</p>

<p>Par exemple:</p>

<codepen id="xxJzdXr" tab="result" height="340"></codepen>

<h3>Syntaxe courte à deux valeurs</h3>

<p>Lorsque seulement deux valeurs sont spécifiées la première est utilisée afin de déterminer la marge verticale ↕️ <em>(top et bottom)</em> et la deuxième la marge horizontale ↔️ <em>(left et right)</em>.</p>

<p>Par exemple:</p>

<codepen id="MWBXmQK" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Alignement horizontal ↔️</grostitre>

<p>Les marges sont régulièrement utilisées afin de centrer horizontalement ↔️ des éléments dans leurs parents. Pour ce faire, il suffit d'attribuer la valeur <incode>auto</incode> aux marges de gauche et de droite.</p>

<codepen id="dyjKWem" tab="css,result" height="340"></codepen>

<info>Cette technique de centrage est généralement utilisée avec la syntaxe à deux valeurs, soit <incode>margin: 0 auto;</incode></info>

<alert><h5>ERREUR FRÉQUENTE</h5>Pour centrer horizontalement un élément avec la propriété margin et la valeur auto, un élément doit être en <incode>display: block</incode></alert>

<dots></dots>


<grostitre>Combinaison de marges</grostitre>

<p>À l'occasion certaines marges sont combinées. C'est ce que les anglophones appellent <em>"margin collapse"</em>. Ce comportement peut paraitre étrange à première vue, mais il respecte le concept de marge qui est de générer un espace vide entre un élément et ceux l'entourant.</p>

<p>L'exemple le plus commun est celui des paragraphes <em>(p)</em> qui ont un <incode>margin-top</incode> et un <incode>margin-bottom</incode> équivalent à la hauteur d'une lettre <em>(1em)</em>, soit une ligne. Si une image est insérée après un paragraphe, le <incode>margin-bottom</incode> de ce dernier s'assuere qu'un espace équivalent à une ligne les sépare. Cependant, que se passe-t-il lorsque deux paragraphes se suivent?</p>

<p>Un espace équivalent à une seule ligne les sépare, car leurs marges sont combinées plutôt qu'additionnées.</p>

<p>Cependant, ce ne sont pas toutes les marges qui sont combinée. Seulement celles verticales ↕️.</p>

<knowmore href="https://www.joshwcomeau.com/css/rules-of-margin-collapse/">Excellent billet de Josh W Comeau expliquant le margin collapse.</knowmore>

<dots></dots>