<?php

/**
 * @type     article
 * @title    Animation Sprite Sheet
 * @icon     images/icon.png
 * @abstract animation image par image
 * @ref      web/css
 */
?>

<p class="spacer">Pensez au cinéma 📽️. Une pellicule contient de nombreuses images 🎞️. Chaque image représente une étape dans un mouvement.</p>

<img src="images/spritesheet-horse.png">

<p>Pour voir un mouvement continu, ces 15 images doivent s'afficher dans un interval régulier. Plus le nombre d'images est élevé, plus le mouvement est fluide.</p>

<clipasset src="videos/spritesheet-horse-animated.mp4"></clipasset>

<p>Les animations de type sprite sheet fonctionnent sur le même principe.</p>

<dots></dots>


<grostitre>Fichier image</grostitre>

<p>Il est nécessaire d’avoir une sprite sheet regroupant toutes les images clés <em>(keyframes)</em> constituant l’animation. Toutes les images clés doivent avoir la même dimension et être placées à une distance équivalente.</p>

<img src="images/spritesheet-trump-1.png">

<p>Par exemple, chaque image clé constituant l’animation de Donald Trump mesure 250px de large par 250px de haut. Puisque la sprite sheet est constituée de dix images clés, elle mesure donc 2500px de large pour une hauteur de 250px.</p>

<img src="images/spritesheet-trump-2.png">

<warning>Il est important que les images clés aient toutes la même dimension et soient placés à des distances équivalentes, sinon un <em>"glitch"</em> sera visible dans l’animation.</warning>

<tool href="tools/responsive-css-sprites/"></tool>

<p>Les images sources ont parfois besoin d'être redimensionnées ou recadrées avant d'être utilisées pour générer une sprite sheet, dans ce cas l'option la plus efficace est d'utiliser une <a href="../../autres/actions-photoshop/">Action Photoshop</a>.</p>

<dots></dots>


<grostitre>Animation</grostitre>

<p>Si nous pouvions <em>"flasher"</em> chaque image à interval régulier, nous pourrions voir l'animation.</p>

<p>Il faut d'abord créer un élément HTML dont la dimension correspond à celle d’une image clé. Dans cet exemple, 250px par 250px. Et y ajouter notre sprite sheet en background-image.</p>

<p>Ainsi, seule la première image clé devrait-être visible.</p>

<codepen id="BaOaBOJ" tab="css,result" height="360"></codepen>

<p>Il faut ensuite animer la propriété <incode>background-position</incode> de sorte que la sprite sheet se déplace vers la gauche et que toutes les images-clés défilent une à la suite de l'autre.</p>

<p>Dans cet exemple, nous déplaçons donc la sprite sheet de sa largeur soit <incode>-2500px</incode>.</p>

<codepen id="QWVWLZV" tab="css,result" height="360"></codepen>

<p>Malheureusement, l'effet n'est pas convaincant puisqu'il y a une interpolation sur la propriété <incode>background-position</incode>.</p>

<p>Il est néanmoins possible d’ajuster la propriété <a href="../animation/#animation-timing-function">animation-timing-function</a> afin de remédier à cette situation. Plutôt que de lui donner une valeur telle que <incode>ease</incode> ou <incode>linear</incode>, il est possible de lui passer la fonction <incode>steps()</incode>. Cette dernière permet de spécifier le nombre d’étapes devant constituer l'animation.</p>

<p>Par exemple, nous avons dix images clés constituant l’animation de Donald Trump. Il faudra donc spécifier <incode>steps(10)</incode>.</p>

<codepen id="MWqWgzx" tab="css,result" height="360"></codepen>

<bravo>
  <h5>CRÉDITS</h5>
  Shout out à Denys Almaral et Jose Sinchicay pour l’<a target="_blank" href="https://denysalmaral.com/2017/02/joining-images-to-create-sprite-sheet-update-to-px-spritesrender-script.html">animation de Donald Trump</a>!
</bravo>

<dots></dots>

<exercice href="exercices/sonic-knuckles/"></exercice>

<dots></dots>