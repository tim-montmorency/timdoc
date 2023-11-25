<?php 
/**
 * @type     article
 * @title    Composantes
 * @icon     images/ico-vue.png
 * @abstract Composantes autonomes pouvant être réutilisables
 * @index 75
 */
?>

<p>Les composantes sont une partie importante de Vue. Ils permettent de créer des sites complexes à l’aide de composantes autonomes pouvant être réutilisables.</p>

<grostitre>Définir une composante</grostitre>


<p>Pour définir une composante, il suffit d’appeler la méthode <code>component</code> d’une application Vue et de lui passer deux paramètres: </p>


<ol start="1">
    <li>Le nom à lui attribuer.</li>
    <li>Un objet contenant des propriétés.</li>
</ol>



<info>Les composantes acceptent les mêmes propriétés de base qu’une app Vue: data, methods, computed,&nbsp;etc.</info>



<br>
<p>Par exemple, pour définir une composante de compteur:</p>
<highlight lang='javascript'>// Creation d'un app Vue
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
      Cliqué {{ nbr }}x
    &lt;/button&gt;`
})</highlight>



<info>Remarquez la propriété template contenant une chaine de caractères correspondant au code HTML associé à la&nbsp;composante.</info>

<p>Lorsqu'une composante est définie, il est possible d'y faire référence dans le HTML d'une app à partir de son nom sous forme d'une balise.</p>

<p>Par exemple:</p>

<highlight lang='html'>&lt;counter&gt;</highlight>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="mdvKMNm" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdvKMNm">
  EXERC Vue.js West coast vs East coast</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<br>
<doclink href='https://vuejs.org/guide/essentials/component-basics.html'>Composante - Les bases</doclink>



<dots></dots>
<grostitre>Réutilisation</grostitre>
<p>Une composante peut-être réutilisée aussi souvent que désiré.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="QWYxqYX" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/QWYxqYX">
  Vue.js Composante - réutilisation</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Chaque bouton est entièrement indépendant. Ainsi le compteur de l'un n'a aucune influence sur le compteur d'un autre.</p>

<doclink href='https://vuejs.org/guide/essentials/component-basics.html#using-a-component'>Utilisation / Réutilisation</doclink>




<dots></dots>
<grostitre>Props</grostitre>
<p>Les props sont des données passées à une composante. Pour en définir, il faut spécifier le nom des props attendus dans un tableau.</p>

<p>Par exemple, si seulement la props <code>msg</code> est attendu: </p>


<pre><code class="hljs javascript">app.component(<span class="hljs-string">'counter'</span>, {
  <span class="hljs-attr">props</span>: [<span class="hljs-string">'msg'</span>],
  ...
})</code></pre>


<p>Pour passer une donnée, il suffit ensuite d'ajouter un attribut avec la valeur désirée:</p>

<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">counter</span> <span class="hljs-attr">msg</span>=<span class="hljs-string">"A"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">counter</span> <span class="hljs-attr">msg</span>=<span class="hljs-string">"B"</span>&gt;</span></code></pre>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="RwvJLOJ" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RwvJLOJ">
  Vue.js Composante - réutilisation</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Lorsqu'une <code>props</code> est passé à une composante, elle devient l'équivalent d'une donnée dans <code>data</code>.</p>

<doclink href='https://vuejs.org/guide/components/props.html#prop-types'>Props</doclink>




<dots></dots>
<grostitre>Boucle</grostitre>
<p>Les composantes sont souvent utilisées conjointement avec de boucles afin de tirer profit de leur réusabilité.</p>

<p>Par exemple: </p>


<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">counter</span> <span class="hljs-attr">v-for</span>=<span class="hljs-string">"btn in btnsArr"</span> <span class="hljs-attr">:msg</span>=<span class="hljs-string">"btn.msg"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">counter</span>&gt;</span></code></pre>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="OJdExYr" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJdExYr">
  Vue.js Composante - props</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

          <div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_4" scrolling="no" src="https://codepen.io/smnarnold/embed/c152f49db70f04b88517a37a1ceb7f13?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=c152f49db70f04b88517a37a1ceb7f13&amp;default-tab=js%2Cresult&amp;name=cp_embed_4" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_c152f49db70f04b88517a37a1ceb7f13"></iframe></div>
  </div>  

  
</div>


 <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/vue/composante-equipements" target="_blank" class="exercice-card__title">
        Composante -&nbsp;Équipements
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devez faire une interface simple permettant de visualiser facilement l’équipement et les locaux TIM&nbsp;disponibles.</p>
          </div>

</aside>

<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/vue/vue-sushis" target="_blank" class="exercice-card__title">
        Vue&nbsp;Sushis
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;ré...</p>
          </div>

     
</aside>
