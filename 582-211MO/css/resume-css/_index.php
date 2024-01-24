<?php
/**
 * @type     article
 * @title    Résumé CSS
 * @icon     images/icon.png
 * @abstract Notions CSS
 */
?>


<h2>Résumé du CSS</h2>

<dots></dots>

<grostitre>Règle CSS</grostitre>

<p>Une règle CSS est constituée d'un sélecteur CSS, d'accolades {…} et de tout ce qui se trouve entre elles.</p>

<p>Par exemple, voici une règle CSS simple:</p>

<highlight lang="css">p {
  font-size: 16px;
  font-family: Arial;
}</highlight>

<dots></dots>

<grostitre>Sélecteur</grostitre>

<p>Le sélecteur est ce qui se trouve avant l'accolade ouvrante. 

<dots></dots>

<h3>Groupe de sélecteurs</h3>

<p>Un groupe de sélecteurs est le nom donné lorsque plusieurs sélecteurs sont présents avant une accolade.</p>

<p>Par exemple:</p>

<highlight lang="css">.article p {
  font-size: 16px;
  font-family: Arial;
}</highlight>


<info>Dans un groupe de sélecteurs, les sélecteurs sont lus de droite à gauche ⬅️.<br><br>Autrement dit, dans l’exemple précédent, le navigateur sélectionnerait en premier temps tous les paragraphes de la page. Ensuite, il ne garderait que ceux ayant un ancêtre possédant la classe <span class="inline-code">.article</span>.</info>
<br>
<h3>Ancêtre</h3>

<p>Le ou les ancêtres sont les sélecteurs séparés par un espace se trouvant à gauche du dernier sélecteur.</p>

<p>Par exemple :</p>
<p>La classe <span class="inline-code">.intro</span> est le parent</p>
<p> La classe <span class="inline-code">.article</span> est le grands-parents du paragraphe.</p>
<p><span class="inline-code">.intro</span> et .<span class="inline-code">article</span> sont tous deux des ancêtres du paragraphe.</p>

<highlight lang="html">&lt;div class="article"&gt;
    &lt;div class="intro"&gt;
        &lt;p&gt;Lorem ipsum&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</highlight>


<info>
    Puisque les règles CSS sont lues de droite à gauche ⬅️, il n’est pas nécessaire de nommer tous les sélecteurs disponibles dans une règle CSS.
    <br><br>
    <span class="inline-code">.article p { ... }</span>
    sélectionenra tous les paragraphes à l’intérieur de l’élément avec la classe <span class="inline-code">.article</span>, même si <span class="inline-code">.intro</span> est omis.
</info>

<dots></dots>


<grostitre>Déclaration</grostitre>

<p>Par exemple, le code suivant est une déclaration:</p>

<highlight lang="css">font-size: 16px;</highlight>

<p><strong>Bloc de déclaration</strong>.</p>

<p>Par exemple:</p>

<highlight lang="css">font-size: 16px;
font-family: Arial;</highlight>

<dots></dots>

<grostitre>Propriété & Valeur</grostitre>

<p>Chaque <a href="#declaration">déclaration</a> est constituée d'une propriété et d'une valeur.</p>

<dots></dots>

<grostitre>Ordre d'affichage</grostitre>

<p>L’élément apparaissant en premier dans le code sera aussi celui apparaissant en premier dans la page.</p>

<codepen id="ZEjxqKe" height="340"></codepen>

<dots></dots>


<grostitre>Ordre d’empilage</grostitre>

<p>Un élément HTML peut contenir d’autres éléments. L'enfant s’affiche par-dessus son parent. Ainsi, la fin de la chaîne se retrouvera sur le dessus, alors que celui au début se retrouvera en dessous.</p>

<codepen id="QWBmZqy" height="340"></codepen>

<dots></dots>

<grostitre>Padding</grostitre>

<p >La propriété <incode>padding</incode> définit l'espace entre le contenu et ses  extrémités.</p>
<p> Par défaut, cette propriété à une valeur de 0.</p>

<p>Lorsqu'une seule valeur est fournie, celle-ci est appliquée aux 4 côtés de l'élément.</p>

<p>Par exemple:</p>

<codepen id="rNrKjeY" tab="result" height="280"></codepen>

<warning>La propriété <incode>padding</incode> n’accepte pas les valeurs négatives.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/padding">padding</doclink>
<doclink href="https://www.w3schools.com/css/css_padding.asp">padding</doclink>

<dots></dots>


<h3>Sous-propriétés</h3>

<ul>
  <li><incode>padding-top</incode></li>
  <li><incode>padding-right</incode></li>
  <li><incode>padding-bottom</incode></li>
  <li><incode>padding-left</incode></li>
</ul>

<p>Par exemple:</p>

<codepen id="OJwEWbV" tab="result" height="280"></codepen>

<dots></dots>


<h3>Syntaxe courte</h3>

<codepen id="BaPVpRj" tab="result" height="280"></codepen>

<dots></dots>


<h3>Ratio à partir de %</h3>

<p>Le ratio <strong>se base toujours sur la largeur</strong> de l'élément.</p>

<p>Afin d'obtenir un format 16/9 il suffit de ramener la valeur de hauteur de cette fraction en pourcentage, soit <incode>9 ÷ 16 x 100% = 56.25%</incode>.</p>

<highlight lang="css">.element {
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; // 16/9
}</highlight>

<p>Cet élément serait donc toujours dans un format 16/9, peu importe la largeur de son parent.</p>

<dots></dots>

<grostitre>Margin</grostitre>

<p>La propriété <incode>margin</incode> définit un espace vide devant être respecté autour d'un élément, bref une marge.</p>
<p>Par défaut, cette propriété à une valeur de 0 .</p>

<info>Contrairement à padding, margin accepte les valeurs négatives.</info>

<p>Lorsqu'une seule valeur est fournie, celle-ci est appliquée aux 4 côtés de l'élément.</p>

<codepen id="WNKyjGW" tab="result" height="340"></codepen>

<warning>Les éléments aillant un <incode>display: inline</incode> <em>(span, a, etc.)</em> ne sont pas affectés par les marges verticales ↕️ par défaut.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/margin">margin</doclink>
<doclink href="https://www.w3schools.com/css/css_margin.asp">margin</doclink>

<dots></dots>


<h3>Sous-propriétés de Margin</h3>

<ul>
  <li><incode>margin-top</incode></li>
  <li><incode>margin-right</incode></li>
  <li><incode>margin-bottom</incode></li>
  <li><incode>margin-left</incode></li>
</ul>

<codepen id="xxJzddd" tab="result" height="340">L’option margin-right de l’exemple ci-dessus peut donner l’impression de ne pas fonctionner, mais la marge est bel et bien ajouté, elle est simplement combinée avec celle de son parent. 

</codepen>

<dots></dots>


<h3>Syntaxe courte pour Margin</h3>

<codepen id="xxJzdXr" tab="result" height="340"></codepen>

<h3>Syntaxe courte à deux valeurs</h3>

<p>La première : la marge verticale ↕️ <em>(top et bottom)</em></p>
<p>La deuxième : la marge horizontale ↔️ <em>(left et right)</em>.</p>

<codepen id="MWBXmQK" tab="result" height="340"></codepen>

<dots></dots>


<h3>Alignement horizontal ↔️</h3>

<p>Afin de centrer horizontalement ↔️ des éléments dans leurs parents.</p>
<p>Attribuer la valeur <incode>auto</incode> aux marges de gauche et de droite.</p>

<codepen id="dyjKWem" tab="css,result" height="340"></codepen>

<info>Cette technique de centrage est généralement utilisée avec la syntaxe à deux valeurs, soit <incode>margin: 0 auto;</incode></info>

<alert><h5>ERREUR FRÉQUENTE</h5>Pour centrer horizontalement un élément avec la propriété margin et la valeur auto, un élément doit être en <incode>display: block</incode></alert>

<dots></dots>


<p class="spacer">La propriété <span class="inline-code">background</span> et ses différentes sous-propriétés permettent de contrôler l'apparence de l'arrière-plan d'un élément.</p>

<dots></dots>

<grostitre>Background</grostitre>

<dots></dots>

<h3>background-color</h3>

<p>La propriété <span class="inline-code">background-color</span> permet de définir la couleur d'arrière-plan d'un élément.</p>

</ul>


<h3>background-image</h3>

<p>La propriété <span class="inline-code">background-image</span> permet de définir une image d'arrière-plan à un élément. Elle accepte une ou plusieurs images et des fonctions permettant de générer un dégradé.</p>

<codepen id="jOpZRmj" tab="css,result" height="340"></codepen>

<info>Remarquez comment l’image se répête par défaut</info>

<h3>Dégradé</h3>

<p>Il est possible de générer un dégradé à titre d'image d'arrière-plan en utilisant les fonctions CSS <span class="inline-code">linear-gradient()</span> et <span class="inline-code">radial-gradient()</span>. La première fonction génère un dégradé linéaire, tandis que la deuxième génère un dégradé circulaire.</p>

<p>Par exemple:</p>

<highlight lang="css">background-image: linear-gradient(#3FC774, #3C38BA);</highlight>

<codepen id="jOpZRag" tab="result" height="340">À gauche, un dégradé linéaire. À droite, un dégradé radial.</codepen>

<h3>Combinaison</h3>

<p>Il est possible de donner plus d'une valeur d'image d'arrière-plan. Pour ce faire, il est nécessaire de séparer chaque valeur avec une virgule.</p>

<p>Par exemple:</p>

<highlight lang="css">background-image: url('dessus.jpg'), url('dessous.jpg');</highlight>

<codepen id="poZaBKv" tab="result" height="340">À gauche, deux image se superposent. À droite, une image et un dégradé se superposent.</codepen>

<warning>La première valeur passée à la propriété background-image correspond à l’élément sur le dessus et ainsi de suite.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-image">background-image</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-image.php">background-image</doclink>

<dots></dots>


<h3>background-repeat</h3>

<p>La propriété <span class="inline-code">background-repeat</span> définit la façon dont une image en arrière-plan est répétée. Cette valeur accepte plusieurs valeurs:</p>

<ul>
	<li><span class="inline-code">repeat</span> <em>(par défaut)</em></li>
	<li><span class="inline-code">no-repeat</span></li>
	<li><span class="inline-code">repeat-x</span></li>
	<li><span class="inline-code">repeat-y</span></li>
	<li>Etc.</li>
</ul>

<h3>repeat vs no-repeat</h3>

<p>À gauche, <span class="inline-code">background-repeat: repeat;</span> indique de répéter l'image d'arrière-plan aussi souvent que nécessaire afin de couvrir l'ensemble de l'élément.</p>

<p>À droite, <span class="inline-code">background-repeat: no-repeat;</span> indique au contraire de ne pas répéter l'image d'arrière-plan.</p>

<codepen id="yLqvrZe" tab="result" height="340">À gauche, l’image se répète. À droite, l’image ne s’affiche qu’une seule fois.</codepen>

<h3>repeat-x vs repeat-y</h3>

<p>À gauche, <span class="inline-code">background-repeat: repeat-x;</span> indique de répéter l'image d'arrière-plan sur l'axe des X uniquement ↔️.</p>

<p>Tandis qu'à droite, <span class="inline-code">background-repeat: repeat-y;</span> indique à l'opposé de répéter l'image d'arrière-plan sur l'axe des Y uniquement ↕️.</p>

<codepen id="bGjLJXb" tab="result" height="340">À gauche, l’image se répète à l’horizontale. À droite, l’image se répète à la verticale.</codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-repeat">background-repeat</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-repeat.php">background-repeat</doclink>

<dots></dots>


<h3>background-position</h3>

<p>La propriété <span class="inline-code">background-position</span> permet de définir la position d'un arrière-plan. Il est possible de définir deux valeurs correspondant à la position X et Y dudit arrière-plan dans son élément. Ces valeurs peuvent-être n'importe quelle unité CSS <em>(px, %, em, etc.)</em>, ainsi que certains mots-clés <em>(top, bottom, left, right)</em>.</p>

<p>À gauche, <span class="inline-code">background-position: 75% 25%;</span> positionne l'arrière-plan à 75% horizontalement et 25% verticalement.</p>

<p>Tandis qu'à droite, <span class="inline-code">background-position: center bottom;</span> positionne l'arrière-plan au centre et au bas de son élément.</p>

<codepen id="WNKMBvv" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-position">background-position</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-position.php">background-position</doclink>

<dots></dots>


<h3>background-size</h3>

<p>Par défaut, une image en arrière-plan affichera en fonction de sa dimension réelle. Cependant, la propriété <span class="inline-code">background-size</span> permet de contrôler la dimension de ladite image.</p>

<p>Il est possible de définir deux valeurs, correspondant à la largeur et la hauteur de l'arrière-plan utilisé.</p>

<codepen id="bGjLXKJ" tab="result" height="340">À gauche, l’image est déformée. À droite, l’image est redimensionnée proportionnellement.</codepen>

<h3>Mots-clé</h3>

<p><span class="inline-code">background-size</span> accepte aussi des mots-clé.</p>

<p><span class="inline-code">background-size: contain;</span> garde le ratio de l'image d'arrière-plan intact et redimensionne de sorte qu'elle soit entièrement visible dans l'élément. 🚫 rognage.</p>

<p><span class="inline-code">background-size: cover;</span> garde aussi le ratio de l'image d'arrière-plan intact, mais la redimensionne de sorte que l'élément soit entièrement recouverte par elle. Quitte à rogner certaines parties de l'image.</p>

<codepen id="zYLRgJN" tab="result" height="340">À gauche, l’image est entièrement visible. À droite, l’image est rognée, mais couvre entièrement son élément.</codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-size">background-size</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_background-size.asp">background-size</doclink>

<dots></dots>


<h3>Syntaxe courte</h3>



<highlight lang="css">.demo {
  background-image: url('image.png');
  background-size: 100px 100px;
  background-repeat: no-repeat;
}</highlight>

<p>Est équivalent à:</p>

<highlight lang="css">.demo {
  background: url('image.png') 100px 100px no-repeat;
}</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background">background</doclink>
<doclink href="https://www.w3schools.com/css/css_background.asp">background</doclink>

<dots></dots>


<tool href="tools/css3-patterns-gallery/"></tool>
<exercice href="exercices/candy-crush/"></exercice>

<dots></dots>

<grostitre>Display</grostitre>


<p class="spacer">Chaque élément possède une propriété display qui dicte son affichage.</p>

<p>Par exemple, les balises <span class="inline-code">&lt;div&gt;</span>, <span class="inline-code">&lt;p&gt;</span> ou <span class="inline-code">&lt;ul&gt;</span> prennent toute la largeur disponible et s'affichent l'une au-dessus de l'autre, car par défaut, leur propriété display est à block.</p>

<p>Tandis que les balises <span class="inline-code">&lt;span&gt;</span>, <span class="inline-code">&lt;img&gt;</span> ou <span class="inline-code">&lt;a&gt;</span> s'affichent l'une à la suite de l'autre, comme une suite de mots, car leur propriété display est à inline par défaut.</p>

<codepen id="OJwvBZJ" tab="result" height="340">À gauche, display: block;. À droite, display: inline;</codepen>

<dots></dots>


<h3>block</h3>

<p>Les éléments <span class="inline-code">display: block;</span> en bref:</p>

<ul>
    <li>Prennent toute la largeur disponible.</li>
    <li>S'affichent sur une nouvelle ligne.<br><em>(Logique puisqu'ils prennent toute la largeur)</em></li>
    <li>Acceptent les propriétés <span class="inline-code">width</span> et <span class="inline-code">height</span> afin de définir la largeur et hauteur de l'élément.</li>
    <li>Peuvent contenir n'importe quel autre type d'éléments <em>(block, inline, etc.)</em>.</li>
</ul>

<dots></dots>


<h3>inline</h3>

<p>Les éléments <span class="inline-code">display: inline;</span> en bref:</p>

<ul>
    <li>Prennent la largeur de ce qu'ils contiennent, sans plus.</li>
    <li>S'affichent un à côté de l'autre, comme des mots dans une phrase, tant qu'il y a de l'espace et change de ligne au besoin.</li>
    <li><strong>N'acceptent pas</strong> les propriétés <span class="inline-code">width</span>, <span class="inline-code">height</span>, <span class="inline-code">margin-top</span> et <span class="inline-code">margin-bottom</span>.</li>
    <li>Peuvent contenir d'autres éléments inline, mais <strong>pas block</strong>.</li>
</ul>

<dots></dots>


<h3>inline-block</h3>

<p>Les éléments en <span class="inline-code">display: inline-block;</span> sont en quelque sorte des hybrides entre <a href="#inline">inline</a> et <a href="#block">block</a>.</p>

<p>Par exemple, les balises <span class="inline-code">&lt;button&gt;</span>, <span class="inline-code">&lt;select&gt;</span> ou <span class="inline-code">&lt;input&gt;</span> s'affichent l'une à la suite de l'autre, mais peuvent avoir une largeur et une hauteur <em>(width/height)</em> de définies, car leur propriété display est à inline-block par défaut.</p>

<ul>
    <li>Ne prennent que la largeur de ce qu'ils contiennent par défaut, mais acceptent les propriétés <span class="inline-code">width</span>, <span class="inline-code">height</span>, <span class="inline-code">margin-top</span> et <span class="inline-code">margin-bottom</span>.</li>
    <li>S'affichent un à côté de l'autre.<br><em>(Logique puisqu'ils prennent uniquement la largeur de leur contenu)</em></li>
</ul>

<warning>Deux éléments inline-block peuvent s’afficher un à côté de l’autre. Cependant, dès qu’un espace ou un retour de ligne les séparent dans le code, un espace vide s’affiche entre les deux dans le rendu du navigateur.</warning>

<dots></dots>

<h3>none</h3>

<p>Parfois il est préférable de ne pas afficher un élément.</p>

<p>Par exemple, un <em>"popup"</em> ne devrait pas être affiché tant qu'un utilisateur n'a pas déclenché un évènement. D'où l'utilité de la propriété <span class="inline-code">display: none;</span> indiquant au navigateur de faire abstraction d'un élément.</p>

<highlight lang="css">.fear {
  display: none;
}</highlight>

<dots></dots>

<grostitre>Vertical align</grostitre>

<dots></dots>


<p>Deux éléments affichés côte à côte</p>
<p>Deux éléments <span class="inline-code">inline</span> ou <span class="inline-code">inline-block</span></p>
<p>Utiliser la propriété CSS <span class="inline-code">vertical-align</span> afin de spécifier comment ces éléments doivent s’afficher l’un par rapport à l’autre.</p>

<h3>Valeurs disponibles:</h3>

<ul>
	<li><span class="inline-code">baseline</span> aligne avec la ligne de base</li>
	<li><span class="inline-code">top</span> ⬆️ aligne en haut</li>
	<li><span class="inline-code">middle</span> aligne au centre</li>
	<li><span class="inline-code">bottom</span> ⬇️ aligne vers le bas</li>
	<li><span class="inline-code">super</span> équivalent d'un exposant</li>
	<li><span class="inline-code">sub</span> équivalent d'un indice</li>
</ul>

<codepen id="abjYQNP" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/vertical-align">vertical-align</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_pos_vertical-align.asp">vertical-align</doclink>

<dots></dots>

<grostitre>Position</grostitre>

<p class="spacer">Le flux normal <em>“flow”</em>, est la façon dont les éléments sont affichés dans une page web lorsqu’aucun style ne leur est appliqué.</p>

<p>Dans le flux normal, les éléments block <em>(div, p, section, etc.)</em> sont positionnés un à la suite de l’autre.</p>
<p> Les éléments inline <em>(span, strong, em, etc.)</em>, sont positionnés un à côté de l’autre en fonction de leur ordre d’apparition dans le code HTML.</p>


<codepen id="PoBRxKb" height="340" tab="result"></codepen>

<dots></dots>

<h3>static</h3>

<p>Par défaut, le navigateur attribue la position <span class="inline-code">static</span> à tous les éléments. 

<dots></dots>


<h3>relative</h3>

<p>Les éléments en <span class="inline-code">position: relative;</span> se positionnent d'abord en fonction du flux normal de la page. Ils sont ensuite déplacés relativement à cet emplacement, d'où leur nom <span class="inline-code">position: relative;</span>.</p>

<codepen id="qByoQVe" height="340" tab="result"></codepen>

<dots></dots>


<h3>absolute</h3>

<p>Les éléments en <span class="inline-code">position: absolute;</span> ignorent complètement le flux de la page et se positionnent en fonction du parent le plus près aillant une position autre que static.</p>

<codepen id="wvxmQye" height="340" tab="result"></codepen>

<dots></dots>


<h3>fixed</h3>

<p>Les éléments en <span class="inline-code">position: fixed;</span> ressemblent aux éléments en <a href="#absolute">position absolute</a>. Tout comme eux, ils ignorent le flux de la page. Cependant, plutôt que de se positionner en fonction d'un parent, ils se positionnent en fonction de la fenêtre <em>(viewport)</em>.</p>

<codepen id="JjBLeLg" height="340" tab="result"></codepen>

<dots></dots>


<h3>sticky</h3>

<p>Les éléments en <span class="inline-code">position: sticky;</span> ressemblent aux éléments en <a href="#static">position static</a>. Tout comme eux, ils se positionnent d'abord en fonction du flux normal de la page. Cependant, lorsqu'une de leurs propriétés <span class="inline-code">top</span>, <span class="inline-code">right</span>, <span class="inline-code">bottom</span> ou <span class="inline-code">left</span> correspond au défilement de la page, l'élément devient fixe.</p>

<codepen id="xxJWQzv" height="340" tab="result"></codepen>

<dots></dots>


<exercice href="exercices/cat-in-the-box"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/position">position</doclink>
<doclink href="https://www.w3schools.com/css/css_positioning.asp">position</doclink>

<dots></dots>

<grostitre>Unité de mesure</grostitre>

<h3>Absolues</h3>

<p>Les unités absolues gardent leurs dimensions, peu importe leur contexte. Ces unités sont pratiques pour des éléments que l'on souhaite immuables.</p>

<warning>Les unités absolues peuvent causer des enjeux lorsque l’on souhaite créer des sites responsives.</warning>

<p>Les pixels <em>(px)</em> sont l'unité absolue la plus répandue, ce qui fait du sens puisque la majorité des codes CSS sont écrits pour gérer l'affichage sur un écran. Néanmoins, il existe plusieurs autres valeurs absolues:</p>

<ul>
    <li><span class="inline-code">cm</span> - Centimètres</li>
    <li><span class="inline-code">mm</span> - Millimètres</li>
    <li><span class="inline-code">in</span> - Pouces</li>
</ul>

<dots></dots>


<h3>Relatives</h3>

<p>Contrairement aux unités absolues, les unités relatives se basent sur la dimension d'un parent pour déterminer leur dimension, ce qui les rend particulièrement utiles pour créer un site web responsive.</p>

<ul>
    <li><span class="inline-code">%</span> - Relatif au parent</li>
    <li><span class="inline-code">em</span> - Relatif à la taille fonte courante</li>
    <li><span class="inline-code">rem</span> - Relatif à la taille à la racine du document <span class="inline-code">&lt;html&gt;</span></li>
</ul>


<dots></dots>


<h3>Quand utiliser quelle unité?</h3>

<p>Voici quelques exemples où une unité est préférable à une autre.</p>

<h3>%</h3>

<p>Pour qu'un élément prenne la moitié de la largeur de son parent, peu importe la largeur du parent en question.</p>

<highlight lang="css">.element { width: 50%; }</highlight>

<h3>em</h3>

<p>Pour qu'un texte ayant la classe <span class="inline-code">.small</span> ait une taille équivalente à la moitié du texte courant, peu importe la taille du texte courant.</p>

<highlight lang="css">.small { font-size: 0.5em; }</highlight>

<h3>rem</h3>

<p>Pour que nos éléments de titre affichent toujours de la même taille, soit 2x celle de notre texte de base, peu importe la taille du texte courant.</p>

<highlight lang="css">.title { font-size: 2rem; }</highlight>

<dots></dots>

<info>0, peu importe l’unité de mesure, reste 0. Il n’est donc pas nécessaire de spécifier l’unité de mesure: 0px, 0em, 0% = 0.</info>

<dots></dots>

<grostitre>Font</grostitre>


<h3>color</h3>

<codepen id="XWBBdGp" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/color">color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_color.asp">color</doclink>

<dots></dots>


<h3>font-family</h3>

<p>La propriété <incode>font-family</incode> permet de spécifier la police de caractères pour afficher du texte dans un élément.</p>

<p>Cette propriété accepte le nom d'une police:</p>

<highlight lang="css">font-family: Helvetica;</highlight>

<p>Ou encore une liste de polices:</p>

<highlight lang="css">font-family: Helvetica, Arial, sans-serif;</highlight>

<p>Cette dernière possibilité présente deux avantages:</p>

<codepen id="QWBBNPW" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-family">font-family</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-family.asp">font-family</doclink>

<dots></dots>


<h3>font-weight</h3>

<p>La propriété <incode>font-weight</incode> permet de définir la graisse d'un texte.</p>

<p>Par exemple:</p>

<highlight lang="css">font-weight: bold;</highlight>

<p>Plusieurs graisses sont généralement disponibles. Ces graisses peuvent être spécifiées via leur valeur numérique ou encore leur nom.</p>

<table>
  <tr>
    <th>NUMÉRIQUE</th>
    <th>NOM</th>
  </tr>
  <tr>
    <td>100</td>
    <td>thin</td>
  </tr>
  <tr>
    <td>200</td>
    <td>extra light</td>
  </tr>
  <tr>
    <td>300</td>
    <td>light</td>
  </tr>
  <tr>
    <td>400</td>
    <td>normal</td>
  </tr>
  <tr>
    <td>500</td>
    <td>medium</td>
  </tr>
  <tr>
    <td>600</td>
    <td>semi-bold</td>
  </tr>
  <tr>
    <td>700</td>
    <td>bold</td>
  </tr>
  <tr>
    <td>800</td>
    <td>extra bold</td>
  </tr>
  <tr>
    <td>900</td>
    <td>black</td>
  </tr>
</table>

<p>Par défaut, si aucune graisse n'est spécifiée, le texte est en normal <em>(400)</em>.</p>

<codepen id="LYBBNoQ" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-weight">font-weight</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_weight.asp">font-weight</doclink>

<dots></dots>


<h3>font-size</h3>

<p>La propriété <incode>font-size</incode> permet de définir la taille du texte.</p>

<highlight lang="css">font-size: 16px;</highlight>

<p>Par défaut, si aucune taille n'est spécifiée, la majorité des navigateurs lui attribueront la taille de 16px.</p>

<p>Bien que les px soient très répandus, il ne faut pas sous-estimer les avantages offerts par les <incode>rem</incode> et <incode>em</incode>.</p>

<codepen id="xxJJVoX" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-size">font-size</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-size.asp">font-size</doclink>

<dots></dots>


<h3>font-style</h3>

<p>La propriété <incode>font-style</incode> permet de définir si un texte devrait apparaitre en italique ou non, grâce aux valeurs:</p>

<ul>
  <li>normal <em>(par défaut)</em></li>
  <li>italic</li>
</ul>

<codepen id="rNrreXj" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-style">font-style</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-style.asp">font-style</doclink>

<dots></dots>


<h3>line-height</h3>
</p>

<p>Par exemple:</p>

<highlight lang="css">line-height: 1.5;</highlight>

<p>Définit une hauteur de ligne de 24px si la taille de texte est de 16px, puisque: 16px * 1.5 = 24px.</p>

<p>Généralement, un <incode>line-height</incode> de base est définie sur la balise <incode>&lt;body&gt;</incode>. Ainsi il affecte tous les éléments de la page.</p>

<codepen id="ZEjjOzB" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/line-height">line-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_line-height.asp">line-height</doclink>

<dots></dots>


<h3>letter-spacing</h3>

<p>La propriété <incode>letter-spacing</incode> permet de spécifier l'espacement entre chacune des lettres d'un texte.</p>

<p>Par exemple:</p>

<highlight lang="css">letter-spacing: 0.5em;</highlight>

<p>Si la taille de texte est de 16px, puisque: 16px * 0.5em = 8px, un espace de 8px sera ajouté entre chaque lettre.</p>

<codepen id="yLqqJLJ" tab="result" height="280"></codepen>

<info>Les valeurs négatives sont permises.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/letter-spacing">letter-spacing</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_letter-spacing.asp">letter-spacing</doclink>

<dots></dots>


<grostitre>Text</grostitre>

<p class="spacer">Plusieurs propriétés CSS permettent de contrôler l'apparence d'un texte. Voici quelques-unes des propriétés les plus courantes.</p>

<dots></dots>


<h3>text-align</h3>

<p>La propriété <incode>text-align</incode>, détermine l'alignement horizontal du texte.</p>

<ul>
  <li><incode>left</incode> <em>(par défaut)</em></li>
  <li><incode>right</incode></li>
  <li><incode>center</incode></li>
  <li><incode>justify</incode></li>
</ul>

<codepen id="QWBBGwJ" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/text-align">text-align</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_text-align.ASP">text-align</doclink>

<dots></dots>


<h3>text-decoration</h3>

<p>La propriété <incode>text-decoration</incode> permet d'ajouter ou de retirer une ligne à un texte.</p>

<p>Cette propriété accepte plusieurs arguments, tel que le type de ligne, sa couleur et son style.</p>

<codepen id="KKBBNdE" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/text-decoration">text-decoration</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_text-decoration.asp">text-decoration</doclink>

<dots></dots>


<h3>text-transform</h3>

<p>La propriété <incode>text-transform</incode> permet de modifier un texte.</p>

<ul>
  <li><incode>none</incode> n'a aucun impact <em>(par défaut)</em>.</li>
  <li><incode>lowercase</incode> transforme le texte en minuscules.</li>
  <li><incode>uppercase</incode> transforme le texte en majuscules.</li>
  <li><incode>capitalize</incode> transform en majuscule la première lettre de chaque mot.</li>
</ul>

<codepen id="vYaayGJ" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/text-transform">text-transform</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_text-transform.asp">text-transform</doclink>

<dots></dots>


<h3>text-stroke</h3>

<p>La propriété <incode>-webkit-text-stroke</incode> bien que non standard, d'où sont préfix <incode>-webkit</incode>, est supportée par tous les navigateurs majeurs. Cette propriété accepte deux valeurs. L'épaisseur du trait entourant le le texte et la couleur du trait en question.</p>

<codepen id="VwBBmmW" tab="result" height="280"></codepen>

<alert><h5>ERREUR FRÉQUENTE</h5>Lorsque le prefix <incode>-webkit</incode> est oublié, l’effet ne s’affiche pas.</alert>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/-webkit-text-stroke">-webkit-text-stroke</doclink>

<dots></dots>


<h3>text-shadow</h3>

<p>La propriété <incode>text-shadow</incode> permet d'ajouter une ombre à un texte. Un décalage sur les X ou Y afin d'être visible par défaut. Une 3e valeur pour spécifier le niveau de flou souhaité pour l'ombre. Finalement, une 4e valeur permet d'indiquer la couleur de l'ombre.</p>

<codepen id="rNrrWjV" tab="result" height="280"></codepen>

<p>Il est possible d'ajouter plusieurs ombres à un même texte si désiré en séparant chaque ombre par une virgule.</p>

<p>Par exemple:</p>

<highlight lang="css">.element {
  text-shadow: 2px 2px red, 4px 4px blue;
}</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/text-shadow">text-shadow</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_text-shadow.asp">text-shadow</doclink>

<dots></dots>

<exercice href="exercices/focus/"></exercice>

<dots></dots>



<grostitre>width & height</grostitre>

<p>Les propriétés <span class="inline-code">width</span> et <span class="inline-code">height</span> permettent de définir respectivement la largeur et la hauteur d'un élément. Par défaut leur valeur est à <span class="inline-code">auto</span>.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/width">width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_width.asp">width</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/height">height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_height.asp">height</doclink>

<dots></dots>


<h3>min-width & min-height</h3>

<p>Les propriétés <span class="inline-code">min-width</span> et <span class="inline-code">min-height</span> permettent de définir une <strong>largeur et une hauteur minimum</strong> à un élément.</p>

<highlight lang="css">.element {
  width: 50%;
  min-width: 400px;
}</highlight>

<p>Puisque <incode>min-width</incode> a préséance sur <incode>width</incode>, l'élément adoptera alors sa largeur.</p>


<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/min-width">min-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_min-width.asp">min-width</doclink>
<doclink href="https://developer.mozilla.org/en-US/docs/Web/CSS/min-height">min-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_min-height.asp">min-height</doclink>

<dots></dots>


<h3>max-width & max-height</h3>

<p>Les propriétés <incode>max-width</incode> et <incode>max-height</incode> permettent de définir une <strong>largeur et une hauteur maximale</strong> à un élément.</p>

<highlight lang="css">.element {
  width: 50%;
  max-width: 400px;
}</highlight>

<p>Puisque <incode>max-width</incode> a préséance sur <incode>width</incode>, l'élément adoptera alors sa largeur.</p>

<info><incode>max-width: 100%</incode> est régulièrement appliqué aux images. Ainsi, les images prennent leur largeur normale, mais ne dépassent jamais de l’écran.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/max-width">max-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_max-width.asp">max-width</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/max-height">max-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_max-height.asp">max-height</doclink>

<dots></dots>



<grostitre>Border</grostitre>

<p class="spacer">La propriété <incode>border</incode> a une vocation principalement esthétique, permettant d'ajouter une bordure à un élément.</p>

<h3>border-width</h3>

<p>La sous-propriété <incode>border-width</incode> permet de définir la taille de la bordure.</p>

<codepen id="rNrKMRN" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-width">border-width</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-width.asp">border-width</doclink>

<dots></dots>


<h3>border-style</h3>

<p>Comme son nom l'indique, cette propriété permet de définir le style de la bordure.</p>

<p>Styles disponibles:</p>

<ul>
    <li><incode>none</incode> <em>(par défaut)</em></li>
    <li><incode>solid</incode> ligne standard <em>(plus commun)</em></li>
    <li><incode>dotted</incode> pointillé</li>
    <li><incode>dashed</incode> hachuré</li>
    <li><incode>double</incode> double ligne</li>
    <li><incode>groove</incode> bordure 3D donnant l'impression que le bordure a été gravée</li>
    <li><incode>ridge</incode> bordure 3D donnant l'impression que la bordure ressort</li>
    <li><incode>inset</incode> bordure 3D donnant l'impression que l'élément est enfoncé</li>
    <li><incode>outset</incode> bordure 3D donnant l'impression que l'élément ressort</li>
</ul>

<codepen id="QWBxKXY" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-style">border-style</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-style.asp">border-style</doclink>

<dots></dots>


<h3>border-color</h3>

<p>Permets de définir la couleur de la bordure.</p>

<codepen id="rNrKWNV" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-color">border-color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border-color.asp">border-color</doclink>

<dots></dots>


<h3>Syntaxe courte</h3>

<codepen id="eYjKBNN" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border">border</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_border.asp">border</doclink>

<dots></dots>


<h3>border-radius</h3>

<p>Permets de définir des coins arrondis sur un élément.</p>

<codepen id="QWBxGjP" tab="result" height="340"></codepen>

<info>Cette propriété s’applique qu’une bordure soit visible ou non sur l’élément.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/border-radius">border-radius</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_border-radius.asp">border-radius</doclink>

<h3>Contrôle des coins individuellement</h3>

<ul>
    <li><incode>border-top-left-radius</incode></li>
    <li><incode>border-top-right-radius</incode></li>
    <li><incode>border-bottom-right-radius</incode></li>
    <li><incode>border-bottom-left-radius</incode></li>
</ul>

<p>Ou encore de spécifier les multiples valeurs à même la propriété. Les coins sont spécifiés dans le sens des aiguilles d'une montre ⌚️ en commençant à partir du coin supérieur gauche.</p>

<p>Par exemple:</p>

<codepen id="KKBeNmK" tab="result" height="340"></codepen>

<dots></dots>

<tool href="tools/fancy-border-radius/"></tool>

<exercice href="exercices/q-bitz"></exercice>

<dots></dots>


<grostitre>Box-model</grostitre>

<p class="spacer">En CSS, chaque élément constituant une page est une boîte rectangulaire</p>

<p>Qu’il s’agisse d’un texte, d'une image ou encore de n’importe quel autre élément, une boîte rectangulaire l’englobe toujours. Ce concept est appelé le Box model 📦.</p>

<p>La boite en CSS est constituée de 4 parties:</p>

<ol>
  <li>Le <strong>contenu</strong> la zone de base définie par le texte/image ou encore le <incode>width</incode> et le <incode>height</incode>.</li>
  <li>La <strong>marge</strong> intérieure <incode>padding</incode> l’espace vide entre le contenu et sa bordure.</li>
  <li>La <strong>bordure</strong> <incode>border</incode> la bordure entourant l’élément. </li>
  <li>La <strong>marge extérieure</strong> <incode>margin</incode> l’espace entre la boîte et celles à proximité.</li>
</ol>

<img src="images/box-model.webp">

<p>Pour obtenir la dimension réelle de l'élément, il faut ajouter la marge intérieure <em>(padding)</em> et la bordure <em>(border)</em>.</p>

<warning>La marge extérieure n’affecte pas la dimension réelle d’un élément puisque cet espace se trouve à l’extérieur de celui-ci.</warning>

<p>Par exemple, si le contenu d'un élément a une largeur 200px et une marge intérieure <em>(padding)</em> de 50px, sa dimension réelle est donc de 300px.</p>

<table>
  <tr>
    <th>Valeur</th>
    <th>Propriété</th>
  </tr>
  <tr>
    <td>200px</td>
    <td>width</td>
  </tr>
  <tr>
    <td>50px</td>
    <td>padding-left</td>
  </tr>
  <tr>
    <td>50px</td>
    <td>padding-right</td>
  </tr>
  <tr>
    <td><strong>300px</strong></td>
    <td><strong>Total</strong></td>
  </tr>
</table>

<doclink href="https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/The_box_model">box-model</doclink>
<doclink href="https://www.w3schools.com/css/css_boxmodel.asp">box-model</doclink>

<dots></dots>

<grostitre>Linear gradient</grostitre>

<p class="spacer">La propriété <incode>background-image</incode> accepte la fonction <incode>linear-gradient()</incode>. Comme son nom l'indique, celle-ci permet de définir un dégradé.</p>



<highlight lang="css">background-image: linear-gradient(#00c774, #3c38ba);</highlight>

<codepen id="gOjjpdQ" tab="result" height="340"></codepen>

<dots></dots>


<h3>Orientation</h3>

<p>Par défaut, les dégradés sont verticaux.</p>

<ul>
    <li><incode>to top</incode></li>
    <li><incode>to right</incode></li>
    <li><incode>to bottom</incode> <em>(par défaut)</em></li>
    <li><incode>to left</incode></li>
</ul>

<codepen id="rNrrxGP" tab="result" height="340"></codepen>

<p>Pour créer des dégradés diagonaux, il est possible de spécifier une deuxième direction dans le mot-clé.</p>

<p>Par exemple:</p>

<ul>
    <li><incode>to top left</incode></li>
    <li><incode>to top right</incode></li>
    <li><incode>to bottom left</incode></li>
    <li><incode>to bottom right</incode></li>
</ul>

<codepen id="NWBBxwX" tab="result" height="340"></codepen>

<dots></dots>

<h3>Degrés</h3>

<p>Il est aussi possible de spécifier une rotation en termes de degrés pour plus de précision.</p>

<highlight lang="css">background-image: linear-gradient(90deg, #00c774, #3c38ba);</highlight>

<p>Serait l'équivalent de <incode>to right</incode>.</p>

<dots></dots>


<h3>Points d'arrêt</h3>

<p>Par défaut, lorsqu'aucun point d'arrêt n'est spécifié, les couleurs sont distribuées de façon égale.</p>

<p>Par exemple un dégradé à trois couleurs, sans point d'arrêt, donc égales.</p>
<p> 0 à 50%  vert vers le bleu </p>
<p>50% à 100% de bleu vers le rouge.</p>

<highlight lang="css">background: linear-gradient(to right, #00c774, #3c38ba, #ff8487);</highlight>

<codepen id="ExppPoB" tab="result" height="340"></codepen>

<p>Définir un point d'arrêt après une couleur afin de spécifier à partir de quel point cette couleur doit commencer à fusionner avec la suivante.</p>


<codepen id="rNrrxJR" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/orphaned/Web/CSS/linear-gradient()">linear-gradient()</doclink>
<doclink href="https://www.w3schools.com/cssref/func_linear-gradient.asp">linear-gradient()</doclink>

<dots></dots>

<grostitre>Box-sizing</grostitre>


<p class="spacer">La propriété <incode>box-sizing</incode> permet de spécifier si la marge intérieure <em>(padding)</em> et la bordure <em>(border)</em> d'un élément doivent compter dans sa dimension réelle.</p>

<dots></dots>


<h3>content-box</h3>

<p><strong>Est la valeur par défaut</strong> attribué à la propriété <incode>box-sizing</incode>.</p>
<p>Par défaut, tous les éléments d'une page utilisent ce <a href="../box-model/">box-model</a>.</p>
<p> Évite que l'espace alloué au contenu change de dimension lorsqu'une marge intérieure <em>(padding)</em> ou une bordure <em>(border)</em> lui est ajoutée.</p>



<img src="images/content-box.png">
<span class="remark">À gauche, sans padding.<br>À droite, avec un padding de 40px.</span>

<dots></dots>


<h3>border-box</h3>

<p>Ce mode sert à donner priorité à la dimension réelle de la boite.</p> 
 <p>Évite qu'elle change de dimension lorsqu'une marge intérieure <em>(padding)</em> ou une bordure <em>(border)</em> lui est ajoutée.</p>

<img src="images/border-box.png">

<span class="remark">À gauche, sans padding.<br>À droite, avec un padding de 40px.</span>

<p><incode>border-box</incode> est particulièrement utile lorsque des éléments ont une dimension en %.</p>

<highlight lang="css">.box {
  width: 100%;
  padding: 20px;
}</highlight>

<p> <incode>box-sizing: content-box</incode>, la taille réelle de cette boite dépasserait celle de la fenêtre. </p>
<p>Créant ainsi une barre de défilement horizontale et une mise en page quelque peu étrange.</p>

<p> <incode>box-sizing: border-box</incode>, puisque les marges intérieures <em>(padding)</em> sont comptées à même la largeur totale, la boite prend toute la largeur de la fenêtre,  sans pour autant dépasser la fenêtre.</p>

<codepen id="mdjKKaQ" tab="result" height="340"></codepen>

<p>De nos jours, la majorité des développeurs convertissent toutes les boites de leurs pages en <incode>border-box</incode> via le code suivant placé en début de feuille CSS:</p>

<highlight lang="css">* { box-sizing: border-box; }</highlight>

<p>Ceci permet de simplifier la réalisation de mises en page.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/box-sizing">box-sizing</doclink>
<doclink href="https://www.w3schools.com/css/css3_box-sizing.asp">box-sizing</doclink>

<dots></dots>

<dots></dots>

<grostitre>Float</grostitre>
<p class="spacer">La propriété float permet à un élément de flotter à gauche ⬅️ ou à droite ➡️ à l'intérieur de son conteneur. Elle permet aussi au texte et aux autres éléments en ligne <em>(inline)</em> le suivant de s'enrouler autour de lui.</p>

<p><strong>Valeurs disponibles:</strong></p>

<ul>
    <li><incode>none</incode> <em>(par défaut)</em> l'élément ne flotte pas</li>
    <li><incode>left</incode> l'élément flotte à gauche ⬅️</li>
    <li><incode>right</incode> l'élément flotte à droite ➡️</li>
</ul>

<p>Par exemple:</p>

<codepen id="XWBYPjO" tab="result" height="360"></codepen>

<dots></dots>


<h3>Impact sur le display</h3>

<p>Pour que le contenu en ligne soit en mesure de s'enrouler autour de l'élément en float, il est nécessaire de pouvoir calculer sa dimension.</p>
<p> Puisqu'il est impossible par défaut de calculer la dimension <em>(width & height)</em> des éléments en ligne <em>(inline)</em>, ceux-ci sont automatiquement convertis en <incode>display: block;</incode> dès que la propriété float leur est attribuée.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/float">float</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_class_float.asp">float</doclink>

<dots></dots>

<exercice href="exercices/rupi-kaur/"></exercice>

<dots></dots>

<grostitre>Opacity</grostitre>

<p class="spacer">La propriété <incode>opacity</incode> permet de gérer l'opacité d'un élément. Une valeur de <incode>0</incode> correspond à une transparence complète, tandis qu'une valeur de <incode>1</incode> correspond à une opacité complète.</p>

<codepen id="rNrrYGG" tab="result" height="340"></codepen>

<p>La propriété <incode>opacity</incode> affecte l'ensemble de l'élément <em>(incluant son contenu)</em> et de ses enfants.</p>

<warning>Certains navigateurs acceptent les valeurs en pourcentages, mais afin d’éviter des problèmes compatibilité, il est suggéré d’utiliser une valeur entre 0 et 1.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/opacity">opacity</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_opacity.asp">opacity</doclink>


<dots></dots>

<grostitre>Z-index</grostitre>

<p class="spacer">Par défaut, le flux de la page, <em>page flow</em>, fait en sorte qu'une balise HTML se positionne toujours par-dessus celles qui la précède.</p>
<p> Ainsi, dans le cas où deux balises se superposent, celle apparaissant en dernier dans le code affichera par-dessus la première.</p>

<codepen id="wvxxmbW" tab="result" height="340"></codepen>

<p>On peut modifier l'ordre d'empilement des balises en spécifiant une valeur de <incode>z-index</incode>.</p>

<warning>Attention, seules les balises ayant la propriété CSS <incode>position</incode> de défini à une valeur autre que <incode>static</incode> sont impactés par <incode>z-index</incode>.</warning>

<dots></dots>


<h3>Contexte d'empilement</h3>

<p>Les éléments partageant un même parent peuvent être déplacés en avant ou en arrière les uns des autres grâce à <incode>z-index</incode>, c'est ce que l'on appelle le contexte d'empilement.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/z-index">z-index</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_pos_z-index.asp">z-index</doclink>

<dots></dots>


<grostitre>Box-shadow</grostitre>

<p class="spacer">La propriété <incode>box-shadow</incode> permet d'ajouter une ombre à un élément.</p>

<p>Une ombre nécessite d'être décalée de son parent.</p>
<p> Il faut lui attribuer une valeur de décalage sur les X, les Y ou les deux.</p>


<codepen id="yLqqjrG" tab="result" height="340"></codepen>

<dots></dots>


<h3>Couleur</h3>

<p>Pour spécifier la couleur d'ombrage, il suffit d'ajouter une unité de couleur à la fin.</p>

<codepen id="mdjjLYm" tab="result" height="340"></codepen>

<dots></dots>


<h3>Flou</h3>

<p>Il est possible de la flouter grâce à une 3e valeur insérée avant la couleur.</p>

<codepen id="dyjjeBX" tab="result" height="340"></codepen>

<dots></dots>


<h3>Étendu</h3>

<p>En ajoutant une 4e valeur, il est possible d'augmenter/diminuer la taille d'une ombre afin que sa dimension ne soit pas identique à celle de son élément référent.</p>

<codepen id="JjBBZjY" tab="result" height="340"></codepen>

<dots></dots>


<h3>Direction</h3>

<p>Par défaut, les ombres sont projetées vers l'extérieur de leurs éléments.</p>
<p> Il est possible de changer la direction des ombres afin qu'elles soient projetées vers l'intérieur de leurs éléments, créant ainsi une illusion de profondeur.</p>

<p>Pour ce faire, il faut ajouter le mot-clé <incode>inset</incode> comme premier argument au <incode>box-shadow</incode>.</p>

<codepen id="qByyKEZ" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/box-shadow">box-shadow</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_box-shadow.asp">box-shadow</doclink>

<dots></dots>


