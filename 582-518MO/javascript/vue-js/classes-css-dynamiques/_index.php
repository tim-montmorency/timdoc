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


<grostitre>Classes CSS dynamiques :class</grostitre>

<p>Il est fréquent qu'une classe css doit-être ajoutée ou retirée à un élément HTML afin de changer son apparence pour refléter une action commise par un usager.<p>

<p> Pour ce faire, Vue permet de passer un <em>objet JavaScript</em> <incode>{}</incode> à un <em>l'attribut dynamique</em> <span class='inline-code' style="white-space: nowrap;">v-bind:class</span>  ou <span class='inline-code'>:class</span> sur la balise. <br> Cet objet doit contenir une <em>propriété</em> correspondant au nom de la classe souhaitée et comme <em>valeur</em> une donnée ou encore une expression. Ainsi si la condition suivie des <span class='inline-code'>:</span> retourne <incode>true</incode>, la classe est ajoutée.  Et à l'opposé, si elle est évaluée à <incode>false</incode> elle est retirée.</p>

<dots></dots>
<p>Voici un exemple où est ajoutée la classe <span class='inline-code'>.majority</span> à une carte d'une personne lorsque la donnée <incode>age</incode> est plus grande ou égale à <incode>18</incode>: </p>
<highlight lang='html'>
    <img :class="{ majority : age >= 18 }" src="url-vers-image-del-a-personne.png">
</highlight>

<highlight lang='css'>
img{
    border: 1px solid gray;
}
img.majority{
    border: 3px solid purple;
}
</highlight>


<dots></dots>


<p>Voici un exemple où est ajoutée la classe <span class='inline-code'>.disabled</span> au bouton que lorsque la donnée <incode>isDisabled</incode> est équivalente à <incode>true</incode>: </p>
<highlight lang='html'>
    <button :class="{ disabled : isDisabled }"></button>
</highlight>

<highlight lang='css'>
button {
    background-color: var(--primary-color);
}
button.disabled {
    background-color: gray;
    cursor: not-allowed;
}
</highlight>


<dots></dots>
<p>Autre exemple, pour ajouter la classe <incode>.orange</incode> lorsque la donnée <incode>isOrange</incode> est équivalente à <incode>true</incode>:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{orange: isOrange}&quot;&gt;</highlight>


<br>
<small>Veuillez inspecter à la fois le HMTL et le JS dans le CodePen pour mieux comprendre la dynamique.</small>
<codepen id="mdaNLbB" tab="html,result" height="500"></codepen>


<h3>Nom de classe contenant des caractères spéciaux</h3>
<p>Si un nom de classe CSS contient des caractères spéciaux, il sera nécessaire de l'entourer de guillemets.</p>

<p>Par exemple, une classe avec un trait d'union:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{&#39;is-orange&#39;: isOrange}&quot;&gt;</highlight>


<info>En cas de doute, il est possible de toujours utiliser des guillemets, même si aucun caractère spécial n’est&nbsp;présent.</info>



<dots></dots>
<grostitre>Multiple classes dynamiques</grostitre>
<p>Puisqu'un <em>objet JavaScript</em> <incode>{}</incode> est utilisé, il est possible d'ajouter plusieurs classes CSS dynamiques simplement en les séparant par une virgule.</p>
<p>Par exemple:</p>

<highlight lang="html">&lt;img :src=&quot;picture&quot; :class=&quot;{orange: isOrange, big: isBig}&quot;&gt;</highlight>




<dots></dots>
<grostitre>Combinaison avec des classes statiques</grostitre>

<p>Si certaines classes doivent être statiques <em>(ne jamais changer)</em>, alors que certaines doivent être dynamiques <em>(pouvoir changer)</em>, il est nécessaire d'utiliser deux attributs <incode>class</incode>. <br> Un 1<sup>er</sup> nommé simplement <span class='inline-code'>class=""</span> pour les classes statiques et un 2<sup>e</sup> avec sans <span class='inline-code' style="white-space: nowrap;">v-bind:class=""</span> ou <incode>:class=""</incode> pour les classes dynamiques. Ces deux attributs seront ensuite combinés par Vue.</p>

<p>Par exemple:</p>
<highlight lang="html">&lt;img :src=&quot;picture&quot; class=&quot;media&quot; :class=&quot;{orange: isOrange}&quot;&gt;</highlight>


<p>produira le code suivant si la valeur de <em>isOrange</em> est <incode>true</incode>:</p>
<highlight lang="html">&lt;img src=&quot;willy-wonka-square.jpg&quot; class=&quot;media orange&quot;&gt;</highlight>

<p>pu produira le code suivant si la valeur de <em>isOrange</em> est <incode>false</incode>:</p>
<highlight lang="html">&lt;img src=&quot;willy-wonka-square.jpg&quot; class=&quot;media&quot;&gt;</highlight>


<br><br>
<doclink href="https://v3.vuejs.org/guide/class-and-style.html#class-and-style-bindings">Class &amp; Style Bindings</doclink>

<dots></dots>
<h3>Exercice</h3>
<exercice href="../../../exercices/vue-collection-films-1/"></exercice>



