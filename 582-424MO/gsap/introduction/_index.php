<?php 
/**
 * @type     article
 * @title    Introduction
 * @icon     images/icon.svg
 * @abstract GreenSock Animation Platform
 */
?>
<grostitre>Introduction</grostitre>
<p><a href="https://greensock.com/gsap/">GSAP</a>&nbsp;est une libraire permettant d'animer tout ce que JavaScript est
    en mesure de manipuler. Elle permet de changer la valeur de certaines propriétés plusieurs fois par secondes, ce qui
    permet de simuler le mouvement et bien d'autres&nbsp;effets.</p>
<p>Pour vous donner une idée, voici quelques animations GSAP de&nbsp;<a
        href="https://gannon.tv/interactive">Chris&nbsp;Gannon</a>:</p>

<div class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="OJoWdaj"
    data-user="tim-momo"
    style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJoWdaj">
            Cassette Tape Loader</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</div>

<div class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="NWLpwME"
    data-user="tim-momo"
    style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/NWLpwME">
            Believe</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</div>

<div class="codepen" data-height="500" data-theme-id="44168" data-default-tab="result" data-slug-hash="VwGprdz"
    data-user="tim-momo"
    style="height: 500px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/VwGprdz">
            Noncentric</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</div>

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>

<dots></dots>

<grostitre>Précédentes versions</grostitre>

<p>Vous avez peut-être déjà utilisé ou entendu parler&nbsp;de:</p>
<ul>
    <li>
        TweenLite
    </li>
    <li>
        TweenMax
    </li>
    <li>
        TimelineLite
    </li>
    <li>
        TimelineMax
    </li>
</ul>
<p>ou vous tomberez peut-être sur des articles mentionnant ces outils en lisant sur le web. Ce qui est normal,
    puisqu'ils ont étés des parties importantes de GSAP durant de nombreuses années. Cependant, vers la fin de 2019, ils
    furent remplacés par l'objet GSAP lors de la sortie de&nbsp;GSAP&nbsp;3.</p>

<p>Dans ce cours, nous, nous consacrerons à cette plus récente version&nbsp;<em>(3)</em>. Faites attention, si une
    documentation mentionne ces précédents outils, elle traite donc la version 2 et non&nbsp;3.</p>

<dots></dots>

<grostitre> Installation</grostitre>
<p>Comme pour toute librairie, afin d'avoir accès à ses fonctionnalités, il est nécessaire de l'inclure dans notre
    projet.</p>
<p>
    Pour ce faire, il est possible:
</p>


<ul>
    <li>De&nbsp;<a href="https://greensock.com/docs/v3/Installation#download" target="_blank">télécharger une copie de
            la librarie</a> 📥 et l'inclure dans votre dossier de projet.</li>
    <li>D'<a href="https://cdnjs.com/libraries/gsap/3.9.1" target="_blank">utiliser un CDN</a> (utiliser la liste
        déroulante <em>Version</em> pour aller chercher la version la plus récente de GSAP 3.</li>
    <li>De partir des&nbsp;<a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76"
            target="_blank">gabarits de base CodePen</a>. Vous devez alors copier le lien GSAP Core. Ensuite sur votre
        CodePen via <em>Settings/JS/Add External Scripts</em> et y coller le lien GSAP Core.</li>
</ul>
<doclink href='https://greensock.com/docs/v3/Installation'>Install GSAP</doclink>
<info>
    <h4>CDN : Content Delivery Network</h4>
    On vous recommande vivement l'utilisation de fichiers CDN car ils sont largement <a
        href="https://medium.com/@codebyamir/a-web-developers-guide-to-browser-caching-cc41f3b73e7c" target="_blank">mis
        en cache</a> et se chargent très rapidement. Près de 10.000.000 de sites utilisent GSAP, donc si l'un de vos
    visiteurs a été sur un site qui a chargé GSAP à partir de ce même CDN, cela ne coûte aucune bande passante
    (chargement instantané !).
</info>
<doclink href='https://medium.com/@codebyamir/a-web-developers-guide-to-browser-caching-cc41f3b73e7c'>À propos des
    caches de navigateur web</doclink>

<dots></dots>


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
        d’une&nbsp;accélération&nbsp;matérielle.</p>
    <ul>
        <li><code>opacity</code></li>
        <li><code>x</code> et&nbsp;<code>y</code></li>
        <li><code>rotation</code>, <code>rotationX</code> ou&nbsp;<code>rotationY</code></li>
        <li><code>scale</code>, <code>scaleX</code> ou&nbsp;<code>scaleY</code></li>
        <li><code>skewX</code> et&nbsp;<code>skewY</code></li>
    </ul>
</warning>

<h3>to()</h3>
<p>Dans l'exemple ci-dessous, un carré est positionné en haut à gauche de son parent. En cliquant sur le bouton ▶️, une
    animation GSAP le déplace vers la droite.</p>
<p class="codepen" data-height="140" data-theme-id="44168" data-default-tab="js,result" data-slug-hash="abaWvmo"
    data-user="tim-momo"
    style="height: 140px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
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
<warning>L’animation ne fonctionne qu’une fois. Puisque la méthode <code>to()</code> indique un état de fin à atteindre et que la première animation a changé les valeurs des propriétés, leurs valeurs de départ est maintenant identiques à celle de fin, donc aucune animation n’est exécutée les fois&nbsp;subséquentes.</warning>


<doclink href='https://greensock.com/docs/v3/GSAP/gsap.to()'>to()</doclink>

<exercice href="../exercices/voiture-jaune"></exercice>


<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-to-voiture-jaune" target="_blank" class="exercice-card__title">
            GSAP to() - Voiture&nbsp;jaune
        </a>

        <p class="exercice-card__description">Pour cet exercice, vous devez à l’aide de GSAP animer une voiture afin de
            la faire rouler sur la&nbsp;route.</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWphdW5lLnBuZw==?w=620&amp;s=4dbe2b2cde3fe6e96ae02c8344dd9fa4"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWphdW5lLnBuZw==?w=310&amp;s=81fceb187f7fbf7ab5fe2e5dc2ea03f4"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWphdW5lLnBuZw==?w=370&amp;s=60e5561ae65ef8d3228deadbf792997f"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWphdW5lLnBuZw==?w=185&amp;s=baaa6a686932d7f58754e9bfa0a32c05"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


<h3 class="heading heading--h3" id="from()">from()</h3>


mmo
<p class="codepen" data-height="190" data-theme-id="44168" data-default-tab="js,result" data-slug-hash="MWqmaXM"
    data-user="tim-momo"
    style="height: 190px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWqmaXM">
            GSAP - to()</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
</p>
mmo




<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(25% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_3" scrolling="no"
                src="https://codepen.io/smnarnold/embed/7743bcb2ee481e93517d37820f11f7d3?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=7743bcb2ee481e93517d37820f11f7d3&amp;default-tab=js%2Cresult&amp;name=cp_embed_3"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_7743bcb2ee481e93517d37820f11f7d3"></iframe></div>
    </div>


</div>
<p><strong>Décortiquons une animation avec plus d'une propriété:</strong></p>
<ul>
    <li>
        <p><code>from()</code>&nbsp;correspond à la méthode&nbsp;utilisée. Traduisible par&nbsp;<em>"à partir de"</em>,
            cette méthode indique qu'un état de départ sera passé et que l'élément doit partir de celui-ci pour faire
            une interpolation vers ses valeurs&nbsp;initiales.</p>
    </li>
    <li>
        <p><code>{ x: '400%', opacity: 0 }</code>&nbsp;un état de départ sous forme d'objet contenant les
            propriétés&nbsp;<code>x</code>&nbsp;&amp;&nbsp;<code>opacity</code>&nbsp;et les
            valeurs&nbsp;<code>400%</code>&nbsp;&amp;&nbsp;<code>0</code>&nbsp;<em>(transparent au début
                de&nbsp;l'animation)</em>.</p>
    </li>
</ul>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>La propriété CSS transform est formulée différemment dû à ses multiples valeurs possibles. Par exemple,
            <code>transform: translateX(400%)</code> est formulé ici <code>x: '400%'</code>. Pour voir tous les noms
            associés à la propriété transform, voir la <a
                href="https://greensock.com/get-started/#2d-and-3d-transforms">liste de&nbsp;Greensock 🟩 🧦</a>.</p>

    </div>
</aside>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>Contrairement à l’animation <code>to()</code>, l’animation <code>from()</code> peut-être jouée plus d’une
            fois, puisque l’état de départ fourni ne correspond jamais à celle de&nbsp;fin.</p>

    </div>
</aside>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://greensock.com/docs/v3/GSAP/gsap.from()" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">from()</a>
            </li>

        </ul>
    </div>
</div>

<h3 class="heading heading--h3" id="fromTo()">fromTo()</h3>

<p>Permets de spécifier un état de départ et de fin d'une animation, contrairement à&nbsp;<a rel="noopener noreferrer"
        href="#from">from()</a>&nbsp;et&nbsp;<a rel="noopener noreferrer" href="#to">to()</a>&nbsp;qui utilisent l'état
    actuel comme point de départ ou fin. Cette interpolation permet d'avoir un contrôle total sur une animation, en
    particulier lorsqu'elle est enchaînée avec d'autres&nbsp;animations.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(25% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_4" scrolling="no"
                src="https://codepen.io/smnarnold/embed/08255b3a73a71b8c2be95779b0f7b77e?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=08255b3a73a71b8c2be95779b0f7b77e&amp;default-tab=js%2Cresult&amp;name=cp_embed_4"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_08255b3a73a71b8c2be95779b0f7b77e"></iframe></div>
    </div>


</div>
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
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://greensock.com/docs/v3/GSAP/gsap.fromTo()" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">fromTo()</a>
            </li>

        </ul>
    </div>
</div>

<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-voiture-turquoise" target="_blank" class="exercice-card__title">
            GSAP - Voiture&nbsp;turquoise
        </a>

        <p class="exercice-card__description">Pour cet exercice, vous devez à l’aide de GSAP animer les différentes
            partie d’une voiture afin de la faire rouler et reculer sur la&nbsp;route.</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvdm9pdHVyZS10dXJxdW9pc2UuanBn?w=620&amp;s=5b48dc6ca1571f67c70dccd0f9970c9d"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvdm9pdHVyZS10dXJxdW9pc2UuanBn?w=310&amp;s=40f792dc6502aa79aac63fe6380ed429"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvdm9pdHVyZS10dXJxdW9pc2UuanBn?w=370&amp;s=3f10416369994e541e58dbb0673af1e2"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3Mvdm9pdHVyZS10dXJxdW9pc2UuanBn?w=185&amp;s=d54ab4a375205371dd0ecaf9bda94e6a"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


<h2 class="heading heading--h2" id="Propriétés&nbsp;spéciales">Propriétés&nbsp;spéciales<a
        href="#Propriétés&nbsp;spéciales" aria-hidden="true" class="heading__anchor" data-module="CopyToClipboard"
        data-text="https://smnarnold.com/cours/gsap/introduction#Propriétés&nbsp;spéciales" data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>En plus des propriétés CSS de base, il est possible d'utiliser des propriétés&nbsp;spéciales.</p>
<h3 class="heading heading--h3" id="Duration">Duration</h3>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="/cours/css/animation">animation-duration</a>&nbsp;en CSS, la propriété&nbsp;<code>duration</code>&nbsp;de
    GSAP permet de spécifier la durée d'une&nbsp;animation.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_5" scrolling="no"
                src="https://codepen.io/smnarnold/embed/bc4dd29488f3ce60ae2419d605675dd6?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=bc4dd29488f3ce60ae2419d605675dd6&amp;default-tab=js%2Cresult&amp;name=cp_embed_5"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_bc4dd29488f3ce60ae2419d605675dd6"></iframe></div>
    </div>


</div>
<aside class="note note--info">
    <div class="note__wrapper">
        <p>Si aucune durée n’est spécifiée, GSAP utilisera une durée d’une demi-seconde <em>(0.5s)</em> par&nbsp;défaut.
        </p>

    </div>
</aside>
<h3 class="heading heading--h3" id="Repeat">Repeat</h3>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="/cours/css/animation">animation-iteration-count</a>&nbsp;en CSS, la
    propriété&nbsp;<code>repeat</code>&nbsp;de GSAP permet de spécifier le nombre de fois qu'une animation
    doit-être&nbsp;effectué.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_6" scrolling="no"
                src="https://codepen.io/smnarnold/embed/a863ded89166a4f8f9ec18824711803d?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=a863ded89166a4f8f9ec18824711803d&amp;default-tab=js%2Cresult&amp;name=cp_embed_6"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_a863ded89166a4f8f9ec18824711803d"></iframe></div>
    </div>


</div>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>Plutôt que d’utiliser le mot <code>infinite</code> pour indiquer qu’une animation doit jouer à l’infinie,
            GSAP s’attend à recevoir <code>-1</code>, comme pour le dernier carré du précédent&nbsp;exemple.</p>

    </div>
</aside>
<h3 class="heading heading--h3" id="Yoyo">Yoyo</h3>

<p>De façon similaire à&nbsp;<a
        href="https://smnarnold.com/cours/css/animation#animation-direction">animation-direction: alternate;</a>&nbsp;en
    CSS, la propriété&nbsp;<code>Yoyo</code>&nbsp;de GSAP permet d'indiquer à une animation d'alterner de direction à
    chaque&nbsp;répétition.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_7" scrolling="no"
                src="https://codepen.io/smnarnold/embed/d13c85444f1ec0bc617c50acfb369eb7?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=d13c85444f1ec0bc617c50acfb369eb7&amp;default-tab=js%2Cresult&amp;name=cp_embed_7"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_d13c85444f1ec0bc617c50acfb369eb7"></iframe></div>
    </div>


</div>
<h3 class="heading heading--h3" id="Delay">Delay</h3>

<p>Tout comme la propriété&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="/cours/css/animation">animation-delay</a>&nbsp;en CSS, la propriété&nbsp;<code>delay</code>&nbsp;de GSAP
    permet de spécifier un délai d'attente avant de démarrer une&nbsp;animation.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_8" scrolling="no"
                src="https://codepen.io/smnarnold/embed/0e035c54363fbd92a897733c5daeb258?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=0e035c54363fbd92a897733c5daeb258&amp;default-tab=js%2Cresult&amp;name=cp_embed_8"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_0e035c54363fbd92a897733c5daeb258"></iframe></div>
    </div>


</div>
<aside class="note note--warn">
    <div class="note__wrapper">
        <p>delay peut être pratique pour synchroniser 2 ou 3 éléments, mais pour une synchronisation plus complexe, il
            est conseillé d’utiliser une&nbsp;timeline.</p>

    </div>
</aside>
<h3 class="heading heading--h3" id="Stagger">Stagger</h3>

<p>Similaire à&nbsp;<a rel="noopener noreferrer" href="#delay">Delay</a>, Stagger fait en sorte qu'un groupe
    d'éléments&nbsp;<em>(.element)</em>&nbsp;ayant tous la même animation soient décalés. Ainsi, plutôt que de voir les
    trois carrés se déplacer en même temps, un délai de 0.2s est ajouté entre chaque&nbsp;animation.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(25% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_9" scrolling="no"
                src="https://codepen.io/smnarnold/embed/a53dbd6e023b96bafbacec6d36192994?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=a53dbd6e023b96bafbacec6d36192994&amp;default-tab=js%2Cresult&amp;name=cp_embed_9"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_a53dbd6e023b96bafbacec6d36192994"></iframe></div>
    </div>


</div>
<p>Il est aussi possible de passer un objet à&nbsp;<code>stagger</code>&nbsp;plutôt qu'un nombre. Dans cet objet, il est
    possible de spécifier le décalage entre chaque&nbsp;élément.</p>
<p>Par&nbsp;exemple:</p>
<pre><code class="hljs php">gsap.<span class="hljs-keyword">from</span>(<span class="hljs-string">'.element'</span>, { 
  x: <span class="hljs-string">'400%'</span>,
  stagger: {
    each: <span class="hljs-number">0.2</span>
  }
});</code></pre>
<p>Générerait exactement le même résultat que dans l'exemple précédent. Cependant, il est possible de passer des
    propriétés et valeurs supplémentaires afin de raffiner l'animation. Notamment,&nbsp;<code>from</code>, soit le point
    de départ de&nbsp;l'animation.</p>
<ul>
    <li>
        <p><code>"start"</code>&nbsp;part du début vers la fin&nbsp;<em>(par&nbsp;défaut)</em></p>
    </li>
    <li>
        <p><code>"end"</code>&nbsp;part de la fin vers le&nbsp;début</p>
    </li>
    <li>
        <p><code>"center"</code>&nbsp;du centre vers les&nbsp;extrémités</p>
    </li>
    <li>
        <p><code>"edges"</code>&nbsp;des extrémités vers le&nbsp;centre</p>
    </li>
    <li>
        <p><code>"random"</code>&nbsp;de façon aléatoire</p>
    </li>
</ul>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_10" scrolling="no"
                src="https://codepen.io/smnarnold/embed/44c45ac203c71ae0d56ed27f2187f878?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=44c45ac203c71ae0d56ed27f2187f878&amp;default-tab=js%2Cresult&amp;name=cp_embed_10"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_44c45ac203c71ae0d56ed27f2187f878"></iframe></div>
    </div>


</div>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://greensock.com/docs/v3/Staggers" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">Staggers</a>
            </li>

        </ul>
    </div>
</div>

<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-stagger-dominos" target="_blank" class="exercice-card__title">
            GSAP Stagger -&nbsp;Dominos
        </a>

        <p class="exercice-card__description">Pour cet exercice, écrivez une animation GSAP permettant de faire tomber
            tous les dominos un à la suite de l’autre en tirant profit de&nbsp;la...</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC1zdGFnZ2VyLWRvbWlub3MucG5n?w=620&amp;s=a9560e461a15e9d4d6e7be57792d8878"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC1zdGFnZ2VyLWRvbWlub3MucG5n?w=310&amp;s=0913232ff00e9eb27720bd8ee8aa1186"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC1zdGFnZ2VyLWRvbWlub3MucG5n?w=370&amp;s=af206d428f9f1d1ce451d09c5ff513c9"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC1zdGFnZ2VyLWRvbWlub3MucG5n?w=185&amp;s=b4eba2c5dadd3015a888758f5ef4b886"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


<h3 class="heading heading--h3" id="Ease">Ease</h3>

<p>Permets de dicter le rythme de l'animation, de la même façon que la&nbsp;<a target="_blank" rel="noopener noreferrer"
        href="/cours/css/animation">animation-timing-function</a>&nbsp;permet de le faire pour les
    animations/transitions&nbsp;CSS.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_11" scrolling="no"
                src="https://codepen.io/smnarnold/embed/3db1fd40ee4f011c1719714d8df0b7ad?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=3db1fd40ee4f011c1719714d8df0b7ad&amp;default-tab=js%2Cresult&amp;name=cp_embed_11"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_3db1fd40ee4f011c1719714d8df0b7ad"></iframe></div>
    </div>


</div>
<p><strong>Valeurs possibles:&nbsp; </strong></p>
<p><code>none</code>,&nbsp;<code>power1</code>, <code>power2</code>, <code>power3</code>,&nbsp;<code>power4</code>,
    <code>back</code>, <code>elastic</code>, <code>bounce</code>, <code>rough</code>, <code>slow</code>,
    <code>steps</code>, <code>circ</code>, <code>expo</code>, <code>sine</code></p>
<p>Il est possible de spécifier si un&nbsp;<code>ease</code>&nbsp;doit être effectué au début, à la fin ou au début et à
    la fin en ajoutant&nbsp;<code>.in</code>,&nbsp;<code>.out</code>&nbsp;ou&nbsp;<code>.inOut</code>&nbsp;après le nom
    du ease souhaité. Par exemple:&nbsp;<code>bounce.inOut</code>;</p>
<p>Si aucune spécification n'est donnée,&nbsp;<code>.out</code>&nbsp;sera&nbsp;utilisé.</p>
<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://greensock.com/get-started/#easing" target="_blank" rel="noopener noreferrer"
            class="tool-card__title">
            <strong>GreenSock Ease&nbsp;Visualizer</strong>
        </a>

        <p class="tool-card__description">Pour voir toutes les possibilités et visualiser la courbe de Bézier associée à
            chaque&nbsp;easing.</p>
    </div>

    <picture class="tool-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtZWFzZS12aXN1YWxpemVyLnBuZw==?w=620&amp;s=2cd7cabb9df2e5df01358eb91ed7a344"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtZWFzZS12aXN1YWxpemVyLnBuZw==?w=310&amp;s=15efb16f1db204ba43a36bc42fb22083"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtZWFzZS12aXN1YWxpemVyLnBuZw==?w=370&amp;s=2f14490f2b346252db854258021fc470"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtZWFzZS12aXN1YWxpemVyLnBuZw==?w=185&amp;s=2c01929d2e69f2583890ceb67b593921"
            width="" height="" loading="lazy" class="tool-card__image" style="object-position: 50% 50%;">&gt;
    </picture>
</aside>
<h3 class="heading heading--h3" id="Callbacks">Callbacks</h3>

<p>Les&nbsp;<code>Callbacks</code>&nbsp;permettent de déclencher une fonction JavaScript à différents moments clés
    d'une&nbsp;animation.</p>
<p>Par exemple, pour se synchroniser avec son début 🏁, il est possible d'utiliser&nbsp;<code>onStart</code>&nbsp;ou
    encore, avec sa fin 🔚 avec&nbsp;<code>onComplete</code>, comme dans l'exemple&nbsp;ci-dessous.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_12" scrolling="no"
                src="https://codepen.io/smnarnold/embed/98df676769dde578b3ead268e3dc1322?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=98df676769dde578b3ead268e3dc1322&amp;default-tab=js%2Cresult&amp;name=cp_embed_12"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_98df676769dde578b3ead268e3dc1322"></iframe></div>
    </div>


</div>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://greensock.com/get-started/#callbacks" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">Callbacks</a>
            </li>

        </ul>
    </div>
</div>

<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-callback-voiture-bleue" target="_blank" class="exercice-card__title">
            GSAP callback - Voiture&nbsp;bleue
        </a>

        <p class="exercice-card__description">Pour cet exercice, vous devez à l’aide de GSAP et se son ponctuelle
            compléter une animation de voiture afin de la faire rouler sur la&nbsp;rou...</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWJsZXVlLnBuZw==?w=620&amp;s=775c0a6364197a8d9646c3f29312cb2e"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWJsZXVlLnBuZw==?w=310&amp;s=5ac62075214f7af17a8a7fb54cfd68d4"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWJsZXVlLnBuZw==?w=370&amp;s=acf7e587d34156b7adca10b2159a95cf"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZ3NhcC12b2l0dXJlLWJsZXVlLnBuZw==?w=185&amp;s=4b2b01f52fa0dbfa25f6efec8c0812f8"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


<aside class="tool-card">
    <div class="tool-card__content">
        <em class="tool-card__tagline">🛠 Outil</em><br class="tool-card__break">
        <a href="https://codepen.io/collection/ANaOod?grid_type=grid" target="_blank" rel="noopener noreferrer"
            class="tool-card__title">
            <strong>Collection d'animations&nbsp;GSAP</strong>
        </a>

        <p class="tool-card__description">GSAP a créé une liste sur CodePen de différentes animations montrant le
            potentiel de leur librairie.&nbsp;Inspirez-vous!</p>
    </div>

    <picture class="tool-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtY29sbGVjdGlvbi5qcGc=?w=620&amp;s=c92d945de6e3cb8a587883520f107442"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtY29sbGVjdGlvbi5qcGc=?w=310&amp;s=dc8f9ebda2bc0cc74227829d722278a1"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtY29sbGVjdGlvbi5qcGc=?w=370&amp;s=ca7ea00d4eda78a4860992cd3d61fbcd"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3Rvb2xzL2dzYXAtY29sbGVjdGlvbi5qcGc=?w=185&amp;s=69ef82c5709516789dea02daa9d8ae6b"
            width="" height="" loading="lazy" class="tool-card__image" style="object-position: 50% 50%;">&gt;
    </picture>
</aside>
<div class="vimeo">
    <h2 class="heading heading--h2" id="Showreel 2020">Showreel 2020<a href="#Showreel 2020" aria-hidden="true"
            class="heading__anchor" data-module="CopyToClipboard"
            data-text="https://smnarnold.com/cours/gsap/introduction#Showreel 2020" data-snackbar="Lien copié.">
            <span class="heading__anchor__wrapper">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                    </path>
                </svg>
            </span>
        </a>
    </h2>


    <div class="vimeo__wrapper">
        <span class="vimeo__forced-height" style="padding-bottom: calc(56.25%);">
        </span>

        <iframe src="https://player.vimeo.com/video/502788725?title=0&amp;byline=0&amp;portrait=0"></iframe>
    </div>


</div>


















<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>