<?php 
/**
 * @type     article
 * @title    Grid intermédiaire
 * @icon     images/icon2.png
 * @abstract Système de mise en page par grille
 * @index    96
 * @ref      web/css
 */
?>

<grostitre>Placement des éléments</grostitre>
<p>Les propriétés CSS présentées dans cette page sont appliquées sur les éléments-enfants de la grille, afin de les positionner à l'intérieur de celle-ci.</p>

<grostitre>grid-column</grostitre>
 <p>La propriété <incode>grid-column</incode> est constituée de deux sous propriétés: <incode>grid-column-start</incode> et <incode>grid-column-end</incode>. Ces propriétés permettent de définir où un élément devrait être affiché en fonction d'une ligne verticale ↕️ de départ et de fin dans la grille.</p>

<info>Afin de bien comprendre et visualiser ces lignes, il est fortement suggéré d’utiliser&nbsp;l’inspecteur.</info>

<p>Par exemple:</p>
<p class="codepen" data-height="360" data-theme-id="44431" data-slug-hash="ExGozXP" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExGozXP">
  Grid - % vs fr gap</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<info>Il est possible d’utiliser des chiffres négatifs afin de compter à partir de la fin de la grille plutôt que de son&nbsp;début.</info>

<p>Ces propriétés peuvent être combinées en utilisant simplement <incode>grid-column</incode>. </p>

<p>Par exemple, le code suivant:</p>
<highlight lang="css">grid-column-start: 1;
grid-column-end: 4;</highlight>


<p>Est équivalent à celui-ci:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="result" data-slug-hash="JjwMqyb" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjwMqyb">
  Grid - grid-column</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-column">grid-column</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_grid-column.php">grid-column</doclink>




<dots></dots>
<grostitre>grid-row</grostitre>
<p>La propriété <incode>grid-row</incode> est constituée de deux sous propriétés: <incode>grid-row-start</incode> et <incode>grid-row-end</incode>. Ces propriétés permettent de définir où un élément devrait être affiché en fonction d'une ligne horizontale ↔️ de départ et de fin dans la grille.</p>

<p>Par exemple:</p>


<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="result" data-slug-hash="OJrzYjw" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrzYjw">
  Nouveau</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<warning>Les nombres négatifs ne fonctionnent qu’avec les <a href="../grid/#grid-template-columns" target="_blank" rel="noopener noreferrer">rows explicites</a>.</warning>

<p>Ces propriétés peuvent être combinées en utilisant simplement <incode>grid-row</incode>. </p>

<p>Par exemple, le code suivant:</p>
<highlight lang="css">grid-row-start: 1;
grid-row-end: 4;</highlight>

<p>Est équivalent à celui-ci:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="result" data-slug-hash="QWzaRaP" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/QWzaRaP">
  Grid - grid-column</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-row">grid-row</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_grid-row.php">grid-row</doclink>





<dots></dots>
<grostitre>span</grostitre>
<p>La valeur <incode>span</incode> combinée aux propriétés <incode>grid-column</incode> &amp; <incode>grid-row</incode> permet d'étendre un élément sur plus d'une d'une colonne ou une rangée dans une grille sans avoir à connaitre le numéro de ligne de début ou de fin.</p>

<p>Par exemple, pour étendre l'élément 2 🔵, il est possible de faire:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="result" data-slug-hash="gOZoJeK" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/gOZoJeK">
  Grid - grid-row</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<dots></dots>
<h3>Exercice</h3>
<p>Exercice : lien partagé en cours.</p>

<!--<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="https://smnarnold.com/exercices/css/grid-joker" target="_blank" class="exercice-card__title">
        Grid -&nbsp;Joker
      </a>
      <p class="exercice-card__description">Dans le cadre de cet exercice, vous devrez recréer l’une des planches du célèbre roman graphique Batman: The killing joke à l’aide d’une&nbsp;...</p>
  </div>
</aside>-->
  




<dots></dots>
<grostitre>grid-area</grostitre>
 <p>La propriété <incode>grid-area</incode> permet de définir à la fois la valeur de &nbsp;<incode>grid-row-start</incode>,&nbsp;<incode>grid-column-start</incode>,&nbsp;<incode>grid-row-end</incode> et&nbsp;<incode>grid-column-end</incode>.</p><p>Par exemple le code suivant:</p>
 <highlight lang="css">.no1 {
  grid-row-start: 1;
  grid-column-start: 2;
  grid-row-end: 3;
  grid-column-end: 4;
}</highlight>

<p>Est équivalent à celui-ci:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="result" data-slug-hash="LYMeoJj" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/LYMeoJj">
  Grid - Span</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-area">grid-area</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_grid-area.php">grid-area</doclink>



<dots></dots>
<grostitre>grid-template-areas</grostitre>
<p>La propriété <incode>grid-template-areas</incode> permets de nommer des zones dans une grille. Cette approche permet de conceptualiser facilement la disposition des éléments.</p>

<p>Par exemple, si l'élément vert 🟢 représente un menu latéral, l'élément bleu 🔵 le contenu principal et l'élément rouge 🔴 un pied de page, il serait possible de les distribuer dans une grille grâce à <incode>grid-area</incode>:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="ExGozdN" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExGozdN">
  Grid - grid-template-area</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<warning>Attention de ne pas mettre une virgule <em>","</em> entre chaque&nbsp;ligne.</warning>
<p></p>
<alert><em class="note__tagline">Erreur fréquente</em><br><incode>grid-template-areas</incode> prend un <em>"s"</em> à la&nbsp;fin.</alert>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/grid-template-areas">grid-template-areas</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_grid-template-areas.php">grid-template-areas</doclink>

<dots></dots>

<h3>Exercices</h3>
<p>2 exercices : liens partagés en cours.</p>

<!--
<aside class="exercice-card">
  <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="https://codepip.com/games/grid-garden/#fr" target="_blank" class="exercice-card__title">
        Grid Garden - Niveaux 1 à&nbsp;17
      </a>
      <p class="exercice-card__description">Complétez les 17 premiers niveaux de Grid Garden&nbsp;🥕</p>
  </div>
</aside>

<aside class="exercice-card">
  <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/css/grid-offres-samsung" target="_blank" class="exercice-card__title">
        Grid - Offres&nbsp;Samsung
      </a>
      <p class="exercice-card__description">Pour cet exercice, vous devez compléter une grille d’offres promotionnelles présentant divers produits Samsung mis en vedette lors de la&nbsp;...</p>
  </div>
 </aside>
-->



<dots></dots>
<grostitre>Résumé vidéo</grostitre>

<youtube src="uuOXPWCh-6o"></youtube>

  <br>

