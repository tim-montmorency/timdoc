<?php 
/**
 * @type     article
 * @title    1-Introduction
 * @icon     ../images/icon.webp
 * @abstract GreenSock Animation Platform
 * @index    1000
 * @ref      web/cadriciels/gsap
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


<dots></dots>

<grostitre>Précédentes versions</grostitre>

<p>Vous avez peut-être déjà utilisé ou entendu parler&nbsp;de: <em>TweenLite</em>, <em>TweenMax</em>, <em>TimelineLite</em>, <em>TimelineMax</em> ou vous tomberez peut-être sur des articles mentionnant ces outils en lisant sur le web. Ce qui est normal,
    puisqu'ils ont étés des parties importantes de GSAP durant de nombreuses années. Cependant, vers la fin de 2019, ils
    furent remplacés par l'objet GSAP lors de la sortie de <strong>GSAP&nbsp;3</strong>.</p>

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
            la librarie</a>, 📥 l'inclure dans votre dossier de projet et lier le fichier <em>gsap-public/minified/gsap-core.min.js</em> à votre HTML.<br><small>Prioriser toujours les versions minifiées qui sont plus performantes lors du chargement de la page.</small></li>
    <li>D'utiliser un <a href="https://greensock.com/docs/v3/Installation?checked=core#CDN" target="_blank">Content Delivery Network (CDN)</a></li>
    <li>De partir des&nbsp;<a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76"
            target="_blank">gabarits de base CodePen</a>. Vous devez alors copier le lien GSAP Core. Ensuite sur votre
        CodePen via <em>Settings/JS/Add External Scripts</em> et y coller le lien GSAP Core.</li>
</ul>
<doclink href="https://greensock.com/docs/v3/Installation">Install GSAP</doclink>
<info>
    <h4>CDN : Content Delivery Network</h4>
    On vous recommande vivement l'utilisation de fichiers CDN car ils sont largement <a
        href="https://medium.com/@codebyamir/a-web-developers-guide-to-browser-caching-cc41f3b73e7c" target="_blank">mis
        en cache</a> et se chargent très rapidement. Près de 10.000.000 de sites utilisent GSAP, donc si l'un de vos
    visiteurs a été sur un site qui a chargé GSAP à partir de ce même CDN, cela ne coûte aucune bande passante
    (chargement instantané !).
</info>
<doclink href="https://medium.com/@codebyamir/a-web-developers-guide-to-browser-caching-cc41f3b73e7c">À propos des
    caches de navigateur web</doclink>

<alert>Toujours porter attention à l'ordre des liens vers les fichiers JavaScript dans votre HTML. D'abord la librarie "core" de GSAP, ensuite le fichier JavaScript personnalisé de votre projet.</alert>

<warning>Ne pas oublier, au niveau performance, il est préférable de lier les fichiers JavaScript à la fin de la page HTML juste avant la fermeture de <incode>&lt;/body&gt;</incode>. <br>Pensez "Optimisation Web" ! 📈 🎯 ⚡</warning>



<dots></dots>





<grostitre>Showreel 2022</grostitre>

<youtube src="EYlgDSFIOcI"></youtube>

<dots></dots>
<tool href="../tools/collection-animations-gsap/"></tool>

<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>