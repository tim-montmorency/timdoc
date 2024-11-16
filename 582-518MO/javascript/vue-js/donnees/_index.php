<?php 
/**
 * @type     article
 * @title    Données {{ }}
 * @icon     ../images/icon.webp
 * @abstract Les données via les moustache et les attributs des balises via v-bind
 * @index    89
 * @ref      web/cadriciels/vuejs
 */
?>


<grostitre>Données { { } }</grostitre>


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




<dots></dots>
<grostitre>Interpolation des données {{ }}</grostitre>

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
<doclink href="https://v3.vuejs.org/guide/template-syntax.html#interpolations">Interpolations</doclink>

<alert><strong>Erreur fréquente</strong><br>les moustaches ne sont fonctionnelles qu’à l’intérieur de la balise HTML assignée à&nbsp;l’app.</alert>



<dots></dots>
<p>Voici une petite démo d'un minuteur automatique.</p>
<codepen id="bGXJeOp" tab="js,result" height="600"></codepen>








<dots></dots>
<grostitre>Attributs des balises HTML via v-bind:&nbsp;ou&nbsp;:</grostitre>

<p>Les données peuvent aussi être insérées dynamiquement dans un attribut HTML <em>(class, src, alt, style, etc.)</em>. Cependant, les moustaches ne sont pas fonctionnelles dans ce contexte ❌. Il faut donc plutôt utiliser une directive <incode>v-bind</incode> en début d'attribut afin que son contenu se popule avec une donnée présente dans l'objet data.
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
