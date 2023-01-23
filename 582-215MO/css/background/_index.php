<?php
/**
 * @type     article
 * @title    Background
 * @icon     images/icon.png
 * @abstract color, image, gradient
 */
?>

<p class="spacer">La propriété <span class="inline-code">background</span> est ses différentes sous-propriétés permettent de contrôler l'apparence de l'arrière-plan d'un élément.</p>

<dots></dots>


<grostitre>background-color</grostitre>

<p>La propriété <span class="inline-code">background-color</span> permet de définir la couleur d'arrière-plan d'un élément. Cette propriété accepte <a href="#">différentes unités de couleur</a>.</p>

<p>Par exemple:</p>

<ul>
	<li>Nom, ex: <span class="inline-code">green</span></li>
	<li>Code hexadécimal <em>(hex)</em>, ex: <span class="inline-code">#3FC774</span></li>
	<li>RGB, ex: <span class="inline-code">rgb(63, 199, 116)</span></li>
	<li>RGBA, ex: <span class="inline-code">rgba(63, 199, 116, 1)</span></li>
	<li>HSL, ex: <span class="inline-code">hsl(143, 55%, 51%)</span></li>
</ul>

<info>Tous les exemples ci-dessus ☝️ correspondent à la couleur verte, mais écrit dans des formats différents.</info>

<codepen id="vYadMOe" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-color">Background-color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-color.php">Background-color</doclink>

<dots></dots>


<grostitre>background-image</grostitre>

<p>La propriété <span class="inline-code">background-image</span> permet de définir une image d'arrière-plan à un élément. Elle accepte une ou plusieurs images et des fonctions permettant de générer un dégradé.</p>

<p>Afin d'illustrer les différents comportements associés aux images d'arrière-plan, l'image ci-dessous 👇 sera utilisée dans les exemples suivants.</p>

<img src="<?php echo $PAGE->shared; ?>images/square.png">

<h2>Image</h2>