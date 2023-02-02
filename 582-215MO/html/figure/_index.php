<?php
/**
 * @type     article
 * @title    Figure
 * @icon     images/icon.png
 * @abstract Légende de média
 */
?>

<p class="spacer">La balise <incode>&lt;figure&gt;</incode> permet d&#39;associer un élément <em>(image, vidéo, diagramme, etc.)</em> à une légende <incode>&lt;figcaption&gt;</incode>. Ainsi, les moteurs de recherche comprennent le lien étroit unissant les deux éléments.</p>

<p>Par exemple:</p>

<codepen id="bGjOKvW" tab="html,result" height="300"></codepen>

<p>La balise <incode>&lt;figcaption&gt;</incode> peut être avant ou après l&#39;élément quelle décrit, tant qu&#39;elle est enfant direct de la balise <incode>&lt;figure&gt;</incode>.</p>

<p>👌</p>

<highlight lang="html">&lt;figure&gt;
  &lt;img src=&quot;image.png&quot;&gt;
  &lt;figcaption&gt;...&lt;/figcaption&gt;
&lt;/figure&gt;</highlight>

<p>🚫</p>

<highlight lang="html">&lt;figure&gt;
  &lt;img src=&quot;image.png&quot;&gt;
  &lt;div&gt;
    &lt;figcaption&gt;...&lt;/figcaption&gt;
  &lt;/div&gt;
&lt;/figure&gt;</highlight>

<alert>
  <h5>ERREUR FRÉQUENTE</h5>
  <p>Si un espace indésirable affiche entre une image et sa légende <em>(figcaption)</em>, il est probable que cet espace soit créé par le <incode>display: inline;</incode> par défaut de l’image.
  <br><br>
Pour s’en débarrasser, il suffit de changer son display à <incode>display: block;</incode> dans le CSS.</p>
</alert>

<knowmore href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/figure">Article MDN à propos de la balise figure.</knowmore>

<dots></dots>

