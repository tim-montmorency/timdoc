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

DEMO

<p>Cependant, si la dimension de cet cet élément est fixe et si on a un écran plus petit que 1000px, l'image sera partiellemet hors cadre et l'utilisateur devra défiler la page pour visionner l'ensemble de l'image, ce qui n'est pas très <em>responsive</em>.</p> 


