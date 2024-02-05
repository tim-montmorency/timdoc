<?php 
/**
 * @type     article
 * @title    Animation sprite sheet intermédiaire
 * @icon     images/icon.png
 * @abstract Animation adaptative (responsive) de feuilles de sprites 
 * @ref      web/css
 */
?>


 <grostitre>Rappel de l'introduction à l'animation d'une Sprite Sheet</grostitre>

 <intlink href="../../../582-215MO/css/animation-sprite-sheet/"></intlink>

 <dots></dots>

 <grostitre>Animation d'une Sprite Sheet adaptée à la largeur de l'écran (responsive)</grostitre>

 <p>Lorsqu'on travaille avec une <em>Sprite Sheet</em>, il faut d'abord créer un élément HTML dont la dimension correspond à celle d’une seule image-clé. Dans cet exemple, 700px par 700px. Et y ajouter notre sprite sheet en <incode>background-image</incode>.</p>

<codepen id="WNaQRWN" tab="result" height="780"></codepen>

<p>Cependant, si la dimension de cet cet élément est fixe et si on a un écran plus petit que 700px, l'image sera partiellement hors cadre et l'utilisateur devra défiler la page pour visionner l'ensemble de l'image, ce qui n'est pas très <em>responsive</em>.</p> 

<p>Il faudra alors utiliser l'unité de pourcentage de l'espace disponible (<incode>%</incode>) ou les unités du <em>viewport</em> telles que <incode>vw</incode>, <incode>vh</incode>, <incode>vmin</incode> ou <incode>vmax</incode> pour faire en sorte que la taille de l'image s'adapte à l'espace disponible par rapport à la taille de l'écran.</p>

<p>Essayons par exemple une largeur de 50vw (viewport width). Afin que l'image conserve son ratio largeur/hauteur, utilisons la propriété CSS <incode>aspect-ratio</incode>. Dans le cas actuel le ratio est littéralement 1 pour 1 car l'image-clés est de 700px X 700px. Dans un autre cas, il faudra réduire la fraction jusqu'à avoir la fraction irréductible, celle-ci sera donc la valeur de <incode>aspect-ratio</incode>. Vous pouvez utiliser des outils en ligne pour réduire vos fractions tels que <a href="https://www.calculatorsoup.com/calculators/math/fractionssimplify.php">celui-ci</a>.</p> 
<p>Voici le résultat: </p>


<codepen id="yLRYMGP" tab="result" height="500"></codepen>

<dots></dots>

<p>On remarque que l'image déborde de son cadre.</p>
<ul>
  <li>Il faudra alors changer le <incode>background-size</incode>afin d'ajuste la première image-clé dans son conteneur, peu importe sa dimension. Vous pouvez désactiver l'animation le temps de tester celà.</li>
  <li>Puis, dans l'animaiton même, vous devrez ajuster le déplacement de la valeur du <incode>background-position</incode> pour être en accord avec la largeur de l'élément, peu importe sa dimension."</li>
  <li>Allez-y en toute logique, sachant qu'il y a un nombre défini d'images-clés.</li>
</ul>





<dots></dots>
<p>En vous basant sur cette information, je vous laisse essayer de comprendre comment on peut faire une "sprite sheet" réactive avec cet exercice exploratoire:</p>
<exercice href="../exercices/sprite-sheet-responsive/"></exercice>



