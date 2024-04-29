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

<p>Voici un exemple d'un parallax sur l'arrère-plan:</p>
<codepen id="poxNKPv" tab="result" height="500"></codepen>

<dots></dots>
<p>Voici un exemple vraiment intéressant de <em>isladjan</em> pour vous inspirer un peu.</p>
<codepen id="yLRVEmg" tab="result" height="500"></codepen>


<p>Pour animer en parallaxe, vous le savez, les couches les plus près de nous vont bouger plus rapidement que les couches plus loin de nous.</p>
<p>Cependant, lorsqu'on travaille avec une synchonisation du <em>scroll</em>, étant donné que la vitesse d'animation est unique et correspond à la vitesse du défilement de l'utilisateur, les images plus près vont bouger sur une plus grande distance que les images qui sont éloignées.</p>
<p>Si vous positionnez vos éléments en <incode>position: absolute</incode> dans son conteneur qui a lui, une <incode>position: relative</incode>, n'oubliez pas de leur accorder un <incode>z-index</incode> en fonction de l'ordre des couches que vous souhaitez établir (plus le <incode>z-index</incode> est grand, plus l'élément se retrouve au dessus).</p>


<dots></dots>
<p>Après avoir bien positionné vos éléments en css, avec GSAP et scrollTrigger, il vous suffira d'ajouter un coéficient de vitesse au mouvement désiré. </p>

<p>Par exemple, si un élément bouge vers la droite de <incode>100px</incode> sur l'axe des x, alors pour le mouvement de l'arrière plan, vous pourriez multiplier ce <incode>100px</incode> par un coéficient moindre, par exemple <incode>0.5</incode>. Ainsi l'arrière-plan bougerait 2x moins vite que l'élément en avant-plan. En fait, comme la vitesse n'est pas en jeu dans le scroll, on peut dire que l'arrière-plan se déplace sur une moins longue distance par rapport à l'élément en avant plan.</p>

<p>Voici un exemple d'utilisation de ce principe de coéficient :</p>
<codepen id="oNOOVgW" tab="result" height="500"></codepen>

<dots></dots>
<p>Autre exemple avec plusieurs couches (allez  voir le javaScript) :</p>
<codepen id="oNOQZGZ" tab="result" height="500"></codepen>


<dots></dots>
<exercice href="../exercices/gsap-scrollTrigger-parallax/"></exercice>     
<exercice href="../exercices/gsap-scrollTrigger-parallax2/"></exercice>   

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>


