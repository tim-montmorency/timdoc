<?php 
/**
 * @type     article
 * @title    Grid
 * @icon     images/icon2.png
 * @abstract Système de mise en page par grille
 * @index    99
 * @ref      web/css
 */
?>

<p>Tout comme <a target="_blank" rel="noopener noreferrer" href="/cours/css/flexbox">flexbox</a>, la propriété&nbsp;<incode>display: grid;</incode>,&nbsp;ou sa variante&nbsp;<incode>display: inline-grid;</incode>, influence l'affichage de ses enfants. Cependant, contrairement à flexbox qui les positionne en fonction d'une seule dimension <em>(x ou y)</em>, grid permet de les positionner sur une grille quadrillée en deux dimensions <em>(x &amp; y)</em>.</p>

<img src="images/flexbox-compared-css-grid.png" alt="flexbox sur une dimension à la fois. grid sur 2 dimensions (x et y)">

<p><q cite="https://css-tricks.com/" class="on-hover">Pour commencer, vous devez définir un élément conteneur comme une grille avec <br><incode>display : grid</incode>,<br> <br>définir la taille des colonnes et des lignes avec  <br> <incode>grid-template-columns</incode> et <incode>grid-template-rows</incode>, 
<br><br>puis placer ses éléments enfants dans la grille avec  <br><incode>grid-column</incode> et <incode>grid-row</incode>.

<br><br>
Comme dans le cas de flexbox, l'ordre source des éléments de la grille n'a pas d'importance. Votre CSS peut les placer dans n'importe quel ordre, ce qui facilite grandement la réorganisation de votre grille à l'aide de requêtes média. Imaginez que vous définissiez la disposition de votre page entière, puis que vous la réorganisiez complètement pour l'adapter à une largeur d'écran différente, le tout avec seulement quelques lignes de CSS. La grille est l'un des modules CSS les plus puissants jamais introduits.</q></p>



<dots></dots>
<grostitre>grid-template-columns</grostitre>
<p>Permet de définir la taille de chaque colonne d'une grille. Le nombre de colonnes correspond au nombre de valeurs spécifiées.</p><p>Par exemple, trois valeurs produisent trois colonnes:</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="wvRexmm" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/wvRexmm">
  GSAP -  Timeline - GSDevTools</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


<info>Puisqu’il y a plus d’éléments que de colonnes, une 2e rangée est automatiquement créée afin d’accommoder tous les items. La première rangée est donc explicite tandis que la deuxième est&nbsp;implicite.</info>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-template-columns">grid-template-columns</doclink>

<doclink href="https://www.w3schools.com/cssref/pr_grid-template-columns.php">grid-template-columns</doclink>







<dots></dots>
<grostitre>grid-template-rows</grostitre>

<p>Permet de définir la taille de chaque rangée d'une grille. Le nombre de rangées correspond au nombre de valeurs spécifiées.</p>
<p>Par exemple, deux valeurs produisent deux rangées:</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="VwqWBdm" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/VwqWBdm">
  Grid - grid-template-columns</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<info>Il aurait été possible de créer plus de rangées. Cependant, ces rangées auraient étés vides puisqu’il n’y a seulement assez d’éléments pour combler deux rangées de trois&nbsp;colonnes.</info>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-template-rows">grid-template-rows</doclink>

<doclink href="https://www.w3schools.com/cssref/pr_grid-template-rows.php">grid-template-rows</doclink>






<dots></dots>
<grostitre>column-gap, row-gap &amp; gap</grostitre>

<p>Les propriétés <incode>column-gap</incode>, <incode>row-gap</incode> et <incode>gap</incode> permettent de définir des espaces entre les cellules d'une grille. Ces propriétés acceptent <a target="_blank" rel="noopener noreferrer" href="/cours/css/unites-de-mesure">toutes les unités de base</a>.</p>


<h3 class="heading heading--h3" id="column-gap">column-gap</h3>
<p>La propriété&nbsp;<incode>column-gap</incode>&nbsp;permet de définir l'espace entre les colonnes d'une grille.</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="eYbRjKw" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/eYbRjKw">
  Grid - grid-template-rows</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/column-gap">column-gap</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_column-gap.php">column-gap</doclink>




<h3 class="heading heading--h3" id="row-gap">row-gap</h3>
<p>La propriété&nbsp;<incode>row-gap</incode>&nbsp;permet de définir l'espace entre les rangées d'une grille.</p>


<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="mdawjjM" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdawjjM">
  Grid - column-gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/row-gap">row-gap</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_row-gap.php">row-gap</doclink>


<h3 class="heading heading--h3" id="gap">gap</h3>
<p>La propriété&nbsp;<incode>gap</incode>&nbsp;permet de définir l'espace entre les colonnes et rangées d'une grille simultanément.</p>
<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="bGORjjK" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/bGORjjK">
  Grid - row-gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<p>Cette propriété accepte aussi de recevoir deux valeurs. Le cas échéant, la première correspond à l'espace entre les rangées et la deuxième, à celle entre les colonnes.</p><p>Par exemple:</p>
<highlight lang="css">gap: 10px 50px;</highlight>
<p>Génère un espace de 10px entre les rangées ↕️ et de 50px entre les colonnes ↔️.</p>


<warning>Pratiquement toutes les unités, <strong>sauf les fr</strong>, peuvent êtres utilisées pour les propriété de type&nbsp;gap.</warning>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/gap">gap</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_gap.php">gap</doclink>










<dots></dots>
<grostitre>Unité fr</grostitre>
<p>Afin de simplifier la gestion des colonnes et des rangées une nouvelle unité CSS vue le jour. Cette unité, intitulée <incode>fr</incode> pour <em>fraction</em>, permet de distribuer l'espace disponible de façon relative entre chaque élément ayant une valeur de ce type.</p><p>Par exemple, pour avoir trois colonnes identiques, il serait possible de faire:</p>

<highlight lang="css">grid-template-columns: 1fr 1fr 1fr;</highlight>


<h3 class="heading heading--h3" id="Combinaison avec gap">Combinaison avec gap</h3>
<p>À priori, cette unité peut sembler similaire aux pourcentages <em>(%)</em>. Cependant, puisque les fractions <em>(fr)</em> basent leurs calculs sur l'espace disponible et non l'espace total de leur parent, ils peuvent-être utiliser avantageusement avec les propriétés de type <incode>gap</incode>.</p><p>Par exemple, si un <incode>column-gap: 5px</incode> est présent sur des éléments en pourcentages à gauche versus en fractions à droite.</p>

<p class="codepen" data-height="340" data-theme-id="44431" data-default-tab="css" data-slug-hash="OJrgwdv" data-user="tim-momo" style="height: 340px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrgwdv">
  Grid - % vs fr gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="OJrgwdv" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrgwdv">
  Grid - gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>






<h3 class="heading heading--h3" id="Combinaison avec unités tierce">Combinaison avec unités différentes, telles que px ou vw ou vh etc.</h3>
<p>Lorsqu'une unité différente est ajoutée en combinaison, les pourcentages <em>(%)</em> continuent de se baser sur la dimension totale du parent, peu importe la dimension prise par cette unité. Contrairement aux fractions <em>(fr)</em> qui se séparent l'espace disponible restant après que l'unité différente ait pris son espace.</p>

<p>Dans les exemples ci-dessous👇, la première colonne a une unité différente <em>(px)</em>, soit de 50px. À gauche, on remarque que la combinaison avec des pourcentages produit un résultat indésirable, tandis qu'à droite, les fractions séparent également l'espace restant, produisant ainsi un résultat harmonieux.</p>


<p class="codepen" data-height="340" data-theme-id="44431" data-default-tab="css" data-slug-hash="JjwJBVK" data-user="tim-momo" style="height: 340px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjwJBVK">
  Grid - % vs fr gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="JjwJBVK" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjwJBVK">
  Grid - % vs fr gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>




exercice 01 grid





<dots></dots>
<grostitre>Unité minmax()</grostitre>
<p>Comme son nom l'indique, <strong>l'unité</strong> <incode>minmax()</incode> permet de définir une dimension minimale et maximale à une cellule de grille. Cette unité est particulièrement utile afin de créer une mise en page responsive tout en évitant que certains éléments se retrouve trop coincés.</p><p>Par exemple, deux grilles identiques avec toutes les cellule d'une largeur de <incode>1fr</incode> à l'exception de la 2<sup>e</sup> cellule verte ayant une valeur de <incode>minmax(200px, 1fr)</incode>.</p>
<clipasset src="images/grid-minmax.mp4"></clipasset>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/minmax()">minmax()</doclink>






<dots></dots>
<grostitre>Unité repeat()</grostitre>
<p>Spécifier individuellement chaque colonne ou rangée n'est pas un problème lorsqu'une grille est de dimension relativement modeste. Cependant, lorsqu'une grille grossit, il peut devenir rapidement lassant et mélangeant d'écrire la dimension de chaque colonne ou rangée, surtout si celle-ci est identique.</p><p>Par exemple:</p>

<highlight lang="css">grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;</highlight>




<h3 class="heading heading--h3" id="auto-fit &amp; auto-fill">auto-fit &amp; auto-fill</h3>

<p>Afin de pouvoir réaliser une grille responsive sans avoir à écrire une multitude de <a target="_blank" rel="noopener noreferrer" href="/cours/css/media-queries">media queries</a>, il est possible d'utiliser les valeurs <incode>auto-fit</incode> et <incode>auto-fill</incode> à la place d'un nombre spécifique de colonnes dans un <incode>repeat()</incode>.</p><p>Par exemple avec <incode>auto-fit</incode>, </p>

<highlight lang="css">grid-template-columns: repeat(auto-fit, 150px);</highlight>


<p>Permet d'afficher autant d'éléments sur une rangée qu'il y a d'espace disponible.</p>

<clipasset src="images/grid-repeat-fit-content.mp4"></clipasset>



<p>La différence entre <incode>auto-fit</incode> et <incode>auto-fill</incode> étant la gestion de l'espace vide restant. Avec <incode>auto-fit</incode>, aucune cellule vide supplémentaire n'est ajoutée dans la grille, même si l'espace le permet, alors qu'avec <incode>auto-fill</incode> des cellules vides sont créées. Dans la majorité des cas, le résultat sera similaire. Cependant, cette particularité peut parfois s'avérer utile lorsque combinée avec d'autres propriétés de grille.</p>

<img src="images/grid-repeat-auto-fit-auto-fill.png" alt="">






<h3 class="heading heading--h3" id="Combinaison avec d'autres unités">Combinaison avec d'autres unités</h3>
<p>Il est aussi possible de combiner <incode>repeat()</incode> avec d'autres unités.</p>

<p>Par exemple:</p>


<p class="codepen" data-height="230" data-theme-id="44431" data-default-tab="css" data-slug-hash="RwEgYwx" data-user="tim-momo" style="height: 230px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RwEgYwx">
  Grid - % vs fr gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p class="codepen" data-height="300" data-theme-id="44168" data-default-tab="result" data-slug-hash="RwEgYwx" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RwEgYwx">
  Grid - % vs fr</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/repeat()">repeat()</doclink>






<dots></dots>
<grostitre>Inspecteur</grostitre>
<p>L'inspecteur est d'une aide précieuse lorsque l'on manipule les éléments en grid. Dans le DOM tree, les éléments en&nbsp;<incode>display: grid;</incode>&nbsp;ou&nbsp;<incode>display: inline-grid;</incode>&nbsp;sont mis en évidence grâce à un badge contenant le mot&nbsp;<em>"grid"</em>. Lorsque cliqué, ce badge met en surbrillance les divisions constituant la grille en question.</p><p>Dans l'onglet <em>layout</em>, il est possible d'afficher des informations supplémentaires. Notamment, étendre  les divisions afin de les rendre plus visibles, afficher la taille des colonnes et rangées, etc.</p>

<clipasset src="images/grid-inspector-layout.mp4"></clipasset>

 <dots></dots>    

<exercice href="../../exercices/grid-spotify/"></exercice>

