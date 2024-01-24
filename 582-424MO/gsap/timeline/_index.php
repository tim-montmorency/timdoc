<?php 
/**
 * @type     article
 * @title    5-Timeline
 * @icon     ../images/icon.webp
 * @abstract Une ligne du temps pour vous permettre d'organiser un groupe d'animations.
 * @index    980
 * @ref      web/quadriciels/gsap
 */
?>

<grostitre>Intro</grostitre>
<p>La&nbsp;<incode>Timeline</incode>de&nbsp;<a target="_blank" rel="noopener noreferrer" href="../introduction">GSAP</a>&nbsp;permet d'organiser un groupe d'animations. Par exemple, pour enchaîner trois animations une à la suite de l'autre, afin de créer une animation complexe, il serait nécessaire d'appliquer un délai sur chacune d'entre&nbsp;elles.</p>

<p>Cependant, avec une timeline, il suffit d'enchainer les animations une à la suite de l'autre pour quelles se déclenches&nbsp;successivement.</p>

<p>Par&nbsp;exemple:</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="rNZgdVP" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/rNZgdVP">
  GSAP -  TimeScale</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>





<info>Afin de faciliter la lecture de l’animation, il est conseillé de séparer chaque étape sur une ligne&nbsp;différente.</info>



<p>Si cette animation avait été conçue avec des délai et que pour une raison quelconque la durée d'une des animations devait être modifiée, le délai de chacune des animations la suivant aurait dû être recalculé et changé à la main. Tandis qu'avec une timeline, cette modification se fait automatiquement.</p>

<dots></dots>

<grostitre>Paramètres de position des animations dans une timeline</grostitre>

<p>Par défaut, les animations sont ajoutées à la <em>fin</em> de la ligne de temps, de sorte qu'elles s'enchaînent les unes après les autres, mais vous pouvez utiliser le <em>paramètre position</em> pour contrôler précisément l'endroit où elles sont placées dans le temps. </p>


<p>Il est parfois souhaitable qu'une animation se déclenche plus tôt ou plus tard et non immédiatement après l'animation précédente. Pour ce faire, il est possible de passer un 3<sup>e</sup>&nbsp;paramètre à une animation se trouvant dans une&nbsp;<incode>timeline</incode>. Ce 3e paramètre vient généralement après l'objet contenant les propriétés animées <em>{}</em> tel que démontré dans ces 2 exemples :</p>

<highlight lang='JavaScript'>gsap
  .timeline()
  .from(".element.no1", { x:"400%" })
  .from(".element.no2", { x:"400%" }, 0.5)
  .from(".element.no3", { x:"400%"} );</highlight>
<p>Autre exemple:</p>

<highlight lang='JavaScript'>gsap
  .timeline()
  .from(".element.no1", { x:"400%" })
  .from(".element.no2", { x:"400%" }, '+=0.5')
  .from(".element.no3", { x:"400%"} );</highlight>

<dots></dots>


<h3 id="position-absolue">Position absolue</h3>

<p>Les paramètres de <em>position absolue</em> déterminent le moment du départ de l'animation d'un objet. Ce temps, spécifié en secondes, est le délai par rapport au déclenchement de la timeline (bref par rapport au début <em>ABSOLU</em> de la chaine d'animations).</p>

<p>Par exemple, si le 2<sup>e</sup> 🟦 devait commencer après cinq secondes&nbsp;<em>(créant ainsi un délai)</em>, il serait possible d'utiliser&nbsp;<incode>5</incode> comme troisième paramètre.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="LYJodBR" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/LYJodBR">
  GSAP - Timeline basic chaining</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<info>Remarquez comment le 3e carré 🟥 reste synchronisé avec l’animation précédente même si elle à un paramètre de position&nbsp;absolue.</info>

<dots></dots>
<h3 id="position-relative">Position relative</h3>

<h4>Délai (+=) ou en avance (-=)</h4><br>

<p>Il est possible de spécifier un délai de départ d'une animation par rapport à l'animation&nbsp;précédente, donc <em>RELATIF</em> à l'animation précédente. Ce délai peut être <em>positif ou négatif</em>.</p>

<p>Par exemple, pour ajouter un délai d'une seconde avant de déclencher la prochaine animation, il est possible de spécifier&nbsp;<incode>"+=1"</incode>. </p>
<p>Pour qu'une animation commence une seconde plus tôt, le code serait <incode>"-=1"</incode>, comme dans l'exemple&nbsp;suivant, où le 2<sup>e</sup>&nbsp;carré 🟦 débute au milieu de la course du 1<sup>er</sup> carré plutôt qu'à la fin de celle-ci.</p>

<p class="codepen" data-height="330" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="bGxyMEz" data-user="tim-momo" style="height: 330px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/bGxyMEz">
  GSAP -  Timeline - Relative position parameter</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br><br>
<h4>En même temps (<)</h4><br>






<p>Cependant, si l'objectif est de démarrer l'animation en même temps que la précédente, il existe une position efficace pouvant se synchroniser avec le début de l'animation précédente, et ce même si la durée de celle-ci venait à&nbsp;changer.</p>

<p>Pour ce faire, il faut utiliser&nbsp;<incode>"&lt;"</incode>&nbsp;comme&nbsp;ceci:</p>



<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="poOmVPv" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/poOmVPv">
  GSAP -  Timeline position sync</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<info>Il est même possible d’ajouter une valeur après le symbole <incode>"&lt;"</incode> si sa position doit être basée sur le début de l’animation précédente, mais être légèrement différente. Par exemple&nbsp;<incode>"&lt;0.25"</incode>.</info>


<br><br><br><br>
<exercice href="../exercices/incredible-machine/"></exercice>

<dots></dots>
<grostitre>Libellés (Labels)</grostitre>


<p>Sauter rapidement à une position précise dans une animation peut s'avérer pratique. Surtout lorsqu'une animation devient longue et que seule la fin nécessite des ajustements. Dès lors, regarder le début de l'animation devient redondant et une perte de&nbsp;temps.</p>

<p>Par exemple:</p>

<p class="codepen" data-height="360" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="XWPwqve" data-user="tim-momo" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/XWPwqve">
  GSAP -  Timeline position sync</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>

<p>Un label est défini grâce à&nbsp;<incode>.add('red')</incode>. Il est ensuite possible de sauter directement à cette
    position dans la timeline en appelant&nbsp;<incode>animation.play('red')</incode>.</p>


<dots></dots>



<grostitre>Défaut (Defaults)</grostitre>


<p>Certaines propriétés peuvent être partagées par plusieurs animations dans une&nbsp;<incode>timeline</incode>.</p>
<p>Si tous les éléments ont une translation de&nbsp;<incode>x: '400%'</incode>&nbsp;et
    un&nbsp;<incode>ease</incode>&nbsp;identique. Plutôt que de répéter cette combinaison sur chaque élément, il est
    possible de définir des propriétés/valeurs par défaut. Ainsi, toutes les animations enfants de
    cette&nbsp;<incode>timeline</incode>&nbsp;partageront ces propriétés, à moins de la redéfinir à l'intérieur d'une
    animation&nbsp;spécifiquement.</p>
<p>Par&nbsp;exemple:</p>



<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="QWVRxWN" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/QWVRxWN">
  GSAP -  Timeline - Defaults</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<dots></dots>

<grostitre>GSDevTools</grostitre>


<p>GreenSock offre des plugiciels payants, réservés aux membres du&nbsp;<a href="https://greensock.com/club/" target="_blank">Club GreenSock</a>. Parmi ceux-ci, GSDevTools est particulièrement utile pour peaufiner ses animations. Heureusement, GreenSock offre la possibilité de l'utiliser gratuitement et légalement via la plateforme&nbsp;CodePen.</p>
<p>Pour ce faire, il suffit d'incorporer l'url du plugiciel désiré dans les&nbsp;<em>Settings</em>&nbsp;de&nbsp;CodePen.
</p>
<p><a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76" target="_blank">Voir les plugiciels&nbsp;disponibles</a>
</p>
<p>Lorsque GSDevTools est ajouté à un pen, la ligne&nbsp;<incode>GSDevTools.create();</incode>&nbsp;suffis à l'initialiser.
    Dès lors, un lecteur permettant de manipuler son animation devient&nbsp;disponible.</p>
<p>Ce lecteur permet de:</p>
<ul>
    <li>
      Jouer une animation en&nbsp;boucle
    </li>
    <li>
      Changer sa vitesse&nbsp;<em>(ralentir/accélérer)</em>
    </li>
    <li>
     Isoler certaines sections de&nbsp;l'animation
    </li>
</ul>
<br>
<small>Pour mieux voir tous les contrôles de GSDevTools cliquez sur "Edit on CODEPEN" en haut à droite.</small>
<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="bGxyKEE" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/bGxyKEE">
  GSAP -  Timeline - GSDevTools</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<info>Créer une animation peut se faire rapidement. Cependant, la peaufiner pour que tous les <em>timings</em>
            soient parfaits requiert du temps. Prenez le temps d’observer vos <em>timings</em> et de les&nbsp;ajuster.</info>

<br><br><br><br>
<exercice href="../exercices/excitebike/"></exercice>






<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>