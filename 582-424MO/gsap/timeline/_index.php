<?php 
/**
 * @type     article
 * @title    4-Timeline
 * @icon     images/icon.svg
 * @abstract Une ligne du temps pour vous permettre d'organiser un groupe d'animations.
 * @index    980
 */
?>

<grostitre>Intro</grostitre>
<p>La&nbsp;<code>Timeline</code>de&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/gsap/introduction">GSAP</a>&nbsp;permet d'organiser un groupe d'animations. Par exemple, pour enchaîner trois animations une à la suite de l'autre, afin de créer une animation complexe, il serait nécessaire d'appliquer un délai sur chacune d'entre&nbsp;elles.</p>

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


<p>Il est parfois souhaitable qu'une animation se déclenche plus tôt ou plus tard et non immédiatement après l'animation précédente. Pour ce faire, il est possible de passer un 3<sup>e</sup>&nbsp;paramètre à une animation se trouvant dans une&nbsp;<code>timeline</code>. Ce 3e paramètre vient généralement après l'objet contenant les propriétés animées <em>{}</em> tel que démontré dans ces 2 exemples :</p>

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

<p>Par exemple, si le 2<sup>e</sup> 🟦 devait commencer après cinq secondes&nbsp;<em>(créant ainsi un délai)</em>, il serait possible d'utiliser&nbsp;<code>5</code> comme troisième paramètre.</p>

<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="LYJodBR" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/LYJodBR">
  GSAP - Timeline basic chaining</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<info>Remarquez comment le 3e carré 🟥 reste synchronisé avec l’animation précédente même si elle à un paramètre de position&nbsp;absolue.</info>

<dots></dots>
<h3 id="position-relative">Position relative</h3>

<h4>Délai (+=) ou précoce (-=)</h4><br>

<p>Il est possible de spécifier un délai de départ d'une animation par rapport à l'animation&nbsp;précédente, donc <em>RELATIF</em> à l'animation précédente. Ce délai peut être <em>positif ou négatif</em>.</p>

<p>Par exemple, pour ajouter un délai d'une seconde avant de déclencher la prochaine animation, il est possible de spécifier&nbsp;<code>"+=1"</code>. </p>
<p>Pour qu'une animation commence une seconde plus tôt, le code serait <code>"-=1"</code>, comme dans l'exemple&nbsp;suivant, où le 2<sup>e</sup>&nbsp;carré 🟦 débute au milieu de la course du 1<sup>er</sup> carré plutôt qu'à la fin de celle-ci.</p>

<p class="codepen" data-height="330" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="bGxyMEz" data-user="tim-momo" style="height: 330px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/bGxyMEz">
  GSAP -  Timeline - Relative position parameter</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<br><br>
<h4>En même temps (<)</h4><br>






<p>Cependant, si l'objectif est de démarrer l'animation en même temps que la précédente, il existe une position efficace pouvant se synchroniser avec le début de l'animation précédente, et ce même si la durée de celle-ci venait à&nbsp;changer.</p>

<p>Pour ce faire, il faut utiliser&nbsp;<code>"&lt;"</code>&nbsp;comme&nbsp;ceci:</p>



<p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="poOmVPv" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/poOmVPv">
  GSAP -  Timeline position sync</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>



<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_3" scrolling="no"
                src="https://codepen.io/smnarnold/embed/0909fe8d0fc5ef3d1a037416e25bd289?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=0909fe8d0fc5ef3d1a037416e25bd289&amp;default-tab=js%2Cresult&amp;name=cp_embed_3"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_0909fe8d0fc5ef3d1a037416e25bd289"></iframe></div>
    </div>
</div>
<info>Il est même possible d’ajouter une valeur après le symbole <code>"&lt;"</code> si sa position doit être basée
            sur le début de l’animation précédente, mais être légèrement différente. Par
            exemple&nbsp;<code>"&lt;0.25"</code>.</info>












            
<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-timeline-the-incredible-machine" target="_blank" class="exercice-card__title">
            GSAP Timeline - The Incredible&nbsp;Machine
        </a>

        <p class="exercice-card__description">Pour cet exercice, vous allez devoir animer le premier niveau du jeu The
            Incredible Machine, aussi surnommé&nbsp;TIM 😉
            Classique de 1992, ce&nbsp;j...</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdGhlLWluY3JlZGlibGUtbWFjaGluZS5wbmc=?w=620&amp;s=a630ec0f07ed99e717f979f72598ca0c"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdGhlLWluY3JlZGlibGUtbWFjaGluZS5wbmc=?w=310&amp;s=b4944c48b07f6cb9ae135df48f610e50"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdGhlLWluY3JlZGlibGUtbWFjaGluZS5wbmc=?w=370&amp;s=3139800d1c256b2765ec7b615f52e0c8"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvdGhlLWluY3JlZGlibGUtbWFjaGluZS5wbmc=?w=185&amp;s=74095bc36e4509092fde127dd769e19f"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>






<h2 class="heading heading--h2" id="Labels">Labels<a href="#Labels" aria-hidden="true" class="heading__anchor"
        data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/gsap/timeline#Labels"
        data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>Sauter rapidement à une position précise dans une animation peut s'avérer pratique. Surtout lorsqu'une animation
    devient longue et que seule la fin nécessite des ajustements. Dès lors, regarder le début de l'animation devient
    redondant et une perte de&nbsp;temps.</p>
<p>Par exemple:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_5" scrolling="no"
                src="https://codepen.io/smnarnold/embed/4b6e245c0d4f1ca77a162166afdf5727?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=4b6e245c0d4f1ca77a162166afdf5727&amp;default-tab=js%2Cresult&amp;name=cp_embed_5"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_4b6e245c0d4f1ca77a162166afdf5727"></iframe></div>
    </div>


</div>
<p>Un label est défini grâce à&nbsp;<code>.add('red')</code>. Il est ensuite possible de sauter directement à cette
    position dans la timeline en appelant&nbsp;<code>animation.play('red')</code>.</p>
<h2 class="heading heading--h2" id="Defaults">Defaults<a href="#Defaults" aria-hidden="true" class="heading__anchor"
        data-module="CopyToClipboard" data-text="https://smnarnold.com/cours/gsap/timeline#Defaults"
        data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>Certaines propriétés peuvent être partagées par plusieurs animations dans une&nbsp;<code>timeline</code>.</p>
<p>Si tous les éléments ont une translation de&nbsp;<code>x: '400%'</code>&nbsp;et
    un&nbsp;<code>ease</code>&nbsp;identique. Plutôt que de répéter cette combinaison sur chaque élément, il est
    possible de définir des propriétés/valeurs par défaut. Ainsi, toutes les animations enfants de
    cette&nbsp;<code>timeline</code>&nbsp;partageront ces propriétés, à moins de la redéfinir à l'intérieur d'une
    animation&nbsp;spécifiquement.</p>
<p>Par&nbsp;exemple:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_6" scrolling="no"
                src="https://codepen.io/smnarnold/embed/6164cfdb42fdb8f603a42150c1baf437?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=6164cfdb42fdb8f603a42150c1baf437&amp;default-tab=js%2Cresult&amp;name=cp_embed_6"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_6164cfdb42fdb8f603a42150c1baf437"></iframe></div>
    </div>


</div>
<h2 class="heading heading--h2" id="GSDevTools">GSDevTools<a href="#GSDevTools" aria-hidden="true"
        class="heading__anchor" data-module="CopyToClipboard"
        data-text="https://smnarnold.com/cours/gsap/timeline#GSDevTools" data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>GreenSock offre des plugiciels payants, réservés aux membres du&nbsp;<a href="https://greensock.com/club/">Club
        GreenSock</a>. Parmi ceux-ci, GSDevTools est particulièrement utile pour peaufiner ses animations. Heureusement,
    GreenSock offre la possibilité de l'utiliser gratuitement et légalement via la plateforme&nbsp;CodePen.</p>
<p>Pour ce faire, il suffit d'incorporer l'url du plugiciel désiré dans les&nbsp;<em>Settings</em>&nbsp;de&nbsp;CodePen.
</p>
<p><a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76">Voir les plugiciels&nbsp;disponibles</a>
</p>
<p>Lorsque GSDevTools est ajouté à un pen, la ligne&nbsp;<code>GSDevTools.create();</code>&nbsp;suffis à l'initialiser.
    Dès lors, un lecteur permettant de manipuler son animation devient&nbsp;disponible.</p>
<p>Ce lecteur permet de:</p>
<ul>
    <li>
        <p>Jouer une animation en&nbsp;boucle</p>
    </li>
    <li>
        <p>Changer sa vitesse&nbsp;<em>(ralentir/accélérer)</em></p>
    </li>
    <li>
        <p>Isoler certaines sections de&nbsp;l'animation</p>
    </li>
</ul>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_7" scrolling="no"
                src="https://codepen.io/smnarnold/embed/62eb6f268030d83ff0e4262e3d2e0311?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=62eb6f268030d83ff0e4262e3d2e0311&amp;default-tab=js%2Cresult&amp;name=cp_embed_7"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_62eb6f268030d83ff0e4262e3d2e0311"></iframe></div>
    </div>


</div>
<aside class="note note--info">
    <div class="note__wrapper">
        <p>Créer une animation peut se faire rapidement. Cependant, la peaufiner pour que tous les <em>timings</em>
            soient parfaits requiert du temps. Prenez le temps d’observer vos <em>timings</em> et de les&nbsp;ajuster.
        </p>

    </div>
</aside>
<aside class="exercice-card">
    <div class="exercice-card__content">
        <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
        <a href="/exercices/gsap/gsap-timeline-excitebike" target="_blank" class="exercice-card__title">
            GSAP Timeline -&nbsp;Excitebike
        </a>

        <p class="exercice-card__description">Pour cet exercice, nous allons créer une animation inspirée du jeu
            Nintendo Excitebike sorti en 1984!&nbsp;🏍</p>
    </div>

    <picture class="exercice-card__preview">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZXhjaXRlYmlrZS5wbmc=?w=620&amp;s=99ab3c2810e8de851213004fa94883dc"
            media="(max-width: 575px) and (min-resolution: 2dppx)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZXhjaXRlYmlrZS5wbmc=?w=310&amp;s=bf34faf95b6da652fd63c0a5cd303ba9"
            media="(max-width: 575px)">
        <source
            srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZXhjaXRlYmlrZS5wbmc=?w=370&amp;s=aa3bdd0a23f645567f8a8bfc0d6dad2b"
            media="(min-resolution: 2dppx)">
        <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZXhjaXRlYmlrZS5wbmc=?w=185&amp;s=97c57e67a740f3d17ed75101e43a505a"
            width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>



















<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>