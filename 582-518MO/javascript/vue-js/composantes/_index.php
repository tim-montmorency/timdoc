<?php 
/**
 * @type     article
 * @title    Composantes
 * @icon     ../images/icon.webp
 * @abstract Composantes autonomes pouvant être réutilisables
 * @index    75
 * @ref      web/cadriciels/vuejs
 */
?>

<p>Les composantes sont une partie importante de Vue. Ils permettent de créer des sites complexes à l’aide de composantes autonomes pouvant être réutilisables.</p>

<grostitre>Définir une composante</grostitre>


<p>Pour définir une composante, il suffit d’appeler la méthode <incode>component</incode> d’une application Vue et de lui passer deux paramètres: </p>


<ol start="1">
    <li>Le nom à lui attribuer.</li>
    <li>Un objet contenant des propriétés.</li>
</ol>



<info>Les composantes acceptent les mêmes propriétés de base qu’une app Vue: data, methods, computed,&nbsp;etc.</info>



<br>
<p>Par exemple, pour définir une composante de compteur:</p>
<highlight lang="javascript">// Creation d'un app Vue
const app = Vue.createApp({})

// Définition d'une composante
app.component('counter', {
  data() {
    return {
      nbr: 0
    }
  },
  template: `
    &lt;button @click=&quot;nbr++&quot;&gt;
      Cliqué { { nbr } }x
    &lt;/button&gt;`
})</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<info>Remarquez la propriété template contenant une chaine de caractères correspondant au code HTML associé à la&nbsp;composante.</info>

<p>Lorsqu'une composante est définie, il est possible d'y faire référence dans le HTML d'une app à partir de son nom sous forme d'une balise.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;counter&gt;</highlight>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="mdvKMNm" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdvKMNm">
  EXERC Vue.js West coast vs East coast</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<br>
<doclink href="https://vuejs.org/guide/essentials/component-basics.html">Composante - Les bases</doclink>



<dots></dots>
<grostitre>Réutilisation</grostitre>
<p>Une composante peut-être réutilisée aussi souvent que désiré.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="QWYxqYX" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/QWYxqYX">
  Vue.js Composante - réutilisation</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Chaque bouton est entièrement indépendant. Ainsi le compteur de l'un n'a aucune influence sur le compteur d'un autre.</p>

<doclink href="https://vuejs.org/guide/essentials/component-basics.html#using-a-component">Utilisation / Réutilisation</doclink>




<dots></dots>
<grostitre>Props</grostitre>
<p>Les props sont des données passées à une composante. Pour en définir, il faut spécifier le nom des props attendus dans un tableau.</p>

<p>Par exemple, si seulement la props <incode>msg</incode> est attendu: </p>

<highlight lang="javascript">app.component('counter', {
  props: ['msg'],
  ...
})</highlight>


<br><br>
<p>Pour passer une donnée, il suffit ensuite d'ajouter un attribut avec la valeur désirée:</p>

<highlight lang="html">&lt;counter msg=&quot;A&quot;&gt;
&lt;counter msg=&quot;B&quot;&gt;</highlight>



<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="RwvJLOJ" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RwvJLOJ">
  Vue.js Composante - réutilisation</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Lorsqu'une <incode>props</incode> est passée à une composante, elle devient l'équivalent d'une donnée dans <incode>data</incode>.</p>

<doclink href="https://vuejs.org/guide/components/props.html#prop-types">Props</doclink>




<dots></dots>
<grostitre>Boucle</grostitre>
<p>Les composantes sont souvent utilisées conjointement avec de boucles afin de tirer profit de leur réusabilité.</p>

<p>Par exemple: </p>
<highlight lang="html">&lt;counter v-for=&quot;btn in btnsArr&quot; :msg=&quot;btn.msg&quot;&gt;&lt;/counter&gt;</highlight>


<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="OJdExYr" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJdExYr">
  Vue.js Composante - props</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p>Voici un autre exemple avec une composante de 2 props: <em>pletter</em> et <em>pcolor</em>.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="JjxwowM" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjxwowM">
  Vue.js Composante avec 2 props - boucle</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

       


<!--
<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="../../../exercices/vue-sushis/ " target="_blank" class="exercice-card__title">
        Vue&nbsp;Sushis
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;ré...</p>
          </div>

     
</aside>
-->

<exercice href="../../../exercices/vue-composante-cartes/"></exercice>

