<?php 
/**
 * @type     article
 * @title    9-Parallaxe intermédiaire
 * @icon     ../images/icon.webp
 * @abstract Effet parallaxe à l'aide de GSAP et ScrollTrigger
 * @index    550
 * @ref      web/cadriciels/gsap
 */
?>
<grostitre>Animation de plusieurs couches</grostitre>

<p>Voici un exemple vraiment intéressant de <em>isladjan</em> pour vous inspirer un peu.</p>
<codepen id="yLRVEmg" tab="result" height="500"></codepen>


<p>Pour animer en parallaxe, vous le savez, les couches les plus près de nous vont bouger plus rapidement que les couches plus loin de nous.</p>
<p>Si vous positionnez vos éléments en <incode>position: absolute</incode> dans son conteur qui a lui, une <incode>position: relative</incode>, n'oubliez pas de leur accorder un <incode>z-index</incode> en fonction de l'ordre des couches que vous souhaitez établir (plus le z-index est grand, plus l'élément se retrouve au dessus).</p>
<dots></dots>
<p>Avec GSAP et scrollTrigger, par la suite, il vous suffira d'ajouter un coéficient de vitesse au mouvement désiré. </p>
<p>Par exemple si un élément bouge vers la droite de 100px sur l'axe des x. Pour le mouvement de l'arrière plan, vous pourriez multiplier ce 100px par un coéficient moindre, par exemple 0.5. Ainsi l'arrière-plan bougerait 2x moins vite que l'élément en avant-plan. </p>


<exercice href="../exercices/gsap-scrollTrigger-parallax/"></exercice>     
<exercice href="../exercices/gsap-scrollTrigger-parallax2/"></exercice>   

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


