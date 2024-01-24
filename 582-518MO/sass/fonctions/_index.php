<?php 
/**
 * @type     article
 * @title    Fonctions
 * @icon     ../images/icon.webp
 * @abstract Gérer des opérations complexes, de manipuler des paramètres...
 * @index    22
 * @ref      web/sass
 */
?>
<p>Les <incode>@functions</incode> permettent de gérer des opérations complexes, de manipuler un ou plusieurs paramètres et de retourner des résultats précis. Elles sont généralement utilisées afin de produire des valeurs.</p>

<p>Par exemple, une variable d'espacement <incode>$gutter: 26px;</incode> pourrait nécessitée d'être divisée en deux lorsque deux éléments l'utilisant se suivent afin d'éviter que l'espacement soit doublé. Pour palier à ce problème, il serait possible de se créer une fonction divisant cette valeur:</p>

<highlight lang='css'>@function half($num) {
 @return $num / 2;
}</highlight>



<p>Ainsi il serait possible d'écrire:</p>

<highlight lang='css'>.card {
  padding: half($gutter); // 13px
}</highlight>

<info>Remarquez <incode>@return</incode> qui indique quel élément dans la fonction doit être&nbsp;retourné.</info>
<br>
 <p>Pourquoi ne pas utiliser <incode>calc()</incode> plutôt? La fonction <incode>calc()</incode> est interprété dans le navigateur donc demande quelques fractions de seconde de plus à votre navigateur afin d'afficher, tandis que tout calcul effectué directement via SASS est effectué au moment de la compilation et donc n'engendre aucun délais pour l'usager.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/function'>@function</doclink>
<dots></dots>


<exercice href='../../exercices/sass-function-uno/'></exercice>
