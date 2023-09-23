<?php 
/**
 * @type     article
 * @title    Centrer un div
 * @icon     images/centrer-div.png
 * @abstract Center une balise div vertic. et horiz.
 * @index 90
 */
?>

<h2>Comment centrer un div avec CSS ?</h2>

<p>Pour centrer un div à l'aide de CSS, vous pouvez utiliser les propriétés d'alignement de boîte CSS sur le conteneur parent. Toutefois, ces propriétés d'alignement ne sont pas prises en charge par les navigateurs pour la mise en page en bloc et en ligne. Par conséquent, vous devez faire en sorte que le conteneur parent soit un conteneur <em>flex</em> ou <em>grid</em> pour permettre l'utilisation de l'alignement.</p>

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
  /* Style supplémentaire pour le conteneur parent */
}

.centered-div {
  /* Style supplémentaire pour le div centré */
}</highlight>

<p>Dans l'exemple ci-dessus, la propriété <code>display</code> du conteneur parent est définie sur flex, ce qui le transforme en conteneur flex. La propriété <code>align-items</code> est définie sur <code>center</code>, ce qui aligne verticalement les éléments enfants. La propriété <code>justify-content</code> est également définie sur <code>center</code>, ce qui aligne horizontalement les éléments enfants.</p>



<p>Vous pouvez modifier le style du conteneur parent et de le div centré en fonction de vos besoins.</p>


<p>Notez que cette technique peut être utilisée pour centrer n'importe quel type d'élément à l'intérieur d'un autre. Vous pouvez essayer de modifier les valeurs des propriétés d'alignement pour obtenir différents alignements.</p>


<p>Si vous préférez utiliser la mise en page en grille (<code>grid</code> ), vous pouvez également centrer un div en utilisant les propriétés <code>align-self</code> et <code>justify-self</code> à l'intérieur d'une zone de grille. Voici un exemple&nbsp;:</p>



HTML

<highlight lang='html'>&lt;div class=&quot;wrapper&quot;&gt;
  &lt;div class=&quot;item1&quot;&gt;
    Article 1
  &lt;/div&gt;
&lt;/div&gt;</highlight>


<highlight lang='css'>.wrapper {
  display : grid ;
  grid-template-columns : repeat(4, 1fr) ;
  gap : 10px ;
  grid-auto-rows : 200px ;
  grid-template-areas :
  ". a a ."
  ". a a ." ;
}

.item1 {
  grid-area : a ;
  align-self : center ;
  justify-self : center ;
  /* Style supplémentaire pour le div centré */
}</highlight>


<p>Dans cet exemple, le div enveloppant est un conteneur de grille avec une propriété <code>grid-template-areas</code> définissant la disposition de la grille. Le div <code>.item1</code> est placé dans la zone de grille "a" et est centré verticalement et horizontalement à l'aide des propriétés <code>align-self</code> et <code>justify-self</code>.</p>

<p>N'oubliez pas d'ajuster le style des divs <code>.wrapper</code> et <code>.item1</code> si nécessaire.</p>

<ul>
  <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Howto/Center_an_item" target="_blank" rel="noopener noreferrer">Comment centrer un élément (EN)</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/margin#centrer_horizontalement" target="_blank" rel="noopener noreferrer">Center avec marges</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_grid_layout/Box_alignment_in_grid_layout" target="_blank" rel="noopener noreferrer">Alignement des boîtes dans une grille</a></li>
  <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_positioned_layout/Understanding_z-index/Stacking_context_example_1" target="_blank" rel="noopener noreferrer">Exemple de contexte d'empilement 1</a></li>
</ul>








