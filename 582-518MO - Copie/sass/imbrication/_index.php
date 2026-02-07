<?php 
/**
 * @type     article
 * @title    Imbrication
 * @icon     ../images/icon.webp
 * @abstract Accélérer l'écriture de feuilles de styles
 * @index    45
 * @ref      web/sass
 */
?>

<p>Par défaut le langage CSS ne permet pas de faire d'imbrications, communément appelé <em>"nesting"</em> en anglais. Il
    est donc parfois nécessaire de répéter un sélecteur plusieurs fois dans son code CSS.</p>
<p>Heureusement, Sass apporte cette fonctionnalité à CSS, ce qui permet d'accélérer l'écriture de feuilles de styles et
    de simplifier leur lecture.</p>



<dots></dots>
<grostitre>Imbrications de base</grostitre>


<p>Afin d'éviter de répéter le sélecteur <incode>.list</incode> à plusieurs reprises, il est possible d'écrire en SCSS:</p>

<highlight lang="scss">.list {
  position: relative;
  
  .item { display: inline-block; }
  
  .link { color: blue; }
}</highlight>

<p>Ce qui générera le code CSS suivant ⏬</p>

<highlight lang="css">.list { position: relative; }

.list .item { display: inline-block; } 

.list .link { color: blue; }</highlight>


<h3 class="heading heading--h3" id="Niveaux d'imbrications">Niveaux d'imbrications</h3>

<p>Vous pouvez imbriquer des éléments ainsi à l'infini. Dans l'exemple précédent, nous avions un seul niveau d'imbrication.</p>



<p>Voici maintenant un exemple contenant deux niveaux d'imbrications:</p>
<highlight lang="scss">.list {
  position: relative;
  
  .item { 
    display: inline-block; 
    
    .link { color: blue; }
  }
}</highlight>
<p>Ce qui générera le code CSS suivant ⏬</p>
<highlight lang="css">.list { position: relative; }

.list .item { display: inline-block; } 

.list .item .link { color: blue; } // 👈 ici</highlight>




<dots></dots>
<p>Voici un autre exemple d'utilisation.</p><!-- Remarquez les ancres du menu de navigation ne seront pas stylisé de la même façon que ceux du reste de la page.</p>
<p>De plus, les éléments de liste du menu et ceux du sous-menu sont un peu différents l'un de l'autre.</p>-->

<codepen id="qBLZwem" tab="css,result" height="850"></codepen>

<p>Dans l'exemple précédent, lorsqu'on compile le SCSS en CSS, ça donnera le code suivant:</p>

<highlight lang="css">a {
  color: purple;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
header nav ul {
  list-style: none;
  margin: 0;
  padding: 5px;
  background: #665566;
  font-size: 18px;
}
header nav ul li {
  display: inline-block;
  padding: 0 10px;
  position: relative;
}
header nav ul li .link {
  color: coral;
  text-transform: uppercase;
  font-weight: 100;
}
header nav ul li .link--active {
  text-decoration: underline;
  color: white;
}
header nav ul li ul {
  position: absolute;
  z-index: 100;
  background-color: white;
  width: auto;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
  font-size: 14px;
}
header nav ul li ul li {
  padding: 5px 0;
}
header nav ul li ul li .link {
  color: #665566;
}</highlight>
<warning>Évitez d’abusez des imbrications. Plus de trois niveaux d’imbrication est généralement considéré comme étant une mauvaise pratique et rendra votre code difficile à&nbsp;déboguer.</warning>

<doclink href="https://sass-lang.com/documentation/style-rules/declarations#nesting">Nesting (imbrication)</doclink>




<dots></dots>
<grostitre>Sélecteurs avancés</grostitre>

<p>Les imbrications sont compatibles avec tous les <a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/selecteurs-avances/">sélecteurs CSS avancés</a>.</p>
<p>Par exemple:</p>

<highlight lang="scss">.list {
  > .item { display: inline-block; }
  
  + .logo { display: none; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>
<highlight lang="css">.list > .item { display: inline-block; }

.list + .logo { display: none; } </highlight>

<doclink href="https://sass-lang.com/documentation/style-rules#selector-combinators">selector combinator</doclink>







<dots></dots>
<grostitre>Sélecteur de parent</grostitre>


<p>Le sélecteur de parent <incode>&amp;</incode> est un sélecteur spécial inventé par Sass permettant de faire référence au sélecteur parent courant.</p>

<p>Avant de démontrer le sélecteur parent, rappelez vous que tout sélecteur imbriqué dans un autre se fait convertir par défaut en enfant du premier. </p>

<p>Autrement dit:</p>

<highlight lang="scss">.selecteur1 {
  .selecteur2 { ... }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css"> .selecteur1 .selecteur2 { ... } </highlight>

<p>Remarquez <strong>l'espace entre les deux sélecteurs</strong> indiquant que <incode>.selecteur2</incode> est enfant de <incode>.sélecteur1</incode>.  Il sera donc appliqué à des balises imbriquées comme dans le code suivant:</p>

<highlight lang='html'><div class="selecteur1">
  <div class="selecteur2">...</div> 
</div></highlight>


<dots></dots>

<p>Revenons au sélecteur parent, grâce à celui-ci <incode>&amp;</incode>, il est possible de contourner ce comportement.</p>

<p>Si on ajoute un <incode>&amp;</incode> devant le .selecteur2</p>

<highlight lang="scss">.selecteur1 {
  &amp;.selecteur2 { ... }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css"> .selecteur1.selecteur2 { ... } </highlight>

<p>Remarquez maintenant l'espace inexistant entre .selecteur1 .selecteur2, cela signifie que le sélecteur 2 s'est appliqué au parent dans l'impbrication Sass. Ce qui en résulte d'un sélecteur css qui vise un élément qui contient les 2 classes comme dans l'exemple html ci-dessous.</p>

<highlight lang='html'>&lt;div class=&quot;selecteur1 selecteur2&quot;&gt; ... &lt;/div&gt;</highlight>




<dots></dots>
<h3 class="heading heading--h3" id="Pseudo-classes">Pseudo-classes</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer" href="../../../582-215MO/css/pseudo-classes/">pseudo-classes</a> lorsqu'un sélecteur parent est utilisé.</p>

<p>Par exemple:</p>

<highlight lang="scss">.btn {
  background: blue;
  
  &:hover { background: lightblue; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css">.btn { background: blue; }

.btn:hover { background: lightblue; }</highlight>
<dots></dots>
<p>Autre exemple de pseudo-classe:</p>

<highlight lang="scss">.section {
  background: white;
  
  &:nth-child(3) { background: gray; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css">.section { background: white; }

.section:nth-child(3) { background: gray; }</highlight>




<p>Remarquez l'utilisation du sélecteur parent <incode>&amp;</incode>. Celui-ci permet de faire une référence au sélecteur
    courant, en l'occurence <incode>.btn</incode><em> </em>et de lui rabouter directement, <strong>sans espace</strong>, la
    pseudo-classe <incode>:hover</incode>.</p>




<dots></dots>
<h3 class="heading heading--h3" id="Pseudo-éléments">Pseudo-éléments</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/pseudo-elements/">pseudo-éléments</a> lorsqu'un sélecteur parent est utilisé.</p>

<p>Par exemple:</p>

<highlight lang="scss">.btn {
  background: blue;
  
  &::before { content: "🔘"; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css">.btn { background: blue; }

.btn::before { content: "🔘"; }</highlight>

<h3 class="heading heading--h3" id="Renversé">Renversé</h3>

<p>Parfois, il souhaitable de spécifier que notre élément devrait avoir une apparence différente dans un certain
    contexte.</p>
<p>Par exemple, lorsqu'un bouton est affiché dans un menu, sa couleur de fond pourrait devoir être grise plutôt que
    bleue. Le sélecteur parent permet de couvrir ce cas de figure sans avoir à quitter le contexte du sélecteur du
    bouton en utilisant ce sélecteur comme suffix.</p>


<highlight lang="scss">.btn {
  .menu & { background: grey; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang="css">.menu .btn { background: grey; }</highlight>

<doclink href="https://sass-lang.com/documentation/style-rules/parent-selector">Parent selector</doclink>

<dots></dots>


<!--<tool href="../../tools/sassmeister/"></tool>-->
<tool href="../../tools/sass-playground/"></tool>
<tool href="../../tools/csstoscss/"></tool>
