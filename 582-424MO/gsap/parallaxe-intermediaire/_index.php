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

<p>Pour animer en parallaxe, vous le savez, les couches les plus près de nous vont bouger plus rapidement que les couches plus loin de nous.</p>
<p>Si vous positionnez vos éléments en <incode>position: absolute</incode> dans son conteur qui a lui, une <incode>position: relative</incode>, 'oubliez pas de leur accorder un <incode>z-index</incode> en fonction de l'ordre des couches que vous souhaitez établir (plus le z-index est grand, plus la couche est par dessus).</p>
<dots></dots>
<p>Avec GSAP et scrollTrigger, par la suite, il vous suffira d'ajouter un coéficient de vitesse au mouvement désiré. </p>
<p>Par exemple si un élément bouge vers la droite, sur l'axe des x, 100px. Pour le mouvement de l'arrière plan, vous pourriez multiplier ce 100px par un coéficient moindre, par exemple 0.5. Ainsi l'arrière-plan bougerait 2x moins vite que l'élément en avant-plan. </p>


<exercice href="../exercices/gsap-scrollTrigger-parallax/"></exercice>     
<exercice href="../exercices/gsap-scrollTrigger-parallax2/"></exercice>   

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


