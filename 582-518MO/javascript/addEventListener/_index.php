<?php 
/**
 * @type     article
 * @title    addEventListener
 * @icon     images/icon.svg
 * @abstract Méthode permettant d'attacher un gestionnaire d'événement à un élément du DOM.
 * @index    80
 * @ref      web/javascript
 */
?>

<p>Plusieurs événements peuvent-être déclenchés sur une page. Heureusement, il est possible d'écouter ces événements grâce à la méthode <code>addEventListener()</code> et de déclencher une fonction en guise de rétroaction. </p><p>Par exemple, un internaute peut cliquer sur un bouton <em>(événement)</em>. Puisque cet événement est anticipé <em>(écouté)</em>, un item est ajouté dans un panier lorsqu'il se produit <em>(fonction).</em></p>


<p>Prenons un exemple encore plus simple. Un bouton HTML sur lequel nous désirons écouter les événements de type <em>"click"</em> afin d'écrire <em>"Bonjour"</em> dans la console lorsqu'il est cliqué.</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn"</span>&gt;</span>Afficher un message<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span></code></pre><p>Il serait possible en JavaScript de faire:</p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> btn = <span class="hljs-built_in">document</span>.querySelector(<span class="hljs-string">'.btn'</span>);

<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">showMsg</span>(<span class="hljs-params"></span>) </span>{
  <span class="hljs-built_in">console</span>.log(<span class="hljs-string">"Bonjour"</span>);
}

btn.addEventListener(<span class="hljs-string">"click"</span>, showMsg);</code></pre>



<dots></dots>
<grostitre>Anatomie</grostitre>


<h3 class="heading heading--h3" id="const btn">const btn</h3>

<p>Variable contenant l'élément sur lequel l'événement devrait se produire.</p>

<warning>
    <p>Il ne doit y avoir qu’<strong>un seul élément</strong> dans la variable. Une NodeList ou un tableau engendrera une&nbsp;erreur.</p> 

</warning>


<h3 class="heading heading--h3" id="function showMsg()">function showMsg()</h3>

<p>Fonction écrivant <em>"Bonjour"</em> dans la console.</p>
<h3 class="heading heading--h3" id="addEventListener(clickshowmsg)">addEventListener("click", showMsg)</h3>

<p><code>addEventListener</code> indique qu'un événement doit être écouté sur l'élément se trouvant à la gauche du point <em>(</em><code>btn</code><em>)</em>. La chaine de caractères <em>"click"</em> correspond au nom du type d'événement à écouter et l'élément après la virgule <em>(</em><code>showMsg</code><em>)</em> à la fonction à appeler lorsque l'événement se produit.</p>

<alert>

  <h4>Erreur fréquente</h4>
  <p>L’erreur <code>addEventListener is not a function</code> se produit généralement lorsqu’il y a une faute d’orthographe dans le mot <code>addEventListener</code>, plus souvent qu’autrement, il s’agit d’une majuscule écrite en&nbsp;minuscule.</p>
</alert>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/EventTarget/addEventListener'>addEventListener()</doclink>
<doclink href='https://www.w3schools.com/jsref/met_document_addeventlistener.asp'>addEventListener()</doclink>


<!--               <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209050359/https://smnarnold.com/exercices/javascript/addeventlistener-bouton" target="_blank" class="exercice-card__title">
        AddEventListener() -&nbsp;Bouton
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devez apeller une fonction spécifique lorsque le bouton se fait cliquer&nbsp;dessus.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3V0b24uanBn?w=620&amp;s=1d44ad1f8c48c3a8bd1c144e7370d5c0" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3V0b24uanBn?w=310&amp;s=683831f1efa75990bff2ad39922d11e2" media="(max-width: 575px)">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3V0b24uanBn?w=370&amp;s=282564cc1e4285d445ebb0c1a88eccb8" media="(min-resolution: 2dppx)">
      <img src="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3V0b24uanBn?w=185&amp;s=5e7a5449d880f0c49bfaf8b2b5a7935e" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
  
  -->



<dots></dots>
<grostitre>Fonction anonyme</grostitre>
  
<p>Certaines fonctions ne sont utiles que dans un contexte précis, par exemple lorsqu'un événement se produit. Dans ce cas, il est superflus de leurs attribuer un nom afin de pouvoir les invoquer ailleurs. Ces fonctions sont connues sous le nom de fonctions anonymes.</p>


<p>Par exemple:</p>
  
  
  
<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> btn = <span class="hljs-built_in">document</span>.querySelector(<span class="hljs-string">'.btn'</span>);

btn.addEventListener(<span class="hljs-string">"click"</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params"></span>) </span>{
  <span class="hljs-built_in">console</span>.log(<span class="hljs-string">"Bonjour"</span>);
});</code></pre>



<!-- 
              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209050359/https://smnarnold.com/exercices/javascript/addeventlistener-boussole" target="_blank" class="exercice-card__title">
        AddEventListener() -&nbsp;Boussole
      </a>

            <p class="exercice-card__description">Pour cet exercice nous allons animer l’aiguille d’une boussole 🧭 de sorte qu’elle pointe toujours vers le point cardinal&nbsp;sélectionné.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3Vzc29sZS5wbmc=?w=620&amp;s=da295932d8576fa0528d4e8b0d755ba5" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3Vzc29sZS5wbmc=?w=310&amp;s=ffe76e2a96d4f373fdff68a6727b3c77" media="(max-width: 575px)">
      <source srcset="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3Vzc29sZS5wbmc=?w=370&amp;s=836f184587ffe424e9edecaa10931540" media="(min-resolution: 2dppx)">
      <img src="/web/20231209050359im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvYWRkZXZlbnRsaXN0ZW5lci1ib3Vzc29sZS5wbmc=?w=185&amp;s=8053d1967a1df08ebe129d90c89b1255" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
  
-->


<dots></dots>
<grostitre>L'objet d'événement</grostitre>
<p>Dès qu'un événement se produit, JavaScript génère un objet contenant le détail de l'événement en question et le passe à la fonction invoquée. </p><p>Exemple d'objet d'événement:</p>
    
    
<pre><code class="hljs css">MouseEvent&nbsp;{
  ctrlKey: false,
  target: div.btn,
  x: <span class="hljs-number">100</span>,
  y: <span class="hljs-number">200</span>,
  ...
}</code></pre>


<p>Cet objet nous indique par exemple si la touche <code>ctrl</code> était enfoncée au moment du clic, quel élément a été cliqué, à quelle position X et Y le clic a eu lieu, ainsi que plusieurs autres informations utiles.</p><p>Pour récupérer cet objet, il suffit de nommer un paramètre dans la fonction appelée. Ce paramètre est souvent nommé "<em>event"</em> ou "<em>e"</em> par convention, mais il pourrait porter  n'importe quel nom.</p>


<h3 class="heading heading--h3" id="Fonction standard">Fonction standard</h3>

<pre><code class="hljs javascript"><span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">showMsg</span>(<span class="hljs-params">event</span>) </span>{
  <span class="hljs-built_in">console</span>.log(event);
}

btn.addEventListener(<span class="hljs-string">"click"</span>, showMsg);</code></pre><p>Puisque le premier paramètre envoyé à une fonction invoquée via <code>addEvenListener</code> est toujours l'objet de l'événement même, il suffit de nommer l'objet reçu afin de pouvoir y faire référence.</p>


<h3 class="heading heading--h3" id="Fonction anonyme">Fonction anonyme</h3>

<pre><code class="hljs javascript">btn.addEventListener(<span class="hljs-string">"click"</span>, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">event</span>) </span>{
  <span class="hljs-built_in">console</span>.log(event);
});</code></pre>

<br>
<p>Tout comme les fonctions standards, il suffit de nommer un paramètre dans la fonction invoquée afin d'avoir accès à l'objet de l'événement.</p>
    
