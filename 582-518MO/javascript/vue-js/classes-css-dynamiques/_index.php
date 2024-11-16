<?php 
/**
 * @type     article
 * @title    Classes CSS dynamiques
 * @icon     ../images/icon.webp
 * @abstract Une classe CSS peut-être dynamiquement ajoutée et retirée d'une élément HTML à tout moment.
 * @index    87
 * @ref      web/cadriciels/vuejs
 */
?>


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



<dots></dots>
<grostitre>Multiple classes dynamiques</grostitre>
<p>Puisqu'un objet est utilisé, il est possible d'ajouter plusieurs classes dynamiques simplement en les séparant par une virgule.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{orange: isOrange, big: isBig}&quot;&gt;</highlight>




<dots></dots>
<grostitre>Combinaison avec des classes statiques</grostitre>

<p>Si certaines classes doivent être statiques <em>(ne jamais changer)</em>, alors que certaines doivent être dynamiques <em>(pouvoir changer)</em>, il est nécessaire d'utiliser deux attributs <incode>class</incode>. Un 1<sup>er</sup> sans <incode>v-bind</incode> ou <incode>:</incode> pour les classes statiques et un 2<sup>e</sup> avec pour les classes dynamiques. Ces deux attributs seront ensuite combinés par Vue.</p>

<p>Par exemple:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; class=&quot;media&quot; :class=&quot;{orange: isOrange}&quot;&gt;</highlight>


<p>Produira le code suivant si la valeur de <em>isOrange</em> est <incode>true</incode>:</p>
<highlight lang="html">&lt;img src=&quot;willy-wonka-square.jpg&quot; class=&quot;media orange&quot;&gt;</highlight>

<br><br>
<doclink href="https://v3.vuejs.org/guide/class-and-style.html#class-and-style-bindings">Class &amp; Style Bindings</doclink>

<dots></dots>
<h3>Exercice - Gestion d'inventaire de film</h3>
<!--
<img src="images/idee-exerc-gestion-inventaire-film01.jpg" alt="">
<img src="images/idee-exerc-gestion-inventaire-film02.jpg" alt="">
 -->


