<?php 
/**
 * @type     article
 * @title    Imbrication
 * @icon     images/icon.png
 * @abstract Accélérer l'écriture de feuilles de styles
 * @index 45
 */
?>

<p>Par défaut le langage CSS ne permet pas de faire d'imbrications, communément appelé <em>"nesting"</em> en anglais. Il
    est donc parfois nécessaire de répéter un sélecteur plusieurs fois dans son code CSS.</p>
<p>Heureusement, Sass apporte cette fonctionnalité à CSS, ce qui permet d'accélérer l'écriture de feuilles de styles et
    de simplifier leur lecture.</p>



<dots></dots>
<grostitre>Imbrications de base</grostitre>


<p>Afin d'éviter de répéter le sélecteur <code>.list</code> à plusieurs reprises, il est possible d'écrire en SCSS:</p>

<highlight lang='css'>.list {
  position: relative;
  
  .item { display: inline-block; }
  
  .link { color: blue; }
}</highlight>

<p>Ce qui générera le code CSS suivant ⏬</p>

<highlight lang='scss'>.list { position: relative; }

.list .item { display: inline-block; } 

.list .link { color: blue; }</highlight>


<h3 class="heading heading--h3" id="Niveaux d'imbrications">Niveaux d'imbrications</h3>

<p>Vous pouvez imbriquer des éléments ainsi à l'infini. Dans l'exemple précédent, nous avions un seul niveau d'imbrication.</p>



<p>Voici maintenant un exemple contenant deux niveaux d'imbrications:</p>
<highlight lang='css'>.list {
  position: relative;
  
  .item { 
    display: inline-block; 
    
    .link { color: blue; }
  }
}</highlight>
<p>Ce qui générera le code CSS suivant ⏬</p>
<highlight lang='scss'>.list { position: relative; }

.list .item { display: inline-block; } 

.list .item .link { color: blue; } // 👈 ici</highlight>

<warning>Évitez d’abusez des imbrications. Plus de trois niveaux d’imbrication est généralement considéré comme étant une mauvaise pratique et rendra votre code difficile à&nbsp;déboguer.</warning>

<doclink href='https://sass-lang.com/documentation/style-rules/declarations#nesting'>Nesting (imbrication)</doclink>




<dots></dots>
<grostitre>Sélecteurs avancés</grostitre>

<p>Les imbrications sont compatible avec tous les <a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/selecteurs-avances/">sélecteurs CSS avancés</a>.</p>
<p>Par exemple:</p>

<highlight lang='scss'>.list {
  > .item { display: inline-block; }
  
  + .logo { display: none; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>
<highlight lang='scss'>.list > .item { display: inline-block; }

.list + .logo { display: none; } </highlight>

<doclink href='https://sass-lang.com/documentation/style-rules#selector-combinators'>selector combinator</doclink>







<dots></dots>
<grostitre>Sélecteur de parent</grostitre>


<p>Le sélecteur de parent <code>&amp;</code> est un sélecteur spécial inventé par Sass permettant de faire référence au sélecteur parent courant.</p>

<p>Tout sélecteur imbriqué dans un autre se fait convertir par défaut en enfant du premier. </p>

<p>Autrement dit:</p>

<highlight lang='scss'>.selecteur1 {
  .selecteur2 { ... }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='scss'> .selecteur1 .selecteur2 { ... } </highlight>

<p>Remarquez <strong>l'espace entre les deux sélecteurs</strong> indiquant que <code>.selecteur2</code> est enfant de <code>.sélecteur1</code>.</p>


<p>Cependant grâce au sélecteur parent il est possible de contourner ce comportement.</p>

<p>Si on ajoute un <code>&amp;</code> devant le .selecteur2</p>

<highlight lang='scss'>.selecteur1 {
  &amp;.selecteur2 { ... }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='scss'> .selecteur1.selecteur2 { ... } </highlight>

<p>Remarquez maintenant l'espace inexistant entre .selecteur1 .selecteur2, cela signifie que le sélecteur 2 s'est appliqué au parent dans l'impbricattion Sass. Ce qui en résulte d'un sélecteur css qui vise un élément qui contient les 2 classes.</p>




<h3 class="heading heading--h3" id="Pseudo-classes">Pseudo-classes</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer" href="../../../582-215MO/css/pseudo-classes/">pseudo-classes</a> lorsqu'un sélecteur parent est utilisé.</p>

<p>Par exemple:</p>

<highlight lang='scss'>.btn {
  background: blue;
  
  &:hover { background: lightblue; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='html'>.btn { background: blue; }

.btn:hover { background: lightblue; }</highlight>
<dots></dots>
<p>Autre exemple de pseudo-classe:</p>

<highlight lang='scss'>.section {
  background: white;
  
  &:nth-child(3) { background: gray; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='html'>.section { background: white; }

.section:nth-child(3) { background: gray; }</highlight>




<p>Remarquez l'utilisation du sélecteur parent <code>&amp;</code>. Celui-ci permet de faire une référence au sélecteur
    courant, en l'occurence <code>.btn</code><em> </em>et de lui rabouter directement, <strong>sans espace</strong>, la
    pseudo-classe <code>:hover</code>.</p>





<h3 class="heading heading--h3" id="Pseudo-éléments">Pseudo-éléments</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/pseudo-elements/">pseudo-éléments</a> lorsqu'un sélecteur parent est utilisé.</p>

<p>Par exemple:</p>

<highlight lang='scss'>.btn {
  background: blue;
  
  &::before { content: "🔘"; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='scss'>.btn { background: blue; }

.btn::before { content: "🔘"; }</highlight>

<h3 class="heading heading--h3" id="Renversé">Renversé</h3>

<p>Parfois, il souhaitable de spécifier que notre élément devrait avoir une apparence différente dans un certain
    contexte.</p>
<p>Par exemple, lorsqu'un bouton est affiché dans un menu, sa couleur de fond pourrait devoir être grise plutôt que
    bleue. Le sélecteur parent permet de couvrir ce cas de figure sans avoir à quitter le contexte du sélecteur du
    bouton en utilisant ce sélecteur comme suffix.</p>


<highlight lang='htscssml'>.btn {
  .menu & { background: grey; }
}</highlight>

<p>Générera le code CSS suivant ⏬</p>

<highlight lang='html'>.menu .btn { background: grey; }</highlight>

<doclink href='https://sass-lang.com/documentation/style-rules/parent-selector'>Parent selector</doclink>

<dots></dots>



<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://www.sassmeister.com/" target="_blank" rel="noopener noreferrer" class="tool-card__title">
            <strong>SassMeister</strong>
        </a>

        <p class="tool-card__description">Terrain de jeu SASS permettant de voir en temps réel la compilation CSS que
            produirait son&nbsp;code.</p>
    </div>

  
</aside>
<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://codebeautify.org/css-to-scss-converter" target="_blank" rel="noopener noreferrer"
            class="tool-card__title">
            <strong>CSS to&nbsp;SCSS</strong>
        </a>

        <p class="tool-card__description">Permet de convertir la structure d’un code CSS en imbrication&nbsp;SCSS.</p>
    </div>

   
