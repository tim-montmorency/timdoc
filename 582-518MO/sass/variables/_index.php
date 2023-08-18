<?php 
/**
 * @type     article
 * @title    Variable
 * @icon     images/icon.png
 * @abstract abc
 * @index 98
 */
?>

<p>Les variables SCSS sont simples. Il suffit d'attribuer un nom et de le préfixer avec le symbole <code>$</code> afin
    de créer une variable. Le délimiteur <code>:</code> permets ensuite de séparer le nom de la variable de sa valeur.
</p>
<p>Par exemple, pour définir une variable costume contenant la couleur rouge 🔴:</p>
<pre><code class="hljs php"><span class="hljs-variable">$costume</span>: red;</code></pre>




<dots></dots>
<grostitre>Contexte (scope)</grostitre>
<p>Une variable SCSS définie à l'extérieur d'un sélecteur CSS est considérée comme étant <strong>globale</strong>.
    Autrement dit, elle peut être utilisée partout dans son fichier. Tandis que les variables SCSS définies à
    l'intérieur d'un sélecteur CSS sont considérées comme étant <strong>locales</strong> et ne peuvent être accédées
    qu'à l'intérieur des accolades <em>{}</em> les encapsulant.</p>
<p>Par exemple:</p>
<pre><code class="hljs php"><span class="hljs-variable">$costume</span>: red; <span class="hljs-comment">// Variable globale</span>

.spider-man {
  <span class="hljs-variable">$logo</span>: blue; <span class="hljs-comment">// Variable locale</span>
  
  background-color: <span class="hljs-variable">$costume</span>; <span class="hljs-comment">// ✅</span>
  color: <span class="hljs-variable">$logo</span>; <span class="hljs-comment">// ✅</span>
}

.deadpool {
  background-color: <span class="hljs-variable">$costume</span>; <span class="hljs-comment">// ✅</span>
  color: <span class="hljs-variable">$logo</span>; <span class="hljs-comment">// ❌</span>
}</code></pre>
<h3 class="heading heading--h3" id="Écraser une variable">Écraser une variable</h3>

<p>En donnant un contexte plus spécifique, il est possible d'écraser la valeur d'une&nbsp;variable.</p>
<p>Par&nbsp;exemple:</p>
<pre><code class="hljs php"><span class="hljs-variable">$costume</span>: red; <span class="hljs-comment">// 🔴</span>

.spider-man {
  background-color: <span class="hljs-variable">$costume</span>; <span class="hljs-comment">// 🔴</span>
}

.green-goblin {
  <span class="hljs-variable">$costume</span>: green; <span class="hljs-comment">// 🟢</span>

  background-color: <span class="hljs-variable">$costume</span>; <span class="hljs-comment">// 🟢</span>
}</code></pre>
<p>Dans cet exemple, la variable&nbsp;<code>$costume</code>&nbsp;à la valeur&nbsp;<code>red</code>&nbsp;dans le contexte
    globale. Ainsi, si un personnage n'écrase pas cette variable, son costume sera automatiquement rouge 🔴. Tandis que
    le sélecteur&nbsp;<code>.green-goblin</code>&nbsp;redéfinit la valeur de cette variable dans son propre contexte
    à&nbsp;<code>green</code> 🟢.</p>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>Même si un personnage est défini après <code>.green-goblin</code>, s’il utilise la variable
            <code>$costume</code>, celle-ci retournera <code>red</code>, car la valeur <code>green</code> n’est
            retournée qu’à l’intérieur du contexte du sélecteur&nbsp;<code>.green-goblin</code>.</p>

    </div>
</aside>





<dots></dots>
<grostitre>Variables CSS</grostitre>
<p>À priori, les variables CSS et les variables SCSS peuvent apparaitre interchangeables. Cependant, elles diffèrent sur
    certains points importants. </p>
<p>Les variables SCSS sont des variables dites compilées. C'est à dire à dire qu'une fois converties en CSS, il n'y a
    plus aucune trace de la variable en soi puisqu'elle est remplacée par sa valeur. Tandis que les variables CSS
    existent en tout temps ce qui permet de modifier une valeur directement dans le navigateur au besoin.</p>
<p>Par exemple, si vous inspecter la balise&nbsp;<code>&lt;html&gt;</code>&nbsp;de cette page. Vous remarquerez que
    plusieurs variables CSS sont définies. Vous pouvez remplacer leurs valeurs et voir les changements
    s'appliquer&nbsp;immédiatement dans la page. Tandis qu'aucune trace de variable SCSS n'est visible. </p>
<h3 class="heading heading--h3" id="Pourquoi avoir inventé les variables SCSS?">Pourquoi avoir inventé les variables
    SCSS?</h3>

<p>Il faut faire un saut dans le passé afin de bien comprendre. Les variables Sass furent inventées en 2006. À cette
    époque, ce fut une grande avancée dans le monde du CSS, car aussi étrange que cela puisse paraître, les variables
    CSS natives n'existaient pas encore. Ces dernières furent inventées quelques années plus tard. Leur implémentation
    dans les différents navigateurs requit aussi quelques années de patience. Si bien que leur utilisation réelle ne
    commença qu'environ 10 ans après les variables Sass.</p>
<p></p>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://sass-lang.com/documentation/variables" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">variables</a>
            </li>

        </ul>
    </div>
</div>