<?php 
/**
 * @type     article
 * @title    classList
 * @icon     images/icon.svg
 * @abstract Permet de manipuler les classes CSS d'un élément.
 * @index    80
 * @ref      web/javascript
 */
?>

<p>La méthode <code>classList</code> permet de manipuler les classes d'un élément.</p><p>Afin d'alléger les exemples à venir, prenons pour acquis qu'une variable&nbsp;<code>soda</code>&nbsp;est populée pour chaque&nbsp;exemple.</p>
          
<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> soda = <span class="hljs-built_in">document</span>.querySelector(<span class="hljs-string">'.soda'</span>);</code></pre>



<dots></dots>
<grostitre>add()</grostitre>

<p>Permet d'ajouter une classe à un élément:</p><pre><code class="hljs javascript">soda.classList.add(<span class="hljs-string">'diet'</span>);</code></pre><p>ou même plusieurs:</p>

<pre><code class="hljs javascript">soda.classList.add(<span class="hljs-string">'diet'</span>, <span class="hljs-string">'cherry'</span>);</code></pre>

<alert>
  <h4 class="note__tagline">Erreur fréquente</h4>
  <p>Ne jamais inclure de <code>.</code> Puisque <code>classList</code> ne manipule que des classes, cette info est&nbsp;redondante.</p>
</alert>

<!-- 
<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209042845/https://smnarnold.com/exercices/javascript/classlist-artiste-mystere" target="_blank" class="exercice-card__title">
        ClassList - Artiste&nbsp;mystère
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devez ajouter une classe a l’artiste via classList afin de révéler son identité&nbsp;secrète.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGUtbXlzdGVyZS5qcGc=?w=620&amp;s=1d4053a075fd52e215ce1ce5aefe0a10" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGUtbXlzdGVyZS5qcGc=?w=310&amp;s=74ff12c22f1540ef6a22a850502f9d5d" media="(max-width: 575px)">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGUtbXlzdGVyZS5qcGc=?w=370&amp;s=ebe95306a2053a30216bbfd7213ae6a3" media="(min-resolution: 2dppx)">
      <img src="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGUtbXlzdGVyZS5qcGc=?w=185&amp;s=522706de5ba62eddf2b84f570f711505" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>
-->


  
<dots></dots>
<grostitre>remove()</grostitre>

<p>À l'opposé de <a rel="noopener noreferrer" href="#add">add()</a>, <code>remove</code>&nbsp;retire une classe à un élément:</p>

<pre><code class="hljs javascript">soda.classList.remove(<span class="hljs-string">'diet'</span>);</code></pre>

<p>ou même plusieurs:</p>

<pre><code class="hljs javascript">soda.classList.remove(<span class="hljs-string">'diet'</span>, <span class="hljs-string">'cherry'</span>);</code></pre>


<dots></dots>
<grostitre>contains()</grostitre>

<p>Retourne un booléen&nbsp;<em>(true/false)</em>&nbsp;validant si une classe est présente ou non sur un&nbsp;élément.</p>

<p>Par exemple, avec l'élément HTML suivant:</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"soda diet"</span>&gt;</span>Coca-Cola<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<p>La requête suivante retournerait <code>true</code>:</p><pre><code class="hljs javascript">soda.classList.contains(<span class="hljs-string">'diet'</span>); <span class="hljs-comment">// true</span></code></pre>

<p>Tandis que celle-ci retournerait <code>false</code>:</p><pre><code class="hljs javascript">soda.classList.contains(<span class="hljs-string">'cherry'</span>); <span class="hljs-comment">// false</span></code></pre>



<alert>
  <h4 class="note__tagline">Erreur fréquente</h4>
  <p>Ne pas oublier le <code>s</code> à la fin de&nbsp;<code>contains</code>!</p>
</alert>





<dots></dots>
<grostitre>toggle()</grostitre>

<p>Permets d'ajouter une classe si elle est actuellement absente ou à l'inverse de la retirer si elle est actuellement présente. Au même titre que le bouton d'allumage d'un ordinateur permet de l'allumer s'il est éteint ou de l'éteindre s'il est actuellement allumé.</p><p>Par exemple, avec l'élément HTML suivant:</p><pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"soda diet"</span>&gt;</span>Coca-Cola<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<p>La requête suivante ajouterait la classe <code>cherry</code>, puisqu'elle n'est pas déjà présente: </p>

<pre><code class="hljs javascript">soda.classList.toggle(<span class="hljs-string">'cherry'</span>);</code></pre>

<p>Tandis qu'à l'opposé cette requête retirerait la classe <code>diet</code> puisqu'elle est déjà présente:</p>

<pre><code class="hljs javascript">soda.classList.toggle(<span class="hljs-string">'diet'</span>);</code></pre><p><code>classList.toggle()</code> fait donc l'équivalent du code suivant, mais de façon plus élégante:</p><pre><code class="hljs javascript"><span class="hljs-keyword">if</span> (soda.classList.contains(<span class="hljs-string">'diet'</span>)) {
  soda.classList.remove(<span class="hljs-string">'diet'</span>);
} <span class="hljs-keyword">else</span> {
  soda.classList.add(<span class="hljs-string">'diet'</span>);
}</code></pre>



<h3 class="heading heading--h3" id="Valeur forcée">Valeur forcée</h3>

<p><code>classList.toggle()</code> accepte une 2<sup>e</sup> paramètre optionnel sous forme de booléen <em>(true/false)</em> permettant de <strong>forcer l'ajout ou le retrait d'une classe</strong>.</p>

<p>Par exemple, le code suivant force l'ajout de la classe <code>diet</code>:</p>

<pre><code class="hljs javascript">soda.classList.toggle(<span class="hljs-string">'diet'</span>, <span class="hljs-literal">true</span>); </code></pre>

<p>Ce code est l'équivalent de <a rel="noopener noreferrer" href="#add">classList.add()</a>.</p><p>Tandis que le code suivant force le retrait de la classe <code>diet</code>:</p>

<pre><code class="hljs javascript">soda.classList.toggle(<span class="hljs-string">'diet'</span>, <span class="hljs-literal">false</span>); </code></pre><p>Soit l'équivalent de <a rel="noopener noreferrer" href="#remove">classList.remove()</a>.</p>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Element/classList'>classList</doclink>

<doclink href='https://www.w3schools.com/jsref/prop_element_classlist.asp'>classList</doclink>
<!-- 
              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209042845/https://smnarnold.com/exercices/javascript/classlist-artistes-mysteres" target="_blank" class="exercice-card__title">
        ClassList - Artistes&nbsp;mystères
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devez ajouter une classe aux artistes via classList afin de révéler leur&nbsp;identité.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGVzLW15c3RlcmVzLmpwZw==?w=620&amp;s=f03c6b00aa77d668f38b69fdd9a22a5c" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGVzLW15c3RlcmVzLmpwZw==?w=310&amp;s=e1c0850453020bbad0ed8e9150d37c96" media="(max-width: 575px)">
      <source srcset="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGVzLW15c3RlcmVzLmpwZw==?w=370&amp;s=8578daef139f5bef401c5846103be946" media="(min-resolution: 2dppx)">
      <img src="/web/20231209042845im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NsaXN0LWFydGlzdGVzLW15c3RlcmVzLmpwZw==?w=185&amp;s=23f032db9e0a8dc52de1e1ffe82881bf" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
 -->


  
<dots></dots>
<grostitre>className</grostitre>

<p>La méthode <code>className</code> permet de récupérer ou de définir la classe d'un élément.</p><p>Pour obtenir les classes sont appliquées sur un élément, par exemple celui ci-dessous 👇</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"soda diet"</span>&gt;</span>Coca-Cola<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<p>Il est suffit de faire:</p>

<pre><code class="hljs javascript">soda.className; <span class="hljs-comment">// "soda diet"</span></code></pre>

<p>Si plusieurs classes sont présentes, plutôt que d'ajouter ou de retirer chacune d'elles manuellement via <code>classList</code>. Il est possible de définir directement le texte inscrit dans l'attribut de classe via <code>className</code> ainsi:</p>

<pre><code class="hljs javascript">soda.className = <span class="hljs-string">"soda"</span>; </code></pre>

<p>Seule cette classe existe sur l'élément maintenant.</p>



          <aside class="note note--err">
  <div class="note__wrapper">
        <em class="note__tagline">Erreur fréquente</em>
        <p><code>className</code> utilise <code>=</code> contrairement à <code>classList</code> qui utilise-les&nbsp;<code>()</code>.</p>

  </div>
</aside>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Element/className'>className</doclink>

<doclink href='https://www.w3schools.com/jsref/prop_html_classname.asp'>className</doclink>


  