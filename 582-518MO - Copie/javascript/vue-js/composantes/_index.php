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

<p>Les composantes sont une partie importante de Vue. Elles permettent de créer des sites complexes ou, même des applications web à l’aide de composantes autonomes pouvant être réutilisables.</p>


<p>Les composantes nous permettent de fractionner l'interface (UI) en morceaux indépendants et réutilisables, sur lesquels nous pouvons réfléchir de manière isolée. Il est courant pour une application d'être organisée en un arbre de composantes imbriquées.</p>

<img src="./images/composante-pageweb.png" alt="Arbre de composants">

<dots></dots>

<grostitre>Définir une composante</grostitre>


<p>Pour définir une composante, il suffit d’appeler la méthode <incode>component</incode> d’une application Vue et de lui passer deux paramètres: </p>


<ol start="1">
    <li>Le <em>nom</em> à lui attribuer.</li>
    <li>Un <em>objet {}</em> contenant des propriétés.</li>
</ol>



<info>Les composantes acceptent les mêmes propriétés de base qu’une app Vue: <incode>data</incode>, <incode>methods</incode>, <incode>computed</incode>, <incode>template</incode>,&nbsp;etc.</info>



<br>
Par exemple, pour définir une composante de compteur:
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




<dots></dots>
<grostitre>Utilisation d'une composante</grostitre>

<p>Lorsqu'une composante est définie, il est possible d'y faire référence dans le HTML d'une app à partir de son nom sous forme d'une balise.</p>

Par exemple:

<highlight lang="html">&lt;counter&gt;</highlight>


<codepen id="mdvKMNm" tab="html,result" height="400"></codepen>

<br>
<doclink href="https://fr.vuejs.org/guide/essentials/component-basics">Composante - Les bases</doclink>



<dots></dots>
<grostitre>Réutilisation d'une composante</grostitre>
<p>Une composante peut-être réutilisée aussi souvent que désiré.</p>

<codepen id="QWYxqYX" tab="html,result" height="300"></codepen>

<p>Chaque bouton est entièrement indépendant. Ainsi le compteur de l'un n'a aucune influence sur le compteur d'un autre.</p>

<doclink href="https://fr.vuejs.org/guide/essentials/component-basics#using-a-component">Utilisation / réutilisation d'une composante</doclink>




<dots></dots>
<grostitre>Props</grostitre>

<p>Si nous construisons un blog, il est probable que nous ayons besoin d'un composant pour représenter un article du blog. Nous voulons que tous les articles partagent la même mise en page, mais avec un contenu différent. Un tel composant ne sera utile que si vous pouvez lui passer des données, comme le titre et le contenu d'un article spécifique que l'on voudrait afficher. C'est là que les <incode>props</incode> entrent en jeu.</p>


<p>Les <incode>props</incode> sont des données passées à une composante. Pour en définir, il faut spécifier le nom des <incode>props</incode> attendus dans un tableau.</p>

<p>Par exemple, si seulement la props <incode>msg</incode> est attendue: </p>

<highlight lang="javascript">app.component('counter', {
  props: ['msg'],
  ...
})</highlight>


<br><br>
<p>Pour passer une donnée, il suffit ensuite d'ajouter un attribut avec la valeur désirée:</p>

<highlight lang="html">&lt;counter msg=&quot;A&quot;&gt;
&lt;counter msg=&quot;B&quot;&gt;</highlight>

<codepen id="RwvJLOJ" tab="html,result" height="400"></codepen>

<p>Lorsqu'une <incode>props</incode> est passée à une composante, elle devient l'équivalent d'une donnée dans <incode>data</incode>.</p>

<alert>Les <incode>props</incode> sont des données passées aux composantes mais ne peuvent pas changer de valeur.</alert>

<warning>Pour nommer vos <incode>props</incode>, si vous utilisez du <em>camelCase</em> (mélange de minuscules et majuscules), vous devrez utiliser le <em>kebab-case</em> du côté HTML dans les noms d'attributs de votre composante. Mais au stade où on en est, pour le moment, je vous conseille simplement de n'utiliser que des minuscules dans les noms de vos <incode>props</incode>. Ça va vous simplifier la vie.</warning>

<doclink href="https://fr.vuejs.org/guide/components/props">Props</doclink>




<dots></dots>
<grostitre>Boucle v-for</grostitre>
<p>Les composantes sont souvent utilisées conjointement avec de boucles afin de tirer profit de leur réusabilité.</p>

<p>Par exemple: </p>
<highlight lang="html">&lt;counter v-for=&quot;btn in btnsArr&quot; :msg=&quot;btn.msg&quot;&gt;&lt;/counter&gt;</highlight>

<codepen id="OJdExYr" tab="html,result" height="400"></codepen>

<p>Voici un autre exemple avec une composante de 2 props: <em>pletter</em> et <em>pcolor</em>.</p>

<codepen id="JjxwowM" tab="html,result" height="400"></codepen>


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

