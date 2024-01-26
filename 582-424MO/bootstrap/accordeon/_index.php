<?php

/**
 * @type     article
 * @title    Accordéon
 * @icon     ../images/icon.webp
 * @abstract Accordéons avec sections qui se replient verticalement 
 * @ref      web/cadriciels/bootstrap
 */
?>


<grostitre>Intro</grostitre>


<grostitre>Définition</grostitre>
<p>En bref, un accordéon est un élément qui a été réduit de sorte qu'on ne peut voir que son titre et une flèche descendante. Lorsque l'on clique sur le titre, l'élément se développera afin de révéler le corps du contenu. Si l'on clique une deuxième fois sur le titre, l'élément rétrécira au point de re-masquer le corps du contenu. Les accordéons permettent aux visiteurs de parcourir rapidement les titres qui figurent sur la page, ce qui peut être utile dans certains cas comme des listes de foires aux questions (FAQ). </p>
<doclink href='https://www.uottawa.ca/uoweb/fr/guide-usager/transformer-contenu-accordeon'>Source</doclink>

<p>L'accordéon est donc utilisé en interface web par soucis de permettre à l'utilisateur de parcourir rapidement le contenu et et aussi, simplement pour sauver de l'espace dans la page et éviter les longs blocs de texte infinis.</p>


<p class="codepen" data-height="550" data-theme-id="43847" data-default-tab="result" data-slug-hash="dyqoNeO" data-user="tim-momo" data-show-tab-bar='no' style="height: 550px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/dyqoNeO">
  Bootstrap - accordion</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
<dots></dots>

<p>Voici la base: </p>

<highlight lang='html'>&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;

  &lt;div class=&quot;accordion-item&quot;&gt;

    &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
      Élément #1 de l'accordéon
      &lt;/button&gt;
    &lt;/h2&gt;

    &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
        Ceci est le premier élément du corps de l&#39;accordéon. Il est affiché par défaut, jusqu&#39;à ce que...
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt;

&lt;/div&gt;</highlight>

<dots></dots>

<grostitre>Contenu</grostitre>
<h3>Conteneur de l'accordéon</h3>
<p>L'élément parent qui contient tout les items de l'accordéon, doit avoir la classe <em>.accordion</em></p>
<h3>Conteneur de chaque item</h3>
<p>Ensuite chaque duo titre-contenu, doit être entouré par un élément qui a la classe <em>.accordion-item</em></p>
<h3>Conteneur du titre de l'item</h3>
<p>À l'intérieur de chaque accordion-item, il y aura un titre qui fait aussi office de bouton cliquable pour ouvrir et fermer le contenu.</p>
<p>Exemple:</p>
<highlight lang='html'>&lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
    Élément #2 de l'accordéon.
    &lt;/button&gt;
&lt;/h2&gt;</highlight>
<br>
<p>Portez bien attention sur les attributs ci-haut.</p>
<ul>
    <li><incode> data-bs-target="#collapseTwo"</incode> et <incode> aria-controls="collapseTwo"</incode>  où <em>collapseTwo</em> correspond au id du contenu qui accompagne ce titre.</li>
</ul>



<h3>Conteneur du contenu de l'item</h3>
<p>Et finalement, toujours à l'intérieur de accordion-item, se trouve le contenu lui même.</p>
<p>Exemple:</p>
<highlight lang='html'>&lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
    &lt;div class=&quot;accordion-body&quot;&gt;
    Ceci est le contenu du 2e élément de...
    &lt;/div&gt;
&lt;/div&gt;
   </highlight>
   <br>
   <p>Portez bien attention sur les attributs ci-haut.</p>
   <ul>
       <li><incode>data-bs-parent="#accordionExample"</incode> où <em>accordionExample</em> correspond au id du parent qui contient tous les items de l'accordéon.</li>
       <li><incode>aria-labelledby="headingTwo"</incode> où <em>headingTwo</em> correspond au id heading (h1, h2, h3 etc) qui accompagne le contenu actuel.</li>
    </ul>
<br>

<dots></dots>

<doclink href='https://getbootstrap.com/docs/5.2/components/accordion/'>Accordion</doclink>
