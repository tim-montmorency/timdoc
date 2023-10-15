<?php 
/**
 * @type     article
 * @title    Promesses JavaScript
 * @icon     images/ico-promesse-js.png
 * @abstract Représentant complétion ou échec d'une opération asyncrone
 * @index 99
 */
?>
<p>Une promesse, ou en anglais&nbsp;<em>promise</em>, consiste en un engagement à faire quelque chose. Par exemple, un collègue peut promettre de remettre sa partie d’un travail d’ici la fin de la&nbsp;semaine.</p>

<p>Le résultat d’une telle promesse n’est pas immédiatement disponible. Il faut se montrer patient et attendre que la promesse soit complétée. Par exemple, attendre que le collègue remette sa partie, soit: jeudi, vendredi, samedi ou encore&nbsp;dimanche.</p>

<p>Une promesse est faite dans le but d’être respectée. Donc si le collègue en question promet de remettre sa partie pour une date X, c’est qu’il est confiant de pouvoir respecter son engagement et lorsque ce sera chose faite, vous pourrez alors jumeler vos&nbsp;parties.</p>

<p>Dans de rares occasions, une promesse peut être brisée. Un contretemps pourrait par exemple empêcher ledit collègue de remettre sa partie. Vous, vous tournerez alors vers un plan&nbsp;B.</p>

<p>Les&nbsp;<code>Promises</code>&nbsp;en JavaScript fonctionnent sur le même principe. À défaut de pouvoir répondre immédiatement une fonction peut retourner une promesse. Cette approche est particulièrement utile lorsque la fonction en question contacte un serveur externe, puisque son délai de réponse peut&nbsp;varier.</p><p>Si la promesse est respectée, la méthode&nbsp;<code>.then()</code>&nbsp;est ensuite appelée et la valeur de la réponse lui est passée en&nbsp;paramètre.</p>


<p>Si la promesse est brisée et qu’une méthode&nbsp;<code>.catch()</code>&nbsp;est présente, elle est appelée et un message d’erreur lui est&nbsp;envoyé.</p><p>Bien qu’il soit possible de faire et de recevoir des promesses en JavaScript, il est plus fréquent d’en&nbsp;recevoir.</p>






<dots></dots>
<grostitre>new Promise</grostitre>
<p>Le code new Promise() permet de créer une promesse. Cette promesse est en fait un objet contenant une fonction acceptant deux&nbsp;paramètres.</p>


<ol start="1">
    <li>Le premier correspond au nom d'une fonction à appeler lorsque la promesse est&nbsp;respectée.</li>

    <li>Le deuxième au nom de la fonction à appeler lorsqu'elle est&nbsp;brisée.</li>
 </ol>

<p>Par exemple, la promesse suivante 👇 appelle la fonction&nbsp;<code>resolve</code>&nbsp;lorsqu'elle est respectée et&nbsp;<code>reject</code>&nbsp;lorsqu'elle est brisée. La valeur du retour dans les deux cas est passée en&nbsp;paramètre.</p>


<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> promesse = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve, reject</span>) =&gt;</span> {
  <span class="hljs-keyword">const</span> respectPromesse = <span class="hljs-literal">true</span>;

  <span class="hljs-keyword">if</span> (respectPromesse === <span class="hljs-literal">true</span>) {
    resolve(<span class="hljs-string">"Promesse respectée"</span>);
  } <span class="hljs-keyword">else</span> {
    reject(<span class="hljs-string">"Promesse brisée"</span>);
  }
});</code></pre>


<p>Dans le cadre de cette démonstration, la promesse sera toujours&nbsp;respectée.</p><p>Cependant, un exemple plus concret serait le cas d'un service tentant de répondre à une demande d'informations. Si les informations sont trouvées, la fonction assignée au respect de la promesse est appelée. Si le délai imparti avant de trouver la réponse est dépassé, la fonction assignée au bris de promesse est&nbsp;appelée.</p>

<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise'>Promise</doclink>
<doclink href='https://www.w3schools.com/js/js_promise.asp'>Promise</doclink>

<dots></dots>


<p>Pour obtenir le résultat d'une promesse, il est&nbsp;<strong>impossible d'appeler directement la promesse</strong>. </p>


Par exemple, le code&nbsp;suivant:

<pre><code class="hljs javascript"><span class="hljs-built_in">console</span>.log(promesse); <span class="hljs-comment">// [objet Promise] {}</span></code></pre>

<p>retournerait un message indiquant qu'il s'agit d'un objet de type&nbsp;<code>Promise</code>&nbsp;et non la valeur contenu dans la&nbsp;promesse.</p>









<dots></dots>
<grostitre>then() ✅</grostitre>
        

<p>Si la promesse est respectée, une méthode&nbsp;<code>.then()</code>&nbsp;est appelée et la valeur lui est passée en&nbsp;paramètre.</p>

Par exemple:
<pre><code class="hljs javascript">promesse
  .then(<span class="hljs-function"><span class="hljs-params">valeur</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(valeur));
<span class="hljs-comment">// "Promesse respectée"</span></code></pre>


<br><br>

<p>Une méthode&nbsp;<code>.then()</code>&nbsp;retourne elle aussi une promesse. Cette promesse peut donc à son tour avoir un&nbsp;<code>.then()</code>&nbsp;et ainsi enchainer de multiple&nbsp;<code>.then()</code>&nbsp;un à la suite de&nbsp;l'autre.</p>

Par exemple:
<pre><code class="hljs javascript">promesse
  .then(<span class="hljs-function"><span class="hljs-params">value</span> =&gt;</span> <span class="hljs-string">`<span class="hljs-subst">${value}</span>, oh oui!!!`</span>)
  .then(<span class="hljs-function"><span class="hljs-params">msg</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(msg)); <span class="hljs-comment">// "Promesse respectée, oh oui!!!"</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/then'>then()</doclink>


<dots></dots>
<grostitre>catch() 🚫</grostitre>

<p>Si la promesse est brisée et qu'une méthode&nbsp;<code>.catch()</code>&nbsp;est présente, cette dernière est appelée et la valeur lui est passée en&nbsp;paramètre.</p>

Par exemple:
<pre><code class="hljs javascript">promesse
  .catch(<span class="hljs-function"><span class="hljs-params">error</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(error)); <span class="hljs-comment">// "Promesse brisée"</span></code></pre>

<br>
  <doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/catch'>catch()</doclink>




<dots></dots>
<grostitre>Promesse intermédiaire</grostitre>
<p>(si on a le temps)</p>



<grostitre>- finally()</grostitre>
<p>Si une méthode&nbsp;<code>.finally()</code>&nbsp;est présente, celle-ci est appelée dès que la promesse est complétée, peu importe son statut qu'elle soit respectée ou&nbsp;brisée.</p>



Par exemple:
<pre><code class="hljs javascript">promesse
  .finally(<span class="hljs-function">() =&gt;</span> <span class="hljs-built_in">console</span>.log(<span class="hljs-string">"Promesse complétée"</span>));</code></pre>


<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/finally'>finally()</doclink>


<br><br><br>

Dans un exemple concret, tout mis ensemble donnerait&nbsp;ceci:

<pre><code class="hljs javascript">promesse
  .then(<span class="hljs-function"><span class="hljs-params">value</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(value))
  .catch(<span class="hljs-function"><span class="hljs-params">error</span> =&gt;</span> <span class="hljs-built_in">console</span>.log(error))
  .finally(<span class="hljs-function">() =&gt;</span> <span class="hljs-built_in">console</span>.log(<span class="hljs-string">"Promesse complétée"</span>));

<span class="hljs-comment">// "Promesse respectée", "Promesse complétée"</span></code></pre>
<br><br>



<p>La relation entre des promesses peut variée. Parfois certaines sont interchangeables, alors qu'à d'autres moments elles sont toutes requises avant de pouvoir passer à l'étape&nbsp;suivante.</p>

<p>Afin de gérer ces relations, l'objet&nbsp;<code>Promise</code>&nbsp;est doté de plusieurs méthodes permettant de retourner à son tour des promesses&nbsp;<em>(promise)</em>. Voici deux de ces méthodes les plus&nbsp;communes.</p>





<dots></dots>
<grostitre>- all()</grostitre>

<p>La méthode&nbsp;<code>Promise.all()</code>&nbsp;retourne une promesse respectée lorsque l'ensemble des promesses lui étant passées en paramètres sont respectées. Sa valeur de résultat contient un tableau populé par le résultat de chacune de ses&nbsp;sous-promesses.</p>

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
<p>Contrairement à la méthode&nbsp;<a rel="noopener noreferrer" href="#all">Promise.all()</a>, la méthode&nbsp;<code>Promise.any()</code>&nbsp;retourne une promesse respectée dès qu'une promesse lui étant passées en paramètres est respectée. Sa valeur de résultat contient le résultat de la sous-promesses la plus rapide à&nbsp;répondre.</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> p1 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 1"</span>)); <span class="hljs-comment">// 🐢 lente</span>
<span class="hljs-keyword">const</span> p2 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 2"</span>)); <span class="hljs-comment">// 🐇 rapide</span>
<span class="hljs-keyword">const</span> p3 = <span class="hljs-keyword">new</span> <span class="hljs-built_in">Promise</span>(<span class="hljs-function">(<span class="hljs-params">resolve</span>) =&gt;</span> resolve(<span class="hljs-string">"Promesse 3"</span>)); <span class="hljs-comment">// 🐕 moyenne</span>

<span class="hljs-built_in">Promise</span>.any([p1, p2, p3]).then(<span class="hljs-function">(<span class="hljs-params">valeur</span>) =&gt;</span> {
  <span class="hljs-built_in">console</span>.log(valeur); <span class="hljs-comment">// "Promesse 2"</span>
});</code></pre>

<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Promise/any'>any()</doclink>


<dots></dots>
<grostitre>Résumé vidéo</grostitre>
  <a href="https://www.youtube.com/watch?v=RvYYCGs45L4" class="youtube__wrapper" data-module="Youtube">
  
    <div class="youtube__player" id="youtube-player-8dc8c580-6bb2-11ee-a2b9-ed597c799f44">
        <iframe id="youtube-8dc8c580-6bb2-11ee-a2b9-ed597c799f44" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="JavaScript Promise in 100 Seconds" width="640" height="360" src="https://www.youtube.com/embed/RvYYCGs45L4?enablejsapi=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;origin=https%3A%2F%2Fsmnarnold.com&amp;widgetid=1" tabindex="-1"></iframe>
    </div>

  </a>

  
