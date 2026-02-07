<?php 
/**
 * @type     article
 * @title    Boucles v-for
 * @icon     ../images/icon.webp
 * @abstract Boucler sur un tableau d'objets
 * @index    85
 * @ref      web/cadriciels/vuejs
 */
?>


<grostitre>Boucle</grostitre>
<p>Vue permet de boucler sur un tableau d'objets grâce à la directive <incode>v-for</incode>. Pour ce faire, il faut spécifier le nom temporaire que l'on souhaite attribuer à chaque objet dans le tableau et spécifier le tableau dans lequel ce trouve ces objets.</p>

<p>Par exemple, il est possible d'accéder à chaque rôle se trouvant dans le tableau <incode>rolesArray</incode>:</p>

<highlight lang="html">&lt;div v-for=&quot;role in rolesArr&quot;&gt;
  &lt;img :src=&quot;role.picture&quot;&gt;
&lt;/div&gt;</highlight>


<p>Par la suite, il faut spécifier si la propriété désirée est enfant du parent <incode>data</incode> ou enfant du rôle courant dans la boucle en la préfixant par <incode>role</incode>.</p>

<codepen id="abPeGqp" tab="html,result" height="800"></codepen>



<dots></dots>
<grostitre>Index</grostitre>


<p>Afin d'obtenir l'index courant dans une boucle <incode>v-for</incode>, il est suffit d'ajouter un 2e paramètre dans la directive. Puisque deux paramètres sont présents, il est nécessaire de les grouper dans entre parenthèses.</p>


<p>Par exemple:</p>
<highlight lang="html">&lt;div v-for=&quot;(role, index) in rolesArr&quot;&gt;
  &lt;img :src=&quot;role.picture&quot;&gt;
&lt;/div&gt;</highlight>

<br>

<codepen id="GRPVGPg" tab="html,result" height="500"></codepen>




<dots></dots>
<grostitre>Combinaison d'une boucle avec des événements</grostitre>


<p>Il est possible de combiner une boucle avec des <a rel="noopener noreferrer" href="../methodes-et-evenements">événements</a> sans problème, simplement en spécifiant en paramètre à la méthode appelée l'objet devant être altéré.</p>
<br>

<codepen id="oNJKyOO" tab="html,result" height="500"></codepen>

<warning>Il ne faut<a href="https://vuejs.org/style-guide/rules-essential.html#avoid-v-if-with-v-for" target="_blank"> jamais utiliser <incode>v-if</incode> sur un élément ayant&nbsp;<incode>v-for</incode></a>.</warning>
<br>


<doclink href="https://v3.vuejs.org/guide/list.html">Rendu de liste</doclink>


<dots></dots>
<grostitre>Récapitulatif de ce que on a <em>Vue.js</em> jusqu'à maintenant</grostitre>
<p>Analysons ensemble cet exemple de brassage de carte réalisé par le développeur Torontois <a href="https://codepen.io/itslit" target="_blank" rel="noopener noreferrer">Hassan Dj (@itslit</a>)</p>

<codepen id="gOVNoby" tab="result" height="1000"></codepen>

<dots></dots>
<exercice href="../../../exercices/vue-ouest-vs-est/"></exercice>














