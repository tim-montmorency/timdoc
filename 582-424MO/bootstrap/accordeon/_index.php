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


<p>L'accordéon est donc utilisé en interface web par soucis de permettre à l'utilisateur de parcourir rapidement le contenu et et aussi, simplement pour sauver de l'espace dans la page et éviter les longs blocs de texte infinis.</p>

<codepen id="dyqoNeO" tab="result" height="550"></codepen>

<dots></dots>

<p>Voici la base: </p>
<p>Cliquez sur les accordéons ci-dessous pour développer/réduire le contenu de l'accordéon.</p>

<highlight lang="html">&lt;div class=&quot;accordion&quot; id=&quot;monAccordeon&quot;&gt;

  &lt;div class=&quot;accordion-item&quot;&gt;

    &lt;h2 class=&quot;accordion-header&quot; id=&quot;entete1&quot;&gt;
      &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapse1&quot;&gt;
      Élément #1 de l'accordéon
      &lt;/button&gt;
    &lt;/h2&gt;

    &lt;div id=&quot;collapse1&quot; class=&quot;accordion-collapse collapse show&quot; 
    aria-labelledby=&quot;entete1&quot; data-bs-parent=&quot;#monAccordeon&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;
        Ceci est le premier élément du corps de l&#39;accordéon. Il est affiché par défaut, jusqu&#39;à ce que...
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt;

&lt;/div&gt;</highlight>
<br>
<h3>Remarquez le lien entre les IDs des éléments et les atributs <code>data-bs-target</code>, <code>aria-controls</code>, <code>aria-labelledby</code> et <code>data-bs-parent</code></h3>
<img src="images/accordions_attributes.png" alt="les IDs du code">


<dots></dots>

<grostitre>Contenu</grostitre>
<h3>Conteneur de l'accordéon</h3>
<p>L'élément parent qui contient tout les items de l'accordéon, doit avoir la classe <em>.accordion</em></p>
<h3>Conteneur de chaque item</h3>
<p>Ensuite chaque duo titre-contenu, doit être entouré par un élément qui a la classe <em>.accordion-item</em></p>
<h3>Conteneur du titre de l'item</h3>
<p>À l'intérieur de chaque accordion-item, il y aura un titre qui fait aussi office de bouton cliquable pour ouvrir et fermer le contenu.</p>
<p>Exemple:</p>
<highlight lang="html">&lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
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
<highlight lang="html">&lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
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

<doclink href="https://getbootstrap.com/docs/5.2/components/accordion/">Accordion</doclink>
