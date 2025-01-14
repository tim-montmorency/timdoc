<?php
/**
 * @type     article
 * @title    Display
 * @icon     images/icon.webp
 * @abstract block, inline, inline-block, none
 */
?>

<p class="spacer">Chaque élément possède une propriété display qui dicte son affichage.</p>

<p>Par exemple, les balises <span class="inline-code">&lt;div&gt;</span>, <span class="inline-code">&lt;p&gt;</span> ou <span class="inline-code">&lt;ul&gt;</span> prennent toute la largeur disponible et s'affichent l'une au-dessus de l'autre, car par défaut, leur propriété display est à block.</p>

<p>Tandis que les balises <span class="inline-code">&lt;span&gt;</span>, <span class="inline-code">&lt;img&gt;</span> ou <span class="inline-code">&lt;a&gt;</span> s'affichent l'une à la suite de l'autre, comme une suite de mots, car leur propriété display est à inline par défaut.</p>

<codepen id="OJwvBZJ" tab="result" height="340">À gauche, display: block;. À droite, display: inline;</codepen>

<dots></dots>


<grostitre>block</grostitre>

<p>Les éléments <span class="inline-code">display: block;</span> en bref:</p>

<ul>
    <li>Prennent toute la largeur disponible.</li>
    <li>S'affichent sur une nouvelle ligne.<br><em>(Logique puisqu'ils prennent toute la largeur)</em></li>
    <li>Acceptent les propriétés <span class="inline-code">width</span> et <span class="inline-code">height</span> afin de définir la largeur et hauteur de l'élément.</li>
    <li>Peuvent contenir n'importe quel autre type d'éléments <em>(block, inline, etc.)</em>.</li>
</ul>

<dots></dots>


<grostitre>inline</grostitre>

<p>Les éléments <span class="inline-code">display: inline;</span> en bref:</p>

<ul>
    <li>Prennent la largeur de ce qu'ils contiennent, sans plus.</li>
    <li>S'affichent un à côté de l'autre, comme des mots dans une phrase, tant qu'il y a de l'espace et change de ligne au besoin.</li>
    <li><strong>N'acceptent pas</strong> les propriétés <span class="inline-code">width</span>, <span class="inline-code">height</span>, <span class="inline-code">margin-top</span> et <span class="inline-code">margin-bottom</span>.</li>
    <li>Peuvent contenir d'autres éléments inline, mais <strong>pas block</strong>.</li>
</ul>

<dots></dots>


<grostitre>inline-block</grostitre>

<p>Les éléments en <span class="inline-code">display: inline-block;</span> sont en quelque sorte des hybrides entre <a href="#inline">inline</a> et <a href="#block">block</a>.</p>

<p>Par exemple, les balises <span class="inline-code">&lt;button&gt;</span>, <span class="inline-code">&lt;select&gt;</span> ou <span class="inline-code">&lt;input&gt;</span> s'affichent l'une à la suite de l'autre, mais peuvent avoir une largeur et une hauteur <em>(width/height)</em> de définies, car leur propriété display est à inline-block par défaut.</p>

<ul>
    <li>Ne prennent que la largeur de ce qu'ils contiennent par défaut, mais acceptent les propriétés <span class="inline-code">width</span>, <span class="inline-code">height</span>, <span class="inline-code">margin-top</span> et <span class="inline-code">margin-bottom</span>.</li>
    <li>S'affichent un à côté de l'autre.<br><em>(Logique puisqu'ils prennent uniquement la largeur de leur contenu)</em></li>
</ul>

<warning>Deux éléments inline-block peuvent s’afficher un à côté de l’autre. Cependant, dès qu’un espace ou un retour de ligne les séparent dans le code, un espace vide s’affiche entre les deux dans le rendu du navigateur.</warning>

<dots></dots>

<grostitre>none</grostitre>

<p>Parfois il est préférable de ne pas afficher un élément.</p>

<p>Par exemple, un <em>"popup"</em> ne devrait pas être affiché tant qu'un utilisateur n'a pas déclenché un évènement. D'où l'utilité de la propriété <span class="inline-code">display: none;</span> indiquant au navigateur de faire abstraction d'un élément.</p>

<highlight lang="css">.fear {
  display: none;
}</highlight>

<dots></dots>


<exercice href="exercices/celeste"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/display">display</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_class_display.asp">display</doclink>

<dots></dots>