<?php 
/**
 * @type     article
 * @title    7-ScrollTrigger intermédiaire
 * @icon     images/icon.svg
 * @abstract Scrub, pin, pinspacing, callbacks
 * @index    750
 */
?>







<grostitre>Scrub</grostitre>

<p>La propriété&nbsp;<incode>scrub</incode>&nbsp;permet de synchroniser la progression d'une animation avec le défilement de
    la page&nbsp;<em>(scroll)</em>. Ainsi, l'animation débutera lorsque le
    marqueur&nbsp;<u>start</u>&nbsp;croisera&nbsp;<u>scroller-start</u>&nbsp;et <strong>progressera proportionellement</strong> jusqu'à
    ce que le marqueur&nbsp;<u>end</u>&nbsp;croise&nbsp;<u>scroller-end</u>.</p>
<p>Par défaut, la valeur de cette propriété est à&nbsp;<incode>false</incode>. Pour l'activer, il faut lui donner la
    valeur&nbsp;<incode>true</incode>, comme dans l'exemple&nbsp;suivant:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_1" scrolling="no"
                src="https://codepen.io/smnarnold/embed/27ae7ecfda89fe046e2882082a153f7e?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=27ae7ecfda89fe046e2882082a153f7e&amp;default-tab=js%2Cresult&amp;name=cp_embed_1"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_27ae7ecfda89fe046e2882082a153f7e"></iframe></div>
    </div>


</div>
<p>Lorsque la roulette d'une souris 🖱️ est utilisée pour effectuer un défilement de page&nbsp;<em>(scroll)</em>,
    l'animation est parfois saccadée. Ce comportement est normal, puisque certaines souris incrémentent le défilement en
    utilisant un très grand intervalle. Cependant, il est possible de remédier à ce problème en spécifiant à la
    propriété&nbsp;<incode>scrub</incode>&nbsp;une valeur en secondes ⏲️ . Ainsi, une interpolation correspondant à la durée
    est générée entre chaque étape de&nbsp;l'animation.</p>
<p>Par exemple, reprenons le précédent exemple, mais avec une interpolation d'une seconde&nbsp;<incode>scrub: 1</incode>:
</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_2" scrolling="no"
                src="https://codepen.io/smnarnold/embed/dc5fc6c8b6b6f7682194775eb0166bf5?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=dc5fc6c8b6b6f7682194775eb0166bf5&amp;default-tab=js%2Cresult&amp;name=cp_embed_2"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_dc5fc6c8b6b6f7682194775eb0166bf5"></iframe></div>
    </div>


</div>


<exercice href="../exercices/gsap-scrub"></exercice>  




<dots></dots>
<grostitre>Pin</grostitre>




<p>La propriété&nbsp;<incode>pin</incode>&nbsp;permet de fixer verticalement un élément durant son animation, de sorte
    qu'elle reste visible tout au long de sa&nbsp;progression.</p>
<p>Par défaut, la valeur de cette propriété est à&nbsp;<incode>false</incode>. Pour l'activer, il faut lui donner la
    valeur&nbsp;<incode>true</incode>, comme dans l'exemple suivant:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_3" scrolling="no"
                src="https://codepen.io/smnarnold/embed/a845ec94c40005ff400aee7e0a1194c5?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=a845ec94c40005ff400aee7e0a1194c5&amp;default-tab=js%2Cresult&amp;name=cp_embed_3"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_a845ec94c40005ff400aee7e0a1194c5"></iframe></div>
    </div>


</div>
<p>Afin d'effectuer un pin, ScrollTrigger ajoute un div englobant l'élément animé et lui donne temporairement
    une&nbsp;<incode>position: fixed;</incode>&nbsp;afin d'éviter que le défilement de la page&nbsp;l'affecte.</p>
<p>Afin de visualiser ce comportement, revoici le précédent exemple, mais avec une bordure pointillée autour du div créé
    par&nbsp;ScrollTrigger:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_4" scrolling="no"
                src="https://codepen.io/smnarnold/embed/950337597eaa86afc21149a3cfc61ae3?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=950337597eaa86afc21149a3cfc61ae3&amp;default-tab=js%2Cresult&amp;name=cp_embed_4"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_950337597eaa86afc21149a3cfc61ae3"></iframe></div>
    </div>


</div>


<exercice href="../exercices/gsap-pin-marvel"></exercice>  





<dots></dots>
<grostitre>Pin Spacing</grostitre>


<p>Par défaut, la propriété&nbsp;<incode>pin</incode>&nbsp;crée un espace vide afin que l'élément animé reste toujours entre
    l'élément qui le précède et celui qui le suit. Cependant, la propriété&nbsp;<incode>pinSpacing</incode>&nbsp;permet de
    contrôler ce comportement, si cet espace est jugé&nbsp;indésirable.</p>
<p>Par défaut, la valeur de cette propriété est a&nbsp;<incode>true</incode>, ce qui crée l'espace mentionné. Pour le
    désactiver, il faut lui donner la valeur&nbsp;<incode>false</incode>, comme dans l'exemple suivant:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_5" scrolling="no"
                src="https://codepen.io/smnarnold/embed/cec7240c3891efa92ee7df76b245772c?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=cec7240c3891efa92ee7df76b245772c&amp;default-tab=js%2Cresult&amp;name=cp_embed_5"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_cec7240c3891efa92ee7df76b245772c"></iframe></div>
    </div>


</div>





<dots></dots>
<grostitre>Callbacks</grostitre>



<p>Les&nbsp;<incode>callbacks</incode>&nbsp;permettent de déclencher une fonction JavaScript à différents moments clés d'une
    animation synchronisée avec ScrollTrigger et d'obtenir des informations relatives à cette&nbsp;dernière.</p>
<p>Par exemple, pour déclencher un événement lorsque le marqueur&nbsp;<u>start</u>&nbsp;croise le
    marqueur&nbsp;<u>scroller-start</u>, il est possible d'utiliser&nbsp;<incode>onEnter</incode>.</p>
<p>Pour déclencher des événements tant et aussi longtemps que l'animation est en cours, il est possible
    d'utiliser&nbsp;<incode>onUpdate</incode>, comme dans l'exemple ci-dessous. Dès que l'animation est
    mise-à-jours&nbsp;<em>(update)</em>&nbsp;la valeur de la propriété&nbsp;<incode>direction</incode>&nbsp;<em>(1 ou
        -1)</em>&nbsp;est affichée dans le carré&nbsp;bleu 🟦</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_6" scrolling="no"
                src="https://codepen.io/smnarnold/embed/782bfd9f82449fc7b9ffc70f6c5b5d50?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=782bfd9f82449fc7b9ffc70f6c5b5d50&amp;default-tab=js%2Cresult&amp;name=cp_embed_6"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_782bfd9f82449fc7b9ffc70f6c5b5d50"></iframe></div>
    </div>


</div>
<h3 class="heading heading--h3" id="Callbacks disponibles">Callbacks disponibles</h3>

<ul>
    <li>
        <p><incode>onEnter</incode>&nbsp;déclenché
            lorsque&nbsp;<u>start</u>&nbsp;dépasse&nbsp;<u>scroller-start</u>&nbsp;en&nbsp;montant ⬆️</p>
    </li>
    <li>
        <p><incode>onLeave</incode>déclenché
            lorsque&nbsp;<u>end</u>&nbsp;dépasse&nbsp;<u>scroller-end</u>&nbsp;en&nbsp;montant ⬆️</p>
    </li>
    <li>
        <p><incode>onEnterBack</incode>&nbsp;déclenché
            lorsque&nbsp;<u>end</u>&nbsp;dépasse&nbsp;<u>scroller-end</u>&nbsp;en&nbsp;descendant ⬇️</p>
    </li>
    <li>
        <p><incode>onLeaveBack</incode>&nbsp;déclenché
            lorsque&nbsp;<u>start</u>&nbsp;dépasse&nbsp;<u>scroller-start</u>&nbsp;en&nbsp;descendant ⬇️</p>
    </li>
    <li>
        <p><incode>onUpdate</incode>&nbsp;déclenché à de multiple reprises, tant que l'animation est en cours
            de&nbsp;progression.</p>
    </li>
    <li>
        <p>Etc.</p>
    </li>
</ul>
<h3 class="heading heading--h3" id="Informations associées aux callbacks">Informations associées aux callbacks</h3>

<p>Il est possible de spécifier un paramètre à un callback ScrollTrigger. Ce paramètre contiendra un objet JavaScript
    constitué d'informations sur le callback en question.</p>
<ul>
    <li>
        <p><incode>.isActive</incode>&nbsp;retourne&nbsp;<incode>true</incode>&nbsp;si l'animation est en cours
            et&nbsp;<incode>false</incode>&nbsp;dans le cas&nbsp;contraire.</p>
    </li>
    <li>
        <p><incode>.direction</incode>&nbsp;retourne&nbsp;<incode>1</incode>&nbsp;si l'animation monte ⬆️
            et&nbsp;<incode>-1</incode>&nbsp;si l'animation&nbsp;descend ⬇️.</p>
    </li>
    <li>
        <p><incode>.progress</incode>&nbsp;retourne un chiffre entre 0 et 1 correspondant au pourcentage de progression
            de&nbsp;l'animation.</p>
    </li>
    <li>
        <p>etc.</p>
    </li>
</ul>
<exercice href="../exercices/gsap-callback-link/"></exercice>  


<exercice href="../exercices/gsap-scrolltrigger-gotham/"></exercice>  


<dots></dots>

<tool href="../tools/collection-animations-scrolltrigger/"></tool>

