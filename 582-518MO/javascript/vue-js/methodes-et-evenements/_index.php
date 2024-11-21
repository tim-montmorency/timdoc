<?php 
/**
 * @type     article
 * @title    Méthodes et événements v-on
 * @icon     ../images/icon.webp
 * @abstract Les méthodes Vue sont des fonctions qui appartiennent à l'instance Vue sous la propriété "methods".
 * @index    88
 * @ref      web/cadriciels/vuejs
 */
?>


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

<grostitre>v-on: ou @</grostitre>

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

<dots></dots>

<codepen id="mdaNxGW" tab="html,result" height="520"></codepen>
<br>
<doclink href="https://v3.vuejs.org/guide/events.html#listening-to-events">Event Handling</doclink>
<dots></dots>

<!--<exercice href="../../../exercices/vue-tableau-nba/"></exercice>
<exercice href="../../../exercices/vue-cheese-kanye-says/"></exercice>-->
<br>


<grostitre>Démo - Poésie de décembre</grostitre>
<p>Démo en classe</p>
<!--
VIDE : https://codepen.io/tim-momo/pen/MWNMQmq
COMPLET https://codepen.io/tim-momo/pen/qBezxBw?editors=1011
-->

