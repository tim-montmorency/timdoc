<?php 
/**
 * @type     article
 * @title    4-Contrôle d'une animation
 * @icon     ../images/icon.webp
 * @abstract play, pause, reverse, timscale, progress, seek
 * @index    997
 * @ref      web/cadriciels/gsap
 */
?>



<p>Pour contrôler le déroulement d'une animation, il faut préalablement se créer une référence vers celle-ci en la stockant dans une variable. À partir de cette variable, il est possible d'appeler différentes fonctions.</p>




<grostitre>Play vs Pause vs Reverse</grostitre>

<p class="codepen" data-height="420" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="BaOvBqv" data-user="tim-momo" style="height: 420px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaOvBqv">
  GSAP -  TimeScale</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>



<p>Par défaut, dès qu'une animation est déclarée, elle se déclenche immédiatement. Afin de contourner ce problème, vous pouvez lui passer&nbsp;<incode>paused: true</incode>.</p>

<p>Par exemple:</p>


          <highlight lang='javascript'>var animation = gsap.to('.element', { 
  duration: 2,
  x: '400%',
  paused: true
});</highlight>
          
<exercice href="../exercices/voiture-mauve/"></exercice>        
<dots></dots>




<grostitre> TimeScale</grostitre>
  
<p>Permets de définir la vitesse de lecture de l'animation. Par exemple,&nbsp;<incode>timeScale(4)</incode>&nbsp;permet de jouer une animation 4x plus rapidement, tandis que&nbsp;<incode>timeScale(0.5)</incode>&nbsp;permet de ralentir de moitié la dite&nbsp;animation.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="xxamKPE" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/xxamKPE">
  GSAP -  TimeScale</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<br>
          
<exercice href="../exercices/voiture-verte/"></exercice>        
<dots></dots>

<grostitre>Progress</grostitre>
  

<p>Permet de déplacer la tête de lecture de l'animation à pourcentage de progression précis. Par exemple,&nbsp;<incode>progress(0.25)</incode>&nbsp;positionnerait le carré comme si le quart de l'animation avait été jouée, versus à la moitié avec&nbsp;<incode>progress(0.5)</incode>&nbsp;et au trois quart avec&nbsp;<incode>progress(0.75)</incode>.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="dyqwbaJ" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/dyqwbaJ">
  GSAP -  Progress</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<dots></dots>

<grostitre>Seek</grostitre>
        

<p>Tout comme&nbsp;<a rel="noopener noreferrer" href="#progress">Progress</a>,&nbsp;<incode>seek()</incode>&nbsp;permet de déplacer la tête de lecture. Cependant, plutôt que de se baser sur un pourcentage d'avancement, son déplacement est calculé en secondes. Par exemple, une demi-seconde&nbsp;<incode>seek(0.5)</incode>, une seconde&nbsp;<incode>seek(1)</incode>, une seconde et demie&nbsp;<incode>seek(1.5)</incode>.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="YzOdKML" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/YzOdKML">
  GSAP -  Progress</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

  
</div>



<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
