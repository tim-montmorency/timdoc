<?php
/**
 * @type     article
 * @title    Animation
 * @icon     images/icon.png
 * @abstract @keyframes, animation-name, animation-duration, etc.
 */
?>

<grostitre>@keyframes</grostitre>

<p>Les keyframes indiquent les étapes constituant une animation.</p>

<p>Dans son expression la plus simple, il est possible de spécifier un état de départ <incode>from</incode> <em>(0%)</em> et un état de fin <incode>to</incode> <em>(100%)</em>.</p>

<highlight lang="css">@keyframes anim { 
  from { transform: translateX(0%) } 
  to { transform: translateX(400%) }  
}</highlight>

<p>Une interpolation sera effectuée entre ces deux états.</p>

<p>Pour une animation plus élaborée, il est possible de spécifier plusieurs états avec des pourcentages.</p>

<highlight lang="css">@keyframes anim { 
  0%, 100% { transform: translate(0%, 0%) } 
  25% { transform: translate(400%, 0%) }  
  50% { transform: translate(400%, 200%) }  
  75% { transform: translate(0%, 200%) }  
}</highlight>

<codepen id="QWBoOQm" tab="result" height="340"></codepen>

<span class="remark">À gauche, @keyframes utilisant un <incode>from</incode> et un <incode>to</incode>.<br>À droite, @keyframes utilisant des pourcentages.</span>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/@keyframes">@keyframes</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-keyframes.asp">@keyframes</doclink>

<dots></dots>

<grostitre>animation-name</grostitre>

<p>Permet d'attribuer une animation à partir de son nom de référence en indiquant quel <a href="#keyframes">@keyframes</a> appliquer à quel élément.</p>

<p>Par exemple, pour que l'élément avec la classe <incode>.element</incode> ait l'animation intitulée <incode>anim</incode>, il est possible de faire:</p>

<highlight lang="css">.element {
  animation-name: anim;
}</highlight>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-name">animation-name</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-name.asp">animation-name</doclink>

<dots></dots>


<grostitre>animation-duration</grostitre>

<p>Définis la durée d'une animation. Ce nombre peut-être en seconde ou en milliseconde. <incode>1s</incode> = <incode>1000ms</incode>.</p>

<p>Par exemple, nous avons trois fois la même animation <incode>animation-name: left-to-right</incode>, mais à des durées différentes:</p>

<ol>
  <li>1 seconde</li>
  <li>2 secondes</li>
  <li>3 secondes</li>
</ol>

<codepen id="xxJBYEp" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-duration">animation-duration</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-duration.asp">animation-duration</doclink>

<dots></dots>


<grostitre>animation-timing-function</grostitre>

<p>Dicte à l'animation son rythme. Par exemple, dans l'animation précédente on remarque que chaque carré accélère progressivement avant de ralentir ensuite. Ce rythme est appelé <incode>ease</incode> et est celui par défaut des animations.</p>

<p>L'exemple suivant contient six fois la même animation, mais avec des rythmes différents.</p>

<ol>
  <li><incode>linear</incode> vitesse constante, n'accélère ou ne ralentis jamais ↗️</li>
  <li><incode>ease</incode> accélère progressivement et ralentis en fin de parcours <em>(Comportement par défaut)</em></li>
  <li><incode>ease-in-out</incode> commence lentement et ralentis en fin de parcours.</li>
  <li><incode>ease-in</incode> commence lentement ⤴️</li>
  <li><incode>ease-out</incode> ralentis en fin de parcours ⤵️</li>
  <li><incode>cubic-bezier</incode> Rythme personnalisable via une courbe de Bézier.</li>
</ol>

<codepen id="KKBEQaM" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-timing-function">animation-timing-function</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-timing-function.asp">animation-timing-function</doclink>

<tool href="tools/cubic-bezier/"></tool>

<dots></dots>


<grostitre>animation-iteration-count</grostitre>

<p>Indique le nombre de fois qu'une animation doit être jouée <em>(par défaut 1)</em>. Ce nombre peut-être compris entre 0 et ∞ et accepte les fractions. Il est aussi possible de spécifier <incode>infinite</incode> pour qu'elle joue à l'infini.</p>

<p>Par exemple:</p>

<ol>
  <li>Joue 1x</li>
  <li>Joue 2x</li>
  <li>Joue à l'infinie ♾️</li>
</ol>

<codepen id="LYBaQLB" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-iteration-count">animation-iteration-count</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp">animation-iteration-count</doclink>

<exercice href="exercices/fantome/"></exercice>

<dots></dots>


<grostitre>animation-delay</grostitre>

<p>Définis le délai d'attente avant de démarrer une animation. Par défaut, cette propriété est à <incode>0s</incode>. Si une valeur négative est attribuée, l'animation débutera déjà commencé, comme-ci l'équivalent de la valeur s'était déjà écoulée.</p>

<p>Par exemple:</p>

<ol>
  <li>Aucun délai</li>
  <li>Délais de 0.5s</li>
  <li>Délais d'une seconde</li>
</ol>

<codepen id="QWBoQmK" tab="result" height="340"></codepen>

<warning>Le délai n’est effectif qu’au démarrage d’une animation. Si celle-ci joue plus d’une fois, le délai ne sera pas effectif à chaque itération.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-delay">animation-delay</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-delay.asp">animation-delay</doclink>

<dots></dots>


<grostitre>animation-direction</grostitre>

<p>Indique la direction dans laquelle une animation doit-être joué.</p>

<p>Valeurs possibles:</p>

<ul>
  <li><incode>normal</incode> du début vers la fin <em>(par défaut)</em></li>
  <li><incode>reverse</incode> de la fin vers le début</li>
  <li><incode>alternate</incode> alterne entre normal et reverse à chaque itération de l'animation.</li>
  <li><incode>alternate-reverse</incode> alterne entre reverse et normal à chaque itération de l'animation.</li>
</ul>

<p>Par exemple:</p>

<ol>
  <li>Normal</li>
  <li>Renversé</li>
  <li>Alterné</li>
</ol>

<codepen id="VwBRQxg" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-direction">animation-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-direction.asp">animation-direction</doclink>

<exercice href="exercices/pong/"></exercice>
<exercice href="exercices/yo-yo/"></exercice>
<exercice href="exercices/pendule/"></exercice>

<dots></dots>


<grostitre>animation-fill-mode</grostitre>

<p>Indique l'apparence que doit prendre l'élément lorsque l'animation est terminée.</p>

<p>Valeurs possibles:</p>

<ul>
  <li><incode>none</incode> redevient tel qu'avant l'animation <em>(par défaut)</em></li>
  <li><incode>forwards</incode> garde l'apparence donnée par l'animation à la fin</li>
  <li><incode>backwards</incode> garde l'apparence donnée par l'animation au  début</li>
  <li><incode>both</incode> combine l'apparence donnée par l'animation au  début et à la fin</li>
</ul>

<p>Par exemple:</p>

<ol>
  <li>None</li>
  <li>Forwards</li>
</ol>

<codepen id="KKBEoKX" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-fill-mode">animation-fill-mode</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-fill-mode.asp">animation-fill-mode</doclink>

<exercice href="exercices/billes/"></exercice>

<dots></dots>


<grostitre>animation-play-state</grostitre>

<p>Indique si une animation doit jouer ou être en pause.</p>

<p>Valeurs possibles et exemple:</p>

<ol>
  <li><incode>running</incode> l'animation joue</li>
  <li><incode>paused</incode> l'animation est en pause</li>
</ol>

<codepen id="JjBzLGz" tab="result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/animation-play-state">animation-play-state</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_animation-play-state.asp">animation-play-state</doclink>

<exercice href="exercices/new-super-luigi/"></exercice>

<dots></dots>