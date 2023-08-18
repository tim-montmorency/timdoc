<?php 
/**
 * @type     article
 * @title    Introduction
 * @icon     images/icon.png
 * @abstract abc
 * @index 100
 */
?>
<p>SASS ou <em>Syntactically Awesome Style Sheets</em> est un préprocesseur CSS. Autrement dit, il s'agit d'un langage
    permettant de générer du code CSS. Pourquoi ne pas écrire directement du CSS alors? Afin bénéficier des avantages
    que procure SASS! Tel que les variables, le nesting, les partials, les mixins, etc.</p>

<grostitre>Utilisation</grostitre>


<p>L'usage de SASS est très répandue. Plusieurs sites et librairies d'envergures l'utilisent, notamment:</p>
<ul>
    <li>
        <p><a target="_blank" rel="noopener noreferrer"
                href="https://github.com/twbs/bootstrap/tree/main/scss">Bootstrap</a></p>
    </li>
    <li>
        <p><a target="_blank" rel="noopener noreferrer" href="https://fr.airbnb.ca/">AirBnB</a></p>
    </li>
    <li>
        <p><a target="_blank" rel="noopener noreferrer" href="https://sidlee.com/fr">SidLee</a></p>
    </li>
    <li>
        <p>etc.</p>
    </li>
</ul>





<dots></dots>
<grostitre>Syntaxes</grostitre>

<p>SASS offre deux syntaxes de base différentes <code>.sass</code> et <code>.scss</code>.</p>
<h3 class="heading heading--h3" id="SASS">SASS</h3>

<p>La syntaxe SASS fut la syntaxe originale de SASS <em>(d'où son nom)</em>. Elle se base principalement sur
    l'indentation du code ainsi que les sauts de ligne. Afin de la différencier de SASS le préprocesseur, cette syntaxe
    est souvent surnommée la <em>"syntaxe indenté"</em>.</p>
<p>Dans le cadre de ce cours, nous, nous concentrerons surtout sur la syntaxe <code>.scss</code>. Nous n'élaborerons
    donc pas trop sur la syntaxe <code>.sass</code>. </p>
<h3 class="heading heading--h3" id="SCSS">SCSS</h3>

<p>La syntaxe SCSS est la plus récente et répandue. Elle ressemble au CSS traditionnel, ce qui la rend facile à
    apprendre pour quiconque comprend les bases du langage CSS et incorpore les avantages de la syntaxe
    <code>.sass</code>. Cette syntaxe est souvent surnommée <em>"Sassy CSS"</em>.</p>



<dots></dots>
<grostitre>CodePen</grostitre>

<p>Pour écrire du SCSS dans CodePen, il suffit de cliquer sur la roue dentelée ⚙️ à la gauche du titre de l'onglet CSS
    et choisir son option de préprocesseur <em>SCSS</em>.</p>
<div class="image">

    <div class="image__wrapper image__wrapper--landscape">
        <video src="/assets/scss-codepen.mp4" autoplay="" muted="" loop="" class="image__gifv"></video>
    </div>



</div>

<div class="reaction">
    <div class="reaction__wrapper">
        <div class="reaction__emoji">
            🤫
        </div>
        <div class="reaction__content">
            <div class="reaction__text">
                <p>Tous les exercices que je conçois dans le cadre de ce cours sont d’abord écrits en SCSS et sont
                    ensuite convertis en CSS.</p>
            </div>
        </div>
    </div>
</div>


<dots></dots>
<grostitre>Compilation</grostitre>

<p>Il existe plusieurs solutions disponibles afin de compiler du code SASS en CSS afin que les navigateurs puissent
    l'interpréter: </p>
<ol start="1">
    <li>
        <p>La plus simple, <a target="_blank" rel="noopener noreferrer"
                href="https://www.sassmeister.com/">SassMeister</a>, permet de convertir en ligne du code. Cependant,
            cette solution implique de recopier à la main 🖐 son code à chaque fois que l'on souhaite le compiler.</p>
    </li>
    <li>
        <p>La solution intermédiaire est d'utiliser un logiciel se chargeant de la compilation. Par exemple, <a
                target="_blank" rel="noopener noreferrer" href="https://prepros.io/">Prepros</a> permet de surveiller
            votre code SASS et de le compiler à chaque changement.</p>
    </li>
    <li>
        <p>La solution idéale, mais légèrement plus complexe consiste à utiliser un bundler. Par exemple: <a
                target="_blank" rel="noopener noreferrer" href="https://webpack.js.org/">webpack</a>, <a target="_blank"
                rel="noopener noreferrer" href="https://rollupjs.org/guide/en/">Rollup</a>, <a target="_blank"
                rel="noopener noreferrer" href="/cours/autres/vite">Vite</a>, etc. Ces bundlers peuvent être installés
            directement dans un projet, simplifiant et uniformisant ainsi le travail entre les membres d'une
            équipe.<br><br>Dans le cadre de ce cours, nous verrons comment <a target="_blank" rel="noopener noreferrer"
                href="/cours/autres/vite">compiler du SASS via Vite</a>.</p>
    </li>
</ol>



<dots></dots>
<grostitre>Alternatives</grostitre>

<ul>
    <li>
        <p><a target="_blank" rel="noopener noreferrer" href="https://stylus-lang.com/">Stylus</a></p>
    </li>
    <li>
        <p><a target="_blank" rel="noopener noreferrer" href="https://lesscss.org/">Less</a></p>
    </li>
</ul>
<p></p>