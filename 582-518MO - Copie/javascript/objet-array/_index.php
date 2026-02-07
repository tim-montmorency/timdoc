<?php 
/**
 * @type     article
 * @title    Objet Array
 * @icon     images/icon.svg
 * @abstract Permet de manipuler les tableaux en JavaScript.
 * @index    80
 * @ref      web/javascript
 */
?>
<p>L'objet global <code>Array</code>, grâce à ses multiples méthodes, permet de manipuler les tableaux&nbsp;<em>(array)</em>. Dans cet article, nous allons regarder les manipulations de bases les plus&nbsp;courantes.</p>

<dots></dots>

<grostitre>isArray()</grostitre>
<p>Retourne un booléen&nbsp;<em>(true/false)</em>&nbsp;indiquant si l'élément spécifié est bel et bien un&nbsp;tableau.</p>

<p>Par exemple:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];
<span class="hljs-built_in">Array</span>.isArray(yearsArr); <span class="hljs-comment">// true</span>

<span class="hljs-keyword">const</span> ex1 = <span class="hljs-string">"Chaine de caractères"</span>;
<span class="hljs-built_in">Array</span>.isArray(ex1); <span class="hljs-comment">// false</span>

<span class="hljs-keyword">const</span> ex2 = <span class="hljs-number">2010</span>;
<span class="hljs-built_in">Array</span>.isArray(ex2); <span class="hljs-comment">// false</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray'>isArray()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_isarray.asp'>isArray()</doclink>




<dots></dots>
<grostitre>includes()</grostitre>


<p>Retourne un booléan&nbsp;<em>(true/false)</em>&nbsp;indiquant si un élément est présent ou non dans un&nbsp;tableau.</p>

<p>Par exemple:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.includes(<span class="hljs-number">2010</span>); <span class="hljs-comment">// true</span>
yearsArr.includes(<span class="hljs-number">1995</span>); <span class="hljs-comment">// false</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/includes'>includes()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_includes_array.asp'>includes()</doclink>



<dots></dots>
<grostitre>find()</grostitre>
        
<p>Retourne le premier élément dans le tableau correspondant à une condition spécifique. Si aucun élément n'est trouvé,&nbsp;<code>undefined</code>&nbsp;est&nbsp;retourné.</p>

<p>Par exemple:</p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.find(<span class="hljs-function"><span class="hljs-params">year</span> =&gt;</span> year &gt; <span class="hljs-number">2000</span>); <span class="hljs-comment">// 2010</span>
yearsArr.find(<span class="hljs-function"><span class="hljs-params">year</span> =&gt;</span> year &gt; <span class="hljs-number">2020</span>); <span class="hljs-comment">// undefined</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/find'>find()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_find.asp'>find()</doclink>
     



<dots></dots>
<grostitre>findIndex()</grostitre>
<p>Retourne la position du premier élément dans le tableau correspondant à une condition spécifique. Si aucun élément n'est trouvé,&nbsp;<code>-1</code>&nbsp;sera&nbsp;retourné.</p><p>Par exemple:</p>



<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.findIndex(<span class="hljs-number">1990</span>); <span class="hljs-comment">// 0</span>
yearsArr.findIndex(<span class="hljs-number">2010</span>); <span class="hljs-comment">// 1</span>
yearsArr.findIndex(<span class="hljs-number">1995</span>); <span class="hljs-comment">// -1</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/findIndex'>findIndex()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_findindex.asp'>findIndex()</doclink>
         







<dots></dots>
<grostitre>sort()</grostitre>


<p>Trie les éléments d'un tableau. </p><p>Si une fonction est passée en paramètre, celle-ci boucle sur chaque élément du tableau et reçoit en paramètre l'élément courant <em>(a)</em> ainsi que le suivant <em>(b)</em>. Si cette fonction retourne un élément égal ou inférieur à 0, l'élément courant <em>(a)</em> est placé avant l'élément suivant <em>(b)</em>. À l'opposé, si le résultat est supérieur à 0. l'élément suivant <em>(b)</em> est placé avant l'élément courant <em>(a)</em>.</p>

<p>Si aucune fonction n'est passée en paramètre, les éléments sont triés en ordre croissant:</p>



<h3 class="heading heading--h3" id="Croissant">Croissant</h3>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.sort(); <span class="hljs-comment">// [1980, 1990, 2010];</span></code></pre>



<h3 class="heading heading--h3" id="Décroissant">Décroissant</h3>

<p>Pour trier en ordre décroissant, il faut comparer la valeur de a et de b.</p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.sort(<span class="hljs-function">(<span class="hljs-params">a, b</span>) =&gt;</span> b - a); <span class="hljs-comment">// [2010, 1990, 1980]</span></code></pre><p>Lors du traitement du premier item dans le tableau, 1990 <em>(a)</em> est comparé à 2010 <em>(b)</em>. 2010 - 1990 = 20. Ce nombre est supérieur à 0, donc 2010 <em>(b)</em> est placé avant 1990 <em>(a)</em>. </p><p>Au tour de l'item suivant, 1990 est rendu le 2e item, donc 1990 <em>(a)</em> est comparé à l'élément suivant 1980 <em>(b)</em>. 1980 - 1990 = -10. Ce nombre est inférieur à 0, donc 1990 <em>(a)</em> est placé avant 1980 <em>(b)</em>.</p>

<h3 class="heading heading--h3" id="Aléatoire">Aléatoire</h3>

<p>Pour mélanger un tableau, il faut interchanger de position l'élément courant avec le suivant de façon aléatoire. Pour ce faire, il suffit que la fonction passée à <code>sort()</code> retourne la moitié du temps un nombre inférieur ou égal à 0 et l'autre un nombre supérieur. </p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.sort(<span class="hljs-function">() =&gt;</span> <span class="hljs-built_in">Math</span>.random() - <span class="hljs-number">0.5</span>);</code></pre>


<info>

 <p>L’élément courant <em>(a)</em> et le suivant <em>(b)</em> sont disponibles si définis en paramètre, mais puisqu’ils ne sont pas utilisés, ils n’ont pas étés&nbsp;inclus.</p>

</info>

<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/sort'>sort()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_sort.asp'>sort()</doclink>


<dots></dots>
<grostitre>shift()</grostitre>

<p>Retire le premier élément du tableau et le&nbsp;retourne. Si le tableau est vide,&nbsp;<code>shift()</code>&nbsp;retournera&nbsp;<code>undefined</code>.</p><p>Par exemple:</p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];
<span class="hljs-keyword">const</span> firstYear = yearsArr.shift();

<span class="hljs-built_in">console</span>.log(firstYear) <span class="hljs-comment">// 1990</span>
<span class="hljs-built_in">console</span>.log(yearsArr) <span class="hljs-comment">// [2010, 1980]</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/shift'>shift()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_shift.asp'>shift()</doclink>




<dots></dots>
<grostitre>pop()</grostitre>
 <p>À l'opposé de&nbsp;<a rel="noopener noreferrer" href="#shift">shift()</a>,&nbsp;<code>pop()</code>&nbsp;retire le dernier élément du tableau et le&nbsp;retourne. Si le tableau est vide,&nbsp;<code>pop()</code>&nbsp;retournera&nbsp;<code>undefined</code>.</p><p>Par exemple:</p>
 
 
 <pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];
<span class="hljs-keyword">const</span> lastYear = yearsArr.pop();

<span class="hljs-built_in">console</span>.log(lastYear) <span class="hljs-comment">// 1980</span>
<span class="hljs-built_in">console</span>.log(yearsArr) <span class="hljs-comment">// [1990, 2010]</span></code></pre>

<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/pop'>pop()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_pop.asp'>pop()</doclink>



<dots></dots>
<grostitre>slice()</grostitre>
<p>Retourne un nouveau tableau constitué des éléments se trouvant entre un index de départ et un index de fin&nbsp;<em>(optionnel)</em>.</p>

<p>Par exemple, si seulement un index de départ est spécifié, le nouveau tableau sera constitué de l'élément à cet index et de tous ceux le&nbsp;suivant:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.slice(<span class="hljs-number">1</span>); <span class="hljs-comment">// [2010, 1980]</span></code></pre><p>Si l'index de départ et de fin est spécifié, le nouveau tableau sera constitué des éléments entre ces deux&nbsp;index:</p><pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];

yearsArr.slice(<span class="hljs-number">0</span>, <span class="hljs-number">2</span>); <span class="hljs-comment">// [1990, 2010]</span></code></pre>


<info>
    <p>L’élément à l’index de départ est inclus, tandis que l’élément à l’<strong>index de fin n’est pas&nbsp;inclus</strong>.</p>
</info>


<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/slice'>slice()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_slice_string.asp'>slice()</doclink>



<dots></dots>
<grostitre>concat()</grostitre>

<p>Retourne un nouveau tableau constitué des éléments d'un premier tableau et de ceux d'un&nbsp;deuxième.</p>

<p>Par exemple:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> yearsArr = [<span class="hljs-number">1990</span>, <span class="hljs-number">2010</span>, <span class="hljs-number">1980</span>];
<span class="hljs-keyword">const</span> extraYearsArr = [<span class="hljs-number">2000</span>, <span class="hljs-number">2020</span>];

yearsArr.concat(extraYearsArr); <span class="hljs-comment">// [1990, 2010, 1980, 2000, 2020]</span></code></pre>


<br>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/concat'>concat()</doclink>
<doclink href='https://www.w3schools.com/jsref/jsref_concat_array.asp'>concat()</doclink>




<!-- 

    <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209055752/https://smnarnold.com/exercices/javascript/objet-array-pizza" target="_blank" class="exercice-card__title">
        L'objet Array -&nbsp;Pizza
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devrez réaliser les différentes commandes des clients d’une pizzeria à l’aide de l’objet Array&nbsp;🍕.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209055752im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvb2JqZXQtYXJyYXktcGl6emEuanBn?w=620&amp;s=1f04ae3852b05a3b9f1eb9bcfa98f6ef" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209055752im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvb2JqZXQtYXJyYXktcGl6emEuanBn?w=310&amp;s=5fe3506152c4fa7154c4d9cf400d2592" media="(max-width: 575px)">
      <source srcset="/web/20231209055752im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvb2JqZXQtYXJyYXktcGl6emEuanBn?w=370&amp;s=cbfcfca5b826f65069b2119cfe749a05" media="(min-resolution: 2dppx)">
      <img src="/web/20231209055752im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvb2JqZXQtYXJyYXktcGl6emEuanBn?w=185&amp;s=29b77b0d63388d4b61cbd782791c6b2b" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
  
      -->
          
