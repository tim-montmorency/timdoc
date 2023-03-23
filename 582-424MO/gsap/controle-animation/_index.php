<?php 
/**
 * @type     article
 * @title    4-Contrôle d'une animation
 * @icon     images/icon.svg
 * @abstract play, pause, reverse, timscale, progress, seek
 * @index    997
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



<p>Par défaut, dès qu'une animation est déclarée, elle se déclenche immédiatement. Afin de contourner ce problème, vous pouvez lui passer&nbsp;<code>paused: true</code>.</p>

<p>Par exemple:</p>


          <highlight lang='javascript'>var animation = gsap.to('.element', { 
  duration: 2,
  x: '400%',
  paused: true
});</highlight>
          
<exercice href="../exercices/voiture-mauve/"></exercice>        
<dots></dots>




<grostitre> TimeScale</grostitre>
  
<p>Permets de définir la vitesse de lecture de l'animation. Par exemple,&nbsp;<code>timeScale(4)</code>&nbsp;permet de jouer une animation 4x plus rapidement, tandis que&nbsp;<code>timeScale(0.5)</code>&nbsp;permet de ralentir de moitié la dite&nbsp;animation.</p>

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
  

<p>Permet de déplacer la tête de lecture de l'animation à pourcentage de progression précis. Par exemple,&nbsp;<code>progress(0.25)</code>&nbsp;positionnerait le carré comme si le quart de l'animation avait été jouée, versus à la moitié avec&nbsp;<code>progress(0.5)</code>&nbsp;et au trois quart avec&nbsp;<code>progress(0.75)</code>.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="dyqwbaJ" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/dyqwbaJ">
  GSAP -  Progress</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<dots></dots>

<grostitre>Seek</grostitre>
        

<p>Tout comme&nbsp;<a rel="noopener noreferrer" href="#progress">Progress</a>,&nbsp;<code>seek()</code>&nbsp;permet de déplacer la tête de lecture. Cependant, plutôt que de se baser sur un pourcentage d'avancement, son déplacement est calculé en secondes. Par exemple, une demi-seconde&nbsp;<code>seek(0.5)</code>, une seconde&nbsp;<code>seek(1)</code>, une seconde et demie&nbsp;<code>seek(1.5)</code>.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="YzOdKML" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/YzOdKML">
  GSAP -  Progress</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

  
</div>



<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
