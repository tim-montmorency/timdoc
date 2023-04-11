<?php 
/**
 * @type     article
 * @title    Animation sprite sheet intermédiaire
 * @icon     images/icon.png
 * @abstract Animation adaptative (responsive) de feuilles de sprites 
 */
?>


 <grostitre>Rappel de l'introduciton à l'animation d'une <em>Sprite Sheet</em></grostitre>

 <?php intlink("../../../582-215MO/css/animation-sprite-sheet/") ?>

 <dots></dots>

 <grostitre>Animation d'une <em>Sprite Sheet</em> adaptée à la largeur de l'écran (responsive)</grostitre>

 <p>Lorsqu'on travaille avec une <em>Sprite Sheet</em>, il faut d'abord créer un élément HTML dont la dimension correspond à celle d’une seule image-clé. Dans cet exemple, 1000px par 1000px. Et y ajouter notre sprite sheet en background-image.</p>

 <p class="codepen" data-height="1000" data-theme-id="44431" data-default-tab="css,result" data-slug-hash="WNaQRWN" data-user="tim-momo" style="height: 1000px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNaQRWN">
  Spritesheet - Trump 3</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<p>Cependant, si la dimension de cet cet élément est fixe et si on a un écran plus petit que 1000px, l'image sera partiellemet hors cadre et l'utilisateur devra défiler la page pour visionner l'ensemble de l'image, ce qui n'est pas très <em>responsive</em>.</p> 


