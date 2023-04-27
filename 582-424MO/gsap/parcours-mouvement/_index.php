<?php 
/**
 * @type     article
 * @title    9-Animation sur un tracé
 * @icon     images/icon.svg
 * @abstract MotionPath: animer un élément  sur un tracé
 * @index    600
 */
?>

<grostitre>Intro MotionPath</grostitre>
<p>MotionPath est un plugiciel&nbsp;<em>(plugin)</em>&nbsp;développé par&nbsp;<a
        href="https://greensock.com/" target="_blank">GreenSock</a>&nbsp;permettant de déplacer un élément ou une animation sur
    un&nbsp;tracé.</p>
<p>Voici par exemple une animation de&nbsp;<a href="https://codepen.io/cdyer" target="_blank">Chris Dyer</a>&nbsp;utilisant MotionPath
    afin de déplacer l'hélicoptère 🚁 de façon&nbsp;réaliste.</p>
<div class="codepen codepen--chromeless" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(56% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_1" scrolling="no"
                src="https://codepen.io/smnarnold/embed/xxGVbVj?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=xxGVbVj&amp;default-tab=result&amp;name=cp_embed_1"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_xxGVbVj"></iframe></div>
    </div>


</div>

<dots></dots>
<grostitre>Précédente version</grostitre>


<p>Vous tomberez peut-être sur des articles ou de la documentation mentionnant le
    plugiciel&nbsp;<em>(plugin)</em>&nbsp;<a href="https://greensock.com/bezierplugin-js/" target="_blank">Bezier</a>&nbsp;de GSAP en
    lisant sur le&nbsp;web.</p>
<p>Ce plugin était le prédécesseur de MotionPath et fut remplacé vers la fin de 2019 avec la sortie de&nbsp;GSAP&nbsp;3.
    Faites attention de ne pas confondre les&nbsp;deux.</p>

    
<dots></dots>
<grostitre>Installation</grostitre>


<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GreenSock, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>
<p>Pour ce faire, il est&nbsp;possible:</p>
<ul>
    <li>
        <p>De le télécharger sur le&nbsp;<a
                href="https://greensock.com/docs/v3/Installation?checked=core,motionPath#download" target="_blank">Site
                de&nbsp;GreenSock</a> et l'installer dans votre propre projet.</p>
    </li>
    <li>
        <p>D'utiliser un&nbsp;<a href="https://greensock.com/docs/v3/Installation?checked=core,motionPath#CDN"  target="_blank">CDN</a></p>
    </li>
</ul>
<p>Une fois chargé, il est conseillé d'indiquer à GSAP que MotionPath est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

    <highlight lang='JavaScript'>gsap.registerPlugin(MotionPathPlugin);</highlight>

<warning>MotionPath n’est compatible qu’avec <strong>GSAP 3 et&nbsp;plus</strong>.</warning>



<dots></dots>
<grostitre>Utilisation de base</grostitre>

<p>La façon la plus simple d'utiliser MotionPath est à partir d'un tracé dans un&nbsp;SVG.</p>

<info><strong>👍 Obtenir ou dessiner un SVG</strong><br>Au besoin, Adobe Illustrator&nbsp;permet de dessiner des courbes et de les exporter en&nbsp;SVG.</info>
<br>

<p>Pour ce faire, il suffit d'ajouter la propriété <code>motionPath</code> à une animation et de lui attribuer comme valeur le
    sélecteur correspondant au tracé&nbsp;désiré.</p>
<p>Par exemple, le path&nbsp;<code>#courbe</code>:</p>

<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_2" scrolling="no"
                src="https://codepen.io/smnarnold/embed/94b89f59512457a287411ac4a2890446?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=94b89f59512457a287411ac4a2890446&amp;default-tab=js%2Cresult&amp;name=cp_embed_2"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_94b89f59512457a287411ac4a2890446"></iframe></div>
    </div>


</div>
<p>GSAP applique une transformation CSS équivalente aux positions inscrites dans le tracé passé en&nbsp;référence.</p>
<p>Dans notre exemple, le carré bleu 🟦 se déplace sur le tracé, car les deux éléments sont superposés dans le coin
    supérieur gauche de la fenêtre. Cependant, même si le SVG était positionné différemment, l'animation serait restée
    identique, puisque l'élément animé ignore la position du SVG de référence. Il ne fait que se décaler en fonction des
    positions dans le&nbsp;tracé.</p>
<p>Par exemple, revoici la même animation, mais avec le SVG positionné à droite. Remarquez comment le parcours du carré
    bleu 🟦 reste&nbsp;inchangé.</p>

<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_3" scrolling="no"
                src="https://codepen.io/smnarnold/embed/8e02f5e0328e4d487bfa6ebd29c6e441?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=8e02f5e0328e4d487bfa6ebd29c6e441&amp;default-tab=js%2Cresult&amp;name=cp_embed_3"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_8e02f5e0328e4d487bfa6ebd29c6e441"></iframe></div>
    </div>


</div>


<alert>Malheureusement, les animations réalisées avec MotionPath ne sont pas&nbsp;responsives!</alert>



<dots></dots>
<grostitre>Utilisation d'un objet</grostitre>


<p>Il est possible de raffiner le comportement d'une animation MotionPath. Pour ce faire, il faut utiliser un objet
    JavaScript pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur texte comme dans les
    exemples&nbsp;précédents.</p>
<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_4" scrolling="no"
                src="https://codepen.io/smnarnold/embed/2bc2debd5ae30c3e34ccfe6cf934babf?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=2bc2debd5ae30c3e34ccfe6cf934babf&amp;default-tab=js%2Cresult&amp;name=cp_embed_4"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_2bc2debd5ae30c3e34ccfe6cf934babf"></iframe></div>
    </div>


</div>
<p>On remarque que la propriété permettant de définir le tracé est maintenant spécifiée et
    s'appelle&nbsp;<code>path</code>.</p>



    
<dots></dots>
<grostitre>Align</grostitre>


<p>Comme mentionné précédemment, l'élément animé ne se superpose pas automatiquement à son tracé. Il ne fait
    qu'effectuer un déplacement équivalent aux coordonnées inscrites dans ledit tracé. Cependant, il est possible de
    remédier à ce problème via la propriété&nbsp;<code>align</code>&nbsp;qui permet de spécifier un élément de base sur
    lequel notre élément animé doit&nbsp;s'aligner.</p>
<p>Par exemple:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_5" scrolling="no"
                src="https://codepen.io/smnarnold/embed/7dbb787be6846206dcd0f71c09be99e0?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=7dbb787be6846206dcd0f71c09be99e0&amp;default-tab=js%2Cresult&amp;name=cp_embed_5"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_7dbb787be6846206dcd0f71c09be99e0"></iframe></div>
    </div>


</div>
<h3 class="heading heading--h3" id="Start et End">Start et End</h3>

<p>Les propriétés&nbsp;<code>start</code>&nbsp;et&nbsp;<code>end</code>&nbsp;de l'objet MotionPath permettent de
    spécifier la position de départ et de fin de l'animation sur le tracé.&nbsp;<code>0</code>&nbsp;correspondant au
    début et&nbsp;<code>1</code>&nbsp;à la&nbsp;fin.</p>
<p>Il est donc possible de débuter une animation à mi-chemin par exemple en utilisant&nbsp;<code>start: 0.5</code>:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_6" scrolling="no"
                src="https://codepen.io/smnarnold/embed/15fe03355a0d5d1b554edd5f90acfda5?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=15fe03355a0d5d1b554edd5f90acfda5&amp;default-tab=js%2Cresult&amp;name=cp_embed_6"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_15fe03355a0d5d1b554edd5f90acfda5"></iframe></div>
    </div>


</div>
<p>Ou encore de jouer une animation dans la direction&nbsp;opposée:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_7" scrolling="no"
                src="https://codepen.io/smnarnold/embed/85d126f696003b43fa42cde5c55401a4?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=85d126f696003b43fa42cde5c55401a4&amp;default-tab=js%2Cresult&amp;name=cp_embed_7"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_85d126f696003b43fa42cde5c55401a4"></iframe></div>
    </div>


</div>



<dots></dots>
<grostitre>Animation par coordonnées</grostitre>


<p>Puisque MotionPath ne fait qu'appliquer des transformations CSS équivalentes aux positions inscrites dans un tracé,
    il est possible de lui passer des coordonnées sous forme d'un tableau et de le laisser calculer des courbes entre
    les différents&nbsp;points.</p>
<p>Par exemple:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_8" scrolling="no"
                src="https://codepen.io/smnarnold/embed/f4d7fbcbc126dbafc9cda1bef68d8529?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=f4d7fbcbc126dbafc9cda1bef68d8529&amp;default-tab=js%2Cresult&amp;name=cp_embed_8"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_f4d7fbcbc126dbafc9cda1bef68d8529"></iframe></div>
    </div>


</div>
<p>L'élément part de son point d'origine et se dirige vers les premières coordonnées inscrites dans la tableau. Il peut
    y avoir autant de coordonnées que&nbsp;désiré.</p>
<h3 class="heading heading--h3" id="&nbsp;Curviness">&nbsp;Curviness</h3>

<p>Il est possible de modifier la courbe produite d'une animation par coordonnée an lui spécifiant la
    propriété&nbsp;<code>curviness</code>. Par défaut, cette propriété à la valeur de&nbsp;<code>1</code>. Ce qui créer
    la courbe dans l'exemple&nbsp;précédent.</p>
<p>Cependant, il serait possible de retirer l'aspect courbe en entier en attribuant la
    valeur&nbsp;<code>curviness: 0</code>&nbsp;à notre&nbsp;animation:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_9" scrolling="no"
                src="https://codepen.io/smnarnold/embed/13dbb25c39674ba539b307c183a80234?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=13dbb25c39674ba539b307c183a80234&amp;default-tab=js%2Cresult&amp;name=cp_embed_9"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_13dbb25c39674ba539b307c183a80234"></iframe></div>
    </div>


</div>
<p>ou encore de rendre la courbe plus prononcée en augmentant sa&nbsp;valeur:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_10" scrolling="no"
                src="https://codepen.io/smnarnold/embed/1f9e14cb6b56022b557006494750005c?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=1f9e14cb6b56022b557006494750005c&amp;default-tab=js%2Cresult&amp;name=cp_embed_10"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_1f9e14cb6b56022b557006494750005c"></iframe></div>
    </div>


</div>

<dots></dots>
<grostitre>AutoRotate</grostitre>

<p>La propriété&nbsp;<code>autoRotate</code>&nbsp;permet de spécifier à l'élément animé d'effectuer une rotation
    correspondant au tracé lors de son animation. Par défaut, la valeur de cette propriété est
    à&nbsp;<code>false</code>.</p>
<p>Pour l'activer, il faut lui donner la valeur&nbsp;<code>true</code>, comme dans l'exemple&nbsp;suivant:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(40% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_11" scrolling="no"
                src="https://codepen.io/smnarnold/embed/cde687ce395afc78bb3346c09a1a2e78?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=cde687ce395afc78bb3346c09a1a2e78&amp;default-tab=js%2Cresult&amp;name=cp_embed_11"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_cde687ce395afc78bb3346c09a1a2e78"></iframe></div>
    </div>


</div>


<alert><strong>Erreur fréquente</strong><br>Lorsqu’<code>autoRotate</code> ne fonctionne pas, il s’agit généralement d’un oubli de la
            majuscule&nbsp;auto<strong>R</strong>otate!</alert>


<dots></dots>
<grostitre>Point de référence</grostitre>


<p>Par défaut, l'élément animé se déplace sur le tracé à partir de sont point de référence, le coin
    supérieur&nbsp;gauche.</p>
<p>Cependant, il est possible de déplacer le point de référence de l'élément en utilisant les
    propriétés&nbsp;<code>xPercent</code>&nbsp;et&nbsp;<code>yPercent</code>&nbsp;qui déplacent en pourcentage le point
    de référence de l'élément&nbsp;animé.</p>
<p>Par exemple:</p>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(39% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="500px" width="100%" name="cp_embed_12" scrolling="no"
                src="https://codepen.io/smnarnold/embed/41def42d5a52d1bfd609e05088cc495a?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=41def42d5a52d1bfd609e05088cc495a&amp;default-tab=js%2Cresult&amp;name=cp_embed_12"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_41def42d5a52d1bfd609e05088cc495a"></iframe></div>
    </div>


</div>



<doclink href='https://greensock.com/docs/v3/Plugins/MotionPathPlugin'>MotionPath</doclink>
