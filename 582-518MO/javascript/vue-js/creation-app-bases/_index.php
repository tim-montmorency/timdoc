<?php 
/**
 * @type     article
 * @title    Les bases d'une app VueJS
 * @icon     ../images/icon.webp
 * @abstract App, données, méthodes, classes dynamiques, conditions, boucles
 * @index    90
 * @ref      web/cadriciels/vuejs
 */
?>
<grostitre>Création d'une App</grostitre>


<p>La première étape consiste à appeler la méthode <em>createApp</em> de l'objet global <em>Vue. </em>Celle-ci permet de créer une nouvelle instance d'une app Vue. Afin de pouvoir accéder à l'app ultérieurement, il est nécessaire de stocker le résultat dans une variable.</p>


<p>Par exemple:</p>


<highlight lang="javascript">const app = Vue.createApp({});</highlight>


<info>Cette variable peut porter n’importe quel nom, mais par convention elle est généralement nommée&nbsp;<em>"app"</em>.</info>

<br><br>
<h3 class="heading heading--h3" id="mount">mount</h3>

<p>Il faut ensuite associer l'app à une balise HTML afin de lui indiquer sa portée. Bref, seules cette balise et ses enfants pourront être contrôlées par l'app. Le reste du document n'existera pas à ses yeux.<br><br>Pour ce faire, l'app contenue dans la variable doit appeler sa méthode <em>mount</em> et lui passer en paramètre une chaine de caractères correspondant au sélecteur de la balise désirée. </p>


<info>Cette méthode accepte les mêmes sélecteurs que&nbsp;<a href="https://smnarnold.com/cours/javascript/queryselector">querySelector</a>.</info>

<p>Par exemple, si la balise souhaitée a le id app:</p>
<highlight lang="javascript">app.mount('#app');</highlight>


<p>Si le résultat du <incode>mount</incode> est stocké dans une variable, il est possible d'y accéder afin de changer ses <a rel="noopener noreferrer" href="#donnees">données</a> ou encore d'appeler ses <a rel="noopener noreferrer" href="#methodes-et-evenements">méthodes</a>.</p>

<p>Par exemple:</p>
<highlight lang="javascript">const vm = app.mount('#app');</highlight>

<br>
<doclink href="https://v3.vuejs.org/guide/instance.html#creating-an-application-instance">createApp()</doclink>




<dots></dots>
<grostitre>Données</grostitre>


<p>Afin de définir le comportement de l'app, un objet contenant diverses propriétés doit lui être passé en paramètre. Parmi ces propriétés se trouve <incode>data</incode>: une fonction retournant les données susceptibles de changer dans l'application.</p>



<p>Par exemple, pour définir une valeur de nom, il est possible d'écrire:</p>

<highlight lang="javascript">const app = Vue.createApp({
  data: function() {
    return {
      firstName: "Willy",
      lastName: "Wonka",
      picture: "willy-wonka.jpg"
    }
  }
});</highlight>


<p>Pour des raisons de lisibilité, il est cependant suggéré d'utiliser la nouvelle syntaxe ES6, soit:</p>

<highlight lang="javascript">const app = Vue.createApp({
  data() {
    return {
      firstName: "Willy",
      lastName: "Wonka",
      picture: "willy-wonka.jpg"
    }
  }
});</highlight>



<p><incode>data</incode> est donc une fonction retournant un objet constitué dans ce cas-ci des propriétés: <incode>firstName</incode>, <incode>lastName</incode> et <incode>picture</incode>.</p>

<doclink href="https://v3.vuejs.org/guide/data-methods.html#data-properties">Data</doclink>
<br>
<br>

<h3 class="heading heading--h3" id="Interpolations">Interpolation des données {{ }}</h3>

<p>Une fois, les données définies, il est possible d'y faire référence à l'aide de moustaches {<incode>{ ... }</incode>} <em>(doubles accolades)</em>. Leurs contenus, incluant les moustaches elles-mêmes, seront remplacés par la donnée qui lui est associée. Qui plus est, si la valeur de cette donnée vient à changer, celle-ci se mettra automatiquement à jour dans le HTML.</p>

Par exemple, le code suivant:
<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
  Salut { { firstName } }
&lt;/div&gt;</highlight>

<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>


<br><br>
Affichera en fait:

<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
  Salut Willy
&lt;/div&gt;</highlight>



<alert><strong>Erreur fréquente</strong><br>les moustaches ne sont fonctionnelles qu’à l’intérieur de la balise HTML assignée à&nbsp;l’app.</alert>



<doclink href="https://v3.vuejs.org/guide/template-syntax.html#interpolations">Interpolations</doclink>
<br><br>
<h3 class="heading heading--h3" id="Attributs">Attributs via v-bind: ou :</h3>

<p>Les données peuvent aussi être insérées dans un attribut HTML <em>(class, src, alt, style, etc.)</em>. Cependant, les moustaches ne sont pas fonctionnelles dans ce contexte ❌. Il faut donc plutôt utiliser une directive <incode>v-bind</incode> en début d'attribut afin que son contenu se popule avec une donnée présente dans l'objet data.
</p>

<p>Par exemple, pour afficher l'image contenue dans la propriété <incode>picture</incode>:</p>
<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
  &lt;img v-bind:src=&quot;picture&quot;&gt;
&lt;/div&gt;</highlight>



<p>ou encore la syntaxe courte avec <incode>:</incode>:</p>


<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
  &lt;img :src=&quot;picture&quot;&gt;
&lt;/div&gt;</highlight>



<p>Si plusieurs données doivent être combinées dans le cadre d'un attribut, il est nécessaire d'utiliser un <a target="_blank" rel="noopener noreferrer" href="https://smnarnold.com/cours/javascript/litteraux-de-gabarits">littéraux de gabarit</a> afin de gérer la combinaison. </p>

<p>Par exemple, pour inscrire le prénom et le nom dans le <incode>alt</incode> d'une image:</p>

<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
  &lt;img :src=&quot;picture&quot; :alt=&quot;`${firstName} ${lastName}`&quot;&gt;
&lt;/div&gt;</highlight>


<br><br>

<codepen id="oNJKqxv" tab="html,result" height="360"></codepen>

<warning>Si un attribut est associé à une donnée dont la valeur équivaut à <incode>null</incode> ou <incode>undefined</incode>, l’attribut ne sera pas&nbsp;créé.</warning>

<doclink href="https://v3.vuejs.org/guide/template-syntax.html#attributes">Attributs</doclink>





<dots></dots>
<grostitre>Méthodes et Événements</grostitre>


<p>La propriété <incode>methods</incode> dans une app Vue est un objet contenant différentes méthodes pouvant être appelées. Ces méthodes peuvent avoir accès aux données contenues dans <incode>data</incode> via <incode>this</incode> et les altérer au besoin.</p>

<p>Par exemple, la méthode <incode>showActor</incode> révélant l'acteur derrière le personnage:</p>

<highlight lang="javascript">const app = Vue.createApp({
  data() {
    return {
      firstName: "Willy",
      lastName: "Wonka",
      picture: "willy-wonka.jpg"
    }
  },
  methods: {
    showActor() {
      this.firstName = "Timothée";
      this.lastName = "Chalamet";
      this.picture = "timothee-chalamet.jpg"
    }
  }
});</highlight>




<p>Ainsi, lorsque la méthode <incode>showActor</incode> est appelée, toutes les occurrences de <incode>firstName</incode> et <incode>lastName</incode> sont remplacées par <em>Timothée</em> et <em>Chalamet</em>.</p>


<br><br>

<h3 class="heading heading--h3" id="v-on">v-on: ou @</h3>

<p>Pour appeler une méthode, il faut ajouter un événement sur une balise dans l'app. </p>
<p>Par exemple, pour qu'un bouton appelle la méthode <incode>showActor()</incode>:</p>

<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
Salut { { firstName } }
  &lt;button v-on:click=&quot;showActor()&quot;&gt;Révéler l&#39;acteur&lt;/button&gt;
&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
<br><br>

<p>ou encore la syntaxe courte avec <incode>@</incode>:</p>
<highlight lang="html">&lt;div id=&quot;app&quot;&gt;
Salut { { firstName } }
  &lt;button @click=&quot;showActor()&quot;&gt;Révéler l&#39;acteur&lt;/button&gt;
&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

<br><br><br>

<codepen id="mdaNxGW" tab="html,result" height="520"></codepen>

<br><br>



<exercice href="../../../exercices/vue-tableau-nba/"></exercice>
<exercice href="../../../exercices/vue-cheese-kanye-says/"></exercice>
<br>

<doclink href="https://v3.vuejs.org/guide/events.html#listening-to-events">Event Handling</doclink>







<dots></dots>
<grostitre>Classes dynamiques :class</grostitre>
<p>Il est fréquent qu'une classe doit-être ajoutée ou retirée à un élément afin de refléter une action commise par un usager. Pour ce faire, Vue permet de passer un objet à un attribut. Cet objet doit contenir une propriété correspondant au nom de la classe souhaitée et comme valeur une donnée ou encore une expression. Ainsi, si cette valeur est évaluée à <incode>true</incode>, la classe est ajoutée et à l'opposée si elle est évaluée à <incode>false</incode> elle est retirée.</p>

<p>Par exemple, pour ajouter la classe <em>orange</em> lorsque la donnée <em>isOrange</em> est équivalente à <incode>true</incode>:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{orange: isOrange}&quot;&gt;</highlight>


<br>

<codepen id="mdaNLbB" tab="html,result" height="500"></codepen>

<br>

<p>Si une classe contenant des caractères spéciaux doit être ajoutée, il sera nécessaire de l'entourer de guillemets.</p>

<p>Par exemple, une classe avec un trait d'union:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{&#39;is-orange&#39;: isOrange}&quot;&gt;</highlight>


<info>En cas de doute, il est possible de toujours utiliser des guillemets, même si aucun caractère spécial n’est&nbsp;présent.</info>



<br><br>

<h3 class="heading heading--h3" id="Multiple classes dynamiques">Multiple classes dynamiques</h3>
<p>Puisqu'un objet est utilisé, il est possible d'ajouter plusieurs classes dynamiques simplement en les séparant par une virgule.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{orange: isOrange, big: isBig}&quot;&gt;</highlight>




<br><br>

<h3 class="heading heading--h3" id="Combinaison avec des classes statiques">Combinaison avec des classes statiques</h3>

<p>Si certaines classes doivent être statiques <em>(ne jamais changer)</em>, alors que certaines doivent être dynamiques <em>(pouvoir changer)</em>, il est nécessaire d'utiliser deux attributs <incode>class</incode>. Un 1<sup>er</sup> sans <incode>v-bind</incode> ou <incode>:</incode> pour les classes statiques et un 2<sup>e</sup> avec pour les classes dynamiques. Ces deux attributs seront ensuite combinés par Vue.</p>

<p>Par exemple:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; class=&quot;media&quot; :class=&quot;{orange: isOrange}&quot;&gt;</highlight>


<p>Produira le code suivant si la valeur de <em>isOrange</em> est <incode>true</incode>:</p>
<highlight lang="html">&lt;img src=&quot;willy-wonka-square.jpg&quot; class=&quot;media orange&quot;&gt;</highlight>

<br><br>
<doclink href="https://v3.vuejs.org/guide/class-and-style.html#class-and-style-bindings">Class &amp; Style Bindings</doclink>






<dots></dots>
<grostitre>Condition v-if</grostitre>

<h3>Rendu conditionnel</h3>

<p>Certains éléments sont pertinents à afficher uniquement lorsqu'ils contiennent une valeur.</p>

<p>Par exemple, une bulle permettant d'afficher la date de naissance d'une personne n'est désirable que s'il y a une date à afficher. Si cette information n'est pas fournie, avoir une bulle vide est indésirable:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;birth&quot;&gt;{ { birth } }&lt;/div&gt;</highlight>

<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
<br><br><br>

<codepen id="OJrKZbw" tab="html,result" height="700"></codepen>

<doclink href="https://v3.vuejs.org/guide/conditional.html">Rendu conditionnel</doclink>

<h3>Autre condition</h3>

<p>Outre le fait de vérifier si une donnée est vide ou non, il est aussi possible d'ajouter une condition de comparaison directement dans <em>v-if</em>.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;birth>=2000&quot;&gt;{ { birth } }&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

<p>Ou encore comparer la valeur de deux paramètres:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;firstName==lastName&quot;&gt;{ { firstName } }&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<dots></dots>
<grostitre>Boucle</grostitre>
<p>Vue permet de boucler sur un tableau d'objets grâce à la directive <incode>v-for</incode>. Pour ce faire, il faut spécifier le nom temporaire que l'on souhaite attribuer à chaque objet dans le tableau et spécifier le tableau dans lequel ce trouve ces objets.</p>

<p>Par exemple, il est possible d'accéder à chaque rôle se trouvant dans le tableau <incode>rolesArray</incode>:</p>

<highlight lang="html">&lt;div v-for=&quot;role in rolesArr&quot;&gt;
  &lt;img :src=&quot;role.picture&quot;&gt;
&lt;/div&gt;</highlight>


<p>Par la suite, il faut spécifier si la propriété désirée est enfant du parent <incode>data</incode> ou enfant du rôle courant dans la boucle en la préfixant par <incode>role</incode>.</p>

<codepen id="abPeGqp" tab="html,result" height="800"></codepen>

<br><br>
<h3 class="heading heading--h3" id="Index">Index</h3>

<p>Afin d'obtenir l'index courant dans une boucle <incode>v-for</incode>, il est suffit d'ajouter un 2e paramètre dans la directive. Puisque deux paramètres sont présents, il est nécessaire de les grouper dans entre parenthèses.</p>


<p>Par exemple:</p>
<highlight lang="html">&lt;div v-for=&quot;(role, index) in rolesArr&quot;&gt;
  &lt;img :src=&quot;role.picture&quot;&gt;
&lt;/div&gt;</highlight>

<br>

<codepen id="GRPVGPg" tab="html,result" height="500"></codepen>

<br><br>
<h3 class="heading heading--h3" id="Combinaison avec des événements">Combinaison boucle avec événements</h3>

<p>Il est possible de combiner une boucle avec des <a rel="noopener noreferrer" href="#methodes-et-evenements">événements</a> sans problème, simplement en spécifiant en paramètre à la méthode appelée l'objet devant être altéré.</p>
<br>

<codepen id="oNJKyOO" tab="html,result" height="500"></codepen>

<warning>Il ne faut<a href="https://vuejs.org/style-guide/rules-essential.html#avoid-v-if-with-v-for" target="_blank"> jamais utiliser <incode>v-if</incode> sur un élément ayant&nbsp;<incode>v-for</incode></a>.</warning>
<br>

<exercice href="../../../exercices/vue-ouest-vs-est/"></exercice>

<br><br>

<doclink href="https://v3.vuejs.org/guide/list.html">Rendu de liste</doclink>





<dots></dots>
<grostitre>Alternatives à VueJS</grostitre>

<tool href="./outils/react/"></tool>
<tool href="./outils/svelte/"></tool>
<tool href="./outils/angular/"></tool>
<tool href="./outils/backbone/"></tool>
