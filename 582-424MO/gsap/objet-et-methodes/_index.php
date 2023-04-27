<?php 
/**
 * @type     article
 * @title    2-Objet et méthodes
 * @icon     images/icon.svg
 * @abstract L'objet GSAP et ses méthodes d'animation de base
 * @index    999
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
<h3>Voir la liste des <a href="https://greensock.com/get-started/#transformShorthand" target="_blank" rel="noopener noreferrer">propriétés animables</a> sur le site de GSAP.</h3>

<p>Il est possible d'animer la majorité des propriétés CSS. Cependant, il est nécessaire de remplacer les traits
    d’union <em>"-"</em> par une nomenclature camelCase 🐫. Par exemple, <code>font-size</code>
    deviendrait&nbsp;<code>fontSize</code>.</p>


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
<grostitre>Méthode to()</grostitre>
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

<grostitre>Méthode from()</grostitre>


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
    la propriété transform, voir la <a href="https://greensock.com/get-started/#transformShorthand" target="_blank">liste
        de&nbsp;Greensock 🟩 🧦</a>.
</warning>

<warning>Contrairement à l’animation <code>to()</code>, l’animation <code>from()</code> peut-être jouée plus d’une
    fois, puisque l’état de départ fourni ne correspond jamais à celle de&nbsp;fin.</warning>

<doclink href='https://greensock.com/docs/v3/GSAP/gsap.from()'>from()</doclink>


<dots></dots>

<grostitre>Méthode fromTo()</grostitre>

<p>Permets de spécifier un état de départ et de fin d'une animation, contrairement à&nbsp;<a rel="noopener noreferrer"
        href="#methode-from">from()</a>&nbsp;et&nbsp;<a rel="noopener noreferrer" href="#methode-to">to()</a>&nbsp;qui
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

<grostitre>Méthode set()</grostitre>
<p><code>set()</code> initialise <em>immédiatement</em> les propriétés des éléments HTML ciblés. Il s'agit essentiellement d'une animation de type <code>to()</code> qui dure zéro seconde. C'est la même chose mais avec un nom plus un peu plus intuitif : "set" que l'ont peut traduire par "définit immédiatement tel paramètre". Les lignes suivantes produisent donc des résultats identiques :</p>

<highlight lang='JavaScript'>gsap.set(".class", {x: 100, y: 50, opacity: 0});
gsap.to(".class", {duration: 0, x: 100, y: 50, opacity: 0});</highlight>

<p>À la place du sélecteur <code>".class"</code>, vous pouvez aussi utiliser un tableau (array []) contenant plusieurs sélecteurs afin de définir les propriétés de plusieurs éléments HTML en même temps. Voici un exemple :</p>

<highlight lang='JavaScript'>gsap.set([".chapeau", ".patate", ".sapin"], {x: 100, y: 50, opacity: 0});</highlight>


<doclink href='https://greensock.com/docs/v3/GSAP/gsap.set()'>Méthode set()</doclink>



<dots></dots>


<grostitre>Et les sélecteurs multiples...</grostitre>
<p>À titre de rappel, une sélecteur définit un ou des éléments HTML sur le(s)quel(s) s'applique un ensemble de règles.  Dans ce cas ci, on leur applique une animation.</p>
<p>Avec GSAP, la "magie" c'est qu'on n'a pas besoin de faire un querySlector ou un getDocumentById ou autre.  Simplement, ajouter en premier paramètre de gsap() le nom de la classe de l'élément ou le nom de l'id, ou encore le nom de la balise.</p>

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>