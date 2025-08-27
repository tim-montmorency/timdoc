<?php 
/**
 * @type     article
 * @title    manipulation DOM
 * @icon     images/icon.svg
 * @abstract Permet de manipuler le contenu et la structure du DOM.
 * @index    80
 * @ref      web/javascript
 */
?>


<p>Il arrive qu'il soit nécessaire d'insérer ou de modifier le contenu d'un élément dans une page ou plus précisément dans le DOM. Heureusement, JavaScript offre plusieurs fonctions permettant d'y&nbsp;arriver.</p>

<p>Afin de démontrer les différentes options, un élément avec la classe&nbsp;<code>.element</code>&nbsp;et le texte&nbsp;<code>1</code>&nbsp;sera utilisé dans l'ensemble des exemples&nbsp;suivants.</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"element"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>



<dots></dots>
<grostitre>InnerText</grostitre>

<p>La fonction&nbsp;<code>innerText</code>&nbsp;permet de récupérer ou de définir le&nbsp;<strong>contenu texte</strong>&nbsp;d'un&nbsp;élément.</p>
<h3 class="heading heading--h3" id="Récupérer">Récupérer</h3>

<p>Par exemple, pour récupérer le contenu texte de l'élément&nbsp;<code>.element</code>, il est possible de&nbsp;faire:</p><pre><code class="hljs javascript"><span class="hljs-built_in">console</span>.log(element.innerText); <span class="hljs-comment">// 1</span></code></pre>
<h3 class="heading heading--h3" id="Définir">Définir</h3>

<p>Si une valeur lui est attribuée, le texte existant est&nbsp;remplacé.</p><p>Par exemple, dans le code ci-dessous 👇 le contenu texte&nbsp;<code>1</code>&nbsp;est remplacé par le chiffre&nbsp;<code>2</code>;</p>


<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_1" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/1d0047f24af69225380c1e95ab1b5a55?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=1d0047f24af69225380c1e95ab1b5a55&amp;default-tab=js%2Cresult&amp;name=cp_embed_1" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_1d0047f24af69225380c1e95ab1b5a55"></iframe></div>
  </div>  

  
</div>


<warning>  
    <p>Si du code HTML était attribué comme nouvelle valeur via <code>innerText</code>, les balises afficheraient textuellement dans la&nbsp;page.</p>
</warning>


<doclink href='https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/innerText'>innerText</doclink>
<doclink href='https://www.w3schools.com/jsref/prop_node_innertext.asp'>innerText</doclink>




<dots></dots>
<grostitre>InnerHTML</grostitre>

       

<p>Similaire à innerText, la fonction&nbsp;<code>innerHTML</code>&nbsp;permet de récupérer ou de définir le&nbsp;<strong>contenu HTML</strong>&nbsp;d'un&nbsp;élément.</p>


<h3 class="heading heading--h3" id="Récupérer">Récupérer</h3>

<p>Par exemple, pour récupérer le contenu HTML de&nbsp;<code>.element</code>, il est possible de faire:</p>

<pre><code class="hljs javascript"><span class="hljs-built_in">console</span>.log(element.innerHTML); <span class="hljs-comment">// 1</span></code></pre><p>Si une balise HTML avait été présente à l'intérieur de&nbsp;<code>.element</code>, par exemple une balise span enrobant le chiffre&nbsp;<code>1</code>, la fonction retournerait plutôt&nbsp;<code>&lt;span&gt;1&lt;/span&gt;</code>.</p>


<h3 class="heading heading--h3" id="Définir">Définir</h3>

<p>Si contenu HTML est attribué à&nbsp;<code>innerHTML</code>, le contenu HTML existant est remplacé par le&nbsp;nouveau.</p><p>Par exemple, dans le code ci-dessous 👇 le contenu texte&nbsp;<code>1</code>&nbsp;est remplacé par&nbsp;<code>&lt;em&gt;2&lt;/em&gt;</code>, ce qui nous donne le chiffre&nbsp;<code>2</code>&nbsp;en&nbsp;italique.</p>


<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_2" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/5f5b65e0cef134ce05ae696f36bc8723?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=5f5b65e0cef134ce05ae696f36bc8723&amp;default-tab=js%2Cresult&amp;name=cp_embed_2" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_5f5b65e0cef134ce05ae696f36bc8723"></iframe></div>
  </div>  

  
</div>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Element/innerHTML'>innerHTML</doclink>

<doclink href='https://www.w3schools.com/jsref/prop_html_innerhtml.asp'>innerHTML</doclink>



<!--               <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209042120/https://smnarnold.com/exercices/javascript/contenu-dom-tableau-indicateur" target="_blank" class="exercice-card__title">
        Contenu DOM - Tableau&nbsp;indicateur
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devez ajuster le pointage d’un tableau indicateur afin de refléter le pointage de 3 à 2 pour l’équipe locale en&nbsp;2e...</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209042120im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY29udGVudS1kb20tdGFibGVhdS1pbmRpY2F0ZXVyLWFwZXJjdS5wbmc=?w=620&amp;s=c353c889f41b8dee8785fe4d117bb67b" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209042120im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY29udGVudS1kb20tdGFibGVhdS1pbmRpY2F0ZXVyLWFwZXJjdS5wbmc=?w=310&amp;s=00099f3cc7e277d4c042fa27a94353a5" media="(max-width: 575px)">
      <source srcset="/web/20231209042120im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY29udGVudS1kb20tdGFibGVhdS1pbmRpY2F0ZXVyLWFwZXJjdS5wbmc=?w=370&amp;s=54a08727ba9f20634e5189c3c6bd3f33" media="(min-resolution: 2dppx)">
      <img src="/web/20231209042120im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY29udGVudS1kb20tdGFibGVhdS1pbmRpY2F0ZXVyLWFwZXJjdS5wbmc=?w=185&amp;s=b964536c5f78890e48e9db109d9855e6" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
   -->



<dots></dots>
<grostitre>insertAdjacentText()</grostitre>

<p>Contrairement à&nbsp;<a rel="noopener noreferrer" href="#innertext">innerText</a>, la fonction&nbsp;<code>insertAdjacentText</code>&nbsp;permet d'insérer un contenu texte à une position précise dans un&nbsp;élément, sans effacé le contenu&nbsp;original.</p>

<p>Soit:</p>

<ul><li><p><code>beforebegin</code>&nbsp;avant l'élément</p></li><li><p><code>afterbegin</code>&nbsp;au début de l'élément</p></li><li><p><code>beforeend</code>&nbsp;à la fin de l'élément</p></li><li><p><code>afterend</code>&nbsp;après l'élément</p></li></ul>

<h3 class="heading heading--h3" id="beforebegin">beforebegin</h3>

<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_3" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/b7c59aa68c1b2231559bb02e417e154c?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=b7c59aa68c1b2231559bb02e417e154c&amp;default-tab=js%2Cresult&amp;name=cp_embed_3" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_b7c59aa68c1b2231559bb02e417e154c"></iframe></div>
  </div>  
</div>
          


<h3 class="heading heading--h3" id="afterbegin">afterbegin</h3>

          <div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_4" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/ffa61aa279cc0718d8266bd65cc2f6ea?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=ffa61aa279cc0718d8266bd65cc2f6ea&amp;default-tab=js%2Cresult&amp;name=cp_embed_4" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_ffa61aa279cc0718d8266bd65cc2f6ea"></iframe></div>
  </div>  

  
</div>


<warning><p>Si du code HTML était attribué comme valeur via insertAdjacentText, les balises afficheraient textuellement dans la&nbsp;page.</p>
</warning>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Element/insertAdjacentText'>insertAdjacentText()</doclink>
<doclink href='https://www.w3schools.com/jsref/met_node_insertadjacenttext.asp'>insertAdjacentText()</doclink>





<dots></dots>
<grostitre>insertAdjacentHTML()</grostitre>

<p>Similaire à&nbsp;<a rel="noopener noreferrer" href="#insertadjacenttext">insertAdjacentText</a>, la fonction&nbsp;<code>insertAdjacentHTML</code> permet d'insérer un contenu HTML à une position précise dans un élément, sans effacé son contenu&nbsp;original.</p><p>Soit:</p>

<ul><li><p><code>beforebegin</code>&nbsp;avant l'élément</p></li><li><p><code>afterbegin</code>&nbsp;au début de l'élément</p></li><li><p><code>beforeend</code>&nbsp;à la fin de l'élément</p></li><li><p><code>afterend</code>&nbsp;après l'élément</p></li></ul>


<h3 class="heading heading--h3" id="beforeend">beforeend</h3>

          <div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_5" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/e5dd9f0ff0e468a47f992d82e08e3550?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=e5dd9f0ff0e468a47f992d82e08e3550&amp;default-tab=js%2Cresult&amp;name=cp_embed_5" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_e5dd9f0ff0e468a47f992d82e08e3550"></iframe></div>
  </div>  

  
</div>


<h3 class="heading heading--h3" id="afterend">afterend</h3>

          <div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_6" scrolling="no" src="https://web.archive.org/web/20231209041924/https://codepen.io/smnarnold/embed/dcd4c1005769b628f46e39ac30abad91?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=dcd4c1005769b628f46e39ac30abad91&amp;default-tab=js%2Cresult&amp;name=cp_embed_6" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_dcd4c1005769b628f46e39ac30abad91"></iframe></div>
  </div>  

  
</div>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Element/insertAdjacentHTML'>insertAdjacentHTML()</doclink>

<doclink href='https://www.w3schools.com/jsref/met_node_insertadjacenthtml.asp'>insertAdjacentHTML()</doclink>
