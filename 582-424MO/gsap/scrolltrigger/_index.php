<?php 
/**
 * @type     article
 * @title    6-ScrollTrigger
 * @icon     images/icon.svg
 * @abstract Synchroniser une animation le scroll : intro, markers, start, end, toggleActions
 * @index    800
 */
?>

<grostitre>Introduction</grostitre>

<p>ScrollTrigger est un plugiciel&nbsp;<em>(plugin)</em>&nbsp;développé par&nbsp;<a href="https://greensock.com/"
        target="_blank">GreenSock</a>&nbsp;permettant de déclencher ou synchroniser une animation avec le défilement de
    la&nbsp;page.</p>

<h3>Exemples d'utilisation</h3>

<p class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="abRzZvy"
    data-user="tim-momo"
    style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/abRzZvy">
            DEMO ScrollTrigger Downhill Ski</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>
Credit: GSAP
<dots></dots>


<p class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="zYmxoJB"
    data-user="tim-momo"
    style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/zYmxoJB">
            DEMO Welcome to the jungle - ScrollTrigger credits: Louis Hoebregts Follow</a> by TIM Montmorency (<a
            href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>
Credits: Louis Hoebregts

<dots></dots>

<p class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="XWxJNBd"
    data-user="tim-momo"
    style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/XWxJNBd">
            DEMO Weird Fishes - credits: Michelle Barker</a> by TIM Montmorency (<a
            href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>
Credits: Michelle Barker



<dots></dots>

<grostitre>Installation</grostitre>



<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GreenSock, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>


<h3>Pour ce faire, il est&nbsp;possible:</h3>
<ul>
    <li>
        De le <a href="https://greensock.com/docs/v3/Installation#download" target="_blank">télécharger sur le site de
            GreenSock</a>, 📥 l'inclure dans votre dossier de projet et ajouter à la fois le fichier
        <em>gsap-public/minified/gsap-core.min.js</em> si ce n'était pas déjà fait, ainsi que la le plugiciel
        scrollTrigger avec <em>gsap-public/minified/ScrollTrigger.min.js</em>.<br><small>Prioriser toujours les versions
            minifiées qui sont plus performantes lors du chargement de la page.</small>
    </li>
    <li>
        D'utiliser un&nbsp;<a href="https://greensock.com/docs/v3/Installation?checked=core,scrollTrigger#CDN"
            target="_blank">Content Delivery Network (CDN)</a>, comme vous avez sans doute l'habitude de faire.
    </li>
    <li>De partir des&nbsp;<a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76"
            target="_blank">gabarits de base CodePen</a>. Vous devez copier le lien de GSAP Core et celui SrollTrigger
        et, sur votre
        CodePen via <em>Settings/JS/Add External Scripts</em>, y coller successivement les liens.</li>
</ul>

<alert>Toujours porter attention à l'ordre des liens vers les fichiers JavaScript dans votre HTML. D'abord la librarie
    "core" de GSAP, ensuite le ou les plugiciel(s) GSAP, finalement le fichier JavaScript personnalisé de votre projet.
</alert>
<warning>Ne pas oublier, au niveau performance, il est préférable de lier les fichiers JavaScript à la fin de la page
    HTML juste avant la fermeture de <code>&lt;/body&gt;</code>. <br>Pensez "Optimisation Web" ! 📈 🎯 ⚡</warning>


<dots></dots>




<p>Une fois chargée, il est conseillé d'indiquer à GSAP que ScrollTrigger est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

<highlight lang='JavaScript'>gsap.registerPlugin(ScrollTrigger);</highlight>

<warning>ScrollTrigger n’est compatible qu’avec GSAP 3.3.X et&nbsp;plus.</warning>
<alert>Il existe une autre librairie utilisant le nom <em>"ScrollTrigger"</em>. Si une animation ne se déclenche pas
    au moment déterminé par ScrollTrigger, il est possible que la mauvaise librairie ait été&nbsp;chargée.</alert>


<dots></dots>


<grostitre>Utilisation de base</grostitre>


<p>Il est possible d'utiliser ScrollTrigger de façon très minimaliste. Pour ce faire, il suffit d'ajouter la
    propriété&nbsp;<code>scrollTrigger</code>&nbsp;à une animation et de lui attribuer comme valeur le sélecteur devant
    déclencher l'animation&nbsp;<em>(communément appelé le&nbsp;"trigger")</em>.</p>
<p>Par exemple, si un carré bleu 🟦 possède une animation, mais que le carré n'est visible qu'après avoir fait défiler
    la page, il est possible que son animation se termine avant même que l'utilisateur puisse la&nbsp;voir.</p>
<p>Heureusement, l'utilisation de ScrollTrigger permet de retarder le déclenchement de l'animation au moment où la
    partie supérieure du carré devient&nbsp;visible.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="oNagLXq"
    data-user="tim-momo"
    style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/oNagLXq">
            GSAP - Timeline - Defaults</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>






<dots></dots>

<grostitre>Utilisation d'un objet {}</grostitre>

<p>Il est possible de raffiner le comportement d'une animation ScrollTrigger. Pour ce faire, il faut utiliser un objet
    JavaScript pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur texte comme dans
    l'exemple&nbsp;précédent.</p>
<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="MWPYbxw"
    data-user="tim-momo"
    style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWPYbxw">
            GSAP - ScrollTrigger Basic</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p>On remarque que la propriété permettant de déclencher l'animation est maintenant spécifiée et
    s'appelle&nbsp;<code>trigger</code>.</p>




<dots></dots>

<grostitre>Markers</grostitre>

<p>La propriété&nbsp;<code>markers</code>&nbsp;permet de simplifier le débogage d'une animation en affichant les
    marqueurs utilisés pour contrôler l'animation. Par défaut, la valeur de cette propriété est
    à&nbsp;<code>false</code>.</p>
<p>Pour l'activer, il faut lui donner la valeur&nbsp;<code>true</code>, comme dans l'exemple&nbsp;suivant:</p>


<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="XWxJNQj"
    data-user="tim-momo"
    style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/XWxJNQj">
            GSAP - ScrollTrigger Object</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<p><code>scroller-start</code>&nbsp;et&nbsp;<code>scroller-end</code>&nbsp;sont des marqueurs positionnés en lien avec
    la fenêtre, tandis que&nbsp;<code>start</code>&nbsp;et&nbsp;<code>end</code>&nbsp;sont des marqueurs positionnés en
    lien avec le&nbsp;<code>trigger</code>&nbsp;spécifié.</p>
<p>On remarque que l'animation du carré bleu 🟦 débute uniquement lorsque le
    marqueur&nbsp;<code>start</code>&nbsp;croise le marqueur&nbsp;<code>scroll-start</code>.</p>



<dots></dots>
<grostitre>Start et End</grostitre>


<p>Les propriétés&nbsp;<code>start</code>&nbsp;et&nbsp;<code>end</code>&nbsp;de l'objet ScrollTrigger sont constituées
    de deux valeurs. Une première correspondant au marqueur associé au&nbsp;<code>trigger</code>&nbsp;et une deuxième au
    marqueur associé à la fenêtre.</p>
<p>Il est possible de modifier ces valeurs en passant une chaine de caractères constituée soit de:</p>


<ul>
    <li>
        <p>Positions sous forme de texte:&nbsp;<code>top</code>,&nbsp;<code>center</code>,&nbsp;<code>bottom</code></p>
    </li>
    <li>
        <p>Pourcentage, ex:&nbsp;<code>50%</code></p>
    </li>
    <li>
        <p>Unité absolue, ex:&nbsp;<code>200px</code></p>
    </li>
    <li>
        <p>Unité relative, ex:&nbsp;&nbsp;<code>+=200</code></p>
    </li>
</ul>


<dots></dots>

<h3 id="Start">Start</h3>

<p>Par défaut la propriété&nbsp;<code>start</code>&nbsp;a la valeur&nbsp;<code>"top bottom"</code>, indiquant que:</p>
<ol>
    <li>top: le marqueur&nbsp;<code>start</code>&nbsp;est positionné au sommet (top) de l'<strong>élément
            déclencheur (<code>trigger</code>)</strong></li>
    <li>bottom: le marqueur&nbsp;<code>scroller-start</code>&nbsp;est positionné au bas (bottom) de la&nbsp;<strong>fenêtre du
            navigateur</strong></li>
</ol>
<p>Donc la première valeur de ce duo (exemple <code>"top bottom"</code>) correspont à la postion du marqueur de l'élément déclencheur
(<code>trigger</code>) et la deuxième valeur correspont à la position du marqueur de la fenêtre du navigateur.</p>

    <dots></dots>
<p>Autre exemple: à la place de déclencher l'animation quand elle entre dans la fenêtre, on pourrait la déclencher
    lorsque le milieu de
    l'élément déclencheur (<code>trigger</code>) atteint 75% de la page, en changeant la valeur de <code>start</code> pour <code>"center 75%"</code>. </p>

<ol>
    <li>center: le marqueur&nbsp;<code>start</code>&nbsp;est positionné au centre (center) de l'<strong>élément
            déclencheur (<code>trigger</code>)</strong></li>
    <li>75%: le marqueur&nbsp;<code>scroller-start</code>&nbsp;est positionné à 75% de la hauteur de la&nbsp;<strong>fenêtre du
            navigateur</strong></li>
</ol>

<p> En voici l'exemple:</p>



<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="BaqyQEM"
    data-user="tim-momo"
    style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/BaqyQEM">
            GSAP - ScrollTrigger Markers</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<br>
<doclink href='https://greensock.com/docs/v3/Plugins/ScrollTrigger/start'>start</doclink>

<dots></dots>
<h3 id="End">End</h3>

<p>La propriété&nbsp;<code>end</code>&nbsp;se comporte exactement comme la propriété&nbsp;<a rel="noopener noreferrer"
        href="#start">start</a>&nbsp;à la différence bien sur qu'elle contrôle les
    marqueurs&nbsp;<code>end</code>&nbsp;et&nbsp;<code>scroller-end</code>.</p>


<doclink href='https://greensock.com/docs/v3/Plugins/ScrollTrigger/end'>end</doclink>




<dots></dots>
<grostitre>ToggleActions</grostitre>


<p>La propriété&nbsp;<code>toggleActions</code>&nbsp;permet de spécifier des actions qui seront déclenchées lors de
    moments&nbsp;précis.</p>


<h3 class="heading heading--h3" id="Moments">Moments</h3>

<ol start="1">
    <li>
        <p><code>onEnter</code>: lorsque la page défile vers le haut ⬆️ et que le
            marqueur&nbsp;<code>start</code>&nbsp;croise le marqueur&nbsp;<code>scroller-start</code></p>
    </li>
    <li>
        <p><code>onLeave</code>: lorsque la page défile vers le haut ⬆️ et que le
            marqueur&nbsp;<code>end</code>&nbsp;croise le marqueur&nbsp;<code>scroller-end</code></p>
    </li>
    <li>
        <p><code>onEnterBack</code>: lorsque la page défile vers le bas ⬇️ et que le
            marqueur&nbsp;<code>end</code>&nbsp;croise à nouveau le marqueur&nbsp;<code>scroller-end</code></p>
    </li>
    <li>
        <p><code>onLeaveBack</code>: lorsque la page défile vers le bas ⬇️ et que le
            marqueur&nbsp;<code>start</code>&nbsp;croise à nouveau le marqueur&nbsp;<code>scroller-start</code></p>
    </li>
</ol>



<dots></dots>



<h3 id="Actions">Actions</h3>
<ul>
    <li>
        <code>play</code>: déclenche l'animation
    </li>
    <li>
        <code>pause</code>: met l'animation sur&nbsp;pause
    </li>
    <li>
        <code>resume</code>: continue l'animation en fonction de sa progression&nbsp;actuelle
    </li>
    <li>
        <code>reset</code>: ramène l'animation à son état de&nbsp;départ
    </li>
    <li>
        <code>restart</code>: ramène l'animation à son état de départ et la&nbsp;déclenche
    </li>
    <li>
        <code>complete</code>: amène l'animation à son état de fin
    </li>
    <li>
        <code>reverse</code>: joue l'animation en sens inverse en à partir de sa progression&nbsp;actuelle
    </li>
    <li>
        <code>none</code>: rien ne se&nbsp;produit
    </li>
</ul>



<dots></dots>
<h3>ToggleActions par défaut</h3>
<p>Par défaut, toggleAction à une valeur de&nbsp;<code>"play none none none"</code>.</p>

<p>Autrement dit:</p>
<ol start="1">
    <li>
        <code>onEnter</code> l'animation est déclenchée.
    </li>
    <li>
        <code>onLeave</code> rien ne se&nbsp;produit
    </li>
    <li>
        <code>onEnterBack</code>&nbsp;rien ne se&nbsp;produit
    </li>
    <li>
        <code>onLeaveBack</code>&nbsp;rien ne se&nbsp;produit
    </li>
</ol>


<dots></dots>
<h3>Modifier les valeurs par défaut de ToggleActions</h3>
<p>Il est possible de modifier ces&nbsp;comportements.</p>
<p>Par exemple, pour qu'une&nbsp;animation:</p>
<ul>
    <li>
        se déclenche à chaque fois que le
        marqueur&nbsp;<code>start</code>&nbsp;croise&nbsp;<code>scroller-start</code>,
    </li>
    <li>
        se complète lorsque le marqueur&nbsp;<code>end</code>&nbsp;croise&nbsp;<code>scroller-end</code>,
    </li>
    <li>
        joue à l'envers lorsque le
        marqueur&nbsp;<code>end</code>&nbsp;croise&nbsp;<code>scroller-end</code>&nbsp;dans la
        direction&nbsp;opposée,
    </li>
    <li>
        retourne à son état initial lorsque le
        marqueur&nbsp;<code>start</code>&nbsp;croise&nbsp;<code>scroller-start</code>&nbsp;dans la
        direction&nbsp;opposée,
    </li>
</ul>



<p>il faudra changer la valeur de <code>toggleActions</code> pour<br><code>"restart complete reverse reset"</code></p>
<p>En voici l'exemple: </p>



<p class="codepen" data-height="600" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="rNqajBM" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/rNqajBM">
  GSAP -  ScrollTrigger - Start</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<dots></dots>
<p>Pour bien visualiser et comprendre chaque moment et chaque action disponible, je vous suggère de regarder cette démo.
</p>


<tool href="../tools/demo-toggleaction/"></tool>



<dots></dots>
<grostitre>Avec une Timeline</grostitre>

<p>Il est possible de combiner ScrollTrigger à une&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="../timeline">timeline GSAP</a>. Pour ce faire il suffit de passer un objet ScrollTrigger comme
    propriété dans l'objet de configurations de la timeline en&nbsp;question.</p>


<p>Par exemple:</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="WNabRbe" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/WNabRbe">
  GSAP -  ScrollTrigger - Timeline</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>




<doclink href='https://greensock.com/docs/v3/Plugins/ScrollTrigger'>ScrollTrigger</doclink>

<dots></dots>
<exercice href="../exercices/scrolltrigger-historique-zelda"></exercice>

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>