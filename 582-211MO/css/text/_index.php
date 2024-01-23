<?php
/**
 * @type     article
 * @title    Text
 * @icon     images/icon.png
 * @abstract align, decoration, transform, stroke, shadow
 */
?>

<p class="spacer">Plusieurs propriétés CSS permettent de contrôler l'apparence d'un texte. Voici quelques-unes des propriétés les plus courantes.</p>

<dots></dots>


<grostitre>text-align</grostitre>

<p>La propriété <incode>text-align</incode>, comme son nom l'indique, sert à déterminer l'alignement horizontal du texte. Différentes options sont disponibles:</p>

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


<grostitre>text-decoration</grostitre>

<p>La propriété <incode>text-decoration</incode> est une propriété raccourcie permettant d'ajouter ou de retirer une ligne à un texte. Par exemple, les navigateurs utilisent cette propriété afin de différencier les liens des textes normaux en les soulignant.</p>

<p>Cette propriété accepte plusieurs arguments, tel que le type de ligne, sa couleur et son style.</p>

<codepen id="KKBBNdE" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/text-decoration">text-decoration</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_text-decoration.asp">text-decoration</doclink>

<dots></dots>


<grostitre>text-transform</grostitre>

<p>La propriété <incode>text-transform</incode> permet de modifier un texte. Cette propriété accepte diverses valeurs:</p>

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


<grostitre>text-stroke</grostitre>

<p>La propriété <incode>-webkit-text-stroke</incode> bien que non standard, d'où sont préfix <incode>-webkit</incode>, est supportée par tous les navigateurs majeurs. Cette propriété accepte deux valeurs. L'épaisseur du trait entourant le le texte et la couleur du trait en question.</p>

<codepen id="VwBBmmW" tab="result" height="280"></codepen>

<alert><h5>ERREUR FRÉQUENTE</h5>Lorsque le prefix <incode>-webkit</incode> est oublié, l’effet ne s’affiche pas.</alert>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/-webkit-text-stroke">-webkit-text-stroke</doclink>

<dots></dots>


<grostitre>text-shadow</grostitre>

<p>La propriété <incode>text-shadow</incode> permet d'ajouter une ombre à un texte. Cette propriété nécessite un décalage sur les X ou Y afin d'être visible par défaut. Une 3e valeur peut être ajoutée afin de spécifier le niveau de flou souhaité pour l'ombre. Finalement, une 4e valeur permet d'indiquer la couleur de l'ombre qui par défaut est de la même couleur que le texte.</p>

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