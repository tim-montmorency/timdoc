<?php 
/**
 * @type     article
 * @title    Imbrication
 * @icon     images/icon.png
 * @abstract abc
 * @index 99
 */
?>

<p>Par défaut le langage CSS ne permet pas de faire d'imbrications, communément appelé <em>"nesting"</em> en anglais. Il
    est donc parfois nécessaire de répéter un sélecteur plusieurs fois dans son code CSS.</p>
<p>Heureusement, Sass apporte cette fonctionnalité à CSS, ce qui permet d'accélérer l'écriture de feuilles de styles et
    de simplifier leur lecture.</p>



<dots></dots>
<grostitre>Imbrications de base</grostitre>


<p>Afin d'éviter de répéter le sélecteur <code>.list</code> à plusieurs reprises, il est possible d'écrire en SCSS:</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> {
  <span class="hljs-attribute">position</span>: relative;
  
  <span class="hljs-selector-class">.item</span> { <span class="hljs-attribute">display</span>: inline-block; }
  
  <span class="hljs-selector-class">.link</span> { <span class="hljs-attribute">color</span>: blue; }
}</code></pre>
<p>Ce qui générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> { <span class="hljs-attribute">position</span>: relative; }

<span class="hljs-selector-class">.list</span> <span class="hljs-selector-class">.item</span> { <span class="hljs-attribute">display</span>: inline-block; } 

<span class="hljs-selector-class">.list</span> <span class="hljs-selector-class">.link</span> { <span class="hljs-attribute">color</span>: blue; }</code></pre>
<h3 class="heading heading--h3" id="Niveaux d'imbrications">Niveaux d'imbrications</h3>

<p>Vous pouvez imbriquer des éléments ainsi à l'infini. Dans l'exemple précédent, nous avions un seul niveau
    d'imbrication.</p>
<p>Voici maintenant un exemple contenant deux niveaux d'imbrications:</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> {
  <span class="hljs-attribute">position</span>: relative;
  
  <span class="hljs-selector-class">.item</span> { 
    <span class="hljs-attribute">display</span>: inline-block; 
    
    <span class="hljs-selector-class">.link</span> { <span class="hljs-attribute">color</span>: blue; }
  }
}</code></pre>
<p>Ce qui générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> { <span class="hljs-attribute">position</span>: relative; }

<span class="hljs-selector-class">.list</span> <span class="hljs-selector-class">.item</span> { <span class="hljs-attribute">display</span>: inline-block; } 

<span class="hljs-selector-class">.list</span> <span class="hljs-selector-class">.item</span> <span class="hljs-selector-class">.link</span> { <span class="hljs-attribute">color</span>: blue; } // 👈 ici</code></pre>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>Évitez d’abusez des imbrications. Plus de trois niveaux d’imbrication est généralement considéré comme étant
            une mauvaise pratique et rendra votre code difficile à&nbsp;déboguer.</p>

    </div>
</aside>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://sass-lang.com/documentation/style-rules/declarations#nesting" target="_blank"
                    rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">nesting</a>
            </li>

        </ul>
    </div>
</div>



<dots></dots>
<grostitre>Sélecteurs avancés</grostitre>

<p>Les imbrications sont compatible avec tous les <a target="_blank" rel="noopener noreferrer"
        href="/cours/css/selecteurs-avances">sélecteurs CSS avancés</a>.</p>
<p>Par exemple:</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> {
  &gt; <span class="hljs-selector-class">.item</span> { <span class="hljs-attribute">display</span>: inline-block; }
  
  + <span class="hljs-selector-class">.logo</span> { <span class="hljs-attribute">display</span>: none; }
}</code></pre>
<p>Générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.list</span> &gt; <span class="hljs-selector-class">.item</span> { <span class="hljs-attribute">display</span>: inline-block; }

<span class="hljs-selector-class">.list</span> + <span class="hljs-selector-class">.logo</span> { <span class="hljs-attribute">display</span>: none; } </code></pre>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://sass-lang.com/documentation/style-rules#selector-combinators" target="_blank"
                    rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">selector combinator</a>
            </li>

        </ul>
    </div>
</div>


<dots></dots>
<grostitre>Sélecteur de parent</grostitre>


<p>Le sélecteur de parent <code>&amp;</code> est un sélecteur spécial inventé par Sass permettant de faire référence au
    sélecteur parent courant.</p>
<p>Tout sélecteur imbriqué dans un autre se fait convertir par défaut en enfant du premier. </p>
<p>Autrement dit:</p>
<pre><code class="hljs">.selecteur1 {
  .selecteur2 { ... }
}</code></pre>
<p>Générera le code CSS suivant ⏬</p>
<pre><code class="hljs"> .selecteur1 .selecteur2 { ... } </code></pre>
<p>Remarquez <strong>l'espace entre les deux sélecteurs</strong> indiquant que <code>.selecteur2</code> est enfant de
    <code>.sélecteur1</code>.</p>
<p>Cependant grâce au sélecteur parent il est possible de contourner ce comportement. Voyons quelques usages de ce
    sélecteur.</p>
<h3 class="heading heading--h3" id="Pseudo-classes">Pseudo-classes</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer"
        href="/cours/css/pseudo-classes">pseudo-classes</a> lorsqu'un sélecteur parent est utilisé.</p>
<p>Par exemple:</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.btn</span> {
  <span class="hljs-attribute">background</span>: blue;
  
  &amp;<span class="hljs-selector-pseudo">:hover</span> { <span class="hljs-attribute">background</span>: lightblue; }
}</code></pre>
<p>Générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.btn</span> { <span class="hljs-attribute">background</span>: blue; }

<span class="hljs-selector-class">.btn</span><span class="hljs-selector-pseudo">:hover</span> { <span class="hljs-attribute">background</span>: lightblue; }</code></pre>
<p>Remarquez l'utilisation du sélecteur parent <code>&amp;</code>. Celui-ci permet de faire une référence au sélecteur
    courant, en l'occurence <code>.btn</code><em> </em>et de lui rabouter directement, <strong>sans espace</strong>, la
    pseudo-classe <code>:hover</code>.</p>
<h3 class="heading heading--h3" id="Pseudo-éléments">Pseudo-éléments</h3>

<p>Les imbrications Sass sont compatibles avec les <a target="_blank" rel="noopener noreferrer"
        href="/cours/css/pseudo-elements">pseudo-éléments</a> lorsqu'un sélecteur parent est utilisé.</p>
<p>Par exemple:</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.btn</span> {
  <span class="hljs-attribute">background</span>: blue;
  
  &amp;<span class="hljs-selector-pseudo">::before</span> { <span class="hljs-attribute">content</span>: <span class="hljs-string">"🔘"</span>; }
}</code></pre>
<p>Générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.btn</span> { <span class="hljs-attribute">background</span>: blue; }

<span class="hljs-selector-class">.btn</span><span class="hljs-selector-pseudo">::before</span> { <span class="hljs-attribute">content</span>: <span class="hljs-string">"🔘"</span>; }</code></pre>
<h3 class="heading heading--h3" id="Renversé">Renversé</h3>

<p>Parfois, il souhaitable de spécifier que notre élément devrait avoir une apparence différente dans un certain
    contexte.</p>
<p>Par exemple, lorsqu'un bouton est affiché dans un menu, sa couleur de fond pourrait devoir être grise plutôt que
    bleue. Le sélecteur parent permet de couvrir ce cas de figure sans avoir à quitter le contexte du sélecteur du
    bouton en utilisant ce sélecteur comme suffix.</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.btn</span> {
  <span class="hljs-selector-class">.menu</span> &amp; { <span class="hljs-attribute">background</span>: grey; }
}</code></pre>
<p>Générera le code CSS suivant ⏬</p>
<pre><code class="hljs css"><span class="hljs-selector-class">.menu</span> <span class="hljs-selector-class">.btn</span> { <span class="hljs-attribute">background</span>: grey; }</code></pre>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://sass-lang.com/documentation/style-rules/parent-selector" target="_blank"
                    rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">parent selector</a>
            </li>

        </ul>
    </div>
</div>

<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://www.sassmeister.com/" target="_blank" rel="noopener noreferrer" class="tool-card__title">
            <strong>SassMeister</strong>
        </a>

        <p class="tool-card__description">Terrain de jeu SASS permettant de voir en temps réel la compilation CSS que
            produirait son&nbsp;code.</p>
    </div>

    <picture class="tool-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL3Nhc3NtZWlzdGVyLnBuZw==?w=620&amp;s=0510fe9ba6878fc52e146bc5445f61ba"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL3Nhc3NtZWlzdGVyLnBuZw==?w=310&amp;s=4f84c064fbe7bf05e6c0a0c37e76940c"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL3Nhc3NtZWlzdGVyLnBuZw==?w=370&amp;s=371487e967f771d8ef3b94218ff17f5c"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3Rvb2xzL3Nhc3NtZWlzdGVyLnBuZw==?w=185&amp;s=07214b5d7abda69b4e315868fd392477"
            width="" height="" loading="lazy" class="tool-card__image" style="object-position: ;">&gt;
    </picture>
</aside>
<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://codebeautify.org/css-to-scss-converter" target="_blank" rel="noopener noreferrer"
            class="tool-card__title">
            <strong>CSS to&nbsp;SCSS</strong>
        </a>

        <p class="tool-card__description">Permet de convertir la structure d’un code CSS en imbrication&nbsp;SCSS.</p>
    </div>

    <picture class="tool-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2NvZGUtYmVhdXRpZnkucG5n?w=620&amp;s=2696a6c7c9544a572adb46df6ce8491b"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2NvZGUtYmVhdXRpZnkucG5n?w=310&amp;s=dc3a6fe477f73794f446e5b45c5adcf1"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2NvZGUtYmVhdXRpZnkucG5n?w=370&amp;s=5435545c34a6678f7ff627890d52dadc"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3Rvb2xzL2NvZGUtYmVhdXRpZnkucG5n?w=185&amp;s=8424c1313d0acc57bfdc9ecb834deb6b"
            width="" height="" loading="lazy" class="tool-card__image" style="object-position: ;">&gt;
    </picture>
</aside>
<p></p>
<p></p>