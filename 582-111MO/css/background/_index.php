<?php
/**
 * @type     article
 * @title    Background
 * @icon     images/icon.png
 * @abstract color, image, gradient
 * @ref      web/css
 */
?>

<p class="spacer">La propriété <span class="inline-code">background</span> et ses différentes sous-propriétés permettent de contrôler l'apparence de l'arrière-plan d'un élément.</p>

<dots></dots>


<grostitre>background-color</grostitre>

<p>La propriété <span class="inline-code">background-color</span> permet de définir la couleur d'arrière-plan d'un élément. Cette propriété accepte <a href="../unites-de-couleur/">différentes unités de couleur</a>.</p>

<p>Par exemple:</p>

<ul>
	<li>Nom, ex: <span class="inline-code">green</span></li>
	<li>Code hexadécimal <em>(hex)</em>, ex: <span class="inline-code">#3FC774</span></li>
	<li>RGB, ex: <span class="inline-code">rgb(63, 199, 116)</span></li>
	<li>RGBA, ex: <span class="inline-code">rgba(63, 199, 116, 1)</span></li>
	<li>HSL, ex: <span class="inline-code">hsl(143, 55%, 51%)</span></li>
</ul>

<info>Tous les exemples ci-dessus ☝️ correspondent à la couleur verte, mais écrit dans des formats différents.</info>

<codepen id="vYadMOe" tab="css,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-color">Background-color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-color.php">Background-color</doclink>

<dots></dots>


<grostitre>background-image</grostitre>

<p>La propriété <span class="inline-code">background-image</span> permet de définir une image d'arrière-plan à un élément. Elle accepte une ou plusieurs images et des fonctions permettant de générer un dégradé.</p>

<p>Afin d'illustrer les différents comportements associés aux images d'arrière-plan, l'image ci-dessous 👇 sera utilisée dans les exemples suivants.</p>

<img src="<?php echo $PAGE->shared; ?>images/square.png">

<h3>Image</h3>

<p>L'option la plus simple consiste à afficher une image.</p>

<codepen id="jOpZRmj" tab="css,result" height="340"></codepen>

<info>Remarquez comment l’image se répête par défaut</info>

<h3>Dégradé</h3>

<p>Il est possible de générer un dégradé à titre d'image d'arrière-plan en utilisant les fonctions CSS <span class="inline-code">linear-gradient()</span> et <span class="inline-code">radial-gradient()</span>. La première fonction génère un dégradé linéaire, tandis que la deuxième génère un dégradé circulaire.</p>

<p>Par exemple:</p>

<highlight lang="css">background-image: linear-gradient(#3FC774, #3C38BA);</highlight>

<codepen id="jOpZRag" tab="result" height="340">À gauche, un dégradé linéaire. À droite, un dégradé radial.</codepen>

<br>

<knowmore href="../linear-gradient/">Billet à propos de Linear-gradient</knowmore>

<h3>Combinaison</h3>

<p>Il est possible de donner plus d'une valeur d'image d'arrière-plan. Pour ce faire, il est nécessaire de séparer chaque valeur avec une virgule.</p>

<p>Par exemple:</p>

<highlight lang="css">background-image: url('dessus.jpg'), url('dessous.jpg');</highlight>

<codepen id="poZaBKv" tab="result" height="340">À gauche, deux image se superposent. À droite, une image et un dégradé se superposent.</codepen>

<warning>La première valeur passée à la propriété background-image correspond à l’élément sur le dessus et ainsi de suite.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-image">background-image</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-image.php">background-image</doclink>

<dots></dots>


<grostitre>background-repeat</grostitre>

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


<grostitre>background-position</grostitre>

<p>La propriété <span class="inline-code">background-position</span> permet de définir la position d'un arrière-plan. Il est possible de définir deux valeurs correspondant à la position X et Y dudit arrière-plan dans son élément. Ces valeurs peuvent-être n'importe quelle unité CSS <em>(px, %, em, etc.)</em>, ainsi que certains mots-clés <em>(top, bottom, left, right)</em>.</p>

<p>À gauche, <span class="inline-code">background-position: 75% 25%;</span> positionne l'arrière-plan à 75% horizontalement et 25% verticalement.</p>

<p>Tandis qu'à droite, <span class="inline-code">background-position: center bottom;</span> positionne l'arrière-plan au centre et au bas de son élément.</p>

<codepen id="WNKMBvv" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-position">background-position</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-position.php">background-position</doclink>

<dots></dots>


<grostitre>background-size</grostitre>

<p>Par défaut, une image en arrière-plan affichera en fonction de sa dimension réelle. Cependant, la propriété <span class="inline-code">background-size</span> permet de contrôler la dimension de ladite image.</p>

<p>Il est possible de définir deux valeurs, correspondant à la largeur et la hauteur de l'arrière-plan utilisé. Ces valeurs peuvent-être n'importe quelle unité CSS <em>(px, %, em, etc.)</em> ou encore le mot-clé <span class="inline-code">auto</span>, indiquant d'ajuster proportionnellement une dimension en fonction de l'autre.</p>

<p>Par exemple, l'image de référence, normalement carrée, peut-être déformée si deux valeurs ne correspondant pas à ses proportions d'origine lui sont attribuées, comme dans l'exemple de gauche avec <span class="inline-code">background-size: 80px 40px;</span>.</p>

<p>Tandis qu'à droite, <span class="inline-code">background-size: 50% auto;</span> indique à l'image d'arrière-plan de prendre une demi-largeur et de s'ajuster automatiquement sur la hauteur afin de garder le ratio original de l'image.</p>

<codepen id="bGjLXKJ" tab="result" height="340">À gauche, l’image est déformée. À droite, l’image est redimensionnée proportionnellement.</codepen>

<h3>Mots-clé</h3>

<p>En plus des unités CSS, la propriété <span class="inline-code">background-size</span> accepte aussi des mots-clé.</p>

<p>Par exemple, à gauche, <span class="inline-code">background-size: contain;</span> garde le ratio de l'image d'arrière-plan intact et la redimensionne de sorte qu'elle soit entièrement visible dans l'élément. 🚫 rognage.</p>

<p>Tandis qu'à droite, <span class="inline-code">background-size: cover;</span> garde aussi le ratio de l'image d'arrière-plan intact, mais la redimensionne de sorte que l'élément soit entièrement recouverte par elle. Quitte à rogner certaines parties de l'image.</p>

<codepen id="zYLRgJN" tab="result" height="340">À gauche, l’image est entièrement visible. À droite, l’image est rognée, mais couvre entièrement son élément.</codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-size">background-size</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_background-size.asp">background-size</doclink>

<dots></dots>


<grostitre>Syntaxe courte</grostitre>

<p>La propriété <span class="inline-code">background</span> permet de définir toutes les propriétés précédemment mentionnées en une seule ligne. Si la valeur d'une sous-propriété est omise, elle est alors considérée comme étant définie avec sa valeur par défaut.</p>

<p>Par exemple:</p>

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