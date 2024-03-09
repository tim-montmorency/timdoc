<?php

/**
 * @type     article
 * @title    Modes de fusion
 * @icon     images/icon.webp
 * @abstract multiply, screen, overlay, etc.
 * @ref      web/css
 */
?>

<p class="spacer">Avant d'afficher une image sur un site, celle-ci est généralement modifiée à l'aide d'un logiciel tel que Photoshop. Les modes de fusion n'éliminent pas réellement ce besoin, mais permettent tout de même d'ajouter plusieurs effets à une image directement en CSS.</p>

<p>Les modes de fusion, ou en anglais <em>blend modes</em>, déterminent l’apparence de deux éléments lorsqu’ils sont superposés. De base, les éléments sont traités comme des entités séparées. Ainsi, l’élément en dessous est masqué par l’élément du dessus. C’est ce que l’on appelle le mode normal.</p>

<dots></dots>


<grostitre>Modes disponibles</grostitre>

<ul>
  <li>
    <incode>normal</incode> <em>(normal)</em> par défaut.
  </li>
  <li>
    <incode>multiply</incode> <em>(fondu)</em>
  </li>
  <li>
    <incode>screen</incode> <em>(superposition)</em>
  </li>
  <li>
    <incode>overlay</incode> <em>(incrustation)</em>
  </li>
  <li>
    <incode>darken</incode> <em>(obscurcir)</em>
  </li>
  <li>
    <incode>color-dodge</incode> <em>(densité couleur -)</em>
  </li>
  <li>
    <incode>color-burn</incode> <em>(densité couleur +)</em>
  </li>
  <li>
    <incode>hard-light</incode> <em>(lumière crue)</em>
  </li>
  <li>
    <incode>soft-light</incode> <em>(lumière tamisée)</em>
  </li>
  <li>
    <incode>difference</incode> <em>(différence)</em>
  </li>
  <li>
    <incode>exclusion</incode> <em>(exclusion)</em>
  </li>
  <li>
    <incode>hue</incode> <em>(teinte)</em>
  </li>
  <li>
    <incode>saturation</incode> <em>(saturation)</em>
  </li>
  <li>
    <incode>color</incode> <em>(couleur)</em>
  </li>
  <li>
    <incode>luminosity</incode> <em>(luminosité)</em>
  </li>
</ul>

<info>La documentation concernant les modes de fusion en CSS fut écrite en partenariat avec les ingénieurs d’Adobe. Vous remarquerez donc que les modes disponibles correspondent à ceux dans Photoshop.</info>

<dots></dots>


<grostitre>mix-blend-mode</grostitre>

<p>Les modes de fusion peuvent être utilisés sur des <strong>éléments séparés</strong> grâce à la propriété <incode>mix-blend-mode</incode>.</p>

<p>Par exemple, voici 3 <incode>&lt;div&gt;</incode> séparés, se superposant:</p>

<codepen id="OJwrwKB" tab="result"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/mix-blend-mode">mix-blend-mode</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_mix-blend-mode.asp">mix-blend-mode</doclink>

<dots></dots>


<grostitre>Isolation</grostitre>

<p>La propriété <incode>isolation</incode> permet de créer un nouveau contexte de fusion. Lorsqu'un contexte est créé, les éléments à l'intérieur peuvent continuer de fusionner entre eux, mais ne peuvent plus fusionner avec les autres éléments sur la page.</p>

<p>Par exemple, si une bande jaune 🟡 est ajoutée à l'exemple précédent et qu'un contexte <em>(.wrapper)</em> incluant les cercles #1 et #2 est créé. Ces cercles continuent de fusionner entre eux, mais ne fusionnent pas avec ladite bande. Tandis que le cercle #3 fusionne avec celle-ci, puisqu'il n'est pas isolé.</p>

<codepen id="oNMJPgG" tab="result"></codepen>

<span class="remark">Remarquez la bande visible seulement au travers du cercle #3.</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/isolation">isolation</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_isolation.asp">isolation</doclink>

<dots></dots>


<grostitre>background-blend-mode</grostitre>

<p>Il est aussi possible d’utiliser la propriété <incode>background-blend-mode</incode> pour déterminer comment les <strong>arrière-plans</strong> <em>(couleurs ou images)</em> d’un élément doivent fusionner entre eux.</p>

<p>Par exemple, un élément ayant un fond vert 🟢 et l'image de paysage en arrière-plan:</p>

<highlight lang="css">.element {
  background-color: green;
  background-image: url('paysage.jpg');
}</highlight>

<codepen id="OJwrBGm" tab="result" height="540"></codepen>

<span class="remark">Crédits photo 📷: <a target="_blank" href="https://unsplash.com/photos/twukN12EN7c">Simon Berger</a></span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/background-blend-mode">background-blend-mode</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_background-blend-mode.asp">background-blend-mode</doclink>

<dots></dots>

<exercice href="exercices/emotion/"></exercice>

<dots></dots>