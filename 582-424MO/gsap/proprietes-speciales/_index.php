<?php 
/**
 * @type     article
 * @title    3-Propriétés spéciales
 * @icon     images/icon.svg
 * @abstract duration, repeat, yoyo, delay, stagger, ease, callbacks
 * @index    998
 */
?>



<p>En plus des propriétés CSS de base, il est possible d'utiliser des propriétés&nbsp;spéciales.</p>




<grostitre>Duration</grostitre>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-duration">animation-duration</a>&nbsp;en CSS, la propriété&nbsp;<incode>duration</incode>&nbsp;de
    GSAP permet de spécifier la durée d'une&nbsp;animation.</p>




<p class="codepen" data-height="420" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="JjaNbQQ" data-user="tim-momo" style="height: 420px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjaNbQQ">
  GSAP - fromTo()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<info>Si aucune durée n’est spécifiée, GSAP utilisera une durée d’une demi-seconde <em>(0.5s)</em> par&nbsp;défaut.</info>




<dots></dots>
<grostitre>Repeat</grostitre>


<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-iteration-count">animation-iteration-count</a>&nbsp;en CSS, la
    propriété&nbsp;<incode>repeat</incode>&nbsp;de GSAP permet de spécifier le nombre de fois qu'une animation
    doit-être&nbsp;effectué.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="LYJyxYY" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/LYJyxYY">
  GSAP - Duration</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<warning>Plutôt que d’utiliser le mot <incode>infinite</incode> pour indiquer qu’une animation doit jouer à l’infinie,
            GSAP s’attend à recevoir <incode>-1</incode>, comme pour le dernier carré du précédent&nbsp;exemple.</warning>



<dots></dots>

<grostitre>Yoyo</grostitre>



<p>De façon similaire à&nbsp;<a href="../../../582-215MO/css/animation/#animation-direction" target="_blank">animation-direction: alternate;</a> en CSS, la propriété&nbsp;<incode>Yoyo</incode> de GSAP permet d'indiquer à une animation d'alterner de direction à chaque&nbsp;répétition.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="ExemMPJ" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExemMPJ">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<dots></dots>

<grostitre>Delay</grostitre>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-delay">animation-delay</a>&nbsp;en CSS, la propriété&nbsp;<incode>delay</incode>&nbsp;de GSAP
    permet de spécifier un délai d'attente avant de démarrer une&nbsp;animation.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="MWqmPxV" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWqmPxV">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<warning>delay peut être pratique pour synchroniser 2 ou 3 éléments, mais pour une synchronisation plus complexe, il
            est conseillé d’utiliser une&nbsp;timeline.</warning>




<dots></dots>
<grostitre>Stagger</grostitre>


<p>Similaire à&nbsp;<a rel="noopener noreferrer" href="#delay">Delay</a>, Stagger fait en sorte qu'un groupe
    d'éléments&nbsp;<em>(.element)</em>&nbsp;ayant tous la même animation soient décalés. Ainsi, plutôt que de voir les
    trois carrés se déplacer en même temps, un délai de 0.2s est ajouté entre chaque&nbsp;animation.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="mdGmoRO" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdGmoRO">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Il est aussi possible de passer un objet à&nbsp;<incode>stagger</incode>&nbsp;plutôt qu'un nombre. Dans cet objet, il est
    possible de spécifier le décalage entre chaque&nbsp;élément.</p>
<p>Par&nbsp;exemple:</p>
<highlight lang='javascript'>gsap.from('.element', { 
  x: '400%',
  stagger: {
    each: 0.2
  }
});</highlight>

<p>Générerait exactement le même résultat que dans l'exemple précédent. Cependant, il est possible de passer des
    propriétés et valeurs supplémentaires afin de raffiner l'animation. Notamment,&nbsp;<incode>from</incode>, soit le point
    de départ de&nbsp;l'animation.</p>
<ul>
    <li>
        <incode>"start"</incode>&nbsp;part du début vers la fin&nbsp;<em>(par&nbsp;défaut)</em>
    </li>
    <li>
    <incode>"end"</incode>&nbsp;part de la fin vers le&nbsp;début
    </li>
    <li>
    <incode>"center"</incode>&nbsp;du centre vers les&nbsp;extrémités
    </li>
    <li>
        <incode>"edges"</incode>&nbsp;des extrémités vers le&nbsp;centre
    </li>
    <li>
        <incode>"random"</incode>&nbsp;de façon aléatoire
    </li>
</ul>
<br>
<p class="codepen" data-height="380" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="WNgjWEB" data-user="tim-momo" style="height: 380px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNgjWEB">
  GSAP - Stagger</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>

<doclink href='https://greensock.com/docs/v3/Staggers'>Staggers</doclink>
<br><br>
<exercice href='../exercices/gsap-stagger-dominos/'></exercice>





<dots></dots>
<grostitre>Ease</grostitre>

<p>Permets de dicter le rythme de l'animation, de la même façon que la&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../../582-215MO/css/animation/#animation-timing-function">animation-timing-function</a>&nbsp;permet de le faire pour les animations/transitions&nbsp;CSS.</p>

<p class="codepen" data-height="330" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="JjaNVpy" data-user="tim-momo" style="height: 330px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjaNVpy">
  GSAP - Ease</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<p><strong>Valeurs possibles:&nbsp; </strong></p>
<p><incode>none</incode>,&nbsp;<incode>power1</incode>, <incode>power2</incode>, <incode>power3</incode>,&nbsp;<incode>power4</incode>,
    <incode>back</incode>, <incode>elastic</incode>, <incode>bounce</incode>, <incode>rough</incode>, <incode>slow</incode>,
    <incode>steps</incode>, <incode>circ</incode>, <incode>expo</incode>, <incode>sine</incode>
</p>
<p>Il est possible de spécifier si un&nbsp;<incode>ease</incode>&nbsp;doit être effectué au début, à la fin ou au début et à
    la fin en ajoutant&nbsp;<incode>.in</incode>,&nbsp;<incode>.out</incode>&nbsp;ou&nbsp;<incode>.inOut</incode>&nbsp;après le nom
    du ease souhaité. Par exemple:&nbsp;<incode>bounce.inOut</incode>;</p>
<p>Si aucune spécification n'est donnée,&nbsp;<incode>.out</incode>&nbsp;sera&nbsp;utilisé.</p>


<tool href='../tools/ease-visualizer/'></tool>

<dots></dots>
<grostitre>Callbacks</grostitre>

<p>Les&nbsp;<incode>Callbacks</incode>&nbsp;permettent de déclencher une fonction JavaScript à différents moments clés
    d'une&nbsp;animation.</p>
<p>Par exemple, pour se synchroniser avec son début 🏁, il est possible d'utiliser&nbsp;<incode>onStart</incode>&nbsp;ou
    encore, avec sa fin 🔚 avec&nbsp;<incode>onComplete</incode>, comme dans l'exemple&nbsp;ci-dessous.</p>



<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="BaOREVE" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaOREVE">
  GSAP - Ease</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>
<doclink href='https://greensock.com/docs/v3/GSAP/Timeline/eventCallback()'>Callbacks</doclink>

<br><br>


<exercice href="../exercices/voiture-bleue"></exercice>


<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>