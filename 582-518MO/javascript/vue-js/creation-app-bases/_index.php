<?php 
/**
 * @type     article
 * @title    Les bases d'une app VueJS
 * @icon     images/ico-vue.png
 * @abstract App, données, méthodes, classes dynamiques, conditions, boucles
 * @index 90
 */
?>
<grostitre>Création d'une App</grostitre>


<p>La première étape consiste à appeler la méthode <em>createApp</em> de l'objet global <em>Vue. </em>Celle-ci permet de créer une nouvelle instance d'une app Vue. Afin de pouvoir accéder à l'app ultérieurement, il est nécessaire de stocker le résultat dans une variable.</p>


Par exemple:
<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> app = Vue.createApp({});</code></pre>


<info>Cette variable peut porter n’importe quel nom, mais par convention elle est généralement nommée&nbsp;<em>"app"</em>.</info>

<br><br>
<h3 class="heading heading--h3" id="mount">mount</h3>

<p>Il faut ensuite associer l'app à une balise HTML afin de lui indiquer sa portée. Bref, seules cette balise et ses enfants pourront être contrôlées par l'app. Le reste du document n'existera pas à ses yeux.<br><br>Pour ce faire, l'app contenue dans la variable doit appeler sa méthode <em>mount</em> et lui passer en paramètre une chaine de caractères correspondant au sélecteur de la balise désirée. </p>


<info>Cette méthode accepte les mêmes sélecteurs que&nbsp;<a href="https://smnarnold.com/cours/javascript/queryselector">querySelector</a>.</info>

<br>
Par exemple, si la balise souhaitée a le id app:
<pre><code class="hljs javascript">app.mount(<span class="hljs-string">'#app'</span>);</code></pre>


<p>Si le résultat du <code>mount</code> est stocké dans une variable, il est possible d'y accéder afin de changer ses <a rel="noopener noreferrer" href="#donnees">données</a> ou encore d'appeler ses <a rel="noopener noreferrer" href="#methodes-et-evenements">méthodes</a>.</p>


Par exemple:
<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> vm = app.mount(<span class="hljs-string">'#app'</span>);</code></pre>

<br>
<doclink href='https://v3.vuejs.org/guide/instance.html#creating-an-application-instance'>createApp()</doclink>








<dots>Données</dots>


<p>Afin de définir le comportement de l'app, un objet contenant diverses propriétés doit lui être passé en paramètre. Parmi ces propriétés se trouve <code>data</code> contenant les données susceptibles de changer dans l'application.</p>

Par exemple, pour définir une valeur de nom, il est possible d'écrire:




<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> app = Vue.createApp({
  <span class="hljs-attr">data</span>: <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> {
      <span class="hljs-attr">firstName</span>: <span class="hljs-string">"Willy"</span>,
      <span class="hljs-attr">lastName</span>: <span class="hljs-string">"Wonka"</span>,
      <span class="hljs-attr">picture</span>: <span class="hljs-string">"willy-wonka.jpg"</span>
    }
  }
});</code></pre>


<p>Pour des raisons de lisibilité, il est cependant suggéré d'utiliser la nouvelle syntaxe ES6, soit:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> app = Vue.createApp({
  <span class="hljs-function"><span class="hljs-title">data</span>(<span class="hljs-params"></span>)</span> {
    <span class="hljs-keyword">return</span> {
      <span class="hljs-attr">firstName</span>: <span class="hljs-string">"Willy"</span>,
      <span class="hljs-attr">lastName</span>: <span class="hljs-string">"Wonka"</span>,
      <span class="hljs-attr">picture</span>: <span class="hljs-string">"willy-wonka.jpg"</span>
    }
  }
});</code></pre>


<p><code>data</code> est donc une fonction retournant un objet constitué dans ce cas-ci des propriétés: <code>firstName</code>, <code>lastName</code> et <code>picture</code>.</p>

<doclink href='https://v3.vuejs.org/guide/data-methods.html#data-properties'>Data</doclink>
<br>
<br>

<h3 class="heading heading--h3" id="Interpolations">Interpolations</h3>

<p>Une fois, les données définies, il est possible d'y faire référence à l'aide de moustaches {<code>{ ... }</code>} <em>(doubles accolades)</em>. Leurs contenus, incluant les moustaches elles-mêmes, seront remplacés par la donnée qui lui est associée. Qui plus est, si la valeur de cette donnée vient à changer, celle-ci se mettra automatiquement à jour dans le HTML.</p>

Par exemple, le code suivant:

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  Salut {{ firstName }}
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>




Affichera en fait:
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  Salut Willy
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<alert><strong>Erreur fréquente</strong><br>les moustaches ne sont fonctionnelles qu’à l’intérieur de la balise HTML assignée à&nbsp;l’app.</alert>



<doclink href='https://v3.vuejs.org/guide/template-syntax.html#interpolations'>Interpolations</doclink>
<br><br>
<h3 class="heading heading--h3" id="Attributs">Attributs</h3>

<p>Les données peuvent aussi être insérées dans un attribut HTML <em>(class, src, alt, style, etc.)</em>. Cependant, les moustaches ne sont pas fonctionnelles dans ce contexte ❌. Il faut donc plutôt utiliser une directive <code>v-bind</code> en début d'attribut afin que son contenu se popule avec une donnée présente dans l'objet data.
</p>

<p>Par exemple, pour afficher l'image contenue dans la propriété <code>picture</code>:</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">v-bind:src</span>=<span class="hljs-string">"picture"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
<p>ou encore la syntaxe courte avec <code>:</code>:</p>
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"picture"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
<p>Si plusieurs données doivent être combinées dans le cadre d'un attribut, il est nécessaire d'utiliser un <a target="_blank" rel="noopener noreferrer" href="https://smnarnold.com/cours/javascript/litteraux-de-gabarits">littéraux de gabarit</a> afin de gérer la combinaison. </p>
<p>Par exemple, pour inscrire le prénom et le nom dans le <code>alt</code> d'une image:</p>
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"picture"</span> <span class="hljs-attr">:alt</span>=<span class="hljs-string">"`${firstName} ${lastName}`"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
<br><br>


<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="oNJKqxv" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/oNJKqxv">
  DEMO VueJS Données</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


<warning>Si un attribut est associé à une donnée dont la valeur équivaut à <code>null</code> ou
            <code>undefined</code>, l’attribut ne sera pas&nbsp;créé.</warning>

<doclink href='https://v3.vuejs.org/guide/template-syntax.html#attributes'>Attributs</doclink>





<dots></dots>
<grostitre>Méthodes et Événements</grostitre>


<p>La propriété <code>methods</code> dans une app Vue est un objet contenant différentes méthodes pouvant être appelées. Ces méthodes peuvent avoir accès aux données contenues dans <code>data</code> via <code>this</code> et les altérer au besoin.</p>

<p>Par exemple, la méthode <code>showActor</code> révélant l'acteur derrière le personnage:</p>

<pre><code class="hljs javascript"><span class="hljs-keyword">const</span> app = Vue.createApp({
  <span class="hljs-function"><span class="hljs-title">data</span>(<span class="hljs-params"></span>)</span> {
    <span class="hljs-keyword">return</span> {
      <span class="hljs-attr">firstName</span>: <span class="hljs-string">"Willy"</span>,
      <span class="hljs-attr">lastName</span>: <span class="hljs-string">"Wonka"</span>,
      <span class="hljs-attr">picture</span>: <span class="hljs-string">"willy-wonka.jpg"</span>
    }
  },
  <span class="hljs-attr">methods</span>: {
    <span class="hljs-function"><span class="hljs-title">showActor</span>(<span class="hljs-params"></span>)</span> {
      <span class="hljs-built_in">this</span>.firstName = <span class="hljs-string">"Timothée"</span>;
      <span class="hljs-built_in">this</span>.lastName = <span class="hljs-string">"Chalamet"</span>;
      <span class="hljs-built_in">this</span>.picture = <span class="hljs-string">"<thead></thead>timothee-chalamet.jpg"</span>
    }
  }
});</code></pre>

<p>Ainsi, lorsque la méthode <code>showActor</code> est appelée, toutes les occurrences de <code>firstName</code> et <code>lastName</code> sont remplacées par <em>Tom</em> et <em>Hanks</em>.</p>





<br><br>

<h3 class="heading heading--h3" id="v-on">v-on</h3>

<p>Pour appeler une méthode, il faut ajouter un événement sur une balise dans l'app. </p>
Par exemple, pour qu'un bouton appelle la méthode <code>showActor()</code>:

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  Salut {{ firstName }}
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">v-on:click</span>=<span class="hljs-string">"showActor()"</span>&gt;</span>Révéler l'acteur<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>
<br><br>


ou encore la syntaxe courte avec <code>@</code>:
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"app"</span>&gt;</span>
  Salut {{ firstName }}
  <span class="hljs-tag">&lt;<span class="hljs-name">button</span> @<span class="hljs-attr">click</span>=<span class="hljs-string">"showActor()"</span>&gt;</span>Révéler l'acteur<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<br>
<p class="codepen" data-height="520" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="mdaNxGW" data-user="tim-momo" style="height: 520px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdaNxGW">
  DEMO VueJS - Méthodes</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br><br>


<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/vue/tableau-nba" target="_blank" class="exercice-card__title">
            Tableau&nbsp;NBA
        </a>

        <p class="exercice-card__description">Pour cet exercice, vous devrez rendre dynamique à l’aide de Vue le tableau
            indicateur d’un match de la NBA opposant les Raptors de&nbsp;Toront...</p>
    </div>
</aside>


<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/vue/cheese-kanye-says" target="_blank" class="exercice-card__title">
            Cheese Kanye&nbsp;Says
        </a>

        <p class="exercice-card__description">Dans le cadre de cet exercice, vous devrez mettre à jour la citation de
            Kanye West affichée à l’écran par une autre célèbre phrase de&nbsp;son...</p>
    </div>
</aside>


<doclink href='https://v3.vuejs.org/guide/events.html#listening-to-events'>Event Handling</doclink>







<dots></dots>
<grostitre>Classes dynamiques</grostitre>
<p>Il est fréquent qu'une classe doit-être ajouté ou retiré à un élément afin de refléter une action commise par un usager. Pour ce faire, Vue permet de passer un objet à un attribut. Cet objet doit contenir une propriété correspondant au nom de la classe souhaitée et comme valeur une donnée ou encore une expression. Ainsi, si cette valeur est évaluée à <code>true</code>, la classe est ajoutée et à l'opposée si elle est évaluée à <code>false</code> elle est retirée.</p>
<p>Par exemple, pour ajouter la classe <em>orange</em> lorsque la donnée <em>isOrange</em> est équivalente à <code>true</code>:</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"picture"</span> <span class="hljs-attr">:class</span>=<span class="hljs-string">"{orange: isOrange}"</span>&gt;</span></code></pre>

<br>
<p class="codepen" data-height="500" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="mdaNLbB" data-user="tim-momo" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdaNLbB">
  DEMO VueJS - Méthodes</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>

<p>Si une classe contenant des caractères spéciaux doit être ajoutée, il sera nécessaire de l'entourer de guillemets.</p>

<p>Par exemple, une classe avec un trait d'union:</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"picture"</span> <span class="hljs-attr">:class</span>=<span class="hljs-string">"{'is-orange': isOrange}"</span>&gt;</span></code></pre>

<info>En cas de doute, il est possible de toujours utiliser des guillemets, même si aucun caractère spécial n’est&nbsp;présent.</info>



<br><br>

<h3 class="heading heading--h3" id="Multiple classes dynamiques">Multiple classes dynamiques</h3>

<p>Puisqu'un objet est utilisé, il est possible d'ajouter plusieurs classes dynamiques simplement en les séparant par
    une virgule.</p>
Par exemple:
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"picture"</span> <span class="hljs-attr">:class</span>=<span class="hljs-string">"{orange: isOrange, big: isBig}"</span>&gt;</span></code></pre>



<br><br>

<h3 class="heading heading--h3" id="Combinaison avec des classes statiques">Combinaison avec des classes statiques</h3>

<p>Si certaines classes doivent être statiques <em>(ne jamais changer)</em>, alors que certaines doivent être dynamiques <em>(pouvoir changer)</em>, il est nécessaire d'utiliser deux attributs <code>class</code>. Un 1<sup>er</sup> sans <code>v-bind</code> ou <code>:</code> pour les classes statiques et un 2<sup>e</sup> avec pour les classes dynamiques. Ces deux attributs seront ensuite combinés par Vue.</p>


Par exemple:
<pre><code class="hljs javascript">&lt;img :src=<span class="hljs-string">"picture"</span> <span class="hljs-class"><span class="hljs-keyword">class</span></span>=<span class="hljs-string">"media"</span> :<span class="hljs-class"><span class="hljs-keyword">class</span></span>=<span class="hljs-string">"{orange: isOrange}"</span>&gt;</code></pre>
<p>Produira le code suivant si la valeur de <em>isOrange</em> est <code>true</code>:</p>
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"willy-wonka.jpg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"media orange"</span>&gt;</span></code></pre>

<br><br>
<doclink href='https://v3.vuejs.org/guide/class-and-style.html#class-and-style-bindings'>Class &amp; Style Bindings</doclink>






<dots></dots>
<grostitre>Rendu conditionnel</grostitre>

<p>Certains éléments sont pertinents à afficher uniquement lorsqu'ils contiennent une valeur.</p>

<p>Par exemple, une bulle permettant d'afficher la date de naissance d'une personne n'est désirable que s'il y a une date à afficher. Si cette information n'est pas fournie, avoir une bulle vide est indésirable:</p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"bubble"</span> <span class="hljs-attr">v-if</span>=<span class="hljs-string">"birth"</span>&gt;</span>{{ birth }}<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<br>

<p class="codepen" data-height="700" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="OJrKZbw" data-user="tim-momo" style="height: 700px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJrKZbw">
  DEMO VueJS | v-if</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<doclink href='https://v3.vuejs.org/guide/conditional.html'>Rendu conditionnel</doclink>





<dots></dots>
<grostitre>Boucle</grostitre>
<p>Vue permet de boucler sur un tableau d'objets grâce à la directive <code>v-for</code>. Pour ce faire, il faut spécifier le nom temporaire que l'on souhaite attribuer à chaque objet dans le tableau et le tableau dans lequel ce trouve ces objets.</p>

<p>Par exemple, il est possible d'accéder à chaque rôle se trouvant dans le tableau <code>rolesArray</code>:</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">v-for</span>=<span class="hljs-string">"role in rolesArr"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"role.picture"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<p>Attention par la suite de spécifier si la propriété désirée est enfant de <code>data</code> ou du rôle courant dans la boucle en la préfixant par <code>role</code>.</p>
<p class="codepen" data-height="800" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="abPeGqp" data-user="tim-momo" style="height: 800px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/abPeGqp">
  DEMO VueJS | boucle</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br><br>
<h3 class="heading heading--h3" id="Index">Index</h3>

<p>Afin d'obtenir l'index courant dans une boucle <code>v-for</code>, il est suffit d'ajouter un 2e paramètre dans la directive. Puisque deux paramètres sont présents, il est nécessaire de les grouper dans entre parenthèses.</p>

Par exemple:
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">v-for</span>=<span class="hljs-string">"(role, index) in rolesArr"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">:src</span>=<span class="hljs-string">"role.picture"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></code></pre>

<p class="codepen" data-height="500" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="GRPVGPg" data-user="tim-momo" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/GRPVGPg">
  DEMO VueJS | boucle</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<br><br>
<h3 class="heading heading--h3" id="Combinaison avec des événements">Combinaison boucle avec événements</h3>

<p>Il est possible de combiner une boucle avec des <a rel="noopener noreferrer" href="#methodes-et-evenements">événements</a> sans problème, simplement en spécifiant en paramètre à la méthode appelée l'objet devant être altéré.</p>
<br>
<p class="codepen" data-height="500" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="oNJKyOO" data-user="tim-momo" style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/oNJKyOO">
  DEMO VueJS | boucle index</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<warning>Il ne faut<a href="https://v3.vuejs.org/style-guide/#avoid-v-if-with-v-for-essential"> jamais utiliser <code>v-if</code> sur un élément ayant&nbsp;<code>v-for</code></a>.</warning>
<br>
<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/vue/cote-ouest-vs-est" target="_blank" class="exercice-card__title">
            Côte Ouest vs&nbsp;Est
        </a>

        <p class="exercice-card__description">Dans les années 90, une rivalité opposa les rappeurs de la côte ouest
            Américaine 🇺🇸 à ceux de la côte est. Afin d’afficher quel rappeur&nbsp;a...</p>
    </div>

</aside>



<br><br>

<doclink href='https://v3.vuejs.org/guide/list.html'>Rendu de liste</doclink>





<dots></dots>
<grostitre>Alternatives à VueJS</grostitre>
<ul>
    <li>
        <a target="_blank" rel="noopener noreferrer" href="https://fr.reactjs.org/">React</a>
    </li>
    <li>
        <a target="_blank" rel="noopener noreferrer" href="https://svelte.dev/">Svelte</a>
    </li>
    <li>
       <a target="_blank" rel="noopener noreferrer" href="https://angular.io/">Angular</a>
    </li>
    <li>
     <a target="_blank" rel="noopener noreferrer" href="https://backbonejs.org/">Backbone</a>
    </li>
    <li>
       Etc.
    </li>
</ul>