<?php 
/**
 * @type     article
 * @title    Création d'une app VueJS
 * @icon     ../images/icon.webp
 * @abstract Comment créer en JS la base de l'app Vue
 * @index    90
 * @ref      web/cadriciels/vuejs
 */
?>


<info>
  <p>Il existe 2 styles d'API pour coder en VUE.js: <em>Options API</em> et <em>Composition API</em>. Donc si vous parcourez la documentation de VUE.js il est possible que vous tombiez sur l'un et l'autre, ne soyez pas intimidé.</p> 
  <p>Les deux styles d'API sont tout à fait capables de couvrir les cas d'utilisation courants. Il s'agit d'interfaces différentes alimentées par le même système sous-jacent. En fait, l'<em>Options API</em> est mise en œuvre au-dessus de la <em>Composition API</em>&nbsp;! Les concepts fondamentaux sont partagés entre les deux styles et ils sont équivalents.</p>
  <p>Dans le cadre de ce cours, nous utiliserons le style <em>Options API</em>. <a href="https://vuejs.org/guide/introduction.html#api-styles" target="_blank" rel="noopener noreferrer">Plus d'info ici.</a></p>
</info>


<dots></dots>
<grostitre>Création d'une App</grostitre>

<p>La première étape consiste à appeler la méthode <em>createApp</em> de l'objet global <em>Vue. </em>Celle-ci permet de créer une nouvelle instance d'une app Vue. Afin de pouvoir accéder à l'app ultérieurement, il est nécessaire de stocker le résultat dans une variable.</p>


<p>Par exemple:</p>


<highlight lang="javascript">const app = Vue.createApp({});</highlight>


<info>Cette variable peut porter n’importe quel nom, mais par convention elle est généralement nommée&nbsp;<em>"app"</em>.</info>

<br><br>
<grostitre>Attacher l'App à un élément (mount)</grostitre>

<p>Il faut ensuite associer l'app à une balise HTML afin de lui indiquer sa portée. Bref, seules cette balise et ses enfants pourront être contrôlées par l'app. Le reste du document n'existera pas à ses yeux.<br><br>Pour ce faire, l'app contenue dans la variable doit appeler sa méthode <em>mount</em> et lui passer en paramètre une chaine de caractères correspondant au sélecteur de la balise désirée. </p>


<info>Cette méthode accepte les mêmes sélecteurs que&nbsp;<a href="https://smnarnold.com/cours/javascript/queryselector">querySelector</a>.</info>

<p>Par exemple, si la balise souhaitée a le <span class='inline-code'>id</span> app:</p>
<highlight lang="javascript">app.mount('#app');</highlight>


<p>Si le résultat du <incode>mount</incode> est stocké dans une variable, il est possible d'y accéder afin de changer ses <a rel="noopener noreferrer" href="#donnees">données</a> ou encore d'appeler ses <a rel="noopener noreferrer" href="#methodes-et-evenements">méthodes</a>.</p>

<p>Par exemple:</p>
<highlight lang="javascript">const vm = app.mount('#app');</highlight>

<br>
<doclink href="https://v3.vuejs.org/guide/instance.html#creating-an-application-instance">createApp()</doclink>


