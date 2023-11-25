<?php 
/**
 * @type     article
 * @title    SFC
 * @icon     images/ico-vue.png
 * @abstract Single File Components
 * @index 70
 */
?>
<p>Les SFC <em>(Single File Components)</em>, ou composantes monofichiers en français, sont des fichiers permettant de regrouper à la fois un template HTML, la logique JavaScript et les styles CSS d’une composante à l’intérieur d’un seul et même fichier. Ce fichier est par la suite converti par un <a rel="noopener noreferrer" href="#compilateurs-sfc">compilateur SFC</a> en JavaScript et CSS standards pouvant être interprétés par les navigateurs.</p>

<p>Cette approche permet de découper un site complexe en composantes indépendantes et plus simples.</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>{{ msg }}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">script</span>&gt;</span><span class="javascript">
<span class="hljs-keyword">export</span> <span class="hljs-keyword">default</span> {
  <span class="hljs-function"><span class="hljs-title">data</span>(<span class="hljs-params"></span>)</span> {
    <span class="hljs-keyword">return</span> {
      <span class="hljs-attr">msg</span>: <span class="hljs-string">'Bonjour!'</span>
    }
  }
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.menu</span> {
  <span class="hljs-attribute">background</span>: blue;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span></code></pre>


<info>Ces fichiers utilisent l’extension&nbsp;<code>*.vue</code>.</info>
<doclink href='https://vuejs.org/api/sfc-spec.html'>SFC</doclink>

<dots></dots>
<grostitre>Importation</grostitre>
<p>Les composantes SFC peuvent être importées dans un projet comme tout module JavaScript importé via <a target="_blank" rel="noopener noreferrer" href="/cours/javascript/npm">NPM</a>.</p>



<pre><code class="hljs javascript"><span class="hljs-keyword">import</span> Menu <span class="hljs-keyword">from</span> <span class="hljs-string">'./components/Menu.vue'</span></code></pre>


<warning>La norme veut que les noms de modules commencent par une&nbsp;majuscule.</warning>



<dots></dots>
<grostitre>Style scoped</grostitre>
<p>Dans le cadre d’un fichier SFC, la balise style peut se voir avoir l’attribut <code>scoped</code>. Cet attribut indique que les styles en question ne peuvent s’appliquer qu’aux éléments à l’intérieur de cette composante uniquement.</p>


<p>Pour ce faire, une clé est attribuée aux éléments HTML sous forme d'un attribut <code>data-v-xxxxxxx</code>. Toutes les règles de styles associées à cette composante se basent alors sur cette clé, limitant ainsi leur portée à cette composante uniquement.</p><p>Par exemple:</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">style</span> <span class="hljs-attr">scoped</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.menu</span> {
  <span class="hljs-attribute">background</span>: blue;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span></code></pre><p>Sera converti en:</p><pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"menu"</span> <span class="hljs-attr">data-v-f3f3eg9</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>

<span class="hljs-tag">&lt;<span class="hljs-name">style</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.menu</span><span class="hljs-selector-attr">[data-v-f3f3eg9]</span> {
  <span class="hljs-attribute">background</span>: blue;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span></code></pre><p>Une composante SFC peut aussi avoir plus d'une balise <code>&lt;style&gt;</code>. Notamment lorsque des styles devraient être globaux et que d'autres devraient être limités à la composante uniquement.</p><p>Par exemple:</p><pre><code class="hljs xml">/* Styles appliqués à tout le site */
<span class="hljs-tag">&lt;<span class="hljs-name">style</span> <span class="hljs-attr">scoped</span>&gt;</span><span class="css">
* {
  <span class="hljs-attribute">box-sizing</span>: border-box;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span>

/* Styles appliqués à cette composante uniquement */
<span class="hljs-tag">&lt;<span class="hljs-name">style</span> <span class="hljs-attr">scoped</span>&gt;</span><span class="css">
<span class="hljs-selector-class">.menu</span> {
  <span class="hljs-attribute">background</span>: blue;
}
</span><span class="hljs-tag">&lt;/<span class="hljs-name">style</span>&gt;</span> </code></pre>
          <div class="tags-list">
  <div class="tags-list__wrapper">
    <ul class="tags-list__list">
                  <li class="tags-list__item">
                    <a href="https://v3.vuejs.org/api/sfc-style.html" target="_blank" rel="noopener noreferrer" class="tags-list__link tags-list__link--auto">style scoped</a>
                  </li>
          
    </ul>
  </div>
</div>


<dots></dots>
<grostitre>Compilateurs SFC</grostitre>
<ul>
    <li><p><a target="_blank" rel="noopener noreferrer" href="/cours/autres/vite">Vite</a></p></li><li><p><a target="_blank" rel="noopener noreferrer" href="https://cli.vuejs.org/">Vue CLI</a></p></li><li><p><a target="_blank" rel="noopener noreferrer" href="https://webpack.js.org/">Webpack</a></p></li>
</ul>



    
  