<?php 
/**
 * @type     article
 * @title    Nomenclature BEM
 * @icon     ../images/icon.webp
 * @abstract Nomenclature CSS: Block, Element, and Modifier
 * @index    19
 * @ref      web/sass
 */
?>
<grostitre>Introduction</grostitre>
<p>Le choix d'une nomenclature est un aspect important d'un projet. Il permet d'écrire un CSS de qualité et d'anticiper comment les autres membres de son équipe écriront leurs classes CSS. Ceci résulte en un code uniforme, facilement maintenable plutôt qu'une agglomération de différents styles de codes écrits par différents développeurs.</p>

<p>BEM est l'une des nomenclatures&nbsp;CSS les plus répandues. Elle permet d'éviter de nombreux effets secondaires <em>(side effects)</em> tout en améliorant la performance des feuilles de styles.</p>

<p>Lorsqu'un projet grossi, il n'est pas rare d'attribuer le même nom de classe à différentes composantes. Par exemple, imaginons que vous créez une composante de héros et que vous souhaitez afficher son titre en italique. <br><br>Vous écrivez donc le code suivant:</p>
<highlight lang='css'>.title {
  font-style: italic;
}</highlight>

<p>Cependant, si vous ou l'un de vos collègues travaille éventuellement sur une composante d'article et qu'à l'intérieur de celle-ci se trouve aussi un titre, il est probable que son réflexe ou le votre soit de le cibler via la classe <incode>.title</incode> à nouveau, ce qui engendra des effets secondaires indésirables. Le titre de l'article héritera du style italique initialement attribué au titre du héros et tous les nouveaux styles appliqués au titre de l'article s'appliqueront aussi au titre du héros 🤮.</p>

<p>Heureusement, BEM permet d'éviter cette confusion!</p>






<dots></dots>
<grostitre>Origine du nom BEM</grostitre>
<p>Le nom BEM provient de l'abréviation de: Blocs, Éléments et Modificateurs qui sont les trois piliers de cette nomenclature.</p>




<dots></dots>
<grostitre>Blocs</grostitre>
<p>Les blocs sont des noms de classes représentant des composantes de base pouvant être facilement identifiable dans une page par leur simple nom.</p>

<p>Par exemple: <incode>.site-header</incode>, <incode>.hero</incode>, <incode>.article</incode>, etc. sont tous des composantes que nous devrions être à même de reconnaitre.</p>
<highlight lang='html'>&lt;div class=&quot;hero&quot;&gt;
  ...
&lt;/div&gt;</highlight>




<dots></dots>
<h2>Éléments</h2>
<p>Les éléments sont des sous-composantes avec des noms génériques ayant un lien étroit avec leur bloc.</p>

<p>Par exemple: <incode>title</incode>, <incode>list</incode>, <incode>item</incode>, etc. sont des noms de composantes génériques qui pourraient être présents dans chacun des blocs précédemment mentionnés. Styliser une de ces composantes à partir de son nom générique, par exemple <incode>.title</incode>, dans chacune de ces composantes entrainerait assurément des effets secondaires indésirables entre chacune d'entre elles. </p>

<p>Heureusement, avec la nomenclature BEM ces effets secondaires seraient évités, puisque la classe d'un élément est constituée du nom de son bloc suivi de deux barres de soulignement <incode>__</incode> et du nom de l'élément. <br><br>Par exemple: </p>

<highlight lang='html'>&lt;div class=&quot;hero&quot;&gt;
  &lt;h2 class=&quot;hero__title&quot;&gt;Titre&lt;/h2&gt;
&lt;/div&gt;</highlight>






<dots></dots>
<grostitre>Modificateurs</grostitre>
<p>Les modificateurs sont des drapeaux, ou en anglais: un <em>"flags"</em>, permettant de changer le comportement ou l'apparence d'un bloc ou d'un élément.</p>

<p>Par exemple: <incode>active</incode>, <incode>disabled</incode>, <incode>big</incode>, etc. </p><p>Avec BEM, un modificateur est séparé de son bloc ou de son élément à l'aide de deux tirets <incode>--</incode>.</p>

<p>Par exemple:</p>

<highlight lang='html'>&lt;div class=&quot;hero&quot;&gt;
  &lt;h2 class=&quot;hero__title hero__title--big&quot;&gt;Titre&lt;/h2&gt;
&lt;/div&gt;</highlight>

<info>Remarquez qu’un modificateur ne remplace pas une classe de base, mais est ajouté en&nbsp;surplus.</info>
      




<dots></dots>
<grostitre>Imbrication</grostitre>

<p>Il faut faire attention avec l'imbrication de BEM. Personne ne veut travailler dans un code où des classes CSS ressemblent à:</p>
<p> 🚫</p>
<highlight lang='css'>.homepage__hero__wrapper__title { ... } </highlight>

<p>Il est donc important de bien savoir diviser ses blocs. Dans l'exemple précédent, il serait logique d'avoir un bloc de départ <incode>.homepage</incode> ainsi qu'un bloc <incode>.hero</incode>.</p>


<p>Le bloc <incode>.hero</incode> pourrait avoir différents niveaux d'éléments, mais il n'est pas nécessaire de nommer chacun d'entre eux. </p>

<p>Par exemple, il n'est pas nécessaire dans son nom de classe de spécifier que le titre se trouve dans le wrapper. Ainsi une division de la sorte permettrait d'obtenir un code plus lisible:</p>
<p> 👌</p>
<highlight lang='css'>.hero__wrapper { ... }
.hero__title { ... }</highlight>


<br><br>
<tool href='../../tools/get-bem/'></tool>








<dots></dots>
<grostitre>SASS</grostitre>

<h3 class="heading heading--h3" id="Nesting">Nesting</h3>
<p>Il peut être fastidieux de toujours répéter le même bloc au début de chaque nom de classe. D'où pourquoi la nomenclature BEM se marie si bien avec SASS. En tirant profit de l'imbrication (<em>nesting)</em> de SASS, il est possible de définir un bloc de ensuite ses éléments à l'intérieur de lui, sans jamais se répéter!</p>

<p>Par exemple:</p>
<highlight lang='css'>.hero {
  &__wrapper { width: 100%; }
  &__title { font-style: italic; }
}</highlight>


<p>Ce qui générera le code CSS suivant:</p>
<highlight lang='css'>.hero__wrapper { width: 100%; } 
.hero__title { font-style: italic; }</highlight>


<h3 class="heading heading--h3" id="Modificateurs">Modificateurs</h3>
<p>Les modificateurs sont faciles à écrire à l'aide de <incode>@extend</incode>. </p>

<p>Par exemple</p>
<highlight lang='css'>.hero__title {
  font-style: italic;

  &--big { 
    @extend .hero__title;
    font-size: 40px; 
  }
}</highlight>


<p>Ce qui générera le code CSS suivant:</p>
<highlight lang='css'>.hero__title, .hero__title--big {
  font-style: italic;
}
.hero__title--big {
  font-size: 40px;
}</highlight>




<h3 class="heading heading--h3" id="Découpage">Découpage</h3>
<p>Il est fortement suggéré que chaque élément assez important pour être un bloc est son propre fichier SASS distinct.</p>

<p>Par exemple, le fichier <em>hero.scss</em> ne contiendrait qu'un seul bloc, soit <incode>.hero</incode>. Le fichier <em>site-header.scss</em> ne contiendrait que le bloc <incode>.site-header</incode> et ainsi de suite.</p>





<dots></dots>
<grostitre>Alternatives</grostitre>
<ul>
    <li><a target="_blank" rel="noopener noreferrer" href="http://oocss.org/">OOCSS</a></li>
    <li><a target="_blank" rel="noopener noreferrer" href="http://smacss.com/">SMACSS</a></li>
    <li><a target="_blank" rel="noopener noreferrer" href="http://suitcss.github.io/">SUITCSS</a></li>
    <li>etc.</li>
</ul>

