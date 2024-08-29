<?php 
/**
 * @type     article
 * @title    Introduction
 * @icon     ../images/icon.webp
 * @abstract Syntactically Awesome Style Sheets
 * @index    100
 * @ref      web/sass
 */
?>
<p>SASS ou <em>Syntactically Awesome Style Sheets</em> est un préprocesseur CSS. Autrement dit, il s'agit d'un langage
    permettant de générer du code CSS. Pourquoi ne pas écrire directement du CSS alors? Afin bénéficier des avantages
    que procure SASS! Tel que les variables, le nesting, les partials, les mixins, etc.</p>

<grostitre>Utilisation</grostitre>


<p>L'usage de SASS est très répandue. Plusieurs sites et librairies d'envergures l'utilisent, notamment:</p>
<ul>
    <li>
       <a target="_blank" rel="noopener noreferrer"
                href="https://github.com/twbs/bootstrap/tree/main/scss">Bootstrap</a>
    </li>
    <li>
      <a target="_blank" rel="noopener noreferrer" href="https://fr.airbnb.ca/">AirBnB</a>
    </li>
    <li>
       <a target="_blank" rel="noopener noreferrer" href="https://sidlee.com/fr">SidLee</a>
    </li>
    <li>
       etc.
    </li>
</ul>





<dots></dots>
<grostitre>Syntaxes</grostitre>

<p>SASS offre deux syntaxes de base différentes <incode>.sass</incode> et <incode>.scss</incode>.</p>
<h3 class="heading heading--h3" id="SASS">SASS</h3>

<p>La syntaxe SASS fut la syntaxe originale de SASS <em>(d'où son nom)</em>. Elle se base principalement sur
    l'indentation du code ainsi que les sauts de ligne. Afin de la différencier de SASS le préprocesseur, cette syntaxe
    est souvent surnommée la <em>"syntaxe indenté"</em>.</p>
<p>Dans le cadre de ce cours, nous, nous concentrerons surtout sur la syntaxe <incode>.scss</incode>. Nous n'élaborerons
    donc pas trop sur la syntaxe <incode>.sass</incode>. </p>
<h3 class="heading heading--h3" id="SCSS">SCSS</h3>

<p>La syntaxe SCSS est la plus récente et répandue. Elle ressemble au CSS traditionnel, ce qui la rend facile à
    apprendre pour quiconque comprend les bases du langage CSS et incorpore les avantages de la syntaxe
    <incode>.sass</incode>. Cette syntaxe est souvent surnommée <em>"Sassy CSS"</em>.</p>



<dots></dots>
<grostitre>CodePen</grostitre>

<p>Pour écrire du SCSS dans CodePen, il suffit de cliquer sur la roue dentelée ⚙️ à la gauche du titre de l'onglet CSS
    et choisir son option de préprocesseur <em>SCSS</em>.</p>

<clipasset src="images/scss-codepen.mp4"></clipasset>


<info>🤫 Tous les exercices qui ont été conçus dans le cadre de ce cours sont d’abord écrits en SCSS et sont ensuite convertis en CSS.</info>


<dots></dots>
<grostitre>Compilation</grostitre>

<p>Il existe plusieurs solutions disponibles afin de compiler du code SASS en CSS afin que les navigateurs puissent l'interpréter: </p>


<ol start="1">
    <li>Un outil en ligne tel que <a target="_blank" rel="noopener noreferrer" href="https://sass-lang.com/playground/">Sass Playground</a>, permet de convertir du code de scss vers css. Cependant, cette solution implique de recopier à la main 🖐 son code à chaque fois que l'on souhaite le compiler.
    </li>
    <li>
        Avec Visual Studio Code, il y a une panoplie d'extentions que vous pouvez installer pour que votre sass/scss se compile en css. <a href="https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass" target="_blank" rel="noopener noreferrer">Live Sass Compiler</a> est un très bon exemple. 
    </li>
    <li>
        Une solution idéale, mais légèrement plus complexe consiste à utiliser un <em>module bundler</em>. Par exemple: <a
                target="_blank" rel="noopener noreferrer" href="https://webpack.js.org/">webpack</a>, <a target="_blank"
                rel="noopener noreferrer" href="https://rollupjs.org/guide/en/">Rollup</a>, <a target="_blank"
                rel="noopener noreferrer" href="/cours/autres/vite">Vite</a>, etc. Ces bundlers peuvent être installés
            directement dans un projet, simplifiant et uniformisant ainsi le travail entre les membres d'une
            équipe.
    </li>
</ol>


<info>Dans le cadre de ce cours, pour la séance d'aujourd'hui, nous utliserons l'extention de Visual Studio Code nommée <a href="https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass" target="_blank" rel="noopener noreferrer">Live Sass Compiler</a>. Plus tard, vous serez introduits à un <em>module bundler</em> et vous l'utiliserez notemment pour compiler votre code SASS en CSS. </info>





<dots></dots>
<grostitre>Alternatives à Sass</grostitre>

<ul>
    <li>
      <a target="_blank" rel="noopener noreferrer" href="https://stylus-lang.com/">Stylus</a>
    </li>
    <li>
       <a target="_blank" rel="noopener noreferrer" href="https://lesscss.org/">Less</a>
    </li>
</ul>
