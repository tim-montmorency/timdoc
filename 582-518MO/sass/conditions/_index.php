<?php 
/**
 * @type     article
 * @title    Conditions
 * @icon     images/icon.png
 * @abstract if, else, else if
 * @index 24
 */
?>

<p>SASS permet d'inclure des conditions <a rel="noopener noreferrer" href="#if">@if</a>, <a rel="noopener noreferrer" href="#else">@else</a> et <a target="_blank" rel="noopener noreferrer" href="#else-if">@else if</a> similaire aux conditions en JavaScript. Cette fonctionnalité permet d'écrire du code plus complexe plus facilement.</p>


<dots></dots>
<grostitre>@if</grostitre>
<p>La règle <code>@if</code> permet de contrôler l'exécution d'un bloc de style en fonction d'une condition.</p>

<p>Par exemple, une mixin qui permettrait de générer un avatar carré ou circulaire en fonction de la valeur du paramètre <code>rounded</code> <em>(true ou false)</em>:</p>



<pre><code class="hljs css"><span class="hljs-keyword">@mixin</span> avatar($<span class="hljs-attribute">size</span>: <span class="hljs-number">100px</span>, $<span class="hljs-attribute">rounded</span>: false) {
  <span class="hljs-attribute">width</span>: $size;
  <span class="hljs-attribute">height</span>: $size;
  <span class="hljs-attribute">background-size</span>: cover;
  <span class="hljs-attribute">background-position</span>: <span class="hljs-number">50%</span> <span class="hljs-number">50%</span>;
  
  <span class="hljs-keyword">@if</span> $rounded {
    <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">50%</span>;
  }
}</code></pre>

<p>Pour obtenir un avatar carré de 100px, il serait possible d'écrire:</p>

<pre><code class="hljs css"><span class="hljs-selector-class">.avatar-facebook</span> {
  <span class="hljs-keyword">@include</span> avatar; // Aucun paramètre. Tout par défaut
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">'facebook-logo.png'</span>);
}</code></pre>


<p>Tandis que pour obtenir un avatar rond de 200px:</p>

<pre><code class="hljs css"><span class="hljs-selector-class">.avatar-twitter</span> {
  <span class="hljs-keyword">@include</span> avatar(<span class="hljs-number">200px</span>, true);
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">'twitter-logo.png'</span>);
}</code></pre><p>Ce qui produirait les codes suivant:</p>

<pre><code class="hljs css"><span class="hljs-selector-class">.avatar-facebook</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">100px</span>;
  <span class="hljs-attribute">background-size</span>: cover;
  <span class="hljs-attribute">background-position</span>: <span class="hljs-number">50%</span> <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">'facebook-logo.png'</span>);
}

<span class="hljs-selector-class">.avatar-twitter</span> {
  <span class="hljs-attribute">width</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">height</span>: <span class="hljs-number">200px</span>;
  <span class="hljs-attribute">background-size</span>: cover;
  <span class="hljs-attribute">background-position</span>: <span class="hljs-number">50%</span> <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">border-radius</span>: <span class="hljs-number">50%</span>;
  <span class="hljs-attribute">background-image</span>: <span class="hljs-built_in">url</span>(<span class="hljs-string">'twitter-logo.png'</span>);
}</code></pre>

<doclink href='https://sass-lang.com/documentation/at-rules/control/if'>@if</doclink>


<dots></dots>
<grostitre>@else</grostitre>

<p>La règle <code>@else</code> permet de déclencher l'exécution d'un bloc de style lorsqu'une condition <a rel="noopener noreferrer" href="#if">@if</a> n'est pas respectée.</p><p>Par exemple, une mixin de choix de thème de couleur:</p>


<pre><code class="hljs css"><span class="hljs-keyword">@mixin</span> dark-theme($<span class="hljs-attribute">dark</span>: true) {
  <span class="hljs-keyword">@if</span> $dark {
    <span class="hljs-attribute">background</span>: black;
    <span class="hljs-attribute">color</span>: white;
  } <span class="hljs-keyword">@else</span> {
    <span class="hljs-attribute">background</span>: white;
    <span class="hljs-attribute">color</span>: black;
  }
}</code></pre>

<p>Pour obtenir un menu blanc ⚪️ avec texte noir ⚫️ , il serait possible d'écrire:</p>



<pre><code class="hljs php">.menu {
  @<span class="hljs-keyword">include</span> dark-theme(<span class="hljs-literal">false</span>);
}</code></pre><p>Ce qui générerait le code suivant:</p><pre><code class="hljs css"><span class="hljs-selector-class">.menu</span> {
  <span class="hljs-attribute">background</span>: white;
  <span class="hljs-attribute">color</span>: black;
}</code></pre>



<doclink href='https://sass-lang.com/documentation/at-rules/control/if#else'>@else</doclink>







<dots></dots>
<grostitre>@else if</grostitre>

          <p>Par exemple, si pour créer une mixin permettant de gérer les breakpoints CSS d'un site à partir de mots-clés plutôt que de chiffres qui sont parfois difficiles à retenir, il serait possible de faire:</p><pre><code class="hljs css"><span class="hljs-keyword">@mixin</span> breakpoint($<span class="hljs-attribute">size</span>: sm) {
  <span class="hljs-keyword">@if</span> $size == sm {
    <span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width</span>: <span class="hljs-number">576px</span>) { <span class="hljs-keyword">@content</span>; }
  } <span class="hljs-keyword">@else</span> if $size == md {
    <span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width</span>: <span class="hljs-number">768px</span>) { <span class="hljs-keyword">@content</span>; }
  } <span class="hljs-keyword">@else</span> if $size == lg {
    <span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width</span>: <span class="hljs-number">992px</span>) { <span class="hljs-keyword">@content</span>; }
  } <span class="hljs-keyword">@else</span> if $size == xl {
    <span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width</span>: <span class="hljs-number">1200px</span>) { <span class="hljs-keyword">@content</span>; }
  }
}</code></pre>

<p>Remarquez <code>@content</code> qui permet de récupérer tout ce qui se trouve à l'intérieur du <code>@include</code> de la mixin. </p><p>Par exemple:</p>

<pre><code class="hljs css"><span class="hljs-keyword">@include</span> breakpoint(md) {
  <span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-size</span>: <span class="hljs-number">18px</span>; }
}</code></pre>

<p>Générera le code suivant:</p>

<pre><code class="hljs css"><span class="hljs-keyword">@media</span> (<span class="hljs-attribute">min-width</span>: <span class="hljs-number">768px</span>) {
  <span class="hljs-selector-tag">body</span> { <span class="hljs-attribute">font-size</span>: <span class="hljs-number">18px</span>; }
}</code></pre>

<p>Cependant, vous n'avez pas à retenir le chiffre 768px. Mieux, si votre équipe décide de changer la valeur de <em>md</em> à 780px, elle peut simplement la changer dans la mixin et la valeur ce mettra à jours partout sans que personne n'aille à appliquer de modification à son code.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/control/if#else-if'>@else-if</doclink>

