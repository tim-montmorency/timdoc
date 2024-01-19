<?php 
/**
 * @type     article
 * @title    Promesses JS intermédiaire
 * @icon     images/ico-promesse-js.png
 * @abstract promise.all(), promise.any()...
 * @index 98
 */
?>

<grostitre>RECEVOIR UNE PROMESSE (suite)</grostitre>



<p>La relation entre des promesses peut varier. Parfois certaines sont interchangeables, alors qu'à d'autres moments elles sont toutes requises avant de pouvoir passer à l'étape&nbsp;suivante.</p>

<p>Afin de gérer ces relations, l'objet&nbsp;<incode>Promise</incode>&nbsp;est doté de plusieurs méthodes permettant de retourner à son tour des promesses&nbsp;<em>(promise)</em>. Voici deux de ces méthodes les plus&nbsp;communes.</p>


<grostitre>- all()</grostitre>

<p>La méthode&nbsp;<incode>Promise.all()</incode>&nbsp;retourne une promesse respectée lorsque l'ensemble des promesses lui étant passées en paramètres sont respectées. Sa valeur de résultat contient un tableau populé par le résultat de chacune de ses&nbsp;sous-promesses.</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> p1 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function"><span class="hljs-params">resolve</span> =&gt;</span> resolve(<span class="hljs-string">"Promesse 1"</span>));
<span class="hljs-keyword">const</span> p2 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function"><span class="hljs-params">resolve</span> =&gt;</span> resolve(<span class="hljs-string">"Promesse 2"</span>));
<span class="hljs-keyword">const</span> p3 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function"><span class="hljs-params">resolve</span> =&gt;</span> resolve(<span class="hljs-string">"Promesse 3"</span>));

<span class="hljs-built_in">Promise</span>.all([p1, p2, p3]).then(<span class="hljs-function"><span class="hljs-params">values</span> =&gt;</span> {
  <span class="hljs-built_in">console</span>.log(values);
});

<span class="hljs-comment">// ["Promesse 1", "Promesse 2", "Promesse 3"]</span></code></pre>




<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/all'>all()</doclink>

<dots></dots>

<grostitre>- any()</grostitre>
<p>Contrairement à la méthode&nbsp;<a rel="noopener noreferrer" href="#all">Promise.all()</a>, la méthode&nbsp;<incode>Promise.any()</incode>&nbsp;retourne une promesse respectée dès qu'une promesse lui étant passées en paramètres est respectée. Sa valeur de résultat contient le résultat de la sous-promesses la plus rapide à&nbsp;répondre.</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> p1 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 1"</span>)); <span class="hljs-comment">// 🐢 lente</span>
<span class="hljs-keyword">const</span> p2 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 2"</span>)); <span class="hljs-comment">// 🐇 rapide</span>
<span class="hljs-keyword">const</span> p3 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 3"</span>)); <span class="hljs-comment">// 🐕 moyenne</span>

<span class="hljs-built_in">Promise</span>.any([p1, p2, p3]).then(<span class="hljs-function">(<span class="hljs-params">valeur</span>) =&gt;</span> {
  <span class="hljs-built_in">console</span>.log(valeur); <span class="hljs-comment">// "Promesse 2"</span>
});</code></pre>

<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/any'>any()</doclink>


