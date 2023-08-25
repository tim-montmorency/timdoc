<?php 
/**
 * @type     article
 * @title    Mixins
 * @icon     images/icon.png
 * @abstract Créer des extraits de CSS pouvant être réutilisés
 * @index 25
 */
?>
<p>Les mixins permettent de créer des extraits de CSS pouvant être réutilisés à différents endroits grâce à <code>@include</code>.</p>

<p>Par exemple, il est possible de se créer une mixin rendant une image responsive.</p>

<highlight lang='css'>@mixin responsive-img {
  display: block; 
  width: 100%;
  height: auto;
}</highlight>

<p>Plutôt que de répéter ces trois lignes de code CSS à chaque fois à chaque image doit être responsive, il serait possible d'appelez simplement cette mixin.</p>

<p>Par exemple:</p>
<highlight lang='css'>.article-img {
  @include responsive-img;
}</highlight>

<doclink href='https://sass-lang.com/documentation/at-rules/mixin'>mixin</doclink>






<dots></dots>
<grostitre>Arguments</grostitre>
<p>Les mixins acceptent de recevoir des arguments. Ces derniers sont ensuite disponibles dans le corps de la mixin, rendant ainsi leur usage plus flexible.</p>
<p>Par exemple, afin d'ajoutez un <code>max-width</code> variant selon différents scénarios, il n'est pas nécessaire de créer plusieurs mixins. L'ajout d'un argument permettra de réutiliser la même.</p>

<highlight lang='css'>@mixin responsive-img($max) {
  display: block; 
  width: 100%;
  height: auto;
  max-width: $max; // 600px
}

.article-img {
  @include responsive-img(600px);
}</highlight>



<warning>Si un argument sensé être fournis à un mixin est omis, une erreur se produira au moment de la compilation du code&nbsp;CSS.</warning>


<h3 class="heading heading--h3" id="Valeur par défaut">Valeur par défaut</h3>

<p>Afin d'éviter une erreur lorsqu'un argument est omis, il est possible de fournir une valeur par défaut. </p>

<p>Par exemple:</p>

<highlight lang='css'>@mixin responsive-img($max: 100%) {
  display: block; 
  width: 100%;
  height: auto;
  max-width: $max; // 100%
}

.article-img {
  @include responsive-img;
}</highlight>

<h3 class="heading heading--h3" id="Spécifier l'argument">Spécifier l'argument</h3>

<p>Les arguments sont généralement passés à une mixin selon l'ordre dans lequel ils ont été déclarés dans celle-ci. Cependant, il est possible de spécifier à quel argument une valeur est passée. Ceci permet, d'omettre certains arguments ou simplement de les écrire dans un ordre différent.</p><p>Par exemple:</p>

<highlight lang='css'>@mixin responsive-img($display: block, $max: 100%) {
  display: $display; 
  width: 100%;
  height: auto;
  max-width: $max; // 300px
}

.article-img {
  @include responsive-img($max: 300px);
}</highlight>




<p>Ainsi, le fait de nommé <code>$max</code> dans l'appel de la mixin permet de spécifier que la valeur 300px n'est pas pour <code>$display</code>, mais bien <code>$max</code>, même si ce dernier est le 2<sup>e</sup> argument.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/mixin#arguments'>Arguments</doclink>



<dots></dots>
<exercice href='../../exercices/sass-mixin-grille-bootstrap/'></exercice>
