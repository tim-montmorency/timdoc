<?php
/**
 * @type     article
 * @title    Filtres
 * @icon     images/icon.png
 * @abstract blur, contrast, grayscale, sepia, etc.
 * @ref      web/css
 */
?>

<p class="spacer">Le terme <em>“filtre”</em> est souvent associé à Instagram et autres plateformes permettant d’altérer une image en lui appliquant un ou plusieurs filtres. Cependant, il est aussi possible d’appliquer des filtres directement en CSS à un élément!</p>

<dots></dots>


<grostitre>Filtres disponibles</grostitre>

<ul>
    <li><incode>none</incode> par défaut.</li>
    <li><incode>blur()</incode> <em>(flou)</em> Valeur acceptant toutes les unités de mesure</li>
    <li><incode>brightness()</incode> <em>(luminosité)</em> valeur en pourcentage</li>
    <li><incode>contrast()</incode> <em>(contraste)</em> valeur en pourcentage</li>
    <li><incode>drop-shadow()</incode> <em>(ombre portée)</em> même format que box-shadow</li>
    <li><incode>grayscale()</incode> <em>(niveau de gris)</em> valeur en pourcentage</li>
    <li><incode>hue-rotate()</incode> <em>(rotation de la teinte)</em> valeur en degrés</li>
    <li><incode>invert()</incode> <em>(inverser)</em> valeur en pourcentage</li>
    <li><incode>opacity()</incode> <em>(opacité)</em> valeur en pourcentage</li>
    <li><incode>saturate()</incode> <em>(saturation)</em> valeur en pourcentage</li>
    <li><incode>sepia()</incode> <em>(sépia)</em> valeur en pourcentage</li>
    <li>etc.</li>
</ul>

<info>Toutes les valeurs en pourcentages <em>(%)</em> peuvent être exprimées en fractions. Par exemple, <incode>50%</incode> peut être écrit <incode>0.5</incode>.</info>

<dots></dots>


<grostitre>filter</grostitre>

<p>La propriété <incode>filter</incode> permet d’ajouter des effets visuels à un élément. Ce filtre impactera non seulement l'élément, mais aussi tout son contenu.</p>

<p>Pour définir un nouveau filtre, il suffit de passer à un des filtres mentionnés ci-dessus ☝️ avec une valeur entre parenthèses.</p>

<codepen id="mdjaQpB" tab="result" height="540"></codepen>

<span class="remark">Remarquez comment l’extrait de code devient flou lorsque l’option blur() est sélectionnée. Ceci est du au fait que l’extrait de code est à l’intérieur de l’élément auquel le filtre est appliqué.</span>

<h3>Combinaison</h3>

<p>Il est possible de combiner plusieurs filtres ensemble simplement en les séparant par un espace.</p>

<p>Par exemple, pour obtenir un élément flou en noir et blanc, il est possible de faire:</p>

<highlight lang="css">.element {
  filter: blur(5px) grayscale(100%);
}</highlight>

<warning>Attention, si un filtre est mal défini, tous les autres filtres appliqués à un élément cesseront de fonctionner.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/filter">filter</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_filter.asp">filter</doclink>

<dots></dots>


<grostitre>backdrop-filter</grostitre>

<p>La propriété <incode>backdrop-filter</incode> permet elle aussi d'ajouter des effets visuels, mais uniquement entre un élément et son arrière-plan. Il est donc nécessaire que l'élément en question soit ne soit pas entièrement opaque afin de pouvoir voir une partie de l'élément arrière-plan.</p>

<p>Par exemple, un carré blanc ⚪️ avec une opacité de 30% afin de voir une partie de l'image en arrière-plan, soit <incode>background-color: rgba(255, 255, 255, 0.3);</incode>.</p>

<codepen id="ZEjVmog" tab="result" height="540"></codepen>

<warning>Au moment d’écrire ces lignes, cette propriété n’est pas encore supportée dans le navigateur Firefox. Il est donc préférable pour l’instant de séparer ses éléments et d’utiliser la propriété <incode>filter</incode>.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/backdrop-filter">backdrop-filter</doclink>

<dots></dots>

<exercice href="exercices/anonymat/"></exercice>
<exercice href="exercices/instagram/"></exercice>

<dots></dots>




