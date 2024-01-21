<?php 
/**
 * @type     article
 * @title    Centrer un div
 * @icon     images/centrer-div.png
 * @abstract Center une balise div vertic. et horiz.
 * @index 90
 * @ref      web/css
 */
?>


<h2>Comment centrer un div avec CSS ?</h2>

<p>Pour centrer un div à l'aide de CSS, vous pouvez utiliser les propriétés d'alignement de boîte CSS sur le conteneur parent. Toutefois, ces propriétés d'alignement ne sont pas prises en charge par les navigateurs pour la mise en page en bloc et en ligne. Par conséquent, vous devez faire en sorte que le conteneur parent soit un conteneur <em>flex</em> ou <em>grid</em> pour permettre l'utilisation de l'alignement.</p>

<grostitre>Flexbox</grostitre>

<p>Voici un exemple de centrage vertical d'un div à l'aide de flexbox :</p>


<highlight lang='html'>&lt;div class=&quot;parent&quot;&gt;
  &lt;div class=&quot;centered-div&quot;&gt;
    Cet élément est centré.
  &lt;/div&gt;
&lt;/div&gt;</highlight>

<highlight lang='css'>.parent {
  display : flex ;
  align-items : center ;
  justify-content : center ;
}

.centered-div {
  /* Styles supplémentaires pour le div centré */
}</highlight>

<p>Dans l'exemple ci-dessus, la propriété <incode>display</incode> du conteneur <em>.parent</em> est définie sur flex, ce qui le transforme en conteneur flex. La propriété <incode>align-items</incode> est définie sur <incode>center</incode>, ce qui aligne verticalement les éléments enfants. La propriété <incode>justify-content</incode> est également définie sur <incode>center</incode>, ce qui aligne horizontalement les éléments enfants.</p>

<p>Notez que cette technique peut être utilisée pour centrer n'importe quel type d'élément à l'intérieur d'un autre. Vous pouvez essayer de modifier les valeurs des propriétés d'alignement pour obtenir différents alignements.</p>

<dots></dots>
<grostitre>Grid</grostitre>


<p>Si vous préférez utiliser la mise en page en grille (<incode>grid</incode> ), vous pouvez également centrer un div en utilisant les propriétés <incode>align-self</incode> et <incode>justify-self</incode> à l'intérieur d'une zone de grille. Voici un exemple&nbsp;:</p>




<highlight lang='html'>&lt;div class=&quot;parent&quot;&gt;
  &lt;div class=&quot;item1&quot;&gt;
    Article 1
  &lt;/div&gt;
&lt;/div&gt;</highlight>


<highlight lang='css'>.parent {
  display : grid ;
}

.item1 {
  align-self : center ;
  justify-self : center ;
  /* Styles supplémentaires pour le div centré */
}</highlight>


<p>Dans cet exemple, le div enveloppant <em>.parent</em> est un conteneur de grille. Le div <incode>.item1</incode> est placé dans la seule cellule de la grille et est centré verticalement et horizontalement à l'aide des propriétés <incode>align-self</incode> et <incode>justify-self</incode>.</p>

<dots></dots>
<grostitre>Plus d'infos et autres techniques</grostitre>

<ul>
  <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Howto/Center_an_item" target="_blank" rel="noopener noreferrer">Comment centrer un élément (EN)</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/margin#centrer_horizontalement" target="_blank" rel="noopener noreferrer">Center avec marges</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_grid_layout/Box_alignment_in_grid_layout" target="_blank" rel="noopener noreferrer">Alignement des boîtes dans une grille</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_positioned_layout/Understanding_z-index/Stacking_context_example_1" target="_blank" rel="noopener noreferrer">Exemple de contexte d'empilement 1</a></li>
</ul>








