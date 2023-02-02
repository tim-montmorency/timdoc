<?php
/**
 * @type     article
 * @title    Font
 * @icon     images/icon.png
 * @abstract color, family, weight, size, style, line-height
 */
?>

<p class="spacer">Plusieurs propriétés CSS permettent de contrôler l'apparence d'un texte. Voici quelques-unes des propriétés les plus courantes.</p>

<grostitre>color</grostitre>

<p>La propriété <incode>color</incode> permet de définir la couleur du texte. Cette propriété accepte toutes les <a href="../unites-de-couleur/">unités de couleur</a>.</p>

<codepen id="XWBBdGp" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/color">color</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_color.asp">color</doclink>

<dots></dots>


<grostitre>font-family</grostitre>

<p>La propriété <incode>font-family</incode> permet de spécifier la police de caractères pour afficher du texte dans un élément.</p>

<p>Cette propriété accepte le nom d'une police:</p>

<highlight lang="css">font-family: Helvetica;</highlight>

<p>Ou encore une liste de polices:</p>

<highlight lang="css">font-family: Helvetica, Arial, sans-serif;</highlight>

<p>Cette dernière possibilité présente deux avantages:</p>

<ol>
  <li>Fournir une police de substitution si une police est indisponible. Par exemple, les appareils Windows n'ayant pas la fonte Helvetica par défaut, ces appareils utiliseront la prochaine police dans la liste compatible, soit Arial.</li>
  <li>Si un caractère est manquant dans la police <em>("é", "ë", "ç", etc.)</em> le navigateur utilisera un caractère de la prochaine police afin de le remplacer.</li>
</ol>

<codepen id="QWBBNPW" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-family">font-family</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-family.asp">font-family</doclink>

<dots></dots>


<grostitre>font-weight</grostitre>

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

<p>Par défaut, si aucune graisse n'est spécifiée, le texte est en normal <em>(400)</em>. Il est aussi possible de spécifier au texte d'être légèrement plus fin que sont texte courant grâce au mot-clé <incode>lighter</incode> ou encore plus gras, grâce à <incode>bolder</incode>.</p>

<codepen id="LYBBNoQ" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-weight">font-weight</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_weight.asp">font-weight</doclink>

<dots></dots>


<grostitre>font-size</grostitre>

<p>La propriété <incode>font-size</incode> permet de définir la taille du texte. Bien que l'unité la plus courante soit les pixels, toutes les <a href="../unites-de-mesure/">unités de mesure</a> sont acceptées.</p>

<highlight lang="css">font-size: 16px;</highlight>

<p>Par défaut, si aucune taille n'est spécifiée, la majorité des navigateurs lui attribueront la taille de 16px. Il est aussi possible de spécifier à un texte d'être légèrement plus petite que sont texte courant grâce au mot-clé <incode>smaller</incode> ou encore plus gros, grâce à <incode>larger</incode>.</p>

<p>Bien que les px soient très répandus, il ne faut pas sous-estimer les avantages offerts par les <incode>rem</incode> et <incode>em</incode>.</p>

<codepen id="xxJJVoX" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-size">font-size</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-size.asp">font-size</doclink>

<dots></dots>


<grostitre>font-style</grostitre>

<p>La propriété <incode>font-style</incode> permet de définir si un texte devrait apparaitre en italique ou non, grâce aux valeurs:</p>

<ul>
  <li>normal <em>(par défaut)</em></li>
  <li>italic</li>
</ul>

<codepen id="rNrreXj" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/font-style">font-style</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_font_font-style.asp">font-style</doclink>

<dots></dots>


<grostitre>line-height</grostitre>

<p>La propriété <incode>line-height</incode> indique la hauteur de chacune des lignes de texte. Bien que cette propriété accepte les valeurs en pixel, la valeur la plus répandue et la plus polyvalente consiste en un ratio basé sur la taille du texte.</p>

<p>Par exemple:</p>

<highlight lang="css">line-height: 1.5;</highlight>

<p>Définit une hauteur de ligne de 24px si la taille de texte est de 16px, puisque: 16px * 1.5 = 24px.</p>

<p>Généralement, un <incode>line-height</incode> de base est définie sur la balise <incode>&lt;body&gt;</incode>. Ainsi il affecte tous les éléments de la page.</p>

<codepen id="ZEjjOzB" tab="result" height="280"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/line-height">line-height</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_dim_line-height.asp">line-height</doclink>

<dots></dots>


<grostitre>letter-spacing</grostitre>

<p>La propriété <incode>letter-spacing</incode> permet de spécifier l'espacement entre chacune des lettres d'un texte. Cette propriété accepte toutes les unités de mesure CSS, mais est particulièrement efficace avec les <incode>em</incode>.</p>

<p>Par exemple:</p>

<highlight lang="css">letter-spacing: 0.5em;</highlight>

<p>Définis un espacement entre les lettres équivalent à une demi-largeur de lettre. Bref, si la taille de texte est de 16px, puisque: 16px * 0.5em = 8px, un espace de 8px sera ajouté entre chaque lettre.</p>

<codepen id="yLqqJLJ" tab="result" height="280"></codepen>

<info>Les valeurs négatives sont permises.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/letter-spacing">letter-spacing</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_text_letter-spacing.asp">letter-spacing</doclink>

<dots></dots>