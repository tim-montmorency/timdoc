<?php 
/**
 * @type     article
 * @title    Bases de l'animation
 * @icon     images/icon.svg
 * @abstract L'objet GSAP et les bases de l'interpolation
 */
?>


<grostitre>Objet GSAP</grostitre>
<p>L'objet JavaScript GSAP est le point de départ de toutes les fonctionnalités associées à GSAP.</p>
<ul>
    <li>Création d'animations</li>
    <li>Configuration de paramètres</li>
    <li>Ajout de plugiciels&nbsp;<em>(plugins)</em>, d'interpolations&nbsp;<em>(eases)</em>&nbsp;ou&nbsp;d'effets</li>
    <li>Contrôle des animations</li>
</ul>

<dots></dots>

<grostitre>Interpolations de base</grostitre>
<p>Les interpolations, ou en anglais: <em>tweenings</em>, permettent de créer des animations similaires à celles
    réalisées en CSS.</p>
<p>Pour ce faire, il suffit de spécifier:</p>
<ul>
    <li>Le ou les éléments à animer avec un sélecteur, ex:&nbsp;<code>.element</code></li>
    <li>Un objet indiquant la ou les propriétés à animer et les valeurs souhaitées, <br>ex:
        &nbsp;<code>{ opacity: 0.5 }</code></li>
</ul>

<warning>Il est possible d’utiliser la majorité des propriétés CSS. Cependant, il est nécessaire de remplacer les traits
    d’union <em>"-"</em> par une nomenclature camelCase 🐫. Par exemple, <code>font-size</code>
    deviendrait&nbsp;<code>fontSize</code>.</warning>


<warning>
    <p>Bien qu’il soit possible d’animer presque toutes les propriétés CSS, il est préférable de se concentrer sur
        <code>transform</code> et <code>opacity</code> lorsque possible, puisque ces propriétés bénéficies
        d’une&nbsp;accélération&nbsp;matérielle.
    </p>
    <ul>
        <li><code>opacity</code></li>
        <li><code>x</code> et&nbsp;<code>y</code></li>
        <li><code>rotation</code>, <code>rotationX</code> ou&nbsp;<code>rotationY</code></li>
        <li><code>scale</code>, <code>scaleX</code> ou&nbsp;<code>scaleY</code></li>
        <li><code>skewX</code> et&nbsp;<code>skewY</code></li>
    </ul>
</warning>
<dots></dots>
<grostitre>• Méthode to() •</grostitre>
<p>Dans l'exemple ci-dessous, un carré est positionné en haut à gauche de son parent. En cliquant sur le bouton ▶️, une
    animation GSAP le déplace vers la droite.</p>
<p class="codepen" data-height="340" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="abaWvmo"
    data-user="tim-momo"
    style="height: 340px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/abaWvmo">
            GSAP - to()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<warning>Les valeurs sous forme de nombre <em>(qui ne sont pas entre guillemets)</em>, ex: <code>400</code>, sont
    interprétées comme étant des px. Les valeurs entre guillemets, ex <code>'400%'</code>, peuvent spécifier une unité
    de mesure différente, comme dans le cas précédent où un pourcentage a été utilisé&nbsp;<em>(%)</em>.</warning>

<p><strong>Décortiquons l'animation:</strong></p>

<ul>
    <li>
        <code>gsap</code>&nbsp;indique que nous désirons utiliser une méthode appartenant à la librairie&nbsp;GSAP.

    </li>
    <li>
        <code>to()</code>&nbsp;correspond à la méthode&nbsp;utilisée. Traduisible par&nbsp;<em>"vers"</em>, cette
        méthode indique qu'un état de fin sera passé et que l'élément doit faire une interpolation
        vers&nbsp;celui-ci.
    </li>
    <li>
        <code>'.element'</code>&nbsp;le sélecteur correspondant à l'élément devant être&nbsp;animé.
    </li>
    <li>
        <code>{ x: '400%' }</code>&nbsp;un état de fin sous forme d'objet contenant une
        propriété&nbsp;<em>(x)</em>&nbsp;et une valeur&nbsp;<em>('400%')</em>.
    </li>
</ul>
<p>L'élément se déplace donc vers la droite ➡️ de 4x sa largeur&nbsp;<em>(400%)</em>&nbsp;en l'espace d'une seconde.</p>
<br><br>
<img src="images/to_decortique_f2.png"
    alt="gasp.to('.box'), { x: 200 }) to est la méthode, .box est la cible(s) et x est la variable"
    style="max-width: 50%">



<warning>L’animation ne fonctionne qu’une fois. Puisque la méthode <code>to()</code> indique un état de fin à atteindre
    et que l'animation a changé les valeurs des propriétés, leurs valeurs de départ est maintenant identiques à celle de
    fin, donc aucune animation n’est exécutée les fois&nbsp;subséquentes.</warning>


<doclink href='https://greensock.com/docs/v3/GSAP/gsap.to()'>to()</doclink>
<br>
<exercice href="../exercices/voiture-jaune"></exercice>




<dots></dots>

<grostitre>• Méthode from() •</grostitre>


<p class="codepen" data-height="390" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="MWqmaXM"
    data-user="tim-momo"
    style="height: 390px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWqmaXM">
            GSAP - to()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<p><strong>Décortiquons une animation avec plus d'une propriété:</strong></p>
<ul>
    <li>
        <code>from()</code>&nbsp;correspond à la méthode&nbsp;utilisée. Traduisible par&nbsp;<em>"à partir de"</em>,
        cette méthode indique qu'un état de départ sera passé et que l'élément doit partir de celui-ci pour faire
        une interpolation vers ses valeurs&nbsp;initiales.
    </li>
    <li>
        <code>{ x: '400%', opacity: 0 }</code>&nbsp;un état de départ sous forme d'objet contenant les
        propriétés&nbsp;<code>x</code>&nbsp;&amp;&nbsp;<code>opacity</code>&nbsp;et les
        valeurs&nbsp;<code>400%</code>&nbsp;&amp;&nbsp;<code>0</code>&nbsp;<em>(transparent au début
            de&nbsp;l'animation)</em>.
    </li>
</ul>

<warning>La propriété CSS transform est formulée différemment dû à ses multiples valeurs possibles. Par exemple,
    <code>transform: translateX(400%)</code> est formulé ici <code>x: '400%'</code>. Pour voir tous les noms associés à
    la propriété transform, voir la <a href="https://greensock.com/get-started/#2d-and-3d-transforms">liste
        de&nbsp;Greensock 🟩 🧦</a>.
</warning>

<warning>Contrairement à l’animation <code>to()</code>, l’animation <code>from()</code> peut-être jouée plus d’une
    fois, puisque l’état de départ fourni ne correspond jamais à celle de&nbsp;fin.</warning>

<doclink href='https://greensock.com/docs/v3/GSAP/gsap.from()'>from()</doclink>


<dots></dots>

<grostitre>• Méthode fromTo() •</grostitre>

<p>Permets de spécifier un état de départ et de fin d'une animation, contrairement à&nbsp;<a rel="noopener noreferrer"
        href="#-methode-from-">from()</a>&nbsp;et&nbsp;<a rel="noopener noreferrer" href="#-methode-to-">to()</a>&nbsp;qui
    utilisent l'état
    actuel comme point de départ ou fin. Cette interpolation permet d'avoir un contrôle total sur une animation, en
    particulier lorsqu'elle est enchaînée avec d'autres&nbsp;animations.</p>

<p class="codepen" data-height="395" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="YzOVqby"
    data-user="tim-momo"
    style="height: 395px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/YzOVqby">
            GSAP - from()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<br>

<p>Dans cet exemple, il est important de remarquer la présence de deux objets de
    propriétés&nbsp;<code>{ x: '0%' }</code>&nbsp;et&nbsp;<code>{ x: '400%' }</code>&nbsp;plutôt qu'un seul. Le premier
    spécifie l'état de départ et le deuxième l'état de fin de&nbsp;l'animation.</p>
<p>Il est possible d'omettre une propriété CSS dans l'état de départ et de la spécifier uniquement dans l'état
    de&nbsp;fin.</p>
<p>Par exemple:&nbsp;<code>{ x: '0%' }, { x: '400%', scale: 2 }</code>&nbsp;fonctionnerait, puisque GSAP assumerait que
    le scale de départ correspond au&nbsp;<code>scale</code>&nbsp;naturel de l'élément&nbsp;<em>(1)</em>&nbsp;et donc
    l'animerait jusqu'à&nbsp;2.</p>
<p>Cependant, spécifier uniquement une propriété dans l'état de départ ne génèrera pas d'animation sur cette
    dite&nbsp;propriété.</p>
<p>Par exemple&nbsp;<code>{ x: '0%', scale: 2 }, { x: '400%' }</code>&nbsp;<code>scale</code>&nbsp;donnerait un scale
    initial de 2 et puisqu'aucun scale de fin n'est spécifié, GSAP assumera que le scale de fin doit correspondre au
    scale de&nbsp;départ.</p>
    <doclink href='https://greensock.com/docs/v3/GSAP/gsap.fromTo()'>fromTo()</doclink>


<exercice href="../exercices/voiture-turquoise"></exercice>


<dots></dots>

<grostitre>Propriétés&nbsp;spéciales: </grostitre>



<p>En plus des propriétés CSS de base, il est possible d'utiliser des propriétés&nbsp;spéciales.</p>




<grostitre>• Duration •</grostitre>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-duration">animation-duration</a>&nbsp;en CSS, la propriété&nbsp;<code>duration</code>&nbsp;de
    GSAP permet de spécifier la durée d'une&nbsp;animation.</p>




<p class="codepen" data-height="420" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="JjaNbQQ" data-user="tim-momo" style="height: 420px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjaNbQQ">
  GSAP - fromTo()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<info>Si aucune durée n’est spécifiée, GSAP utilisera une durée d’une demi-seconde <em>(0.5s)</em> par&nbsp;défaut.</info>




<dots></dots>
<grostitre>• Repeat •</grostitre>


<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-iteration-count">animation-iteration-count</a>&nbsp;en CSS, la
    propriété&nbsp;<code>repeat</code>&nbsp;de GSAP permet de spécifier le nombre de fois qu'une animation
    doit-être&nbsp;effectué.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="LYJyxYY" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/LYJyxYY">
  GSAP - Duration</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<warning>Plutôt que d’utiliser le mot <code>infinite</code> pour indiquer qu’une animation doit jouer à l’infinie,
            GSAP s’attend à recevoir <code>-1</code>, comme pour le dernier carré du précédent&nbsp;exemple.</warning>



<dots></dots>

<grostitre>• Yoyo •</grostitre>



<p>De façon similaire à&nbsp;<a href="../../../582-215MO/css/animation/#animation-direction" target="_blank">animation-direction: alternate;</a> en CSS, la propriété&nbsp;<code>Yoyo</code> de GSAP permet d'indiquer à une animation d'alterner de direction à chaque&nbsp;répétition.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="ExemMPJ" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExemMPJ">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<dots></dots>

<grostitre>• Delay •</grostitre>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../../../582-215MO/css/animation/#animation-delay">animation-delay</a>&nbsp;en CSS, la propriété&nbsp;<code>delay</code>&nbsp;de GSAP
    permet de spécifier un délai d'attente avant de démarrer une&nbsp;animation.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="MWqmPxV" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWqmPxV">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<warning>delay peut être pratique pour synchroniser 2 ou 3 éléments, mais pour une synchronisation plus complexe, il
            est conseillé d’utiliser une&nbsp;timeline.</warning>




<dots></dots>
<grostitre>• Stagger •</grostitre>


<p>Similaire à&nbsp;<a rel="noopener noreferrer" href="#-delay-">Delay</a>, Stagger fait en sorte qu'un groupe
    d'éléments&nbsp;<em>(.element)</em>&nbsp;ayant tous la même animation soient décalés. Ainsi, plutôt que de voir les
    trois carrés se déplacer en même temps, un délai de 0.2s est ajouté entre chaque&nbsp;animation.</p>


<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="mdGmoRO" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/mdGmoRO">
  GSAP - Delay</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>Il est aussi possible de passer un objet à&nbsp;<code>stagger</code>&nbsp;plutôt qu'un nombre. Dans cet objet, il est
    possible de spécifier le décalage entre chaque&nbsp;élément.</p>
<p>Par&nbsp;exemple:</p>
<highlight lang='javascript'>gsap.from('.element', { 
  x: '400%',
  stagger: {
    each: 0.2
  }
});</highlight>

<p>Générerait exactement le même résultat que dans l'exemple précédent. Cependant, il est possible de passer des
    propriétés et valeurs supplémentaires afin de raffiner l'animation. Notamment,&nbsp;<code>from</code>, soit le point
    de départ de&nbsp;l'animation.</p>
<ul>
    <li>
        <code>"start"</code>&nbsp;part du début vers la fin&nbsp;<em>(par&nbsp;défaut)</em>
    </li>
    <li>
    <code>"end"</code>&nbsp;part de la fin vers le&nbsp;début
    </li>
    <li>
    <code>"center"</code>&nbsp;du centre vers les&nbsp;extrémités
    </li>
    <li>
        <code>"edges"</code>&nbsp;des extrémités vers le&nbsp;centre
    </li>
    <li>
        <code>"random"</code>&nbsp;de façon aléatoire
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
<grostitre>• Ease •</grostitre>

<p>Permets de dicter le rythme de l'animation, de la même façon que la&nbsp;<a target="_blank" rel="noopener noreferrer" href="../../../582-215MO/css/animation/#animation-timing-function">animation-timing-function</a>&nbsp;permet de le faire pour les animations/transitions&nbsp;CSS.</p>

<p class="codepen" data-height="330" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="JjaNVpy" data-user="tim-momo" style="height: 330px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/JjaNVpy">
  GSAP - Ease</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<br>
<p><strong>Valeurs possibles:&nbsp; </strong></p>
<p><code>none</code>,&nbsp;<code>power1</code>, <code>power2</code>, <code>power3</code>,&nbsp;<code>power4</code>,
    <code>back</code>, <code>elastic</code>, <code>bounce</code>, <code>rough</code>, <code>slow</code>,
    <code>steps</code>, <code>circ</code>, <code>expo</code>, <code>sine</code>
</p>
<p>Il est possible de spécifier si un&nbsp;<code>ease</code>&nbsp;doit être effectué au début, à la fin ou au début et à
    la fin en ajoutant&nbsp;<code>.in</code>,&nbsp;<code>.out</code>&nbsp;ou&nbsp;<code>.inOut</code>&nbsp;après le nom
    du ease souhaité. Par exemple:&nbsp;<code>bounce.inOut</code>;</p>
<p>Si aucune spécification n'est donnée,&nbsp;<code>.out</code>&nbsp;sera&nbsp;utilisé.</p>


<tool href='../tools/ease-visualizer/'></tool>

<dots></dots>
<grostitre>• Callbacks •</grostitre>

<p>Les&nbsp;<code>Callbacks</code>&nbsp;permettent de déclencher une fonction JavaScript à différents moments clés
    d'une&nbsp;animation.</p>
<p>Par exemple, pour se synchroniser avec son début 🏁, il est possible d'utiliser&nbsp;<code>onStart</code>&nbsp;ou
    encore, avec sa fin 🔚 avec&nbsp;<code>onComplete</code>, comme dans l'exemple&nbsp;ci-dessous.</p>



<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="BaOREVE" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaOREVE">
  GSAP - Ease</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br>
<doclink href='https://greensock.com/get-started/#callbacks'>Callbacks</doclink>

<br><br>


<exercice href="../exercices/voiture-bleue"></exercice>


<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>