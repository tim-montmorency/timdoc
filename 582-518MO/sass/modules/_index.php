<?php 
/**
 * @type     article
 * @title    Modules
 * @icon     images/icon.png
 * @abstract Modulariser chaque composante en fichiers individuels
 * @index    21
 * @ref      web/sass
 */
?>

 <p>L'une des grandes forces de Sass est de permettre de modulariser son code CSS. Plutôt que d'avoir un immense fichier CSS contenant tous les éléments constituant un site, il est possible de découper en fichiers individuels chaque composante. Simplifiant ainsi le développement et le maintien du site en question.</p>


<dots></dots>
<grostitre>Partials</grostitre>
<p>Un fichier contenant une seule composante d'un site est appelé un partial. Ce fichier est voué à être importé dans une feuille de style plus générale. Afin de différentier les deux, le nom des partials sont préfixés par une barre de soulignement <em>(_)</em>, tandis que le nom des fichiers plus généraux, non.</p><p>Par exemple, un fichier contenant la composante d'entête du site uniquement pourrait se nommer <incode>_site-header.scss</incode>.</p>



<dots></dots>
<grostitre>@use</grostitre>
<p>Afin d'importer un module ou partial dans une feuille de style, il faut utiliser la commande <incode>@use</incode> afin d'indiquer que le contenu de ce fichier externe sera utilisé dans le fichier scss courant.</p>

<p>Par exemple, la feuille de style principale d'un projet pourrait se nommer <em>style.scss</em> et pourrait charger, sous forme de module, le partial contenant la composante d'entête du site:</p>

<highlight lang='css'>@use 'site-header';</highlight>

<info>Remarquez qu’il n’est pas nécessaire d’inclure le <incode>"_"</incode> spécifiant qu’il s’agit d’un partial, ni l’extension <incode>".scss"</incode> puisque Sass est assez intelligent pour savoir que vous chargez une partial de type&nbsp;Sass.</info>

<p>Il est fréquent qu'une feuille de style globale ne soit constituée que de <incode>@use</incode> chargeant les différentes composantes d'un site.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/use'>@use</doclink>
<doclink href='https://css-tricks.com/introducing-sass-modules/'>Différence @import et @use</doclink>

<p>>>> Demo en classe de l'utilisation de partials par Bootstrap et par timdoc.</p>




<dots></dots>
<grostitre>Mixins</grostitre>

<p>Il est fréquent qu'un ou des mixins soient importés via <incode>@use</incode> dans d'autres composantes. </p><p>Prenons l'exemple d'un partial intitulé <em>_text.scss</em>. À l'intérieur de ce fichier ne se trouve que des mixins ayant pour but de manipulant l'apparence d'éléments texte. Un des mixins à l'intérieur pourrait ressembler à ceci:</p>

<highlight lang='css'>@mixin small-capitals {
  font-size: 12px;
  font-weight: normal;
  text-transform: uppercase;
}</highlight>


<p>Dans un partial d'une autre composante, <em>hero.scss</em>, il serait possible d'utiliser le mixin <em>small-capitals</em> du fichier<em> _text.scss</em>. Pour ce faire, il faudrait:</p>



<ol start="1">
  <li>Importer son module via <incode>@use</incode>.</li>
  <li>Inclure la mixin souhaitée.</li>
</ol>


<highlight lang='css'>@use "text";

.hero {
  @include text.small-capitals;
}</highlight>

<dots></dots>
<h3>Groupement de mixins en partials</h3>
<p>Il convient grouper dans un même <em>partial</em> des mixins vont bien ensemble, par exemple des styles de modification d'image : <a href="https://www.w3schools.com/css/css3_images.asp" target="_blank" rel="noopener noreferrer">en voici quelques exemples</a>. </p>


  <dots></dots>





