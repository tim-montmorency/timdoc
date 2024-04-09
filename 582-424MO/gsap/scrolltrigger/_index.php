<?php 
/**
 * @type     article
 * @title    6-ScrollTrigger
 * @icon     ../images/icon.webp
 * @abstract Synchroniser une animation le scroll : intro, markers, start, end, toggleActions
 * @index    800
 * @ref      web/cadriciels/gsap
 */
?>

<grostitre>Introduction</grostitre>

<p>ScrollTrigger est un plugiciel&nbsp;<em>(plugin)</em>&nbsp;développé par&nbsp;<a href="https://gsap.com"
        target="_blank">GSAP</a>&nbsp;permettant de déclencher ou synchroniser une animation avec le défilement de
    la&nbsp;page.</p>

<h3>Exemples d'utilisation</h3>

<codepen id="abRzZvy" notab="true" height="500"></codepen>
Credit: GSAP
<dots></dots>

<codepen id="zYmxoJB" notab="true" height="500"></codepen>
Credits: Louis Hoebregts
<dots></dots>

<codepen id="XWxJNBd" notab="true" height="500"></codepen>
Credits: Michelle Barker
<dots></dots>

<grostitre>Installation</grostitre>



<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;pour GSAP, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>


<h3>Pour ce faire, il est&nbsp;possible d'utiliser une des 3 techniques ci-bas :</h3>
<ul>
    <li>
        De le <a href="https://gsap.com/docs/v3/Installation/?tab=cdn&module=esm&method=private+registry&tier=free&club=false&require=false&trial=true#grab-the-files" target="_blank">télécharger sur le site de
           GSAP (bouton Get GSAP)</a>, 📥 l'inclure dans votre dossier de projet et ajouter à la fois le fichier
        <em>gsap-public/minified/gsap.min.js</em> si ce n'était pas déjà fait. De plus, vous ajouterez le plugiciel
        scrollTrigger avec <em>gsap-public/minified/ScrollTrigger.min.js</em>.<br><small>Prioriser toujours les versions
            minifiées qui sont plus performantes lors du chargement de la page.</small>
    </li>
    <li>
        D'utiliser un&nbsp;<a href="https://gsap.com/docs/v3/Installation/?tab=cdn&module=esm&method=private+registry&tier=free&club=false&require=false&trial=true#install-helper"
            target="_blank">Content Delivery Network (CDN)</a> (onglet CDN), comme vous avez l'habitude de faire. Vous devez y cocher la boîte à cocher du plugiciel ScrollTrigger, et plus bas, aller copier les 2 balises <span class='inline-code'>script</span> générées (une pour le coeur de gsap et l'autre pour le plugiciel ScrollTrigger) et les coller dans votre/vos page(s) HTML qui contiendront des animations GSAP.
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
    HTML juste avant la fermeture de <incode>&lt;/body&gt;</incode>. <br>Pensez "Optimisation Web" ! 📈 🎯 ⚡</warning>


<dots></dots>




<p>Une fois chargée, il est conseillé d'indiquer à GSAP que ScrollTrigger est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

<highlight lang="JavaScript">gsap.registerPlugin(ScrollTrigger);</highlight>

<warning>ScrollTrigger n’est compatible qu’avec GSAP 3.3.X et&nbsp;plus.</warning>
<alert>Il existe une autre librairie utilisant le nom <em>"ScrollTrigger"</em>. Si une animation ne se déclenche pas
    au moment déterminé par ScrollTrigger, il est possible que la mauvaise librairie ait été&nbsp;chargée.</alert>


<dots></dots>


<grostitre>Utilisation de base</grostitre>


<p>Il est possible d'utiliser ScrollTrigger de façon très minimaliste. Pour ce faire, il suffit d'ajouter la
    propriété&nbsp;<incode>scrollTrigger</incode>&nbsp;à une animation et de lui attribuer comme valeur le sélecteur devant
    déclencher l'animation&nbsp;<em>(communément appelé le&nbsp;"trigger")</em>.</p>
<p>Par exemple, si un carré bleu 🟦 possède une animation, mais que le carré n'est visible qu'après avoir fait défiler
    la page, il est possible que son animation se termine avant même que l'utilisateur puisse la&nbsp;voir.</p>
<p>Heureusement, l'utilisation de ScrollTrigger permet de retarder le déclenchement de l'animation au moment où la
    partie supérieure du carré devient&nbsp;visible.</p>

<codepen id="oNagLXq" tab="js,result" height="400"></codepen>

<dots></dots>


<grostitre>Utilisation d'un objet {}</grostitre>

<p>Il est possible de raffiner le comportement d'une animation ScrollTrigger. Pour ce faire, il faut utiliser un objet
    JavaScript pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur texte comme dans
    l'exemple&nbsp;précédent.</p>
<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>

<codepen id="MWPYbxw" tab="js,result" height="400"></codepen>

<p>On remarque que la propriété permettant de déclencher l'animation est maintenant spécifiée et
    s'appelle&nbsp;<incode>trigger</incode>.</p>

<dots></dots>


<grostitre>Markers</grostitre>

<p>La propriété&nbsp;<incode>markers</incode>&nbsp;permet de simplifier le débogage d'une animation en affichant les
    marqueurs utilisés pour contrôler l'animation. Par défaut, la valeur de cette propriété est
    à&nbsp;<incode>false</incode>.</p>
<p>Pour l'activer, il faut lui donner la valeur&nbsp;<incode>true</incode>, comme dans l'exemple&nbsp;suivant:</p>

<codepen id="XWxJNQj" tab="js,result" height="400"></codepen>

<p><incode>scroller-start</incode>&nbsp;et&nbsp;<incode>scroller-end</incode>&nbsp;sont des marqueurs positionnés en lien avec
    la fenêtre, tandis que&nbsp;<incode>start</incode>&nbsp;et&nbsp;<incode>end</incode>&nbsp;sont des marqueurs positionnés en
    lien avec le&nbsp;<incode>trigger</incode>&nbsp;spécifié.</p>
<p>On remarque que l'animation du carré bleu 🟦 débute uniquement lorsque le
    marqueur&nbsp;<incode>start</incode>&nbsp;croise le marqueur&nbsp;<incode>scroll-start</incode>.</p>



<dots></dots>
<grostitre>Start et End</grostitre>


<p>Les propriétés&nbsp;<incode>start</incode>&nbsp;et&nbsp;<incode>end</incode>&nbsp;de l'objet ScrollTrigger sont constituées
    de deux valeurs. Une première correspondant au marqueur associé au&nbsp;<incode>trigger</incode>&nbsp;et une deuxième au
    marqueur associé à la fenêtre.</p>
<p>Il est possible de modifier ces valeurs en passant une chaine de caractères constituée soit de:</p>


<ul>
    <li>
        <p>Positions sous forme de texte:&nbsp;<incode>top</incode>,&nbsp;<incode>center</incode>,&nbsp;<incode>bottom</incode></p>
    </li>
    <li>
        <p>Pourcentage, ex:&nbsp;<incode>50%</incode></p>
    </li>
    <li>
        <p>Unité absolue, ex:&nbsp;<incode>200px</incode></p>
    </li>
    <li>
        <p>Unité relative, ex:&nbsp;&nbsp;<incode>+=200</incode></p>
    </li>
</ul>


<dots></dots>

<h3 id="Start">Start</h3>

<p>Par défaut la propriété&nbsp;<incode>start</incode>&nbsp;a la valeur&nbsp;<incode>"top bottom"</incode>, indiquant que:</p>
<ol>
    <li>top: le marqueur&nbsp;<incode>start</incode>&nbsp;est positionné au sommet (top) de l'<strong>élément
            déclencheur (<incode>trigger</incode>)</strong></li>
    <li>bottom: le marqueur&nbsp;<incode>scroller-start</incode>&nbsp;est positionné au bas (bottom) de la&nbsp;<strong>fenêtre du
            navigateur</strong></li>
</ol>
<p>Donc la première valeur de ce duo (exemple <incode>"top bottom"</incode>) correspont à la postion du marqueur de l'élément déclencheur
(<incode>trigger</incode>) et la deuxième valeur correspont à la position du marqueur de la fenêtre du navigateur.</p>

    <dots></dots>
<p>Autre exemple: à la place de déclencher l'animation quand elle entre dans la fenêtre, on pourrait la déclencher
    lorsque le milieu de
    l'élément déclencheur (<incode>trigger</incode>) atteint 75% de la page, en changeant la valeur de <incode>start</incode> pour <incode>"center 75%"</incode>. </p>

<ol>
    <li>center: le marqueur&nbsp;<incode>start</incode>&nbsp;est positionné au centre (center) de l'<strong>élément
            déclencheur (<incode>trigger</incode>)</strong></li>
    <li>75%: le marqueur&nbsp;<incode>scroller-start</incode>&nbsp;est positionné à 75% de la hauteur de la&nbsp;<strong>fenêtre du
            navigateur</strong></li>
</ol>

<p> En voici l'exemple:</p>

<codepen id="BaqyQEM" tab="js,result" height="400"></codepen>
<doclink href="https://gsap.com/docs/v3/Plugins/ScrollTrigger/start/">start</doclink>

<dots></dots>
<h3 id="End">End</h3>

<p>Par défaut la propriété&nbsp;<incode>end</incode>&nbsp;a la valeur&nbsp;<incode>"bottom top"</incode>.</p>

<p>La propriété&nbsp;<incode>end</incode>&nbsp;se comporte exactement comme la propriété&nbsp;<a rel="noopener noreferrer"
        href="#start">start</a>&nbsp;à la différence bien sur qu'elle contrôle les
    marqueurs&nbsp;<incode>end</incode>&nbsp;et&nbsp;<incode>scroller-end</incode>.</p>



<doclink href="https://gsap.com/docs/v3/Plugins/ScrollTrigger/end/">end</doclink>




<dots></dots>
<grostitre>ToggleActions</grostitre>


<p>La propriété&nbsp;<incode>toggleActions</incode>&nbsp;permet de spécifier des actions qui seront déclenchées lors de
    moments&nbsp;précis.</p>


<h3 class="heading heading--h3" id="Moments">Moments</h3>

<ol start="1">
    <li>
        <p><incode>onEnter</incode>: lorsque la page défile vers le haut ⬆️ et que le
            marqueur&nbsp;<incode>start</incode>&nbsp;croise le marqueur&nbsp;<incode>scroller-start</incode></p>
    </li>
    <li>
        <p><incode>onLeave</incode>: lorsque la page défile vers le haut ⬆️ et que le
            marqueur&nbsp;<incode>end</incode>&nbsp;croise le marqueur&nbsp;<incode>scroller-end</incode></p>
    </li>
    <li>
        <p><incode>onEnterBack</incode>: lorsque la page défile vers le bas ⬇️ et que le
            marqueur&nbsp;<incode>end</incode>&nbsp;croise à nouveau le marqueur&nbsp;<incode>scroller-end</incode></p>
    </li>
    <li>
        <p><incode>onLeaveBack</incode>: lorsque la page défile vers le bas ⬇️ et que le
            marqueur&nbsp;<incode>start</incode>&nbsp;croise à nouveau le marqueur&nbsp;<incode>scroller-start</incode></p>
    </li>
</ol>



<dots></dots>



<h3 id="Actions">Actions</h3>
<ul>
    <li>
        <incode>play</incode>: déclenche l'animation
    </li>
    <li>
        <incode>pause</incode>: met l'animation sur&nbsp;pause
    </li>
    <li>
        <incode>resume</incode>: continue l'animation en fonction de sa progression&nbsp;actuelle
    </li>
    <li>
        <incode>reset</incode>: ramène l'animation à son état de&nbsp;départ
    </li>
    <li>
        <incode>restart</incode>: ramène l'animation à son état de départ et la&nbsp;déclenche
    </li>
    <li>
        <incode>complete</incode>: amène l'animation à son état de fin
    </li>
    <li>
        <incode>reverse</incode>: joue l'animation en sens inverse en à partir de sa progression&nbsp;actuelle
    </li>
    <li>
        <incode>none</incode>: rien ne se&nbsp;produit
    </li>
</ul>



<dots></dots>
<h3>ToggleActions par défaut</h3>
<p>Par défaut, toggleAction à une valeur de&nbsp;<incode>"play none none none"</incode>.</p>

<p>Autrement dit:</p>
<ol start="1">
    <li>
        <incode>onEnter</incode> l'animation est déclenchée.
    </li>
    <li>
        <incode>onLeave</incode> rien ne se&nbsp;produit
    </li>
    <li>
        <incode>onEnterBack</incode>&nbsp;rien ne se&nbsp;produit
    </li>
    <li>
        <incode>onLeaveBack</incode>&nbsp;rien ne se&nbsp;produit
    </li>
</ol>


<dots></dots>
<h3>Modifier les valeurs par défaut de ToggleActions</h3>
<p>Il est possible de modifier ces&nbsp;comportements.</p>
<p>Par exemple, pour qu'une&nbsp;animation:</p>
<ul>
    <li>
        se déclenche à chaque fois que le
        marqueur&nbsp;<incode>start</incode>&nbsp;croise&nbsp;<incode>scroller-start</incode>,
    </li>
    <li>
        se complète lorsque le marqueur&nbsp;<incode>end</incode>&nbsp;croise&nbsp;<incode>scroller-end</incode>,
    </li>
    <li>
        joue à l'envers lorsque le
        marqueur&nbsp;<incode>end</incode>&nbsp;croise&nbsp;<incode>scroller-end</incode>&nbsp;dans la
        direction&nbsp;opposée,
    </li>
    <li>
        retourne à son état initial lorsque le
        marqueur&nbsp;<incode>start</incode>&nbsp;croise&nbsp;<incode>scroller-start</incode>&nbsp;dans la
        direction&nbsp;opposée,
    </li>
</ul>



<p>il faudra changer la valeur de <incode>toggleActions</incode> pour<br><incode>"restart complete reverse reset"</incode></p>
<p>En voici l'exemple: </p>

<codepen id="rNqajBM" tab="js,result" height="600"></codepen>

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


<codepen id="WNabRbe" tab="js,result" height="400"></codepen>

<doclink href="https://gsap.com/docs/v3/Plugins/ScrollTrigger/">ScrollTrigger</doclink>

<dots></dots>
<exercice href="../exercices/scrolltrigger-historique-zelda"></exercice>
